<?php
/* GENERATED FILE.
	- This file is created and maintained by the divblox Data Modeller. This file can be modified here, but if the Data
	  Modeller is used to update the project's data model, this file will be regenerated and all local changes might be lost
	- This file is used to provide the data model data to the DataModel class */
abstract class DataModelData {
	public static $ProjectEntityArray = array("StockPhotoRequest","RequestStatus","PhotoSubmission","HierarchyEntity");
	public static $ProjectEntityAttributeArray = array(
        "StockPhotoRequest"
            => array("RequestText","CreatedDateTime"),
        "RequestStatus"
            => array("StatusLabel"),
        "PhotoSubmission"
            => array("IsAccepted","CreatedDateTime","PhotoFilePath"),
        "HierarchyEntity"
            => array("ParentHierarchyEntityId"));
	public static $ProjectEntityAttributeTypeArray = array(
        "StockPhotoRequest"
            => array("TEXT","DATETIME"),
        "RequestStatus"
            => array("VARCHAR(10)"),
        "PhotoSubmission"
            => array("BOOLEAN","DATETIME","TEXT"),
        "HierarchyEntity"
            => array("BIGINT"));
	public static $ProjectEntitySingleRelationshipArray = array(
        "StockPhotoRequest"
            => array("Account","RequestStatus"),
        "PhotoSubmission"
            => array("Account","StockPhotoRequest","FileDocument"));
	public static $UserRoleArray = array("Administrator","User");
    public static $ModuleArray = array(
    "Main" => array("Account","AdditionalAccountInformation","AuditLogEntry","BackgroundProcess","BackgroundProcessUpdate","ClientAuthenticationToken","ClientConnection","EmailMessage","FileDocument","HierarchyEntity","PageView","PasswordReset","PhotoSubmission","PushRegistration","RequestStatus","StockPhotoRequest","UserRole",));
}
?>