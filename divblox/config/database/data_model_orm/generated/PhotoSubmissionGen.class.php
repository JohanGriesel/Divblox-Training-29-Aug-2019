<?php
/**
 * The abstract PhotoSubmissionGen class defined here is
 * code-generated and contains all the basic CRUD-type functionality as well as
 * basic methods to handle relationships and index-based loading.
 *
 * To use, you should use the PhotoSubmission subclass which
 * extends this PhotoSubmissionGen class.
 *
 * Because subsequent re-code generations will overwrite any changes to this
 * file, you should leave this file unaltered to prevent yourself from losing
 * any information or code changes.  All customizations should be done by
 * overriding existing or implementing new methods, properties and variables
 * in the PhotoSubmission class.
 *
 * @package divblox_app
 * @subpackage GeneratedDataObjects
 * @property-read integer $Id the value for intId (Read-Only PK)
 * @property boolean $IsAccepted the value for blnIsAccepted 
 * @property dxDateTime $CreatedDateTime the value for dttCreatedDateTime 
 * @property string $PhotoFilePath the value for strPhotoFilePath 
 * @property-read string $LastUpdated the value for strLastUpdated (Read-Only Timestamp)
 * @property integer $Account the value for intAccount 
 * @property string $SearchMetaInfo the value for strSearchMetaInfo 
 * @property integer $StockPhotoRequest the value for intStockPhotoRequest 
 * @property integer $FileDocument the value for intFileDocument 
 * @property integer $ObjectOwner the value for intObjectOwner 
 * @property Account $AccountObject the value for the Account object referenced by intAccount 
 * @property Stockphotorequest $StockPhotoRequestObject the value for the Stockphotorequest object referenced by intStockPhotoRequest 
 * @property Filedocument $FileDocumentObject the value for the Filedocument object referenced by intFileDocument 
 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
 */
class PhotoSubmissionGen extends dxBaseClass implements IteratorAggregate {

    ///////////////////////////////////////////////////////////////////////
    // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
    ///////////////////////////////////////////////////////////////////////

    /**
     * Protected member variable that maps to the database PK Identity column PhotoSubmission.Id
     * @var integer intId
     */
    protected $intId;
    const IdDefault = null;


    /**
     * Protected member variable that maps to the database column PhotoSubmission.IsAccepted
     * @var boolean blnIsAccepted
     */
    protected $blnIsAccepted;
    const IsAcceptedDefault = null;


    /**
     * Protected member variable that maps to the database column PhotoSubmission.CreatedDateTime
     * @var dxDateTime dttCreatedDateTime
     */
    protected $dttCreatedDateTime;
    const CreatedDateTimeDefault = null;


    /**
     * Protected member variable that maps to the database column PhotoSubmission.PhotoFilePath
     * @var string strPhotoFilePath
     */
    protected $strPhotoFilePath;
    const PhotoFilePathDefault = null;


    /**
     * Protected member variable that maps to the database column PhotoSubmission.LastUpdated
     * @var string strLastUpdated
     */
    protected $strLastUpdated;
    const LastUpdatedDefault = null;


    /**
     * Protected member variable that maps to the database column PhotoSubmission.Account
     * @var integer intAccount
     */
    protected $intAccount;
    const AccountDefault = null;


    /**
     * Protected member variable that maps to the database column PhotoSubmission.SearchMetaInfo
     * @var string strSearchMetaInfo
     */
    protected $strSearchMetaInfo;
    const SearchMetaInfoDefault = null;


    /**
     * Protected member variable that maps to the database column PhotoSubmission.StockPhotoRequest
     * @var integer intStockPhotoRequest
     */
    protected $intStockPhotoRequest;
    const StockPhotoRequestDefault = null;


    /**
     * Protected member variable that maps to the database column PhotoSubmission.FileDocument
     * @var integer intFileDocument
     */
    protected $intFileDocument;
    const FileDocumentDefault = null;


    /**
     * Protected member variable that maps to the database column PhotoSubmission.ObjectOwner
     * @var integer intObjectOwner
     */
    protected $intObjectOwner;
    const ObjectOwnerDefault = null;


    /**
     * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
     * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
     * GetVirtualAttribute.
     * @var string[] $__strVirtualAttributeArray
     */
    protected $__strVirtualAttributeArray = array();

    /**
     * Protected internal member variable that specifies whether or not this object is Restored from the database.
     * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
     * @var bool __blnRestored;
     */
    protected $__blnRestored;

    ///////////////////////////////
    // PROTECTED MEMBER OBJECTS
    ///////////////////////////////

    /**
     * Protected member variable that contains the object pointed by the reference
     * in the database column PhotoSubmission.Account.
     *
     * NOTE: Always use the AccountObject property getter to correctly retrieve this Account object.
     * (Because this class implements late binding, this variable reference MAY be null.)
     * @var Account objAccountObject
     */
    protected $objAccountObject;

    /**
     * Protected member variable that contains the object pointed by the reference
     * in the database column PhotoSubmission.StockPhotoRequest.
     *
     * NOTE: Always use the StockPhotoRequestObject property getter to correctly retrieve this Stockphotorequest object.
     * (Because this class implements late binding, this variable reference MAY be null.)
     * @var Stockphotorequest objStockPhotoRequestObject
     */
    protected $objStockPhotoRequestObject;

    /**
     * Protected member variable that contains the object pointed by the reference
     * in the database column PhotoSubmission.FileDocument.
     *
     * NOTE: Always use the FileDocumentObject property getter to correctly retrieve this Filedocument object.
     * (Because this class implements late binding, this variable reference MAY be null.)
     * @var Filedocument objFileDocumentObject
     */
    protected $objFileDocumentObject;


    /**
     * Initialize each property with default values from database definition
     */
    public function Initialize() {
        $this->intId = PhotoSubmission::IdDefault;
        $this->blnIsAccepted = PhotoSubmission::IsAcceptedDefault;
        $this->dttCreatedDateTime = (PhotoSubmission::CreatedDateTimeDefault === null)?null:new dxDateTime(PhotoSubmission::CreatedDateTimeDefault);
        $this->strPhotoFilePath = PhotoSubmission::PhotoFilePathDefault;
        $this->strLastUpdated = PhotoSubmission::LastUpdatedDefault;
        $this->intAccount = PhotoSubmission::AccountDefault;
        $this->strSearchMetaInfo = PhotoSubmission::SearchMetaInfoDefault;
        $this->intStockPhotoRequest = PhotoSubmission::StockPhotoRequestDefault;
        $this->intFileDocument = PhotoSubmission::FileDocumentDefault;
        $this->intObjectOwner = PhotoSubmission::ObjectOwnerDefault;
    }

    ///////////////////////////////
    // CLASS-WIDE LOAD AND COUNT METHODS
    ///////////////////////////////

    /**
     * Static method to retrieve the Database object that owns this class.
     * @return dxDatabaseBase reference to the Database object that can query this class
     */
    public static function GetDatabase() {
        return ProjectFunctions::$Database[1];
    }

    /**
     * Load a PhotoSubmission from PK Info
     * @param integer $intId
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return PhotoSubmission
     */
    public static function Load($intId, $objOptionalClauses = null) {
        $strCacheKey = false;
        if (ProjectFunctions::$objCacheProvider && !$objOptionalClauses && ProjectFunctions::$Database[1]->Caching) {
            $strCacheKey = ProjectFunctions::$objCacheProvider->CreateKey(ProjectFunctions::$Database[1]->Database, 'PhotoSubmission', $intId);
            $objCachedObject = ProjectFunctions::$objCacheProvider->Get($strCacheKey);
            if ($objCachedObject !== false) {
                return $objCachedObject;
            }
        }
        // Use QuerySingle to Perform the Query
        $objToReturn = PhotoSubmission::QuerySingle(
            dxQuery::AndCondition(
                dxQuery::Equal(dxQueryN::PhotoSubmission()->Id, $intId)
            ),
            $objOptionalClauses
        );
        if ($strCacheKey !== false) {
            ProjectFunctions::$objCacheProvider->Set($strCacheKey, $objToReturn);
        }
        return $objToReturn;
    }

    /**
     * Load all PhotoSubmissions
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return PhotoSubmission[]
     */
    public static function LoadAll($objOptionalClauses = null) {
        if (func_num_args() > 1) {
            throw new dxCallerException("LoadAll must be called with an array of optional clauses as a single argument");
        }
        // Call PhotoSubmission::QueryArray to perform the LoadAll query
        try {
            return PhotoSubmission::QueryArray(dxQuery::All(), $objOptionalClauses);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }
    }

    /**
     * Count all PhotoSubmissions
     * @return int
     */
    public static function CountAll() {
        // Call PhotoSubmission::QueryCount to perform the CountAll query
        return PhotoSubmission::QueryCount(dxQuery::All());
    }

    ///////////////////////////////
    // DIVBLOX QUERY-RELATED METHODS
    ///////////////////////////////

