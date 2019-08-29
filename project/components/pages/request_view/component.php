<?php
require("../../../../divblox/divblox.php");
class RequestViewController extends ProjectComponentController {
    public function __construct($ComponentNameStr = 'Component') {
        parent::__construct($ComponentNameStr);
    }
}
$ComponentObj = new RequestViewController("request_view");
?>