<?php
require("../../../../divblox/divblox.php");
class StockPhotoRequestDataTableController extends ProjectComponentController {
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
        $AccessArray = ProjectAccessManager::getObjectAccess(ProjectFunctions::getCurrentAccountId(),"StockPhotoRequest");
        if (!in_array(AccessOperation::READ_STR, $AccessArray)) {
            $this->setReturnValue("Result","Failed");
            $this->setReturnValue("Message","Read access denied");
            $this->presentOutput();
        }
        $Offset = ($this->getInputValue("CurrentPage") - 1) * $this->getInputValue("ItemsPerPage");
        $QueryCondition = dxQ::All();
        $QueryCondition = dxQ::AndCondition($QueryCondition,dxQ::Equal(dxQN::StockPhotoRequest()->AccountObject->Id, $this->getInputValue("ConstrainingAccountId",true)));
        
        if (!is_null($this->getInputValue("SearchText"))) {
            if (strlen($this->getInputValue("SearchText")) > 0) {
                $QueryCondition = dxQ::AndCondition(
                    $QueryCondition,
                    dxQ::OrCondition(dxQ::Like(dxQueryN::StockPhotoRequest()->RequestText, "%".$this->getInputValue("SearchText")."%"),
                    dxQ::Like(dxQueryN::StockPhotoRequest()->CreatedDateTime, "%".$this->getInputValue("SearchText")."%"),
                    dxQ::Like(dxQueryN::StockPhotoRequest()->RequestStatusObject->StatusLabel, "%".$this->getInputValue("SearchText")."%")));
            }
        }
        $OrderByClause = dxQ::OrderBy(dxQueryN::StockPhotoRequest()->RequestText);
        if (!is_null($this->getInputValue("SortOptions"))) {
            if (ProjectFunctions::isJson($this->getInputValue("SortOptions"))) {
                $SortOptionsArray = json_decode($this->getInputValue("SortOptions"));
                if (is_array($SortOptionsArray)) {
                    if (ProjectFunctions::getDataSetSize($SortOptionsArray) == 2) {
                        $AttributeStr = $SortOptionsArray[0];
                        $OrderByClause = dxQ::OrderBy(dxQueryN::StockPhotoRequest()->$AttributeStr,$SortOptionsArray[1]);
                    }
                }
            }
        }
        $StockPhotoRequestArray = StockPhotoRequest::QueryArray(
            $QueryCondition,
            dxQ::Clause(
                $OrderByClause,
                dxQ::LimitInfo($this->getInputValue("ItemsPerPage"),$Offset)
            ));
        $StockPhotoRequestReturnArray = [];
        foreach($StockPhotoRequestArray as $StockPhotoRequestObj) {
            $RequestStatusStr = "Not Defined";
            if (!is_null($StockPhotoRequestObj->RequestStatusObject) &&
                !is_null($StockPhotoRequestObj->RequestStatusObject->StatusLabel)) {
                $RequestStatusStr = $StockPhotoRequestObj->RequestStatusObject->StatusLabel;
            }
            
            array_push($StockPhotoRequestReturnArray,
                array("Id" => $StockPhotoRequestObj->Id,
                    "RequestText" => is_null($StockPhotoRequestObj->RequestText)? 'N/A':$StockPhotoRequestObj->RequestText,
                    "CreatedDateTime" => is_null($StockPhotoRequestObj->CreatedDateTime)? 'N/A':$StockPhotoRequestObj->CreatedDateTime->format(DATE_TIME_FORMAT_PHP_STR." H:i:s"),
                    "RequestStatus" => $RequestStatusStr,
                    ));
        }
        $this->setReturnValue("Result","Success");
        $this->setReturnValue("Message","");
        $this->setReturnValue("Page",$StockPhotoRequestReturnArray);
        $this->setReturnValue("TotalCount",StockPhotoRequest::QueryCount($QueryCondition));
        $this->presentOutput();
    }
    public function deleteSelection() {
        if (is_null($this->getInputValue("SelectedItemArray"))) {
            $this->setReturnValue("Result","Failed");
            $this->setReturnValue("Message","No items provided");
            $this->presentOutput();
        }
        $AccessArray = ProjectAccessManager::getObjectAccess(ProjectFunctions::getCurrentAccountId(),"StockPhotoRequest");
        if (!in_array(AccessOperation::DELETE_STR, $AccessArray)) {
            $this->setReturnValue("Result","Failed");
            $this->setReturnValue("Message","Delete permission denied");
            $this->presentOutput();
        }
        $DeleteItemsArray = json_decode($this->getInputValue("SelectedItemArray"));
        $DeleteCount = 0;
        foreach($DeleteItemsArray as $item) {
            $StockPhotoRequestToDeleteObj = StockPhotoRequest::Load($item);
            if (is_null($StockPhotoRequestToDeleteObj)) {
                continue;
            }
            $StockPhotoRequestToDeleteObj->Delete();
            $DeleteCount++;
        }
        $this->setReturnValue("Result","Success");
        $this->setReturnValue("Message","$DeleteCount items deleted");
        $this->presentOutput();
    }
}
$ComponentObj = new StockPhotoRequestDataTableController("my_request_list");
?>