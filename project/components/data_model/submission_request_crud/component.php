<?php
require("../../../../divblox/divblox.php");
class SubmissionRequestCrudController extends ProjectComponentController {
    public function __construct($ComponentNameStr = 'Component') {
        parent::__construct($ComponentNameStr);
    }
}
$ComponentObj = new SubmissionRequestCrudController("submission_request_crud");
?>