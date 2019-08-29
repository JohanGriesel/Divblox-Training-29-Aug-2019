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
        if (is_null($this->getInputValue("Id"))) {
            $this->setReturnValue("Result","Failed");
            $this->setReturnValue("Message","No PhotoSubmission Id provided");
            $this->presentOutput();
        }
        $PhotoSubmissionObj = PhotoSubmission::Load($this->getInputValue("Id"));
        if (is_null($PhotoSubmissionObj)) {
            $this->setReturnValue("Result","Failed");
            $this->setReturnValue("Message","PhotoSubmission not found");
            $this->presentOutput();
        } else {
            $this->setReturnValue("Object",json_decode($PhotoSubmissionObj->getJson()));
            $this->setReturnValue("AccountList",$this->getAccountList($PhotoSubmissionObj));
            $this->setReturnValue("StockPhotoRequestList",$this->getStockPhotoRequestList($PhotoSubmissionObj));
            $this->setReturnValue("FileDocumentList",$this->getFileDocumentList($PhotoSubmissionObj));
            
            $this->presentOutput();
        }
    }
    public function getAccountList(PhotoSubmission $PhotoSubmissionObj = null) {
        if (Account::QueryCount(dxQ::All()) > 50) {
            if (!is_null($PhotoSubmissionObj) && !is_null($PhotoSubmissionObj->AccountObject)) {
                // JGL: We only return the selected Account, since the selectable list will be too big.
                // In this case, the developer will need to implement select functionality to link another object
                $ObjectArray = DatabaseHelper::getObjectArray('Account', array("Id","FullName"), "Id = '".$PhotoSubmissionObj->AccountObject->Id."'", null, 50, null, $ErrorInfo);
                array_push($ObjectArray, array("Id" => "DATASET TOO LARGE"));
                return $ObjectArray;
            }
        }
        $ObjectArray = DatabaseHelper::getObjectArray('Account', array("Id","FullName"), null, null, 50, null, $ErrorInfo);
        return $ObjectArray;
    }
    public function getStockPhotoRequestList(PhotoSubmission $PhotoSubmissionObj = null) {
        if (StockPhotoRequest::QueryCount(dxQ::All()) > 50) {
            if (!is_null($PhotoSubmissionObj) && !is_null($PhotoSubmissionObj->StockPhotoRequestObject)) {
                // JGL: We only return the selected StockPhotoRequest, since the selectable list will be too big.
                // In this case, the developer will need to implement select functionality to link another object
                $ObjectArray = DatabaseHelper::getObjectArray('StockPhotoRequest', array("Id","RequestText"), "Id = '".$PhotoSubmissionObj->StockPhotoRequestObject->Id."'", null, 50, null, $ErrorInfo);
                array_push($ObjectArray, array("Id" => "DATASET TOO LARGE"));
                return $ObjectArray;
            }
        }
        $ObjectArray = DatabaseHelper::getObjectArray('StockPhotoRequest', array("Id","RequestText"), null, null, 50, null, $ErrorInfo);
        return $ObjectArray;
    }
    public function getFileDocumentList(PhotoSubmission $PhotoSubmissionObj = null) {
        if (FileDocument::QueryCount(dxQ::All()) > 50) {
            if (!is_null($PhotoSubmissionObj) && !is_null($PhotoSubmissionObj->FileDocumentObject)) {
                // JGL: We only return the selected FileDocument, since the selectable list will be too big.
                // In this case, the developer will need to implement select functionality to link another object
                $ObjectArray = DatabaseHelper::getObjectArray('FileDocument', array("Id","Path"), "Id = '".$PhotoSubmissionObj->FileDocumentObject->Id."'", null, 50, null, $ErrorInfo);
                array_push($ObjectArray, array("Id" => "DATASET TOO LARGE"));
                return $ObjectArray;
            }
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
        $PhotoSubmissionToUpdateObj = PhotoSubmission::Load($this->getInputValue("Id"));
        if (is_null($PhotoSubmissionToUpdateObj)) {
            $this->setReturnValue("Result","Failed");
            $this->setReturnValue("Message","PhotoSubmission not found");
            $this->presentOutput();
        }
        foreach($PhotoSubmissionToUpdateObj->getIterator() as $Attribute => $Value) {
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
                        $PhotoSubmissionToUpdateObj->$Attribute = $DateObj;
                    }
                } else {
                    $PhotoSubmissionToUpdateObj->$Attribute = $PhotoSubmissionObj[$Attribute];
                }
            } elseif (in_array($Attribute, $this->RequiredAttributeArray)) {
                $this->setReturnValue("Result","Failed");
                $this->setReturnValue("Message","$Attribute not provided");
                $this->presentOutput();
            }
        }
        $PhotoSubmissionToUpdateObj->Save();
        $this->setReturnValue("Result","Success");
        $this->setReturnValue("Message","Object updated");
        $this->setReturnValue("Id",$PhotoSubmissionToUpdateObj->Id);
        $this->presentOutput();
    }
    public function deleteObjectData() {
        if (is_null($this->getInputValue("Id"))) {
            $this->setReturnValue("Result","Failed");
            $this->setReturnValue("Message","No PhotoSubmission Id provided");
            $this->presentOutput();
        }
        $PhotoSubmissionObj = PhotoSubmission::Load($this->getInputValue("Id"));
        if (is_null($PhotoSubmissionObj)) {
            $this->setReturnValue("Result","Failed");
            $this->setReturnValue("Message","PhotoSubmission not found");
            $this->presentOutput();
        } else {
            $PhotoSubmissionObj->Delete();
            $this->setReturnValue("Result","Success");
            $this->setReturnValue("Message","PhotoSubmission deleted");
            $this->presentOutput();
        }
    }
}
$ComponentObj = new PhotoSubmissionController("submission_request_crud_update");
?>