<?php
require("../../../../divblox/divblox.php");
require(FRAMEWORK_ROOT_STR.'/assets/php/database_helper.class.php');
require_once(DATA_MODEL_CLASS_PATH_STR);
class PhotoSubmissionController extends ProjectComponentController {
    protected $DataModelObj;
    protected $RequiredAttributeArray = [];
    protected $NumberValidationAttributeArray = [];
    public function __construct($ComponentNameStr = 'Component') {
        $this->DataModelObj = new DataModel();
        parent::__construct($ComponentNameStr);
    }
    public function getObjectData() {
        $this->setReturnValue("Result","Success");
        $this->setReturnValue("Message","");
        $this->setReturnValue("AccountList",$this->getAccountList());
            $this->setReturnValue("StockPhotoRequestList",$this->getStockPhotoRequestList());
            $this->setReturnValue("FileDocumentList",$this->getFileDocumentList());
            
        $this->presentOutput();
    }
    public function getAccountList() {
        if (Account::QueryCount(dxQ::All()) > 50) {
            return [array("Id" => "DATASET TOO LARGE")];
        }
        $ObjectArray = DatabaseHelper::getObjectArray('Account', array("Id","FullName"), null, null, 50, null, $ErrorInfo);
        return $ObjectArray;
    }
    public function getStockPhotoRequestList() {
        if (StockPhotoRequest::QueryCount(dxQ::All()) > 50) {
            return [array("Id" => "DATASET TOO LARGE")];
        }
        $ObjectArray = DatabaseHelper::getObjectArray('StockPhotoRequest', array("Id","RequestText"), null, null, 50, null, $ErrorInfo);
        return $ObjectArray;
    }
    public function getFileDocumentList() {
        if (FileDocument::QueryCount(dxQ::All()) > 50) {
            return [array("Id" => "DATASET TOO LARGE")];
        }
        $ObjectArray = DatabaseHelper::getObjectArray('FileDocument', array("Id","Path"), null, null, 50, null, $ErrorInfo);
        return $ObjectArray;
    }
    
    public function saveObjectData() {
        if (is_null($this->getInputValue("ObjectData"))) {
            $this->setReturnValue("Result","Failed");
            $this->setReturnValue("Message","No PhotoSubmission object provided");
            $this->presentOutput();
        }
        $PhotoSubmissionObj = json_decode($this->getInputValue("ObjectData"),true);
        $PhotoSubmissionToCreateObj = new PhotoSubmission();
        foreach($PhotoSubmissionToCreateObj->getIterator() as $Attribute => $Value) {
            if (in_array($Attribute, ProjectFunctions::get_divblox_Attributes())) {
                continue;
            }
            if (isset($PhotoSubmissionObj[$Attribute])) {
                if (in_array($Attribute, $this->RequiredAttributeArray)) {
                    if (strlen($PhotoSubmissionObj[$Attribute]) == 0) {
                        $this->setReturnValue("Result","Failed");
                        $this->setReturnValue("Message","$Attribute not provided");
                        $this->presentOutput();
                    }
                }
                if (in_array($Attribute, $this->NumberValidationAttributeArray)) {
                    if (!is_numeric($PhotoSubmissionObj[$Attribute])) {
                        $this->setReturnValue("Result","Failed");
                        $this->setReturnValue("Message","$Attribute must be numeric");
                        $this->presentOutput();
                    }
                }
                if (in_array($this->DataModelObj->getEntityAttributeType("PhotoSubmission", $Attribute),["DATE","DATETIME"])) {
                    if (is_string($PhotoSubmissionObj[$Attribute])) {
                        $DateObj = new dxDateTime($PhotoSubmissionObj[$Attribute]);
                        $PhotoSubmissionToCreateObj->$Attribute = $DateObj;
                    }
                } else {
                    $PhotoSubmissionToCreateObj->$Attribute = $PhotoSubmissionObj[$Attribute];
                }
            } elseif (in_array($Attribute, $this->RequiredAttributeArray)) {
                $this->setReturnValue("Result","Failed");
                $this->setReturnValue("Message","$Attribute not provided");
                $this->presentOutput();
            }
        }
        
        $PhotoSubmissionToCreateObj->Save();
        $this->setReturnValue("Result","Success");
        $this->setReturnValue("Message","Object created");
        $this->setReturnValue("Id",$PhotoSubmissionToCreateObj->Id);
        $this->presentOutput();
    }
}
$ComponentObj = new PhotoSubmissionController("submission_request_crud_create");
?>