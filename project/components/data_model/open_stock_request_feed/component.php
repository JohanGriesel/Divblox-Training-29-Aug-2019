<?php
require("../../../../divblox/divblox.php");
class StockPhotoRequestDataListController extends ProjectComponentController {
    public function __construct($ComponentNameStr = 'Component') {
        parent::__construct($ComponentNameStr);
    }
    public function getPage() {
        if (is_null($this->getInputValue("CurrentOffset"))) {
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
        $Offset = $this->getInputValue("CurrentOffset");
        $QueryCondition = dxQ::All();
        
        if (!is_null($this->getInputValue("SearchText"))) {
            if (strlen($this->getInputValue("SearchText")) > 0) {
                $QueryCondition = dxQ::AndCondition(
                    $QueryCondition,
                    dxQ::OrCondition(dxQ::Like(dxQueryN::StockPhotoRequest()->RequestText, "%".$this->getInputValue("SearchText")."%"),
                    dxQ::Like(dxQueryN::StockPhotoRequest()->CreatedDateTime, "%".$this->getInputValue("SearchText")."%"),
                    dxQ::Like(dxQueryN::StockPhotoRequest()->AccountObject->FullName, "%".$this->getInputValue("SearchText")."%")));
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
            $AccountStr = "Not Defined";
            if (!is_null($StockPhotoRequestObj->AccountObject) &&
                !is_null($StockPhotoRequestObj->AccountObject->FullName)) {
                $AccountStr = $StockPhotoRequestObj->AccountObject->FullName;
            }
            
            array_push($StockPhotoRequestReturnArray,
                array("Id" => $StockPhotoRequestObj->Id,
                    "RequestText" => is_null($StockPhotoRequestObj->RequestText)? 'N/A':$StockPhotoRequestObj->RequestText,
                    "CreatedDateTime" => is_null($StockPhotoRequestObj->CreatedDateTime)? 'N/A':$StockPhotoRequestObj->CreatedDateTime->format(DATE_TIME_FORMAT_PHP_STR." H:i:s"),
                    "Account" => $AccountStr,
                    ));
        }
        $this->setReturnValue("Result","Success");
        $this->setReturnValue("Message","");
        $this->setReturnValue("Page",$StockPhotoRequestReturnArray);
        $this->setReturnValue("TotalCount",StockPhotoRequest::QueryCount($QueryCondition));
        $this->presentOutput();
    }
}

$ComponentObj = new StockPhotoRequestDataListController("open_stock_request_feed");
?>