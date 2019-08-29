<?php
require(DATA_MODEL_ORM_PATH_STR.'/generated/PhotoSubmissionGen.class.php');

/**
 * The PhotoSubmission class defined here contains any
 * customized code for the PhotoSubmission class in the
 * Object Relational Model.  It represents the "PhotoSubmission" table
 * in the database, and extends from the code generated abstract PhotoSubmissionGen
 * class, which contains all the basic CRUD-type functionality as well as
 * basic methods to handle relationships and index-based loading.
 *
 * @package divblox_app
 * @subpackage DataObjects
 *
 */
class PhotoSubmission extends PhotoSubmissionGen {
    /**
     * Default "to string" handler
     * Allows pages to _p()/echo()/print() this object, and to define the default
     * way this object would be outputted.
     *
     * Can also be called directly via $objPhotoSubmission->__toString().
     *
     * @return string a nicely formatted string representation of this object
     */
    public function __toString() {
        return sprintf('PhotoSubmission Object %s',  $this->intId);
    }
}
?>