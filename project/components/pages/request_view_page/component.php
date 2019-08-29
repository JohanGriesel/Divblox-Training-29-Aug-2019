<?php
require("../../../../divblox/divblox.php");
class RequestViewPageController extends ProjectComponentController {
    public function __construct($ComponentNameStr = 'Component') {
        parent::__construct($ComponentNameStr);
    }
}
$ComponentObj = new RequestViewPageController("request_view_page");
?>