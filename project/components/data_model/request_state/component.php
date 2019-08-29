<?php
require("../../../../divblox/divblox.php");
class RequestStateController extends ProjectComponentController {
    public function __construct($ComponentNameStr = 'Component') {
        parent::__construct($ComponentNameStr);
    }
}
$ComponentObj = new RequestStateController("request_state");
?>