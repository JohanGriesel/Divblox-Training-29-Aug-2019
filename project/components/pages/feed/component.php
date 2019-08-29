<?php
require("../../../../divblox/divblox.php");
class FeedController extends ProjectComponentController {
    public function __construct($ComponentNameStr = 'Component') {
        parent::__construct($ComponentNameStr);
    }
}
$ComponentObj = new FeedController("feed");
?>