    /**
     * Internally called method to assist with calling divblox Query for this class
     * on load methods.
     * @param dxQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
     * @param dxQueryCondition $objConditions any conditions on the query, itself
     * @param dxQueryClause[] $objOptionalClausees additional optional dxQueryClause object or array of dxQueryClause objects for this query
     * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
     * @param boolean $blnCountOnly only select a rowcount
     * @return string the query statement
     */
    protected static function BuildQueryStatement(&$objQueryBuilder, dxQueryCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
        // Get the Database Object for this Class
        $objDatabase = PhotoSubmission::GetDatabase();

        // Create/Build out the QueryBuilder object with PhotoSubmission-specific SELET and FROM fields
        $objQueryBuilder = new dxQueryBuilder($objDatabase, 'PhotoSubmission');

        $blnAddAllFieldsToSelect = true;
        if ($objDatabase->OnlyFullGroupBy) {
            // see if we have any group by or aggregation clauses, if yes, don't add the fields to select clause
            if ($objOptionalClauses instanceof dxQueryClause) {
                if ($objOptionalClauses instanceof dxQueryAggregationClause || $objOptionalClauses instanceof dxQueryGroupBy) {
                    $blnAddAllFieldsToSelect = false;
                }
            } else if (is_array($objOptionalClauses)) {
                foreach ($objOptionalClauses as $objClause) {
                    if ($objClause instanceof dxQueryAggregationClause || $objClause instanceof dxQueryGroupBy) {
                        $blnAddAllFieldsToSelect = false;
                        break;
                    }
                }
            }
        }
        if ($blnAddAllFieldsToSelect) {
            PhotoSubmission::GetSelectFields($objQueryBuilder, null, dxQuery::extractSelectClause($objOptionalClauses));
        }
        $objQueryBuilder->AddFromItem('PhotoSubmission');

        // Set "CountOnly" option (if applicable)
        if ($blnCountOnly)
            $objQueryBuilder->SetCountOnlyFlag();

        // Apply Any Conditions
        if ($objConditions)
            try {
                $objConditions->UpdateQueryBuilder($objQueryBuilder);
            } catch (dxCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

        // Iterate through all the Optional Clauses (if any) and perform accordingly
        if ($objOptionalClauses) {
            if ($objOptionalClauses instanceof dxQueryClause)
                $objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
            else if (is_array($objOptionalClauses))
                foreach ($objOptionalClauses as $objClause)
                    $objClause->UpdateQueryBuilder($objQueryBuilder);
            else
                throw new dxCallerException('Optional Clauses must be a dxQueryClause object or an array of dxQueryClause objects');
        }

        // Get the SQL Statement
        $strQuery = $objQueryBuilder->GetStatement();

        // Prepare the Statement with the Query Parameters (if applicable)
        if ($mixParameterArray) {
            if (is_array($mixParameterArray)) {
                if (ProjectFunctions::getDataSetSize($mixParameterArray))
                    $strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

                // Ensure that there are no other Unresolved Named Parameters
                if (strpos($strQuery, chr(dxQueryNamedValue::DelimiterCode) . '{') !== false)
                    throw new dxCallerException('Unresolved named parameters in the query');
            } else
                throw new dxCallerException('Parameter Array must be an array of name-value parameter pairs');
        }

        // Return the Objects
        return $strQuery;
    }

    /**
     * Static divblox Query method to query for a single PhotoSubmission object.
     * Uses BuildQueryStatment to perform most of the work.
     * @param dxQueryCondition $objConditions any conditions on the query, itself
     * @param dxQueryClause[] $objOptionalClausees additional optional dxQueryClause objects for this query
     * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
     * @return PhotoSubmission the queried object
     */
    public static function QuerySingle(dxQueryCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
        // Get the Query Statement
        try {
            $strQuery = PhotoSubmission::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }

        // Perform the Query, Get the First Row, and Instantiate a new PhotoSubmission object
        $objDbResult = $objQueryBuilder->Database->Query($strQuery);

        // Do we have to expand anything?
        if ($objQueryBuilder->ExpandAsArrayNode) {
            $objToReturn = array();
            $objPrevItemArray = array();
            while ($objDbRow = $objDbResult->GetNextRow()) {
                $objItem = PhotoSubmission::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNode, $objPrevItemArray, $objQueryBuilder->ColumnAliasArray);
                if ($objItem) {
                    $objToReturn[] = $objItem;
                    $objPrevItemArray[$objItem->intId][] = $objItem;
                }
            }
            if (ProjectFunctions::getDataSetSize($objToReturn)) {
                // Since we only want the object to return, lets return the object and not the array.
                return $objToReturn[0];
            } else {
                return null;
            }
        } else {
            // No expands just return the first row
            $objDbRow = $objDbResult->GetNextRow();
            if(null === $objDbRow)
                return null;
            return PhotoSubmission::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
        }
    }

