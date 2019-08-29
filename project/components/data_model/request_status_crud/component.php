<?php
require("../../../../divblox/divblox.php");
class RequestStatusCrudController extends ProjectComponentController {
    public function __construct($ComponentNameStr = 'Component') {
        parent::__construct($ComponentNameStr);
    }
}
$ComponentObj = new RequestStatusCrudController("request_status_crud");
?>