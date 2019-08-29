<?php
/**
 * The abstract StockPhotoRequestGen class defined here is
 * code-generated and contains all the basic CRUD-type functionality as well as
 * basic methods to handle relationships and index-based loading.
 *
 * To use, you should use the StockPhotoRequest subclass which
 * extends this StockPhotoRequestGen class.
 *
 * Because subsequent re-code generations will overwrite any changes to this
 * file, you should leave this file unaltered to prevent yourself from losing
 * any information or code changes.  All customizations should be done by
 * overriding existing or implementing new methods, properties and variables
 * in the StockPhotoRequest class.
 *
 * @package divblox_app
 * @subpackage GeneratedDataObjects
 * @property-read integer $Id the value for intId (Read-Only PK)
 * @property string $RequestText the value for strRequestText 
 * @property dxDateTime $CreatedDateTime the value for dttCreatedDateTime 
 * @property-read string $LastUpdated the value for strLastUpdated (Read-Only Timestamp)
 * @property integer $Account the value for intAccount 
 * @property string $SearchMetaInfo the value for strSearchMetaInfo 
 * @property integer $RequestStatus the value for intRequestStatus 
 * @property integer $ObjectOwner the value for intObjectOwner 
 * @property Account $AccountObject the value for the Account object referenced by intAccount 
 * @property Requeststatus $RequestStatusObject the value for the Requeststatus object referenced by intRequestStatus 
 * @property-read PhotoSubmission $_PhotoSubmissionAsStockPhotoRequest the value for the private _objPhotoSubmissionAsStockPhotoRequest (Read-Only) if set due to an expansion on the PhotoSubmission.StockPhotoRequest reverse relationship
 * @property-read PhotoSubmission[] $_PhotoSubmissionAsStockPhotoRequestArray the value for the private _objPhotoSubmissionAsStockPhotoRequestArray (Read-Only) if set due to an ExpandAsArray on the PhotoSubmission.StockPhotoRequest reverse relationship
 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
 */
class StockPhotoRequestGen extends dxBaseClass implements IteratorAggregate {

    ///////////////////////////////////////////////////////////////////////
    // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
    ///////////////////////////////////////////////////////////////////////

    /**
     * Protected member variable that maps to the database PK Identity column StockPhotoRequest.Id
     * @var integer intId
     */
    protected $intId;
    const IdDefault = null;


    /**
     * Protected member variable that maps to the database column StockPhotoRequest.RequestText
     * @var string strRequestText
     */
    protected $strRequestText;
    const RequestTextDefault = null;


    /**
     * Protected member variable that maps to the database column StockPhotoRequest.CreatedDateTime
     * @var dxDateTime dttCreatedDateTime
     */
    protected $dttCreatedDateTime;
    const CreatedDateTimeDefault = null;


    /**
     * Protected member variable that maps to the database column StockPhotoRequest.LastUpdated
     * @var string strLastUpdated
     */
    protected $strLastUpdated;
    const LastUpdatedDefault = null;


    /**
     * Protected member variable that maps to the database column StockPhotoRequest.Account
     * @var integer intAccount
     */
    protected $intAccount;
    const AccountDefault = null;


    /**
     * Protected member variable that maps to the database column StockPhotoRequest.SearchMetaInfo
     * @var string strSearchMetaInfo
     */
    protected $strSearchMetaInfo;
    const SearchMetaInfoDefault = null;


    /**
     * Protected member variable that maps to the database column StockPhotoRequest.RequestStatus
     * @var integer intRequestStatus
     */
    protected $intRequestStatus;
    const RequestStatusDefault = null;


    /**
     * Protected member variable that maps to the database column StockPhotoRequest.ObjectOwner
     * @var integer intObjectOwner
     */
    protected $intObjectOwner;
    const ObjectOwnerDefault = null;


    /**
     * Private member variable that stores a reference to a single PhotoSubmissionAsStockPhotoRequest object
     * (of type PhotoSubmission), if this StockPhotoRequest object was restored with
     * an expansion on the PhotoSubmission association table.
     * @var PhotoSubmission _objPhotoSubmissionAsStockPhotoRequest;
     */
    private $_objPhotoSubmissionAsStockPhotoRequest;

    /**
     * Private member variable that stores a reference to an array of PhotoSubmissionAsStockPhotoRequest objects
     * (of type PhotoSubmission[]), if this StockPhotoRequest object was restored with
     * an ExpandAsArray on the PhotoSubmission association table.
     * @var PhotoSubmission[] _objPhotoSubmissionAsStockPhotoRequestArray;
     */
    private $_objPhotoSubmissionAsStockPhotoRequestArray = null;

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
     * in the database column StockPhotoRequest.Account.
     *
     * NOTE: Always use the AccountObject property getter to correctly retrieve this Account object.
     * (Because this class implements late binding, this variable reference MAY be null.)
     * @var Account objAccountObject
     */
    protected $objAccountObject;

    /**
     * Protected member variable that contains the object pointed by the reference
     * in the database column StockPhotoRequest.RequestStatus.
     *
     * NOTE: Always use the RequestStatusObject property getter to correctly retrieve this Requeststatus object.
     * (Because this class implements late binding, this variable reference MAY be null.)
     * @var Requeststatus objRequestStatusObject
     */
    protected $objRequestStatusObject;


