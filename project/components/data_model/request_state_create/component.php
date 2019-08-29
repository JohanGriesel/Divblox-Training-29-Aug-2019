<?php
require("../../../../divblox/divblox.php");
require(FRAMEWORK_ROOT_STR.'/assets/php/database_helper.class.php');
require_once(DATA_MODEL_CLASS_PATH_STR);
class RequestStatusController extends ProjectComponentController {
    protected $DataModelObj;
    protected $RequiredAttributeArray = ['StatusLabel',];
    protected $NumberValidationAttributeArray = [];
    public function __construct($ComponentNameStr = 'Component') {
        $this->DataModelObj = new DataModel();
        parent::__construct($ComponentNameStr);
    }
    public function getObjectData() {
        $this->setReturnValue("Result","Success");
        $this->setReturnValue("Message","");
        
        $this->presentOutput();
    }
    
    public function saveObjectData() {
        if (is_null($this->getInputValue("ObjectData"))) {
            $this->setReturnValue("Result","Failed");
            $this->setReturnValue("Message","No RequestStatus object provided");
            $this->presentOutput();
        }
        $RequestStatusObj = json_decode($this->getInputValue("ObjectData"),true);
        $RequestStatusToCreateObj = new RequestStatus();
        foreach($RequestStatusToCreateObj->getIterator() as $Attribute => $Value) {
            if (in_array($Attribute, ProjectFunctions::get_divblox_Attributes())) {
                continue;
            }
            if (isset($RequestStatusObj[$Attribute])) {
                if (in_array($Attribute, $this->RequiredAttributeArray)) {
                    if (strlen($RequestStatusObj[$Attribute]) == 0) {
                        $this->setReturnValue("Result","Failed");
                        $this->setReturnValue("Message","$Attribute not provided");
                        $this->presentOutput();
                    }
                }
                if (in_array($Attribute, $this->NumberValidationAttributeArray)) {
                    if (!is_numeric($RequestStatusObj[$Attribute])) {
                        $this->setReturnValue("Result","Failed");
                        $this->setReturnValue("Message","$Attribute must be numeric");
                        $this->presentOutput();
                    }
                }
                if (in_array($this->DataModelObj->getEntityAttributeType("RequestStatus", $Attribute),["DATE","DATETIME"])) {
                    if (is_string($RequestStatusObj[$Attribute])) {
                        $DateObj = new dxDateTime($RequestStatusObj[$Attribute]);
                        $RequestStatusToCreateObj->$Attribute = $DateObj;
                    }
                } else {
                    $RequestStatusToCreateObj->$Attribute = $RequestStatusObj[$Attribute];
                }
            } elseif (in_array($Attribute, $this->RequiredAttributeArray)) {
                $this->setReturnValue("Result","Failed");
                $this->setReturnValue("Message","$Attribute not provided");
                $this->presentOutput();
            }
        }
        
        $RequestStatusToCreateObj->Save();
        $this->setReturnValue("Result","Success");
        $this->setReturnValue("Message","Object created");
        $this->setReturnValue("Id",$RequestStatusToCreateObj->Id);
        $this->presentOutput();
    }
}
$ComponentObj = new RequestStatusController("request_state_create");
?>