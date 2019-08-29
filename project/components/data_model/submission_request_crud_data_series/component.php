<?php
require("../../../../divblox/divblox.php");
class PhotoSubmissionDataTableController extends ProjectComponentController {
    public function __construct($ComponentNameStr = 'Component') {
        parent::__construct($ComponentNameStr);
    }
    public function getPage() {
        if (is_null($this->getInputValue("CurrentPage"))) {
            $this->setReturnValue("Result","Failed");
            $this->setReturnValue("Message","Page not provided");
            $this->presentOutput();
        }
        if (is_null($this->getInputValue("ItemsPerPage"))) {
            $this->setReturnValue("Result","Failed");
            $this->setReturnValue("Message","No items per page provided");
            $this->presentOutput();
        }
        $AccessArray = ProjectAccessManager::getObjectAccess(ProjectFunctions::getCurrentAccountId(),"PhotoSubmission");
        if (!in_array(AccessOperation::READ_STR, $AccessArray)) {
            $this->setReturnValue("Result","Failed");
            $this->setReturnValue("Message","Read access denied");
            $this->presentOutput();
        }
        $Offset = ($this->getInputValue("CurrentPage") - 1) * $this->getInputValue("ItemsPerPage");
        $QueryCondition = dxQ::All();
        
        if (!is_null($this->getInputValue("SearchText"))) {
            if (strlen($this->getInputValue("SearchText")) > 0) {
                $QueryCondition = dxQ::AndCondition(
                    $QueryCondition,
                    dxQ::OrCondition(dxQ::Like(dxQueryN::PhotoSubmission()->IsAccepted, "%".$this->getInputValue("SearchText")."%"),
                    dxQ::Like(dxQueryN::PhotoSubmission()->CreatedDateTime, "%".$this->getInputValue("SearchText")."%"),
                    dxQ::Like(dxQueryN::PhotoSubmission()->PhotoFilePath, "%".$this->getInputValue("SearchText")."%"),
                    dxQ::Like(dxQueryN::PhotoSubmission()->AccountObject->FullName, "%".$this->getInputValue("SearchText")."%"),
                    dxQ::Like(dxQueryN::PhotoSubmission()->StockPhotoRequestObject->RequestText, "%".$this->getInputValue("SearchText")."%"),
                    dxQ::Like(dxQueryN::PhotoSubmission()->StockPhotoRequestObject->RequestStatusObject->StatusLabel, "%".$this->getInputValue("SearchText")."%"),
                    dxQ::Like(dxQueryN::PhotoSubmission()->FileDocumentObject->Path, "%".$this->getInputValue("SearchText")."%")));
            }
        }
        $OrderByClause = dxQ::OrderBy(dxQueryN::PhotoSubmission()->IsAccepted);
        if (!is_null($this->getInputValue("SortOptions"))) {
            if (ProjectFunctions::isJson($this->getInputValue("SortOptions"))) {
                $SortOptionsArray = json_decode($this->getInputValue("SortOptions"));
                if (is_array($SortOptionsArray)) {
                    if (ProjectFunctions::getDataSetSize($SortOptionsArray) == 2) {
                        $AttributeStr = $SortOptionsArray[0];
                        $OrderByClause = dxQ::OrderBy(dxQueryN::PhotoSubmission()->$AttributeStr,$SortOptionsArray[1]);
                    }
                }
            }
        }
        $PhotoSubmissionArray = PhotoSubmission::QueryArray(
            $QueryCondition,
            dxQ::Clause(
                $OrderByClause,
                dxQ::LimitInfo($this->getInputValue("ItemsPerPage"),$Offset)
            ));
        $PhotoSubmissionReturnArray = [];
        foreach($PhotoSubmissionArray as $PhotoSubmissionObj) {
            $AccountStr = "Not Defined";
            if (!is_null($PhotoSubmissionObj->AccountObject) &&
                !is_null($PhotoSubmissionObj->AccountObject->FullName)) {
                $AccountStr = $PhotoSubmissionObj->AccountObject->FullName;
            }
            $StockPhotoRequestStr = "Not Defined";
            if (!is_null($PhotoSubmissionObj->StockPhotoRequestObject) &&
                !is_null($PhotoSubmissionObj->StockPhotoRequestObject->RequestText)) {
                $StockPhotoRequestStr = $PhotoSubmissionObj->StockPhotoRequestObject->RequestText;
            }
            $RequestStatusStr = "Not Defined";
            if (!is_null($PhotoSubmissionObj->StockPhotoRequestObject) &&
                !is_null($PhotoSubmissionObj->StockPhotoRequestObject->RequestStatusObject) &&
                !is_null($PhotoSubmissionObj->StockPhotoRequestObject->RequestStatusObject->StatusLabel)) {
                $RequestStatusStr = $PhotoSubmissionObj->StockPhotoRequestObject->RequestStatusObject->StatusLabel;
            }
            $FileDocumentStr = "Not Defined";
            if (!is_null($PhotoSubmissionObj->FileDocumentObject) &&
                !is_null($PhotoSubmissionObj->FileDocumentObject->Path)) {
                $FileDocumentStr = $PhotoSubmissionObj->FileDocumentObject->Path;
            }
            
            array_push($PhotoSubmissionReturnArray,
                array("Id" => $PhotoSubmissionObj->Id,
                    "IsAccepted" => is_null($PhotoSubmissionObj->IsAccepted)? 'N/A':$PhotoSubmissionObj->IsAccepted,
                    "CreatedDateTime" => is_null($PhotoSubmissionObj->CreatedDateTime)? 'N/A':$PhotoSubmissionObj->CreatedDateTime->format(DATE_TIME_FORMAT_PHP_STR." H:i:s"),
                    "PhotoFilePath" => is_null($PhotoSubmissionObj->PhotoFilePath)? 'N/A':$PhotoSubmissionObj->PhotoFilePath,
                    "Account" => $AccountStr,
                    "StockPhotoRequest" => $StockPhotoRequestStr,
                    "RequestStatus" => $RequestStatusStr,
                    "FileDocument" => $FileDocumentStr,
                    ));
        }
        $this->setReturnValue("Result","Success");
        $this->setReturnValue("Message","");
        $this->setReturnValue("Page",$PhotoSubmissionReturnArray);
        $this->setReturnValue("TotalCount",PhotoSubmission::QueryCount($QueryCondition));
        $this->presentOutput();
    }
    public function deleteSelection() {
        if (is_null($this->getInputValue("SelectedItemArray"))) {
            $this->setReturnValue("Result","Failed");
            $this->setReturnValue("Message","No items provided");
            $this->presentOutput();
        }
        $AccessArray = ProjectAccessManager::getObjectAccess(ProjectFunctions::getCurrentAccountId(),"PhotoSubmission");
        if (!in_array(AccessOperation::DELETE_STR, $AccessArray)) {
            $this->setReturnValue("Result","Failed");
            $this->setReturnValue("Message","Delete permission denied");
            $this->presentOutput();
        }
        $DeleteItemsArray = json_decode($this->getInputValue("SelectedItemArray"));
        $DeleteCount = 0;
        foreach($DeleteItemsArray as $item) {
            $PhotoSubmissionToDeleteObj = PhotoSubmission::Load($item);
            if (is_null($PhotoSubmissionToDeleteObj)) {
                continue;
            }
            $PhotoSubmissionToDeleteObj->Delete();
            $DeleteCount++;
        }
        $this->setReturnValue("Result","Success");
        $this->setReturnValue("Message","$DeleteCount items deleted");
        $this->presentOutput();
    }
}
$ComponentObj = new PhotoSubmissionDataTableController("submission_request_crud_data_series");
?>