    /**
     * Initialize each property with default values from database definition
     */
    public function Initialize() {
        $this->intId = StockPhotoRequest::IdDefault;
        $this->strRequestText = StockPhotoRequest::RequestTextDefault;
        $this->dttCreatedDateTime = (StockPhotoRequest::CreatedDateTimeDefault === null)?null:new dxDateTime(StockPhotoRequest::CreatedDateTimeDefault);
        $this->strLastUpdated = StockPhotoRequest::LastUpdatedDefault;
        $this->intAccount = StockPhotoRequest::AccountDefault;
        $this->strSearchMetaInfo = StockPhotoRequest::SearchMetaInfoDefault;
        $this->intRequestStatus = StockPhotoRequest::RequestStatusDefault;
        $this->intObjectOwner = StockPhotoRequest::ObjectOwnerDefault;
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
     * Load a StockPhotoRequest from PK Info
     * @param integer $intId
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return StockPhotoRequest
     */
    public static function Load($intId, $objOptionalClauses = null) {
        $strCacheKey = false;
        if (ProjectFunctions::$objCacheProvider && !$objOptionalClauses && ProjectFunctions::$Database[1]->Caching) {
            $strCacheKey = ProjectFunctions::$objCacheProvider->CreateKey(ProjectFunctions::$Database[1]->Database, 'StockPhotoRequest', $intId);
            $objCachedObject = ProjectFunctions::$objCacheProvider->Get($strCacheKey);
            if ($objCachedObject !== false) {
                return $objCachedObject;
            }
        }
        // Use QuerySingle to Perform the Query
        $objToReturn = StockPhotoRequest::QuerySingle(
            dxQuery::AndCondition(
                dxQuery::Equal(dxQueryN::StockPhotoRequest()->Id, $intId)
            ),
            $objOptionalClauses
        );
        if ($strCacheKey !== false) {
            ProjectFunctions::$objCacheProvider->Set($strCacheKey, $objToReturn);
        }
        return $objToReturn;
    }

    /**
     * Load all StockPhotoRequests
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return StockPhotoRequest[]
     */
    public static function LoadAll($objOptionalClauses = null) {
        if (func_num_args() > 1) {
            throw new dxCallerException("LoadAll must be called with an array of optional clauses as a single argument");
        }
        // Call StockPhotoRequest::QueryArray to perform the LoadAll query
        try {
            return StockPhotoRequest::QueryArray(dxQuery::All(), $objOptionalClauses);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }
    }

    /**
     * Count all StockPhotoRequests
     * @return int
     */
    public static function CountAll() {
        // Call StockPhotoRequest::QueryCount to perform the CountAll query
        return StockPhotoRequest::QueryCount(dxQuery::All());
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
        $objDatabase = StockPhotoRequest::GetDatabase();

        // Create/Build out the QueryBuilder object with StockPhotoRequest-specific SELET and FROM fields
        $objQueryBuilder = new dxQueryBuilder($objDatabase, 'StockPhotoRequest');

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
            StockPhotoRequest::GetSelectFields($objQueryBuilder, null, dxQuery::extractSelectClause($objOptionalClauses));
        }
        $objQueryBuilder->AddFromItem('StockPhotoRequest');

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
     * Static divblox Query method to query for a single StockPhotoRequest object.
     * Uses BuildQueryStatment to perform most of the work.
     * @param dxQueryCondition $objConditions any conditions on the query, itself
     * @param dxQueryClause[] $objOptionalClausees additional optional dxQueryClause objects for this query
     * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
     * @return StockPhotoRequest the queried object
     */
    public static function QuerySingle(dxQueryCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
        // Get the Query Statement
        try {
            $strQuery = StockPhotoRequest::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }

        // Perform the Query, Get the First Row, and Instantiate a new StockPhotoRequest object
        $objDbResult = $objQueryBuilder->Database->Query($strQuery);

        // Do we have to expand anything?
        if ($objQueryBuilder->ExpandAsArrayNode) {
            $objToReturn = array();
            $objPrevItemArray = array();
            while ($objDbRow = $objDbResult->GetNextRow()) {
                $objItem = StockPhotoRequest::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNode, $objPrevItemArray, $objQueryBuilder->ColumnAliasArray);
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
            return StockPhotoRequest::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
        }
    }

    /**
     * Static divblox Query method to query for an array of StockPhotoRequest objects.
     * Uses BuildQueryStatment to perform most of the work.
     * @param dxQueryCondition $objConditions any conditions on the query, itself
     * @param dxQueryClause[] $objOptionalClausees additional optional dxQueryClause objects for this query
     * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
     * @return StockPhotoRequest[] the queried objects as an array
     */
    public static function QueryArray(dxQueryCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
        // Get the Query Statement
        try {
            $strQuery = StockPhotoRequest::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }

        // Perform the Query and Instantiate the Array Result
        $objDbResult = $objQueryBuilder->Database->Query($strQuery);
        return StockPhotoRequest::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNode, $objQueryBuilder->ColumnAliasArray);
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
            $strQuery = StockPhotoRequest::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
     * Static divblox Query method to query for a count of StockPhotoRequest objects.
     * Uses BuildQueryStatment to perform most of the work.
     * @param dxQueryCondition $objConditions any conditions on the query, itself
     * @param dxQueryClause[] $objOptionalClausees additional optional dxQueryClause objects for this query
     * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
     * @return integer the count of queried objects as an integer
     */
    public static function QueryCount(dxQueryCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
        // Get the Query Statement
        try {
            $strQuery = StockPhotoRequest::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
        $objDatabase = StockPhotoRequest::GetDatabase();

        $strQuery = StockPhotoRequest::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

        $objCache = new dxCache('dxquery/stockphotorequest', $strQuery);
        $cacheData = $objCache->GetData();

        if (!$cacheData || $blnForceUpdate) {
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            $arrResult = StockPhotoRequest::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNode, $objQueryBuilder->ColumnAliasArray);
            $objCache->SaveData(serialize($arrResult));
        } else {
            $arrResult = unserialize($cacheData);
        }

        return $arrResult;
    }

    /**
     * Updates a dxQueryBuilder with the SELECT fields for this StockPhotoRequest
     * @param dxQueryBuilder $objBuilder the Query Builder object to update
     * @param string $strPrefix optional prefix to add to the SELECT fields
     */
    public static function GetSelectFields(dxQueryBuilder $objBuilder, $strPrefix = null, dxQuerySelect $objSelect = null) {
        if ($strPrefix) {
            $strTableName = $strPrefix;
            $strAliasPrefix = $strPrefix . '__';
        } else {
            $strTableName = 'StockPhotoRequest';
            $strAliasPrefix = '';
        }

        if ($objSelect) {
            $objBuilder->AddSelectItem($strTableName, 'Id', $strAliasPrefix . 'Id');
            $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
        } else {
            $objBuilder->AddSelectItem($strTableName, 'Id', $strAliasPrefix . 'Id');
            $objBuilder->AddSelectItem($strTableName, 'RequestText', $strAliasPrefix . 'RequestText');
            $objBuilder->AddSelectItem($strTableName, 'CreatedDateTime', $strAliasPrefix . 'CreatedDateTime');
            $objBuilder->AddSelectItem($strTableName, 'LastUpdated', $strAliasPrefix . 'LastUpdated');
            $objBuilder->AddSelectItem($strTableName, 'Account', $strAliasPrefix . 'Account');
            $objBuilder->AddSelectItem($strTableName, 'SearchMetaInfo', $strAliasPrefix . 'SearchMetaInfo');
            $objBuilder->AddSelectItem($strTableName, 'RequestStatus', $strAliasPrefix . 'RequestStatus');
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
     * Instantiate a StockPhotoRequest from a Database Row.
     * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
     * is calling this StockPhotoRequest::InstantiateDbRow in order to perform
     * early binding on referenced objects.
     * @param DatabaseRowBase $objDbRow
     * @param string $strAliasPrefix
     * @param dxQueryBaseNode $objExpandAsArrayNode
     * @param dxBaseClass $arrPreviousItem
     * @param string[] $strColumnAliasArray
     * @return mixed Either a StockPhotoRequest, or false to indicate the dbrow was used in an expansion, or null to indicate that this leaf is a duplicate.
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

            if (StockPhotoRequest::ExpandArray ($objDbRow, $strAliasPrefix, $objExpandAsArrayNode, $objPreviousItemArray, $strColumnAliasArray)) {
                return false; // db row was used but no new object was created
            }
        }

        // Create a new instance of the StockPhotoRequest object
        $objToReturn = new StockPhotoRequest();
        $objToReturn->__blnRestored = true;

        $strAlias = $strAliasPrefix . 'Id';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
        $strAlias = $strAliasPrefix . 'RequestText';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strRequestText = $objDbRow->GetColumn($strAliasName, 'Blob');
        $strAlias = $strAliasPrefix . 'CreatedDateTime';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->dttCreatedDateTime = $objDbRow->GetColumn($strAliasName, 'DateTime');
        $strAlias = $strAliasPrefix . 'LastUpdated';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strLastUpdated = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'Account';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->intAccount = $objDbRow->GetColumn($strAliasName, 'Integer');
        $strAlias = $strAliasPrefix . 'SearchMetaInfo';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strSearchMetaInfo = $objDbRow->GetColumn($strAliasName, 'Blob');
        $strAlias = $strAliasPrefix . 'RequestStatus';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->intRequestStatus = $objDbRow->GetColumn($strAliasName, 'Integer');
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
            $strAliasPrefix = 'StockPhotoRequest__';

        // Check for AccountObject Early Binding
        $strAlias = $strAliasPrefix . 'Account__Id';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        if (!is_null($objDbRow->GetColumn($strAliasName))) {
            $objExpansionNode = (empty($objExpansionAliasArray['Account']) ? null : $objExpansionAliasArray['Account']);
            $objToReturn->objAccountObject = Account::InstantiateDbRow($objDbRow, $strAliasPrefix . 'Account__', $objExpansionNode, null, $strColumnAliasArray);
        }
        // Check for RequestStatusObject Early Binding
        $strAlias = $strAliasPrefix . 'RequestStatus__Id';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        if (!is_null($objDbRow->GetColumn($strAliasName))) {
            $objExpansionNode = (empty($objExpansionAliasArray['RequestStatus']) ? null : $objExpansionAliasArray['RequestStatus']);
            $objToReturn->objRequestStatusObject = Requeststatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'RequestStatus__', $objExpansionNode, null, $strColumnAliasArray);
        }



        // Check for PhotoSubmissionAsStockPhotoRequest Virtual Binding
        $strAlias = $strAliasPrefix . 'photosubmissionasstockphotorequest__Id';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objExpansionNode = (empty($objExpansionAliasArray['photosubmissionasstockphotorequest']) ? null : $objExpansionAliasArray['photosubmissionasstockphotorequest']);
        $blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
        if ($blnExpanded && null === $objToReturn->_objPhotoSubmissionAsStockPhotoRequestArray)
            $objToReturn->_objPhotoSubmissionAsStockPhotoRequestArray = array();
        if (!is_null($objDbRow->GetColumn($strAliasName))) {
            if ($blnExpanded) {
                $objToReturn->_objPhotoSubmissionAsStockPhotoRequestArray[] = PhotoSubmission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'photosubmissionasstockphotorequest__', $objExpansionNode, null, $strColumnAliasArray);
            } elseif (is_null($objToReturn->_objPhotoSubmissionAsStockPhotoRequest)) {
                $objToReturn->_objPhotoSubmissionAsStockPhotoRequest = PhotoSubmission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'photosubmissionasstockphotorequest__', $objExpansionNode, null, $strColumnAliasArray);
            }
        }

        return $objToReturn;
    }

    /**
     * Instantiate an array of StockPhotoRequests from a Database Result
     * @param DatabaseResultBase $objDbResult
     * @param dxQueryBaseNode $objExpandAsArrayNode
     * @param string[] $strColumnAliasArray
     * @return StockPhotoRequest[]
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
                $objItem = StockPhotoRequest::InstantiateDbRow($objDbRow, null, $objExpandAsArrayNode, $objPrevItemArray, $strColumnAliasArray);
                if ($objItem) {
                    $objToReturn[] = $objItem;
                    $objPrevItemArray[$objItem->intId][] = $objItem;
                }
            }
        } else {
            while ($objDbRow = $objDbResult->GetNextRow())
                $objToReturn[] = StockPhotoRequest::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
        }

        return $objToReturn;
    }


    /**
     * Instantiate a single StockPhotoRequest object from a query cursor (e.g. a DB ResultSet).
     * Cursor is automatically moved to the "next row" of the result set.
     * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
     * @param dxDatabaseResultBase $objDbResult cursor resource
     * @return StockPhotoRequest next row resulting from the query
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
        return StockPhotoRequest::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
    }

    ///////////////////////////////////////////////////
    // INDEX-BASED LOAD METHODS (Single Load and Array)
    ///////////////////////////////////////////////////

    /**
     * Load a single StockPhotoRequest object,
     * by Id Index(es)
     * @param integer $intId
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return StockPhotoRequest
    */
    public static function LoadById($intId, $objOptionalClauses = null) {
        return StockPhotoRequest::QuerySingle(
            dxQuery::AndCondition(
                dxQuery::Equal(dxQueryN::StockPhotoRequest()->Id, $intId)
            ),
            $objOptionalClauses
        );
    }

    /**
     * Load an array of StockPhotoRequest objects,
     * by Account Index(es)
     * @param integer $intAccount
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return StockPhotoRequest[]
    */
    public static function LoadArrayByAccount($intAccount, $objOptionalClauses = null) {
        // Call StockPhotoRequest::QueryArray to perform the LoadArrayByAccount query
        try {
            return StockPhotoRequest::QueryArray(
                dxQuery::Equal(dxQueryN::StockPhotoRequest()->Account, $intAccount),
                $objOptionalClauses);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }
    }

    /**
     * Count StockPhotoRequests
     * by Account Index(es)
     * @param integer $intAccount
     * @return int
    */
    public static function CountByAccount($intAccount) {
        // Call StockPhotoRequest::QueryCount to perform the CountByAccount query
        return StockPhotoRequest::QueryCount(
            dxQuery::Equal(dxQueryN::StockPhotoRequest()->Account, $intAccount)
        );
    }

    /**
     * Load an array of StockPhotoRequest objects,
     * by RequestStatus Index(es)
     * @param integer $intRequestStatus
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return StockPhotoRequest[]
    */
    public static function LoadArrayByRequestStatus($intRequestStatus, $objOptionalClauses = null) {
        // Call StockPhotoRequest::QueryArray to perform the LoadArrayByRequestStatus query
        try {
            return StockPhotoRequest::QueryArray(
                dxQuery::Equal(dxQueryN::StockPhotoRequest()->RequestStatus, $intRequestStatus),
                $objOptionalClauses);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }
    }

    /**
     * Count StockPhotoRequests
     * by RequestStatus Index(es)
     * @param integer $intRequestStatus
     * @return int
    */
    public static function CountByRequestStatus($intRequestStatus) {
        // Call StockPhotoRequest::QueryCount to perform the CountByRequestStatus query
        return StockPhotoRequest::QueryCount(
            dxQuery::Equal(dxQueryN::StockPhotoRequest()->RequestStatus, $intRequestStatus)
        );
    }
    ////////////////////////////////////////////////////
    // INDEX-BASED LOAD METHODS (Array via Many to Many)
    ////////////////////////////////////////////////////


    //////////////////////////
    // SAVE, DELETE AND RELOAD
    //////////////////////////

    /**
    * Save this StockPhotoRequest
    * @param bool $blnForceInsert
    * @param bool $blnForceUpdate
    * @return int
    */
    public function Save($blnForceInsert = false, $blnForceUpdate = false) {
        $ObjectAccessArray = ProjectAccessManager::getObjectAccess(ProjectFunctions::getCurrentAccountId(),"StockPhotoRequest",$this->intId);
        // Get the Database Object for this Class
        $objDatabase = StockPhotoRequest::GetDatabase();
        $mixToReturn = null;
        if (!is_numeric($this->intObjectOwner)) {
            $this->intObjectOwner = ProjectFunctions::getCurrentAccountId();
        }
        $ExistingObj = StockPhotoRequest::Load($this->intId);
        $newAuditLogEntry = new AuditLogEntry();
        $ChangedArray = array();
        $newAuditLogEntry->EntryTimeStamp = dxDateTime::Now();
        $newAuditLogEntry->ObjectId = $this->intId;
        $newAuditLogEntry->ObjectName = 'StockPhotoRequest';
        $newAuditLogEntry->UserEmail = ProjectFunctions::getCurrentUserEmailForAudit();
        if (!$ExistingObj) {
            $newAuditLogEntry->ModificationType = 'Create';
            $ChangedArray = array_merge($ChangedArray,array("Id" => $this->intId));
            $ChangedArray = array_merge($ChangedArray,array("RequestText" => $this->strRequestText));
            $ChangedArray = array_merge($ChangedArray,array("CreatedDateTime" => $this->dttCreatedDateTime));
            $ChangedArray = array_merge($ChangedArray,array("LastUpdated" => $this->strLastUpdated));
            $ChangedArray = array_merge($ChangedArray,array("Account" => $this->intAccount));
            $ChangedArray = array_merge($ChangedArray,array("SearchMetaInfo" => $this->strSearchMetaInfo));
            $ChangedArray = array_merge($ChangedArray,array("RequestStatus" => $this->intRequestStatus));
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
            if (!is_null($ExistingObj->RequestText)) {
                $ExistingValueStr = $ExistingObj->RequestText;
            }
            if ($ExistingObj->RequestText != $this->strRequestText) {
                $ChangedArray = array_merge($ChangedArray,array("RequestText" => array("Before" => $ExistingValueStr,"After" => $this->strRequestText)));
                //$ChangedArray = array_merge($ChangedArray,array("RequestText" => "From: ".$ExistingValueStr." to: ".$this->strRequestText));
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
            if (!is_null($ExistingObj->RequestStatus)) {
                $ExistingValueStr = $ExistingObj->RequestStatus;
            }
            if ($ExistingObj->RequestStatus != $this->intRequestStatus) {
                $ChangedArray = array_merge($ChangedArray,array("RequestStatus" => array("Before" => $ExistingValueStr,"After" => $this->intRequestStatus)));
                //$ChangedArray = array_merge($ChangedArray,array("RequestStatus" => "From: ".$ExistingValueStr." to: ".$this->intRequestStatus));
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
                    throw new Exception("User is not allowed to perform operation ".AccessOperation::CREATE_STR." on entity of type 'StockPhotoRequest'. Allowed access is ".json_encode($ObjectAccessArray));
                }
                // Perform an INSERT query
                $objDatabase->NonQuery('
                INSERT INTO `StockPhotoRequest` (
							`RequestText`,
							`CreatedDateTime`,
							`Account`,
							`SearchMetaInfo`,
							`RequestStatus`,
							`ObjectOwner`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strRequestText) . ',
							' . $objDatabase->SqlVariable($this->dttCreatedDateTime) . ',
							' . $objDatabase->SqlVariable($this->intAccount) . ',
							' . $objDatabase->SqlVariable($this->strSearchMetaInfo) . ',
							' . $objDatabase->SqlVariable($this->intRequestStatus) . ',
							' . $objDatabase->SqlVariable($this->intObjectOwner) . '
						)
                ');
					// Update Identity column and return its value
                $mixToReturn = $this->intId = $objDatabase->InsertId('StockPhotoRequest', 'Id');
            } else {
                // Perform an UPDATE query
                // First checking for Optimistic Locking constraints (if applicable)
                if (!in_array(AccessOperation::UPDATE_STR,$ObjectAccessArray)) {
                    // This user is not allowed to create an object of this type
                    throw new Exception("User is not allowed to perform operation ".AccessOperation::UPDATE_STR." on entity of type 'StockPhotoRequest'. Allowed access is ".json_encode($ObjectAccessArray));
                }
                if (!$blnForceUpdate) {
                    // Perform the Optimistic Locking check
                    $objResult = $objDatabase->Query('
                    SELECT `LastUpdated` FROM `StockPhotoRequest` WHERE
							`Id` = ' . $objDatabase->SqlVariable($this->intId) . '');

                $objRow = $objResult->FetchArray();
                if ($objRow[0] != $this->strLastUpdated)
                    throw new dxOptimisticLockingException('StockPhotoRequest');
            }

            // Perform the UPDATE query
            $objDatabase->NonQuery('
            UPDATE `StockPhotoRequest` SET
							`RequestText` = ' . $objDatabase->SqlVariable($this->strRequestText) . ',
							`CreatedDateTime` = ' . $objDatabase->SqlVariable($this->dttCreatedDateTime) . ',
							`Account` = ' . $objDatabase->SqlVariable($this->intAccount) . ',
							`SearchMetaInfo` = ' . $objDatabase->SqlVariable($this->strSearchMetaInfo) . ',
							`RequestStatus` = ' . $objDatabase->SqlVariable($this->intRequestStatus) . ',
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
            error_log('Could not save audit log while saving StockPhotoRequest. Details: '.$newAuditLogEntry->getJson().'<br>Error details: '.$e->getMessage());
        }
        // Update __blnRestored and any Non-Identity PK Columns (if applicable)
        $this->__blnRestored = true;

        // Update Local Timestamp
        $objResult = $objDatabase->Query('SELECT `LastUpdated` FROM
                                            `StockPhotoRequest` WHERE
                							`Id` = ' . $objDatabase->SqlVariable($this->intId) . '');

        $objRow = $objResult->FetchArray();
        $this->strLastUpdated = $objRow[0];

        $this->DeleteCache();

        // Return
        return $mixToReturn;
    }
    /**
     * Delete this StockPhotoRequest
     * @return void
     */
    public function Delete() {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Cannot delete this StockPhotoRequest with an unset primary key.');

        $ObjectAccessArray = ProjectAccessManager::getObjectAccess(ProjectFunctions::getCurrentAccountId(),"StockPhotoRequest",$this->intId);
        if (!in_array(AccessOperation::DELETE_STR,$ObjectAccessArray)) {
            // This user is not allowed to delete an object of this type
            throw new Exception("User is not allowed to perform operation ".AccessOperation::DELETE_STR." on entity of type 'StockPhotoRequest'. Allowed access is ".json_encode($ObjectAccessArray));
        }

        // Get the Database Object for this Class
        $objDatabase = StockPhotoRequest::GetDatabase();
        $newAuditLogEntry = new AuditLogEntry();
        $ChangedArray = array();
        $newAuditLogEntry->EntryTimeStamp = dxDateTime::Now();
        $newAuditLogEntry->ObjectId = $this->intId;
        $newAuditLogEntry->ObjectName = 'StockPhotoRequest';
        $newAuditLogEntry->UserEmail = ProjectFunctions::getCurrentUserEmailForAudit();
        $newAuditLogEntry->ModificationType = 'Delete';
        $ChangedArray = array_merge($ChangedArray,array("Id" => $this->intId));
        $ChangedArray = array_merge($ChangedArray,array("RequestText" => $this->strRequestText));
        $ChangedArray = array_merge($ChangedArray,array("CreatedDateTime" => $this->dttCreatedDateTime));
        $ChangedArray = array_merge($ChangedArray,array("LastUpdated" => $this->strLastUpdated));
        $ChangedArray = array_merge($ChangedArray,array("Account" => $this->intAccount));
        $ChangedArray = array_merge($ChangedArray,array("SearchMetaInfo" => $this->strSearchMetaInfo));
        $ChangedArray = array_merge($ChangedArray,array("RequestStatus" => $this->intRequestStatus));
        $ChangedArray = array_merge($ChangedArray,array("ObjectOwner" => $this->intObjectOwner));
        $newAuditLogEntry->AuditLogEntryDetail = json_encode($ChangedArray);
        try {
            $newAuditLogEntry->Save();
        } catch(dxCallerException $e) {
            error_log('Could not save audit log while deleting StockPhotoRequest. Details: '.$newAuditLogEntry->getJson().'<br>Error details: '.$e->getMessage());
        }

        // Perform the SQL Query
        $objDatabase->NonQuery('
            DELETE FROM
                `StockPhotoRequest`
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($this->intId) . '');

        $this->DeleteCache();
    }

    /**
     * Delete this StockPhotoRequest ONLY from the cache
     * @return void
     */
    public function DeleteCache() {
        if (ProjectFunctions::$objCacheProvider && ProjectFunctions::$Database[1]->Caching) {
            $strCacheKey = ProjectFunctions::$objCacheProvider->CreateKey(ProjectFunctions::$Database[1]->Database, 'StockPhotoRequest', $this->intId);
            ProjectFunctions::$objCacheProvider->Delete($strCacheKey);
        }
    }

    /**
     * Delete all StockPhotoRequests
     * @return void
     */
    public static function DeleteAll() {
        // Get the Database Object for this Class
        $objDatabase = StockPhotoRequest::GetDatabase();

        // Perform the Query
        $objDatabase->NonQuery('
            DELETE FROM
                `StockPhotoRequest`');

        if (ProjectFunctions::$objCacheProvider && ProjectFunctions::$Database[1]->Caching) {
            ProjectFunctions::$objCacheProvider->DeleteAll();
        }
    }

    /**
     * Truncate StockPhotoRequest table
     * @return void
     */
    public static function Truncate() {
        // Get the Database Object for this Class
        $objDatabase = StockPhotoRequest::GetDatabase();

        // Perform the Query
        $objDatabase->NonQuery('
            TRUNCATE `StockPhotoRequest`');

        if (ProjectFunctions::$objCacheProvider && ProjectFunctions::$Database[1]->Caching) {
            ProjectFunctions::$objCacheProvider->DeleteAll();
        }
    }
    /**
     * Reload this StockPhotoRequest from the database.
     * @return void
     */
    public function Reload() {
        // Make sure we are actually Restored from the database
        if (!$this->__blnRestored)
            throw new dxCallerException('Cannot call Reload() on a new, unsaved StockPhotoRequest object.');

        $this->DeleteCache();

        // Reload the Object
        $objReloaded = StockPhotoRequest::Load($this->intId);

        // Update $this's local variables to match
        $this->strRequestText = $objReloaded->strRequestText;
        $this->dttCreatedDateTime = $objReloaded->dttCreatedDateTime;
        $this->strLastUpdated = $objReloaded->strLastUpdated;
        $this->Account = $objReloaded->Account;
        $this->strSearchMetaInfo = $objReloaded->strSearchMetaInfo;
        $this->RequestStatus = $objReloaded->RequestStatus;
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

            case 'RequestText':
                /**
                 * Gets the value for strRequestText 
                 * @return string
                 */
                return $this->strRequestText;

            case 'CreatedDateTime':
                /**
                 * Gets the value for dttCreatedDateTime 
                 * @return dxDateTime
                 */
                return $this->dttCreatedDateTime;

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

            case 'RequestStatus':
                /**
                 * Gets the value for intRequestStatus 
                 * @return integer
                 */
                return $this->intRequestStatus;

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

            case 'RequestStatusObject':
                /**
                 * Gets the value for the Requeststatus object referenced by intRequestStatus 
                 * @return Requeststatus
                 */
                try {
                    if ((!$this->objRequestStatusObject) && (!is_null($this->intRequestStatus)))
                        $this->objRequestStatusObject = Requeststatus::Load($this->intRequestStatus);
                    return $this->objRequestStatusObject;
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }


            ////////////////////////////
            // Virtual Object References (Many to Many and Reverse References)
            // (If restored via a "Many-to" expansion)
            ////////////////////////////

            case '_PhotoSubmissionAsStockPhotoRequest':
                /**
                 * Gets the value for the private _objPhotoSubmissionAsStockPhotoRequest (Read-Only)
                 * if set due to an expansion on the PhotoSubmission.StockPhotoRequest reverse relationship
                 * @return PhotoSubmission
                 */
                return $this->_objPhotoSubmissionAsStockPhotoRequest;

            case '_PhotoSubmissionAsStockPhotoRequestArray':
                /**
                 * Gets the value for the private _objPhotoSubmissionAsStockPhotoRequestArray (Read-Only)
                 * if set due to an ExpandAsArray on the PhotoSubmission.StockPhotoRequest reverse relationship
                 * @return PhotoSubmission[]
                 */
                return $this->_objPhotoSubmissionAsStockPhotoRequestArray;


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
            case 'RequestText':
                /**
                 * Sets the value for strRequestText 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strRequestText = dxType::Cast($mixValue, dxType::String));
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

            case 'RequestStatus':
                /**
                 * Sets the value for intRequestStatus 
                 * @param integer $mixValue
                 * @return integer
                 */
                try {
                    $this->objRequestStatusObject = null;
                    return ($this->intRequestStatus = dxType::Cast($mixValue, dxType::Integer));
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
                        throw new dxCallerException('Unable to set an unsaved AccountObject for this StockPhotoRequest');

                    // Update Local Member Variables
                    $this->objAccountObject = $mixValue;
                    $this->intAccount = $mixValue->Id;

                    // Return $mixValue
                    return $mixValue;
                }
                break;

            case 'RequestStatusObject':
                /**
                 * Sets the value for the Requeststatus object referenced by intRequestStatus 
                 * @param Requeststatus $mixValue
                 * @return Requeststatus
                 */
                if (is_null($mixValue)) {
                    $this->intRequestStatus = null;
                    $this->objRequestStatusObject = null;
                    return null;
                } else {
                    // Make sure $mixValue actually is a Requeststatus object
                    try {
                        $mixValue = dxType::Cast($mixValue, 'Requeststatus');
                    } catch (dxInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                    // Make sure $mixValue is a SAVED Requeststatus object
                    if (is_null($mixValue->Id))
                        throw new dxCallerException('Unable to set an unsaved RequestStatusObject for this StockPhotoRequest');

                    // Update Local Member Variables
                    $this->objRequestStatusObject = $mixValue;
                    $this->intRequestStatus = $mixValue->Id;

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



    // Related Objects' Methods for PhotoSubmissionAsStockPhotoRequest
    //-------------------------------------------------------------------

    /**
     * Gets all associated PhotoSubmissionsAsStockPhotoRequest as an array of PhotoSubmission objects
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return PhotoSubmission[]
    */
    public function GetPhotoSubmissionAsStockPhotoRequestArray($objOptionalClauses = null) {
        if ((is_null($this->intId)))
            return array();

        try {
            return PhotoSubmission::LoadArrayByStockPhotoRequest($this->intId, $objOptionalClauses);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }
    }

    /**
     * Counts all associated PhotoSubmissionsAsStockPhotoRequest
     * @return int
    */
    public function CountPhotoSubmissionsAsStockPhotoRequest() {
        if ((is_null($this->intId)))
            return 0;

        return PhotoSubmission::CountByStockPhotoRequest($this->intId);
    }

    /**
     * Associates a PhotoSubmissionAsStockPhotoRequest
     * @param PhotoSubmission $objPhotoSubmission
     * @return void
    */
    public function AssociatePhotoSubmissionAsStockPhotoRequest(PhotoSubmission $objPhotoSubmission) {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call AssociatePhotoSubmissionAsStockPhotoRequest on this unsaved StockPhotoRequest.');
        if ((is_null($objPhotoSubmission->Id)))
            throw new dxUndefinedPrimaryKeyException('Unable to call AssociatePhotoSubmissionAsStockPhotoRequest on this StockPhotoRequest with an unsaved PhotoSubmission.');

        // Get the Database Object for this Class
        $objDatabase = StockPhotoRequest::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            UPDATE
                `PhotoSubmission`
            SET
                `StockPhotoRequest` = ' . $objDatabase->SqlVariable($this->intId) . '
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($objPhotoSubmission->Id) . '
        ');
    }

    /**
     * Unassociates a PhotoSubmissionAsStockPhotoRequest
     * @param PhotoSubmission $objPhotoSubmission
     * @return void
    */
    public function UnassociatePhotoSubmissionAsStockPhotoRequest(PhotoSubmission $objPhotoSubmission) {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePhotoSubmissionAsStockPhotoRequest on this unsaved StockPhotoRequest.');
        if ((is_null($objPhotoSubmission->Id)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePhotoSubmissionAsStockPhotoRequest on this StockPhotoRequest with an unsaved PhotoSubmission.');

        // Get the Database Object for this Class
        $objDatabase = StockPhotoRequest::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            UPDATE
                `PhotoSubmission`
            SET
                `StockPhotoRequest` = null
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($objPhotoSubmission->Id) . ' AND
                `StockPhotoRequest` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }

    /**
     * Unassociates all PhotoSubmissionsAsStockPhotoRequest
     * @return void
    */
    public function UnassociateAllPhotoSubmissionsAsStockPhotoRequest() {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePhotoSubmissionAsStockPhotoRequest on this unsaved StockPhotoRequest.');

        // Get the Database Object for this Class
        $objDatabase = StockPhotoRequest::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            UPDATE
                `PhotoSubmission`
            SET
                `StockPhotoRequest` = null
            WHERE
                `StockPhotoRequest` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }

    /**
     * Deletes an associated PhotoSubmissionAsStockPhotoRequest
     * @param PhotoSubmission $objPhotoSubmission
     * @return void
    */
    public function DeleteAssociatedPhotoSubmissionAsStockPhotoRequest(PhotoSubmission $objPhotoSubmission) {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePhotoSubmissionAsStockPhotoRequest on this unsaved StockPhotoRequest.');
        if ((is_null($objPhotoSubmission->Id)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePhotoSubmissionAsStockPhotoRequest on this StockPhotoRequest with an unsaved PhotoSubmission.');

        // Get the Database Object for this Class
        $objDatabase = StockPhotoRequest::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            DELETE FROM
                `PhotoSubmission`
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($objPhotoSubmission->Id) . ' AND
                `StockPhotoRequest` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }

    /**
     * Deletes all associated PhotoSubmissionsAsStockPhotoRequest
     * @return void
    */
    public function DeleteAllPhotoSubmissionsAsStockPhotoRequest() {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePhotoSubmissionAsStockPhotoRequest on this unsaved StockPhotoRequest.');

        // Get the Database Object for this Class
        $objDatabase = StockPhotoRequest::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            DELETE FROM
                `PhotoSubmission`
            WHERE
                `StockPhotoRequest` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }


    
///////////////////////////////
    // METHODS TO EXTRACT INFO ABOUT THE CLASS
    ///////////////////////////////

    /**
     * Static method to retrieve the Database object that owns this class.
     * @return string Name of the table from which this class has been created.
     */
    public static function GetTableName() {
        return "StockPhotoRequest";
    }

    /**
     * Static method to retrieve the Table name from which this class has been created.
     * @return string Name of the table from which this class has been created.
     */
    public static function GetDatabaseName() {
        return ProjectFunctions::$Database[StockPhotoRequest::GetDatabaseIndex()]->Database;
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
        $strToReturn = '<complexType name="StockPhotoRequest"><sequence>';
        $strToReturn .= '<element name="Id" type="xsd:int"/>';
        $strToReturn .= '<element name="RequestText" type="xsd:string"/>';
        $strToReturn .= '<element name="CreatedDateTime" type="xsd:dateTime"/>';
        $strToReturn .= '<element name="LastUpdated" type="xsd:string"/>';
        $strToReturn .= '<element name="AccountObject" type="xsd1:Account"/>';
        $strToReturn .= '<element name="SearchMetaInfo" type="xsd:string"/>';
        $strToReturn .= '<element name="RequestStatusObject" type="xsd1:Requeststatus"/>';
        $strToReturn .= '<element name="ObjectOwner" type="xsd:int"/>';
        $strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
        $strToReturn .= '</sequence></complexType>';
        return $strToReturn;
    }

    public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
        if (!array_key_exists('StockPhotoRequest', $strComplexTypeArray)) {
            $strComplexTypeArray['StockPhotoRequest'] = StockPhotoRequest::GetSoapComplexTypeXml();
            Account::AlterSoapComplexTypeArray($strComplexTypeArray);
            Requeststatus::AlterSoapComplexTypeArray($strComplexTypeArray);
        }
    }

    public static function GetArrayFromSoapArray($objSoapArray) {
        $objArrayToReturn = array();

        foreach ($objSoapArray as $objSoapObject)
            array_push($objArrayToReturn, StockPhotoRequest::GetObjectFromSoapObject($objSoapObject));

        return $objArrayToReturn;
    }

    public static function GetObjectFromSoapObject($objSoapObject) {
        $objToReturn = new StockPhotoRequest();
        if (property_exists($objSoapObject, 'Id'))
            $objToReturn->intId = $objSoapObject->Id;
        if (property_exists($objSoapObject, 'RequestText'))
            $objToReturn->strRequestText = $objSoapObject->RequestText;
        if (property_exists($objSoapObject, 'CreatedDateTime'))
            $objToReturn->dttCreatedDateTime = new dxDateTime($objSoapObject->CreatedDateTime);
        if (property_exists($objSoapObject, 'LastUpdated'))
            $objToReturn->strLastUpdated = $objSoapObject->LastUpdated;
        if ((property_exists($objSoapObject, 'AccountObject')) &&
            ($objSoapObject->AccountObject))
            $objToReturn->AccountObject = Account::GetObjectFromSoapObject($objSoapObject->AccountObject);
        if (property_exists($objSoapObject, 'SearchMetaInfo'))
            $objToReturn->strSearchMetaInfo = $objSoapObject->SearchMetaInfo;
        if ((property_exists($objSoapObject, 'RequestStatusObject')) &&
            ($objSoapObject->RequestStatusObject))
            $objToReturn->RequestStatusObject = Requeststatus::GetObjectFromSoapObject($objSoapObject->RequestStatusObject);
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
            array_push($objArrayToReturn, StockPhotoRequest::GetSoapObjectFromObject($objObject, true));

        return unserialize(serialize($objArrayToReturn));
    }

    public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
        if ($objObject->dttCreatedDateTime)
            $objObject->dttCreatedDateTime = $objObject->dttCreatedDateTime->qFormat(dxDateTime::FormatSoap);
        if ($objObject->objAccountObject)
            $objObject->objAccountObject = Account::GetSoapObjectFromObject($objObject->objAccountObject, false);
        else if (!$blnBindRelatedObjects)
            $objObject->intAccount = null;
        if ($objObject->objRequestStatusObject)
            $objObject->objRequestStatusObject = Requeststatus::GetSoapObjectFromObject($objObject->objRequestStatusObject, false);
        else if (!$blnBindRelatedObjects)
            $objObject->intRequestStatus = null;
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
        $iArray['RequestText'] = $this->strRequestText;
        $iArray['CreatedDateTime'] = $this->dttCreatedDateTime;
        $iArray['LastUpdated'] = $this->strLastUpdated;
        $iArray['Account'] = $this->intAccount;
        $iArray['SearchMetaInfo'] = $this->strSearchMetaInfo;
        $iArray['RequestStatus'] = $this->intRequestStatus;
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
     * @property-read dxQueryNode $RequestText
     * @property-read dxQueryNode $CreatedDateTime
     * @property-read dxQueryNode $LastUpdated
     * @property-read dxQueryNode $Account
     * @property-read dxQueryNodeAccount $AccountObject
     * @property-read dxQueryNode $SearchMetaInfo
     * @property-read dxQueryNode $RequestStatus
     * @property-read dxQueryNodeRequeststatus $RequestStatusObject
     * @property-read dxQueryNode $ObjectOwner
     *
     *
     * @property-read dxQueryReverseReferenceNodePhotoSubmission $PhotoSubmissionAsStockPhotoRequest

     * @property-read dxQueryNode $_PrimaryKeyNode
     **/
	class dxQueryNodeStockPhotoRequest extends dxQueryNode {
		protected $strTableName = 'StockPhotoRequest';
		protected $strPrimaryKey = 'Id';
		protected $strClassName = 'StockPhotoRequest';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new dxQueryNode('Id', 'Id', 'Integer', $this);
				case 'RequestText':
					return new dxQueryNode('RequestText', 'RequestText', 'Blob', $this);
				case 'CreatedDateTime':
					return new dxQueryNode('CreatedDateTime', 'CreatedDateTime', 'DateTime', $this);
				case 'LastUpdated':
					return new dxQueryNode('LastUpdated', 'LastUpdated', 'VarChar', $this);
				case 'Account':
					return new dxQueryNode('Account', 'Account', 'Integer', $this);
				case 'AccountObject':
					return new dxQueryNodeAccount('Account', 'AccountObject', 'Integer', $this);
				case 'SearchMetaInfo':
					return new dxQueryNode('SearchMetaInfo', 'SearchMetaInfo', 'Blob', $this);
				case 'RequestStatus':
					return new dxQueryNode('RequestStatus', 'RequestStatus', 'Integer', $this);
				case 'RequestStatusObject':
					return new dxQueryNodeRequeststatus('RequestStatus', 'RequestStatusObject', 'Integer', $this);
				case 'ObjectOwner':
					return new dxQueryNode('ObjectOwner', 'ObjectOwner', 'Integer', $this);
				case 'PhotoSubmissionAsStockPhotoRequest':
					return new dxQueryReverseReferenceNodePhotoSubmission($this, 'photosubmissionasstockphotorequest', 'reverse_reference', 'StockPhotoRequest', 'PhotoSubmissionAsStockPhotoRequest');

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
     * @property-read dxQueryNode $RequestText
     * @property-read dxQueryNode $CreatedDateTime
     * @property-read dxQueryNode $LastUpdated
     * @property-read dxQueryNode $Account
     * @property-read dxQueryNodeAccount $AccountObject
     * @property-read dxQueryNode $SearchMetaInfo
     * @property-read dxQueryNode $RequestStatus
     * @property-read dxQueryNodeRequeststatus $RequestStatusObject
     * @property-read dxQueryNode $ObjectOwner
     *
     *
     * @property-read dxQueryReverseReferenceNodePhotoSubmission $PhotoSubmissionAsStockPhotoRequest

     * @property-read dxQueryNode $_PrimaryKeyNode
     **/
	class dxQueryReverseReferenceNodeStockPhotoRequest extends dxQueryReverseReferenceNode {
		protected $strTableName = 'StockPhotoRequest';
		protected $strPrimaryKey = 'Id';
		protected $strClassName = 'StockPhotoRequest';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new dxQueryNode('Id', 'Id', 'integer', $this);
				case 'RequestText':
					return new dxQueryNode('RequestText', 'RequestText', 'string', $this);
				case 'CreatedDateTime':
					return new dxQueryNode('CreatedDateTime', 'CreatedDateTime', 'dxDateTime', $this);
				case 'LastUpdated':
					return new dxQueryNode('LastUpdated', 'LastUpdated', 'string', $this);
				case 'Account':
					return new dxQueryNode('Account', 'Account', 'integer', $this);
				case 'AccountObject':
					return new dxQueryNodeAccount('Account', 'AccountObject', 'integer', $this);
				case 'SearchMetaInfo':
					return new dxQueryNode('SearchMetaInfo', 'SearchMetaInfo', 'string', $this);
				case 'RequestStatus':
					return new dxQueryNode('RequestStatus', 'RequestStatus', 'integer', $this);
				case 'RequestStatusObject':
					return new dxQueryNodeRequeststatus('RequestStatus', 'RequestStatusObject', 'integer', $this);
				case 'ObjectOwner':
					return new dxQueryNode('ObjectOwner', 'ObjectOwner', 'integer', $this);
				case 'PhotoSubmissionAsStockPhotoRequest':
					return new dxQueryReverseReferenceNodePhotoSubmission($this, 'photosubmissionasstockphotorequest', 'reverse_reference', 'StockPhotoRequest', 'PhotoSubmissionAsStockPhotoRequest');

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
