<?php
require("../../../../divblox/divblox.php");
class HistoryController extends ProjectComponentController {
    public function __construct($ComponentNameStr = 'Component') {
        parent::__construct($ComponentNameStr);
    }
}
$ComponentObj = new HistoryController("history");
?>