    /**
     * Static divblox Query method to query for an array of PhotoSubmission objects.
     * Uses BuildQueryStatment to perform most of the work.
     * @param dxQueryCondition $objConditions any conditions on the query, itself
     * @param dxQueryClause[] $objOptionalClausees additional optional dxQueryClause objects for this query
     * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
     * @return PhotoSubmission[] the queried objects as an array
     */
    public static function QueryArray(dxQueryCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
        // Get the Query Statement
        try {
            $strQuery = PhotoSubmission::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }

        // Perform the Query and Instantiate the Array Result
        $objDbResult = $objQueryBuilder->Database->Query($strQuery);
        return PhotoSubmission::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNode, $objQueryBuilder->ColumnAliasArray);
    }

    /**
     * Static divblox query method to issue a query and get a cursor to progressively fetch its results.
     * Uses BuildQueryStatment to perform most of the work.
     * @param dxQueryCondition $objConditions any conditions on the query, itself
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
     * @return dxDatabaseResultBase the cursor resource instance
     */
    public static function QueryCursor(dxQueryCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
        // Get the query statement
        try {
            $strQuery = PhotoSubmission::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }

        // Perform the query
        $objDbResult = $objQueryBuilder->Database->Query($strQuery);

        // Return the results cursor
        $objDbResult->QueryBuilder = $objQueryBuilder;
        return $objDbResult;
    }

    /**
     * Static divblox Query method to query for a count of PhotoSubmission objects.
     * Uses BuildQueryStatment to perform most of the work.
     * @param dxQueryCondition $objConditions any conditions on the query, itself
     * @param dxQueryClause[] $objOptionalClausees additional optional dxQueryClause objects for this query
     * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
     * @return integer the count of queried objects as an integer
     */
    public static function QueryCount(dxQueryCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
        // Get the Query Statement
        try {
            $strQuery = PhotoSubmission::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }

        // Perform the Query and return the row_count
        $objDbResult = $objQueryBuilder->Database->Query($strQuery);

        // Figure out if the query is using GroupBy
        $blnGrouped = false;

        if ($objOptionalClauses) {
            if ($objOptionalClauses instanceof dxQueryClause) {
                if ($objOptionalClauses instanceof dxQueryGroupBy) {
                    $blnGrouped = true;
                }
            } else if (is_array($objOptionalClauses)) {
                foreach ($objOptionalClauses as $objClause) {
                    if ($objClause instanceof dxQueryGroupBy) {
                        $blnGrouped = true;
                        break;
                    }
                }
            } else {
                throw new dxCallerException('Optional Clauses must be a dxQueryClause object or an array of dxQueryClause objects');
            }
        }

        if ($blnGrouped)
            // Groups in this query - return the count of Groups (which is the count of all rows)
            return $objDbResult->CountRows();
        else {
            // No Groups - return the sql-calculated count(*) value
            $strDbRow = $objDbResult->FetchRow();
            return dxType::Cast($strDbRow[0], dxType::Integer);
        }
    }

    public static function QueryArrayCached(dxQueryCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null, $blnForceUpdate = false) {
        // Get the Database Object for this Class
        $objDatabase = PhotoSubmission::GetDatabase();

        $strQuery = PhotoSubmission::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

        $objCache = new dxCache('dxquery/photosubmission', $strQuery);
        $cacheData = $objCache->GetData();

        if (!$cacheData || $blnForceUpdate) {
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            $arrResult = PhotoSubmission::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNode, $objQueryBuilder->ColumnAliasArray);
            $objCache->SaveData(serialize($arrResult));
        } else {
            $arrResult = unserialize($cacheData);
        }

        return $arrResult;
    }

    /**
     * Updates a dxQueryBuilder with the SELECT fields for this PhotoSubmission
     * @param dxQueryBuilder $objBuilder the Query Builder object to update
     * @param string $strPrefix optional prefix to add to the SELECT fields
     */
    public static function GetSelectFields(dxQueryBuilder $objBuilder, $strPrefix = null, dxQuerySelect $objSelect = null) {
        if ($strPrefix) {
            $strTableName = $strPrefix;
            $strAliasPrefix = $strPrefix . '__';
        } else {
            $strTableName = 'PhotoSubmission';
            $strAliasPrefix = '';
        }

        if ($objSelect) {
            $objBuilder->AddSelectItem($strTableName, 'Id', $strAliasPrefix . 'Id');
            $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
        } else {
            $objBuilder->AddSelectItem($strTableName, 'Id', $strAliasPrefix . 'Id');
            $objBuilder->AddSelectItem($strTableName, 'IsAccepted', $strAliasPrefix . 'IsAccepted');
            $objBuilder->AddSelectItem($strTableName, 'CreatedDateTime', $strAliasPrefix . 'CreatedDateTime');
            $objBuilder->AddSelectItem($strTableName, 'PhotoFilePath', $strAliasPrefix . 'PhotoFilePath');
            $objBuilder->AddSelectItem($strTableName, 'LastUpdated', $strAliasPrefix . 'LastUpdated');
            $objBuilder->AddSelectItem($strTableName, 'Account', $strAliasPrefix . 'Account');
            $objBuilder->AddSelectItem($strTableName, 'SearchMetaInfo', $strAliasPrefix . 'SearchMetaInfo');
            $objBuilder->AddSelectItem($strTableName, 'StockPhotoRequest', $strAliasPrefix . 'StockPhotoRequest');
            $objBuilder->AddSelectItem($strTableName, 'FileDocument', $strAliasPrefix . 'FileDocument');
            $objBuilder->AddSelectItem($strTableName, 'ObjectOwner', $strAliasPrefix . 'ObjectOwner');
        }
    }
    ///////////////////////////////
    // INSTANTIATION-RELATED METHODS
    ///////////////////////////////

    /**
     * Do a possible array expansion on the given node. If the node is an ExpandAsArray node,
     * it will add to the corresponding array in the object. Otherwise, it will follow the node
     * so that any leaf expansions can be handled.
     *
     * @param DatabaseRowBase $objDbRow
     * @param dxQueryBaseNode $objChildNode
     * @param dxBaseClass $objPreviousItem
     * @param string[] $strColumnAliasArray
     */

    public static function ExpandArray ($objDbRow, $strAliasPrefix, $objNode, $objPreviousItemArray, $strColumnAliasArray) {
        if (!$objNode->ChildNodeArray) {
            return false;
        }

        $strAlias = $strAliasPrefix . 'Id';
        $strColumnAlias = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $blnExpanded = false;

        foreach ($objPreviousItemArray as $objPreviousItem) {
            if ($objPreviousItem->intId != $objDbRow->GetColumn($strColumnAlias, 'Integer')) {
                continue;
            }

            foreach ($objNode->ChildNodeArray as $objChildNode) {
                $strPropName = $objChildNode->_PropertyName;
                $strClassName = $objChildNode->_ClassName;
                $blnExpanded = false;
                $strLongAlias = $objChildNode->ExtendedAlias();

                if ($objChildNode->ExpandAsArray) {
                    $strVarName = '_obj' . $strPropName . 'Array';
                    if (null === $objPreviousItem->$strVarName) {
                        $objPreviousItem->$strVarName = array();
                    }
                    if ($intPreviousChildItemCount = ProjectFunctions::getDataSetSize($objPreviousItem->$strVarName)) {
                        $objPreviousChildItems = $objPreviousItem->$strVarName;
                        if ($objChildNode->_Type == "association") {
                            $objChildNode = $objChildNode->FirstChild();
                        }
                        $nextAlias = $objChildNode->ExtendedAlias() . '__';

                        $objChildItem = call_user_func(array ($strClassName, 'InstantiateDbRow'), $objDbRow, $nextAlias, $objChildNode, $objPreviousChildItems, $strColumnAliasArray);
                        if ($objChildItem) {
                            $objPreviousItem->{$strVarName}[] = $objChildItem;
                            $blnExpanded = true;
                        } elseif ($objChildItem === false) {
                            $blnExpanded = true;
                        }
                    }
                } else {

                    // Follow single node if keys match
                    $nodeType = $objChildNode->_Type;
                    if ($nodeType == 'reverse_reference' || $nodeType == 'association') {
                        $strVarName = '_obj' . $strPropName;
                    } else {
                        $strVarName = 'obj' . $strPropName;
                    }

                    if (null === $objPreviousItem->$strVarName) {
                        return false;
                    }

                    $objPreviousChildItems = array($objPreviousItem->$strVarName);
                    $blnResult = call_user_func(array ($strClassName, 'ExpandArray'), $objDbRow, $strLongAlias . '__', $objChildNode, $objPreviousChildItems, $strColumnAliasArray);

                    if ($blnResult) {
                        $blnExpanded = true;
                    }
                }
            }
        }
        return $blnExpanded;
    }

    /**
     * Instantiate a PhotoSubmission from a Database Row.
     * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
     * is calling this PhotoSubmission::InstantiateDbRow in order to perform
     * early binding on referenced objects.
     * @param DatabaseRowBase $objDbRow
     * @param string $strAliasPrefix
     * @param dxQueryBaseNode $objExpandAsArrayNode
     * @param dxBaseClass $arrPreviousItem
     * @param string[] $strColumnAliasArray
     * @return mixed Either a PhotoSubmission, or false to indicate the dbrow was used in an expansion, or null to indicate that this leaf is a duplicate.
    */
    public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $objExpandAsArrayNode = null, $objPreviousItemArray = null, $strColumnAliasArray = array()) {
        // If blank row, return null
        if (!$objDbRow) {
            return null;
        }

        if (empty ($strAliasPrefix) && $objPreviousItemArray) {
            $strColumnAlias = !empty($strColumnAliasArray['Id']) ? $strColumnAliasArray['Id'] : 'Id';
            $key = $objDbRow->GetColumn($strColumnAlias, 'Integer');
            $objPreviousItemArray = (!empty ($objPreviousItemArray[$key]) ? $objPreviousItemArray[$key] : null);
        }

        // See if we're doing an array expansion on the previous item
        if ($objExpandAsArrayNode &&
                is_array($objPreviousItemArray) &&
                ProjectFunctions::getDataSetSize($objPreviousItemArray)) {

            if (PhotoSubmission::ExpandArray ($objDbRow, $strAliasPrefix, $objExpandAsArrayNode, $objPreviousItemArray, $strColumnAliasArray)) {
                return false; // db row was used but no new object was created
            }
        }

        // Create a new instance of the PhotoSubmission object
        $objToReturn = new PhotoSubmission();
        $objToReturn->__blnRestored = true;

        $strAlias = $strAliasPrefix . 'Id';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
        $strAlias = $strAliasPrefix . 'IsAccepted';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->blnIsAccepted = $objDbRow->GetColumn($strAliasName, 'Bit');
        $strAlias = $strAliasPrefix . 'CreatedDateTime';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->dttCreatedDateTime = $objDbRow->GetColumn($strAliasName, 'DateTime');
        $strAlias = $strAliasPrefix . 'PhotoFilePath';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strPhotoFilePath = $objDbRow->GetColumn($strAliasName, 'Blob');
        $strAlias = $strAliasPrefix . 'LastUpdated';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strLastUpdated = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'Account';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->intAccount = $objDbRow->GetColumn($strAliasName, 'Integer');
        $strAlias = $strAliasPrefix . 'SearchMetaInfo';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strSearchMetaInfo = $objDbRow->GetColumn($strAliasName, 'Blob');
        $strAlias = $strAliasPrefix . 'StockPhotoRequest';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->intStockPhotoRequest = $objDbRow->GetColumn($strAliasName, 'Integer');
        $strAlias = $strAliasPrefix . 'FileDocument';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->intFileDocument = $objDbRow->GetColumn($strAliasName, 'Integer');
        $strAlias = $strAliasPrefix . 'ObjectOwner';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->intObjectOwner = $objDbRow->GetColumn($strAliasName, 'Integer');

        if (isset($objPreviousItemArray) && is_array($objPreviousItemArray)) {
            foreach ($objPreviousItemArray as $objPreviousItem) {
                if ($objToReturn->Id != $objPreviousItem->Id) {
                    continue;
                }
                // this is a duplicate leaf in a complex join
                return null; // indicates no object created and the db row has not been used
            }
        }

        // Instantiate Virtual Attributes
        $strVirtualPrefix = $strAliasPrefix . '__';
        $strVirtualPrefixLength = strlen($strVirtualPrefix);
        foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
            if (strncmp($strColumnName, $strVirtualPrefix, $strVirtualPrefixLength) == 0)
                $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
        }


        // Prepare to Check for Early/Virtual Binding

        $objExpansionAliasArray = array();
        if ($objExpandAsArrayNode) {
            $objExpansionAliasArray = $objExpandAsArrayNode->ChildNodeArray;
        }

        if (!$strAliasPrefix)
            $strAliasPrefix = 'PhotoSubmission__';

        // Check for AccountObject Early Binding
        $strAlias = $strAliasPrefix . 'Account__Id';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        if (!is_null($objDbRow->GetColumn($strAliasName))) {
            $objExpansionNode = (empty($objExpansionAliasArray['Account']) ? null : $objExpansionAliasArray['Account']);
            $objToReturn->objAccountObject = Account::InstantiateDbRow($objDbRow, $strAliasPrefix . 'Account__', $objExpansionNode, null, $strColumnAliasArray);
        }
        // Check for StockPhotoRequestObject Early Binding
        $strAlias = $strAliasPrefix . 'StockPhotoRequest__Id';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        if (!is_null($objDbRow->GetColumn($strAliasName))) {
            $objExpansionNode = (empty($objExpansionAliasArray['StockPhotoRequest']) ? null : $objExpansionAliasArray['StockPhotoRequest']);
            $objToReturn->objStockPhotoRequestObject = Stockphotorequest::InstantiateDbRow($objDbRow, $strAliasPrefix . 'StockPhotoRequest__', $objExpansionNode, null, $strColumnAliasArray);
        }
        // Check for FileDocumentObject Early Binding
        $strAlias = $strAliasPrefix . 'FileDocument__Id';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        if (!is_null($objDbRow->GetColumn($strAliasName))) {
            $objExpansionNode = (empty($objExpansionAliasArray['FileDocument']) ? null : $objExpansionAliasArray['FileDocument']);
            $objToReturn->objFileDocumentObject = Filedocument::InstantiateDbRow($objDbRow, $strAliasPrefix . 'FileDocument__', $objExpansionNode, null, $strColumnAliasArray);
        }



        return $objToReturn;
    }

    /**
     * Instantiate an array of PhotoSubmissions from a Database Result
     * @param DatabaseResultBase $objDbResult
     * @param dxQueryBaseNode $objExpandAsArrayNode
     * @param string[] $strColumnAliasArray
     * @return PhotoSubmission[]
     */
    public static function InstantiateDbResult(dxDatabaseResultBase $objDbResult, $objExpandAsArrayNode = null, $strColumnAliasArray = null) {
        $objToReturn = array();

        if (!$strColumnAliasArray)
            $strColumnAliasArray = array();

        // If blank resultset, then return empty array
        if (!$objDbResult)
            return $objToReturn;

        // Load up the return array with each row
        if ($objExpandAsArrayNode) {
            $objToReturn = array();
            $objPrevItemArray = array();
            while ($objDbRow = $objDbResult->GetNextRow()) {
                $objItem = PhotoSubmission::InstantiateDbRow($objDbRow, null, $objExpandAsArrayNode, $objPrevItemArray, $strColumnAliasArray);
                if ($objItem) {
                    $objToReturn[] = $objItem;
                    $objPrevItemArray[$objItem->intId][] = $objItem;
                }
            }
        } else {
            while ($objDbRow = $objDbResult->GetNextRow())
                $objToReturn[] = PhotoSubmission::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
        }

        return $objToReturn;
    }


    /**
     * Instantiate a single PhotoSubmission object from a query cursor (e.g. a DB ResultSet).
     * Cursor is automatically moved to the "next row" of the result set.
     * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
     * @param dxDatabaseResultBase $objDbResult cursor resource
     * @return PhotoSubmission next row resulting from the query
     */
    public static function InstantiateCursor(dxDatabaseResultBase $objDbResult) {
        // If blank resultset, then return empty result
        if (!$objDbResult) return null;

        // If empty resultset, then return empty result
        $objDbRow = $objDbResult->GetNextRow();
        if (!$objDbRow) return null;

        // We need the Column Aliases
        $strColumnAliasArray = $objDbResult->QueryBuilder->ColumnAliasArray;
        if (!$strColumnAliasArray) $strColumnAliasArray = array();

        // Pull Expansions
        $objExpandAsArrayNode = $objDbResult->QueryBuilder->ExpandAsArrayNode;
        if (!empty ($objExpandAsArrayNode)) {
            throw new dxCallerException ("Cannot use InstantiateCursor with ExpandAsArray");
        }

        // Load up the return result with a row and return it
        return PhotoSubmission::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
    }

    ///////////////////////////////////////////////////
    // INDEX-BASED LOAD METHODS (Single Load and Array)
    ///////////////////////////////////////////////////

    /**
     * Load a single PhotoSubmission object,
     * by Id Index(es)
     * @param integer $intId
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return PhotoSubmission
    */
    public static function LoadById($intId, $objOptionalClauses = null) {
        return PhotoSubmission::QuerySingle(
            dxQuery::AndCondition(
                dxQuery::Equal(dxQueryN::PhotoSubmission()->Id, $intId)
            ),
            $objOptionalClauses
        );
    }

    /**
     * Load an array of PhotoSubmission objects,
     * by Account Index(es)
     * @param integer $intAccount
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return PhotoSubmission[]
    */
    public static function LoadArrayByAccount($intAccount, $objOptionalClauses = null) {
        // Call PhotoSubmission::QueryArray to perform the LoadArrayByAccount query
        try {
            return PhotoSubmission::QueryArray(
                dxQuery::Equal(dxQueryN::PhotoSubmission()->Account, $intAccount),
                $objOptionalClauses);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }
    }

    /**
     * Count PhotoSubmissions
     * by Account Index(es)
     * @param integer $intAccount
     * @return int
    */
    public static function CountByAccount($intAccount) {
        // Call PhotoSubmission::QueryCount to perform the CountByAccount query
        return PhotoSubmission::QueryCount(
            dxQuery::Equal(dxQueryN::PhotoSubmission()->Account, $intAccount)
        );
    }

    /**
     * Load an array of PhotoSubmission objects,
     * by StockPhotoRequest Index(es)
     * @param integer $intStockPhotoRequest
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return PhotoSubmission[]
    */
    public static function LoadArrayByStockPhotoRequest($intStockPhotoRequest, $objOptionalClauses = null) {
        // Call PhotoSubmission::QueryArray to perform the LoadArrayByStockPhotoRequest query
        try {
            return PhotoSubmission::QueryArray(
                dxQuery::Equal(dxQueryN::PhotoSubmission()->StockPhotoRequest, $intStockPhotoRequest),
                $objOptionalClauses);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }
    }

    /**
     * Count PhotoSubmissions
     * by StockPhotoRequest Index(es)
     * @param integer $intStockPhotoRequest
     * @return int
    */
    public static function CountByStockPhotoRequest($intStockPhotoRequest) {
        // Call PhotoSubmission::QueryCount to perform the CountByStockPhotoRequest query
        return PhotoSubmission::QueryCount(
            dxQuery::Equal(dxQueryN::PhotoSubmission()->StockPhotoRequest, $intStockPhotoRequest)
        );
    }

    /**
     * Load an array of PhotoSubmission objects,
     * by FileDocument Index(es)
     * @param integer $intFileDocument
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return PhotoSubmission[]
    */
    public static function LoadArrayByFileDocument($intFileDocument, $objOptionalClauses = null) {
        // Call PhotoSubmission::QueryArray to perform the LoadArrayByFileDocument query
        try {
            return PhotoSubmission::QueryArray(
                dxQuery::Equal(dxQueryN::PhotoSubmission()->FileDocument, $intFileDocument),
                $objOptionalClauses);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }
    }

    /**
     * Count PhotoSubmissions
     * by FileDocument Index(es)
     * @param integer $intFileDocument
     * @return int
    */
    public static function CountByFileDocument($intFileDocument) {
        // Call PhotoSubmission::QueryCount to perform the CountByFileDocument query
        return PhotoSubmission::QueryCount(
            dxQuery::Equal(dxQueryN::PhotoSubmission()->FileDocument, $intFileDocument)
        );
    }
    ////////////////////////////////////////////////////
    // INDEX-BASED LOAD METHODS (Array via Many to Many)
    ////////////////////////////////////////////////////


    //////////////////////////
    // SAVE, DELETE AND RELOAD
    //////////////////////////

    /**
    * Save this PhotoSubmission
    * @param bool $blnForceInsert
    * @param bool $blnForceUpdate
    * @return int
    */
    public function Save($blnForceInsert = false, $blnForceUpdate = false) {
        $ObjectAccessArray = ProjectAccessManager::getObjectAccess(ProjectFunctions::getCurrentAccountId(),"PhotoSubmission",$this->intId);
        // Get the Database Object for this Class
        $objDatabase = PhotoSubmission::GetDatabase();
        $mixToReturn = null;
        if (!is_numeric($this->intObjectOwner)) {
            $this->intObjectOwner = ProjectFunctions::getCurrentAccountId();
        }
        $ExistingObj = PhotoSubmission::Load($this->intId);
        $newAuditLogEntry = new AuditLogEntry();
        $ChangedArray = array();
        $newAuditLogEntry->EntryTimeStamp = dxDateTime::Now();
        $newAuditLogEntry->ObjectId = $this->intId;
        $newAuditLogEntry->ObjectName = 'PhotoSubmission';
        $newAuditLogEntry->UserEmail = ProjectFunctions::getCurrentUserEmailForAudit();
        if (!$ExistingObj) {
            $newAuditLogEntry->ModificationType = 'Create';
            $ChangedArray = array_merge($ChangedArray,array("Id" => $this->intId));
            $ChangedArray = array_merge($ChangedArray,array("IsAccepted" => $this->blnIsAccepted));
            $ChangedArray = array_merge($ChangedArray,array("CreatedDateTime" => $this->dttCreatedDateTime));
            $ChangedArray = array_merge($ChangedArray,array("PhotoFilePath" => $this->strPhotoFilePath));
            $ChangedArray = array_merge($ChangedArray,array("LastUpdated" => $this->strLastUpdated));
            $ChangedArray = array_merge($ChangedArray,array("Account" => $this->intAccount));
            $ChangedArray = array_merge($ChangedArray,array("SearchMetaInfo" => $this->strSearchMetaInfo));
            $ChangedArray = array_merge($ChangedArray,array("StockPhotoRequest" => $this->intStockPhotoRequest));
            $ChangedArray = array_merge($ChangedArray,array("FileDocument" => $this->intFileDocument));
            $ChangedArray = array_merge($ChangedArray,array("ObjectOwner" => $this->intObjectOwner));
            $newAuditLogEntry->AuditLogEntryDetail = json_encode($ChangedArray);
        } else {
            $newAuditLogEntry->ModificationType = 'Update';
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->Id)) {
                $ExistingValueStr = $ExistingObj->Id;
            }
            if ($ExistingObj->Id != $this->intId) {
                $ChangedArray = array_merge($ChangedArray,array("Id" => array("Before" => $ExistingValueStr,"After" => $this->intId)));
                //$ChangedArray = array_merge($ChangedArray,array("Id" => "From: ".$ExistingValueStr." to: ".$this->intId));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->IsAccepted)) {
                $ExistingValueStr = $ExistingObj->IsAccepted;
            }
            if ($ExistingObj->IsAccepted != $this->blnIsAccepted) {
                $ChangedArray = array_merge($ChangedArray,array("IsAccepted" => array("Before" => $ExistingValueStr,"After" => $this->blnIsAccepted)));
                //$ChangedArray = array_merge($ChangedArray,array("IsAccepted" => "From: ".$ExistingValueStr." to: ".$this->blnIsAccepted));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->CreatedDateTime)) {
                $ExistingValueStr = $ExistingObj->CreatedDateTime;
            }
            if ($ExistingObj->CreatedDateTime != $this->dttCreatedDateTime) {
                $ChangedArray = array_merge($ChangedArray,array("CreatedDateTime" => array("Before" => $ExistingValueStr,"After" => $this->dttCreatedDateTime)));
                //$ChangedArray = array_merge($ChangedArray,array("CreatedDateTime" => "From: ".$ExistingValueStr." to: ".$this->dttCreatedDateTime));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->PhotoFilePath)) {
                $ExistingValueStr = $ExistingObj->PhotoFilePath;
            }
            if ($ExistingObj->PhotoFilePath != $this->strPhotoFilePath) {
                $ChangedArray = array_merge($ChangedArray,array("PhotoFilePath" => array("Before" => $ExistingValueStr,"After" => $this->strPhotoFilePath)));
                //$ChangedArray = array_merge($ChangedArray,array("PhotoFilePath" => "From: ".$ExistingValueStr." to: ".$this->strPhotoFilePath));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->LastUpdated)) {
                $ExistingValueStr = $ExistingObj->LastUpdated;
            }
            if ($ExistingObj->LastUpdated != $this->strLastUpdated) {
                $ChangedArray = array_merge($ChangedArray,array("LastUpdated" => array("Before" => $ExistingValueStr,"After" => $this->strLastUpdated)));
                //$ChangedArray = array_merge($ChangedArray,array("LastUpdated" => "From: ".$ExistingValueStr." to: ".$this->strLastUpdated));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->Account)) {
                $ExistingValueStr = $ExistingObj->Account;
            }
            if ($ExistingObj->Account != $this->intAccount) {
                $ChangedArray = array_merge($ChangedArray,array("Account" => array("Before" => $ExistingValueStr,"After" => $this->intAccount)));
                //$ChangedArray = array_merge($ChangedArray,array("Account" => "From: ".$ExistingValueStr." to: ".$this->intAccount));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->SearchMetaInfo)) {
                $ExistingValueStr = $ExistingObj->SearchMetaInfo;
            }
            if ($ExistingObj->SearchMetaInfo != $this->strSearchMetaInfo) {
                $ChangedArray = array_merge($ChangedArray,array("SearchMetaInfo" => array("Before" => $ExistingValueStr,"After" => $this->strSearchMetaInfo)));
                //$ChangedArray = array_merge($ChangedArray,array("SearchMetaInfo" => "From: ".$ExistingValueStr." to: ".$this->strSearchMetaInfo));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->StockPhotoRequest)) {
                $ExistingValueStr = $ExistingObj->StockPhotoRequest;
            }
            if ($ExistingObj->StockPhotoRequest != $this->intStockPhotoRequest) {
                $ChangedArray = array_merge($ChangedArray,array("StockPhotoRequest" => array("Before" => $ExistingValueStr,"After" => $this->intStockPhotoRequest)));
                //$ChangedArray = array_merge($ChangedArray,array("StockPhotoRequest" => "From: ".$ExistingValueStr." to: ".$this->intStockPhotoRequest));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->FileDocument)) {
                $ExistingValueStr = $ExistingObj->FileDocument;
            }
            if ($ExistingObj->FileDocument != $this->intFileDocument) {
                $ChangedArray = array_merge($ChangedArray,array("FileDocument" => array("Before" => $ExistingValueStr,"After" => $this->intFileDocument)));
                //$ChangedArray = array_merge($ChangedArray,array("FileDocument" => "From: ".$ExistingValueStr." to: ".$this->intFileDocument));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->ObjectOwner)) {
                $ExistingValueStr = $ExistingObj->ObjectOwner;
            }
            if ($ExistingObj->ObjectOwner != $this->intObjectOwner) {
                $ChangedArray = array_merge($ChangedArray,array("ObjectOwner" => array("Before" => $ExistingValueStr,"After" => $this->intObjectOwner)));
                //$ChangedArray = array_merge($ChangedArray,array("ObjectOwner" => "From: ".$ExistingValueStr." to: ".$this->intObjectOwner));
            }
            $newAuditLogEntry->AuditLogEntryDetail = json_encode($ChangedArray);
        }
        try {
            if ((!$this->__blnRestored) || ($blnForceInsert)) {
                if (!in_array(AccessOperation::CREATE_STR,$ObjectAccessArray)) {
                    // This user is not allowed to create an object of this type
                    throw new Exception("User is not allowed to perform operation ".AccessOperation::CREATE_STR." on entity of type 'PhotoSubmission'. Allowed access is ".json_encode($ObjectAccessArray));
                }
                // Perform an INSERT query
                $objDatabase->NonQuery('
                INSERT INTO `PhotoSubmission` (
							`IsAccepted`,
							`CreatedDateTime`,
							`PhotoFilePath`,
							`Account`,
							`SearchMetaInfo`,
							`StockPhotoRequest`,
							`FileDocument`,
							`ObjectOwner`
						) VALUES (
							' . $objDatabase->SqlVariable($this->blnIsAccepted) . ',
							' . $objDatabase->SqlVariable($this->dttCreatedDateTime) . ',
							' . $objDatabase->SqlVariable($this->strPhotoFilePath) . ',
							' . $objDatabase->SqlVariable($this->intAccount) . ',
							' . $objDatabase->SqlVariable($this->strSearchMetaInfo) . ',
							' . $objDatabase->SqlVariable($this->intStockPhotoRequest) . ',
							' . $objDatabase->SqlVariable($this->intFileDocument) . ',
							' . $objDatabase->SqlVariable($this->intObjectOwner) . '
						)
                ');
					// Update Identity column and return its value
                $mixToReturn = $this->intId = $objDatabase->InsertId('PhotoSubmission', 'Id');
            } else {
                // Perform an UPDATE query
                // First checking for Optimistic Locking constraints (if applicable)
                if (!in_array(AccessOperation::UPDATE_STR,$ObjectAccessArray)) {
                    // This user is not allowed to create an object of this type
                    throw new Exception("User is not allowed to perform operation ".AccessOperation::UPDATE_STR." on entity of type 'PhotoSubmission'. Allowed access is ".json_encode($ObjectAccessArray));
                }
                if (!$blnForceUpdate) {
                    // Perform the Optimistic Locking check
                    $objResult = $objDatabase->Query('
                    SELECT `LastUpdated` FROM `PhotoSubmission` WHERE
							`Id` = ' . $objDatabase->SqlVariable($this->intId) . '');

                $objRow = $objResult->FetchArray();
                if ($objRow[0] != $this->strLastUpdated)
                    throw new dxOptimisticLockingException('PhotoSubmission');
            }

            // Perform the UPDATE query
            $objDatabase->NonQuery('
            UPDATE `PhotoSubmission` SET
							`IsAccepted` = ' . $objDatabase->SqlVariable($this->blnIsAccepted) . ',
							`CreatedDateTime` = ' . $objDatabase->SqlVariable($this->dttCreatedDateTime) . ',
							`PhotoFilePath` = ' . $objDatabase->SqlVariable($this->strPhotoFilePath) . ',
							`Account` = ' . $objDatabase->SqlVariable($this->intAccount) . ',
							`SearchMetaInfo` = ' . $objDatabase->SqlVariable($this->strSearchMetaInfo) . ',
							`StockPhotoRequest` = ' . $objDatabase->SqlVariable($this->intStockPhotoRequest) . ',
							`FileDocument` = ' . $objDatabase->SqlVariable($this->intFileDocument) . ',
							`ObjectOwner` = ' . $objDatabase->SqlVariable($this->intObjectOwner) . '
            WHERE
							`Id` = ' . $objDatabase->SqlVariable($this->intId) . '');
            }

        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }
        try {
            $newAuditLogEntry->ObjectId = $this->intId;
            $newAuditLogEntry->Save();
        } catch(dxCallerException $e) {
            error_log('Could not save audit log while saving PhotoSubmission. Details: '.$newAuditLogEntry->getJson().'<br>Error details: '.$e->getMessage());
        }
        // Update __blnRestored and any Non-Identity PK Columns (if applicable)
        $this->__blnRestored = true;

        // Update Local Timestamp
        $objResult = $objDatabase->Query('SELECT `LastUpdated` FROM
                                            `PhotoSubmission` WHERE
                							`Id` = ' . $objDatabase->SqlVariable($this->intId) . '');

        $objRow = $objResult->FetchArray();
        $this->strLastUpdated = $objRow[0];

        $this->DeleteCache();

        // Return
        return $mixToReturn;
    }
    /**
     * Delete this PhotoSubmission
     * @return void
     */
    public function Delete() {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Cannot delete this PhotoSubmission with an unset primary key.');

        $ObjectAccessArray = ProjectAccessManager::getObjectAccess(ProjectFunctions::getCurrentAccountId(),"PhotoSubmission",$this->intId);
        if (!in_array(AccessOperation::DELETE_STR,$ObjectAccessArray)) {
            // This user is not allowed to delete an object of this type
            throw new Exception("User is not allowed to perform operation ".AccessOperation::DELETE_STR." on entity of type 'PhotoSubmission'. Allowed access is ".json_encode($ObjectAccessArray));
        }

        // Get the Database Object for this Class
        $objDatabase = PhotoSubmission::GetDatabase();
        $newAuditLogEntry = new AuditLogEntry();
        $ChangedArray = array();
        $newAuditLogEntry->EntryTimeStamp = dxDateTime::Now();
        $newAuditLogEntry->ObjectId = $this->intId;
        $newAuditLogEntry->ObjectName = 'PhotoSubmission';
        $newAuditLogEntry->UserEmail = ProjectFunctions::getCurrentUserEmailForAudit();
        $newAuditLogEntry->ModificationType = 'Delete';
        $ChangedArray = array_merge($ChangedArray,array("Id" => $this->intId));
        $ChangedArray = array_merge($ChangedArray,array("IsAccepted" => $this->blnIsAccepted));
        $ChangedArray = array_merge($ChangedArray,array("CreatedDateTime" => $this->dttCreatedDateTime));
        $ChangedArray = array_merge($ChangedArray,array("PhotoFilePath" => $this->strPhotoFilePath));
        $ChangedArray = array_merge($ChangedArray,array("LastUpdated" => $this->strLastUpdated));
        $ChangedArray = array_merge($ChangedArray,array("Account" => $this->intAccount));
        $ChangedArray = array_merge($ChangedArray,array("SearchMetaInfo" => $this->strSearchMetaInfo));
        $ChangedArray = array_merge($ChangedArray,array("StockPhotoRequest" => $this->intStockPhotoRequest));
        $ChangedArray = array_merge($ChangedArray,array("FileDocument" => $this->intFileDocument));
        $ChangedArray = array_merge($ChangedArray,array("ObjectOwner" => $this->intObjectOwner));
        $newAuditLogEntry->AuditLogEntryDetail = json_encode($ChangedArray);
        try {
            $newAuditLogEntry->Save();
        } catch(dxCallerException $e) {
            error_log('Could not save audit log while deleting PhotoSubmission. Details: '.$newAuditLogEntry->getJson().'<br>Error details: '.$e->getMessage());
        }

        // Perform the SQL Query
        $objDatabase->NonQuery('
            DELETE FROM
                `PhotoSubmission`
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($this->intId) . '');

        $this->DeleteCache();
    }

    /**
     * Delete this PhotoSubmission ONLY from the cache
     * @return void
     */
    public function DeleteCache() {
        if (ProjectFunctions::$objCacheProvider && ProjectFunctions::$Database[1]->Caching) {
            $strCacheKey = ProjectFunctions::$objCacheProvider->CreateKey(ProjectFunctions::$Database[1]->Database, 'PhotoSubmission', $this->intId);
            ProjectFunctions::$objCacheProvider->Delete($strCacheKey);
        }
    }

    /**
     * Delete all PhotoSubmissions
     * @return void
     */
    public static function DeleteAll() {
        // Get the Database Object for this Class
        $objDatabase = PhotoSubmission::GetDatabase();

        // Perform the Query
        $objDatabase->NonQuery('
            DELETE FROM
                `PhotoSubmission`');

        if (ProjectFunctions::$objCacheProvider && ProjectFunctions::$Database[1]->Caching) {
            ProjectFunctions::$objCacheProvider->DeleteAll();
        }
    }

    /**
     * Truncate PhotoSubmission table
     * @return void
     */
    public static function Truncate() {
        // Get the Database Object for this Class
        $objDatabase = PhotoSubmission::GetDatabase();

        // Perform the Query
        $objDatabase->NonQuery('
            TRUNCATE `PhotoSubmission`');

        if (ProjectFunctions::$objCacheProvider && ProjectFunctions::$Database[1]->Caching) {
            ProjectFunctions::$objCacheProvider->DeleteAll();
        }
    }
    /**
     * Reload this PhotoSubmission from the database.
     * @return void
     */
    public function Reload() {
        // Make sure we are actually Restored from the database
        if (!$this->__blnRestored)
            throw new dxCallerException('Cannot call Reload() on a new, unsaved PhotoSubmission object.');

        $this->DeleteCache();

        // Reload the Object
        $objReloaded = PhotoSubmission::Load($this->intId);

        // Update $this's local variables to match
        $this->blnIsAccepted = $objReloaded->blnIsAccepted;
        $this->dttCreatedDateTime = $objReloaded->dttCreatedDateTime;
        $this->strPhotoFilePath = $objReloaded->strPhotoFilePath;
        $this->strLastUpdated = $objReloaded->strLastUpdated;
        $this->Account = $objReloaded->Account;
        $this->strSearchMetaInfo = $objReloaded->strSearchMetaInfo;
        $this->StockPhotoRequest = $objReloaded->StockPhotoRequest;
        $this->FileDocument = $objReloaded->FileDocument;
        $this->intObjectOwner = $objReloaded->intObjectOwner;
    }
    ////////////////////
    // PUBLIC OVERRIDERS
    ////////////////////

        /**
     * Override method to perform a property "Get"
     * This will get the value of $strName
     *
     * @param string $strName Name of the property to get
     * @return mixed
     */
    public function __get($strName) {
        switch ($strName) {
            ///////////////////
            // Member Variables
            ///////////////////
            case 'Id':
                /**
                 * Gets the value for intId (Read-Only PK)
                 * @return integer
                 */
                return $this->intId;

            case 'IsAccepted':
                /**
                 * Gets the value for blnIsAccepted 
                 * @return boolean
                 */
                return $this->blnIsAccepted;

            case 'CreatedDateTime':
                /**
                 * Gets the value for dttCreatedDateTime 
                 * @return dxDateTime
                 */
                return $this->dttCreatedDateTime;

            case 'PhotoFilePath':
                /**
                 * Gets the value for strPhotoFilePath 
                 * @return string
                 */
                return $this->strPhotoFilePath;

            case 'LastUpdated':
                /**
                 * Gets the value for strLastUpdated (Read-Only Timestamp)
                 * @return string
                 */
                return $this->strLastUpdated;

            case 'Account':
                /**
                 * Gets the value for intAccount 
                 * @return integer
                 */
                return $this->intAccount;

            case 'SearchMetaInfo':
                /**
                 * Gets the value for strSearchMetaInfo 
                 * @return string
                 */
                return $this->strSearchMetaInfo;

            case 'StockPhotoRequest':
                /**
                 * Gets the value for intStockPhotoRequest 
                 * @return integer
                 */
                return $this->intStockPhotoRequest;

            case 'FileDocument':
                /**
                 * Gets the value for intFileDocument 
                 * @return integer
                 */
                return $this->intFileDocument;

            case 'ObjectOwner':
                /**
                 * Gets the value for intObjectOwner 
                 * @return integer
                 */
                return $this->intObjectOwner;


            ///////////////////
            // Member Objects
            ///////////////////
            case 'AccountObject':
                /**
                 * Gets the value for the Account object referenced by intAccount 
                 * @return Account
                 */
                try {
                    if ((!$this->objAccountObject) && (!is_null($this->intAccount)))
                        $this->objAccountObject = Account::Load($this->intAccount);
                    return $this->objAccountObject;
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'StockPhotoRequestObject':
                /**
                 * Gets the value for the Stockphotorequest object referenced by intStockPhotoRequest 
                 * @return Stockphotorequest
                 */
                try {
                    if ((!$this->objStockPhotoRequestObject) && (!is_null($this->intStockPhotoRequest)))
                        $this->objStockPhotoRequestObject = Stockphotorequest::Load($this->intStockPhotoRequest);
                    return $this->objStockPhotoRequestObject;
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'FileDocumentObject':
                /**
                 * Gets the value for the Filedocument object referenced by intFileDocument 
                 * @return Filedocument
                 */
                try {
                    if ((!$this->objFileDocumentObject) && (!is_null($this->intFileDocument)))
                        $this->objFileDocumentObject = Filedocument::Load($this->intFileDocument);
                    return $this->objFileDocumentObject;
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }


            ////////////////////////////
            // Virtual Object References (Many to Many and Reverse References)
            // (If restored via a "Many-to" expansion)
            ////////////////////////////


            case '__Restored':
                return $this->__blnRestored;

            default:
                try {
                    return parent::__get($strName);
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
        }
    }
        /**
     * Override method to perform a property "Set"
     * This will set the property $strName to be $mixValue
     *
     * @param string $strName Name of the property to set
     * @param string $mixValue New value of the property
     * @return mixed
     */
    public function __set($strName, $mixValue) {
        switch ($strName) {
            ///////////////////
            // Member Variables
            ///////////////////
            case 'IsAccepted':
                /**
                 * Sets the value for blnIsAccepted 
                 * @param boolean $mixValue
                 * @return boolean
                 */
                try {
                    return ($this->blnIsAccepted = dxType::Cast($mixValue, dxType::Boolean));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'CreatedDateTime':
                /**
                 * Sets the value for dttCreatedDateTime 
                 * @param dxDateTime $mixValue
                 * @return dxDateTime
                 */
                try {
                    return ($this->dttCreatedDateTime = dxType::Cast($mixValue, dxType::DateTime));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'PhotoFilePath':
                /**
                 * Sets the value for strPhotoFilePath 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strPhotoFilePath = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'Account':
                /**
                 * Sets the value for intAccount 
                 * @param integer $mixValue
                 * @return integer
                 */
                try {
                    $this->objAccountObject = null;
                    return ($this->intAccount = dxType::Cast($mixValue, dxType::Integer));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'SearchMetaInfo':
                /**
                 * Sets the value for strSearchMetaInfo 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strSearchMetaInfo = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'StockPhotoRequest':
                /**
                 * Sets the value for intStockPhotoRequest 
                 * @param integer $mixValue
                 * @return integer
                 */
                try {
                    $this->objStockPhotoRequestObject = null;
                    return ($this->intStockPhotoRequest = dxType::Cast($mixValue, dxType::Integer));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'FileDocument':
                /**
                 * Sets the value for intFileDocument 
                 * @param integer $mixValue
                 * @return integer
                 */
                try {
                    $this->objFileDocumentObject = null;
                    return ($this->intFileDocument = dxType::Cast($mixValue, dxType::Integer));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'ObjectOwner':
                /**
                 * Sets the value for intObjectOwner 
                 * @param integer $mixValue
                 * @return integer
                 */
                try {
                    return ($this->intObjectOwner = dxType::Cast($mixValue, dxType::Integer));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }


            ///////////////////
            // Member Objects
            ///////////////////
            case 'AccountObject':
                /**
                 * Sets the value for the Account object referenced by intAccount 
                 * @param Account $mixValue
                 * @return Account
                 */
                if (is_null($mixValue)) {
                    $this->intAccount = null;
                    $this->objAccountObject = null;
                    return null;
                } else {
                    // Make sure $mixValue actually is a Account object
                    try {
                        $mixValue = dxType::Cast($mixValue, 'Account');
                    } catch (dxInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                    // Make sure $mixValue is a SAVED Account object
                    if (is_null($mixValue->Id))
                        throw new dxCallerException('Unable to set an unsaved AccountObject for this PhotoSubmission');

                    // Update Local Member Variables
                    $this->objAccountObject = $mixValue;
                    $this->intAccount = $mixValue->Id;

                    // Return $mixValue
                    return $mixValue;
                }
                break;

            case 'StockPhotoRequestObject':
                /**
                 * Sets the value for the Stockphotorequest object referenced by intStockPhotoRequest 
                 * @param Stockphotorequest $mixValue
                 * @return Stockphotorequest
                 */
                if (is_null($mixValue)) {
                    $this->intStockPhotoRequest = null;
                    $this->objStockPhotoRequestObject = null;
                    return null;
                } else {
                    // Make sure $mixValue actually is a Stockphotorequest object
                    try {
                        $mixValue = dxType::Cast($mixValue, 'Stockphotorequest');
                    } catch (dxInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                    // Make sure $mixValue is a SAVED Stockphotorequest object
                    if (is_null($mixValue->Id))
                        throw new dxCallerException('Unable to set an unsaved StockPhotoRequestObject for this PhotoSubmission');

                    // Update Local Member Variables
                    $this->objStockPhotoRequestObject = $mixValue;
                    $this->intStockPhotoRequest = $mixValue->Id;

                    // Return $mixValue
                    return $mixValue;
                }
                break;

            case 'FileDocumentObject':
                /**
                 * Sets the value for the Filedocument object referenced by intFileDocument 
                 * @param Filedocument $mixValue
                 * @return Filedocument
                 */
                if (is_null($mixValue)) {
                    $this->intFileDocument = null;
                    $this->objFileDocumentObject = null;
                    return null;
                } else {
                    // Make sure $mixValue actually is a Filedocument object
                    try {
                        $mixValue = dxType::Cast($mixValue, 'Filedocument');
                    } catch (dxInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                    // Make sure $mixValue is a SAVED Filedocument object
                    if (is_null($mixValue->Id))
                        throw new dxCallerException('Unable to set an unsaved FileDocumentObject for this PhotoSubmission');

                    // Update Local Member Variables
                    $this->objFileDocumentObject = $mixValue;
                    $this->intFileDocument = $mixValue->Id;

                    // Return $mixValue
                    return $mixValue;
                }
                break;

            default:
                try {
                    return parent::__set($strName, $mixValue);
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
        }
    }
    /**
     * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
     * @param string $strName
     * @return string
     */
    public function GetVirtualAttribute($strName) {
        if (array_key_exists($strName, $this->__strVirtualAttributeArray))
            return $this->__strVirtualAttributeArray[$strName];
        return null;
    }

    ///////////////////////////////
    // ASSOCIATED OBJECTS' METHODS
    ///////////////////////////////



    
///////////////////////////////
    // METHODS TO EXTRACT INFO ABOUT THE CLASS
    ///////////////////////////////

    /**
     * Static method to retrieve the Database object that owns this class.
     * @return string Name of the table from which this class has been created.
     */
    public static function GetTableName() {
        return "PhotoSubmission";
    }

    /**
     * Static method to retrieve the Table name from which this class has been created.
     * @return string Name of the table from which this class has been created.
     */
    public static function GetDatabaseName() {
        return ProjectFunctions::$Database[PhotoSubmission::GetDatabaseIndex()]->Database;
    }

    /**
     * Static method to retrieve the Database index in the configuration.inc.php file.
     * This can be useful when there are two databases of the same name which create
     * confusion for the developer. There are no internal uses of this function but are
     * here to help retrieve info if need be!
     * @return int position or index of the database in the config file.
     */
    public static function GetDatabaseIndex() {
        return 1;
    }

    ////////////////////////////////////////
    // METHODS for SOAP-BASED WEB SERVICES
    ////////////////////////////////////////

    public static function GetSoapComplexTypeXml() {
        $strToReturn = '<complexType name="PhotoSubmission"><sequence>';
        $strToReturn .= '<element name="Id" type="xsd:int"/>';
        $strToReturn .= '<element name="IsAccepted" type="xsd:boolean"/>';
        $strToReturn .= '<element name="CreatedDateTime" type="xsd:dateTime"/>';
        $strToReturn .= '<element name="PhotoFilePath" type="xsd:string"/>';
        $strToReturn .= '<element name="LastUpdated" type="xsd:string"/>';
        $strToReturn .= '<element name="AccountObject" type="xsd1:Account"/>';
        $strToReturn .= '<element name="SearchMetaInfo" type="xsd:string"/>';
        $strToReturn .= '<element name="StockPhotoRequestObject" type="xsd1:Stockphotorequest"/>';
        $strToReturn .= '<element name="FileDocumentObject" type="xsd1:Filedocument"/>';
        $strToReturn .= '<element name="ObjectOwner" type="xsd:int"/>';
        $strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
        $strToReturn .= '</sequence></complexType>';
        return $strToReturn;
    }

    public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
        if (!array_key_exists('PhotoSubmission', $strComplexTypeArray)) {
            $strComplexTypeArray['PhotoSubmission'] = PhotoSubmission::GetSoapComplexTypeXml();
            Account::AlterSoapComplexTypeArray($strComplexTypeArray);
            Stockphotorequest::AlterSoapComplexTypeArray($strComplexTypeArray);
            Filedocument::AlterSoapComplexTypeArray($strComplexTypeArray);
        }
    }

    public static function GetArrayFromSoapArray($objSoapArray) {
        $objArrayToReturn = array();

        foreach ($objSoapArray as $objSoapObject)
            array_push($objArrayToReturn, PhotoSubmission::GetObjectFromSoapObject($objSoapObject));

        return $objArrayToReturn;
    }

    public static function GetObjectFromSoapObject($objSoapObject) {
        $objToReturn = new PhotoSubmission();
        if (property_exists($objSoapObject, 'Id'))
            $objToReturn->intId = $objSoapObject->Id;
        if (property_exists($objSoapObject, 'IsAccepted'))
            $objToReturn->blnIsAccepted = $objSoapObject->IsAccepted;
        if (property_exists($objSoapObject, 'CreatedDateTime'))
            $objToReturn->dttCreatedDateTime = new dxDateTime($objSoapObject->CreatedDateTime);
        if (property_exists($objSoapObject, 'PhotoFilePath'))
            $objToReturn->strPhotoFilePath = $objSoapObject->PhotoFilePath;
        if (property_exists($objSoapObject, 'LastUpdated'))
            $objToReturn->strLastUpdated = $objSoapObject->LastUpdated;
        if ((property_exists($objSoapObject, 'AccountObject')) &&
            ($objSoapObject->AccountObject))
            $objToReturn->AccountObject = Account::GetObjectFromSoapObject($objSoapObject->AccountObject);
        if (property_exists($objSoapObject, 'SearchMetaInfo'))
            $objToReturn->strSearchMetaInfo = $objSoapObject->SearchMetaInfo;
        if ((property_exists($objSoapObject, 'StockPhotoRequestObject')) &&
            ($objSoapObject->StockPhotoRequestObject))
            $objToReturn->StockPhotoRequestObject = Stockphotorequest::GetObjectFromSoapObject($objSoapObject->StockPhotoRequestObject);
        if ((property_exists($objSoapObject, 'FileDocumentObject')) &&
            ($objSoapObject->FileDocumentObject))
            $objToReturn->FileDocumentObject = Filedocument::GetObjectFromSoapObject($objSoapObject->FileDocumentObject);
        if (property_exists($objSoapObject, 'ObjectOwner'))
            $objToReturn->intObjectOwner = $objSoapObject->ObjectOwner;
        if (property_exists($objSoapObject, '__blnRestored'))
            $objToReturn->__blnRestored = $objSoapObject->__blnRestored;
        return $objToReturn;
    }

    public static function GetSoapArrayFromArray($objArray) {
        if (!$objArray)
            return null;

        $objArrayToReturn = array();

        foreach ($objArray as $objObject)
            array_push($objArrayToReturn, PhotoSubmission::GetSoapObjectFromObject($objObject, true));

        return unserialize(serialize($objArrayToReturn));
    }

    public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
        if ($objObject->dttCreatedDateTime)
            $objObject->dttCreatedDateTime = $objObject->dttCreatedDateTime->qFormat(dxDateTime::FormatSoap);
        if ($objObject->objAccountObject)
            $objObject->objAccountObject = Account::GetSoapObjectFromObject($objObject->objAccountObject, false);
        else if (!$blnBindRelatedObjects)
            $objObject->intAccount = null;
        if ($objObject->objStockPhotoRequestObject)
            $objObject->objStockPhotoRequestObject = Stockphotorequest::GetSoapObjectFromObject($objObject->objStockPhotoRequestObject, false);
        else if (!$blnBindRelatedObjects)
            $objObject->intStockPhotoRequest = null;
        if ($objObject->objFileDocumentObject)
            $objObject->objFileDocumentObject = Filedocument::GetSoapObjectFromObject($objObject->objFileDocumentObject, false);
        else if (!$blnBindRelatedObjects)
            $objObject->intFileDocument = null;
        return $objObject;
    }


    ////////////////////////////////////////
    // METHODS for JSON Object Translation
    ////////////////////////////////////////

    // this function is required for objects that implement the
    // IteratorAggregate interface
    public function getIterator() {
        ///////////////////
        // Member Variables
        ///////////////////
        $iArray['Id'] = $this->intId;
        $iArray['IsAccepted'] = $this->blnIsAccepted;
        $iArray['CreatedDateTime'] = $this->dttCreatedDateTime;
        $iArray['PhotoFilePath'] = $this->strPhotoFilePath;
        $iArray['LastUpdated'] = $this->strLastUpdated;
        $iArray['Account'] = $this->intAccount;
        $iArray['SearchMetaInfo'] = $this->strSearchMetaInfo;
        $iArray['StockPhotoRequest'] = $this->intStockPhotoRequest;
        $iArray['FileDocument'] = $this->intFileDocument;
        $iArray['ObjectOwner'] = $this->intObjectOwner;
        return new ArrayIterator($iArray);
    }

    // this function returns a Json formatted string using the
    // IteratorAggregate interface
    public function getJson() {
        return json_encode($this->getIterator());
    }

    /**
     * Default "toJsObject" handler
     * Specifies how the object should be displayed in JQuery UI lists and menus. Note that these lists use
     * value and label differently.
     *
     * value 	= The short form of what to display in the list and selection.
     * label 	= [optional] If defined, is what is displayed in the menu
     * id 		= Primary key of object.
     *
     * @return an array that specifies how to display the object
     */
    public function toJsObject () {
        return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intId ));
    }


}

/////////////////////////////////////
	// ADDITIONAL CLASSES for DIVBLOX QUERY
	/////////////////////////////////////

    /**
     * @uses dxQueryNode
     *
     * @property-read dxQueryNode $Id
     * @property-read dxQueryNode $IsAccepted
     * @property-read dxQueryNode $CreatedDateTime
     * @property-read dxQueryNode $PhotoFilePath
     * @property-read dxQueryNode $LastUpdated
     * @property-read dxQueryNode $Account
     * @property-read dxQueryNodeAccount $AccountObject
     * @property-read dxQueryNode $SearchMetaInfo
     * @property-read dxQueryNode $StockPhotoRequest
     * @property-read dxQueryNodeStockphotorequest $StockPhotoRequestObject
     * @property-read dxQueryNode $FileDocument
     * @property-read dxQueryNodeFiledocument $FileDocumentObject
     * @property-read dxQueryNode $ObjectOwner
     *
     *

     * @property-read dxQueryNode $_PrimaryKeyNode
     **/
	class dxQueryNodePhotoSubmission extends dxQueryNode {
		protected $strTableName = 'PhotoSubmission';
		protected $strPrimaryKey = 'Id';
		protected $strClassName = 'PhotoSubmission';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new dxQueryNode('Id', 'Id', 'Integer', $this);
				case 'IsAccepted':
					return new dxQueryNode('IsAccepted', 'IsAccepted', 'Bit', $this);
				case 'CreatedDateTime':
					return new dxQueryNode('CreatedDateTime', 'CreatedDateTime', 'DateTime', $this);
				case 'PhotoFilePath':
					return new dxQueryNode('PhotoFilePath', 'PhotoFilePath', 'Blob', $this);
				case 'LastUpdated':
					return new dxQueryNode('LastUpdated', 'LastUpdated', 'VarChar', $this);
				case 'Account':
					return new dxQueryNode('Account', 'Account', 'Integer', $this);
				case 'AccountObject':
					return new dxQueryNodeAccount('Account', 'AccountObject', 'Integer', $this);
				case 'SearchMetaInfo':
					return new dxQueryNode('SearchMetaInfo', 'SearchMetaInfo', 'Blob', $this);
				case 'StockPhotoRequest':
					return new dxQueryNode('StockPhotoRequest', 'StockPhotoRequest', 'Integer', $this);
				case 'StockPhotoRequestObject':
					return new dxQueryNodeStockphotorequest('StockPhotoRequest', 'StockPhotoRequestObject', 'Integer', $this);
				case 'FileDocument':
					return new dxQueryNode('FileDocument', 'FileDocument', 'Integer', $this);
				case 'FileDocumentObject':
					return new dxQueryNodeFiledocument('FileDocument', 'FileDocumentObject', 'Integer', $this);
				case 'ObjectOwner':
					return new dxQueryNode('ObjectOwner', 'ObjectOwner', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new dxQueryNode('Id', 'Id', 'Integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (dxCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

    /**
     * @property-read dxQueryNode $Id
     * @property-read dxQueryNode $IsAccepted
     * @property-read dxQueryNode $CreatedDateTime
     * @property-read dxQueryNode $PhotoFilePath
     * @property-read dxQueryNode $LastUpdated
     * @property-read dxQueryNode $Account
     * @property-read dxQueryNodeAccount $AccountObject
     * @property-read dxQueryNode $SearchMetaInfo
     * @property-read dxQueryNode $StockPhotoRequest
     * @property-read dxQueryNodeStockphotorequest $StockPhotoRequestObject
     * @property-read dxQueryNode $FileDocument
     * @property-read dxQueryNodeFiledocument $FileDocumentObject
     * @property-read dxQueryNode $ObjectOwner
     *
     *

     * @property-read dxQueryNode $_PrimaryKeyNode
     **/
	class dxQueryReverseReferenceNodePhotoSubmission extends dxQueryReverseReferenceNode {
		protected $strTableName = 'PhotoSubmission';
		protected $strPrimaryKey = 'Id';
		protected $strClassName = 'PhotoSubmission';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new dxQueryNode('Id', 'Id', 'integer', $this);
				case 'IsAccepted':
					return new dxQueryNode('IsAccepted', 'IsAccepted', 'boolean', $this);
				case 'CreatedDateTime':
					return new dxQueryNode('CreatedDateTime', 'CreatedDateTime', 'dxDateTime', $this);
				case 'PhotoFilePath':
					return new dxQueryNode('PhotoFilePath', 'PhotoFilePath', 'string', $this);
				case 'LastUpdated':
					return new dxQueryNode('LastUpdated', 'LastUpdated', 'string', $this);
				case 'Account':
					return new dxQueryNode('Account', 'Account', 'integer', $this);
				case 'AccountObject':
					return new dxQueryNodeAccount('Account', 'AccountObject', 'integer', $this);
				case 'SearchMetaInfo':
					return new dxQueryNode('SearchMetaInfo', 'SearchMetaInfo', 'string', $this);
				case 'StockPhotoRequest':
					return new dxQueryNode('StockPhotoRequest', 'StockPhotoRequest', 'integer', $this);
				case 'StockPhotoRequestObject':
					return new dxQueryNodeStockphotorequest('StockPhotoRequest', 'StockPhotoRequestObject', 'integer', $this);
				case 'FileDocument':
					return new dxQueryNode('FileDocument', 'FileDocument', 'integer', $this);
				case 'FileDocumentObject':
					return new dxQueryNodeFiledocument('FileDocument', 'FileDocumentObject', 'integer', $this);
				case 'ObjectOwner':
					return new dxQueryNode('ObjectOwner', 'ObjectOwner', 'integer', $this);

				case '_PrimaryKeyNode':
					return new dxQueryNode('Id', 'Id', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (dxCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}
?>
