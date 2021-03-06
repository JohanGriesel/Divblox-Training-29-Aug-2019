<?php
/**
 * The abstract AccountGen class defined here is
 * code-generated and contains all the basic CRUD-type functionality as well as
 * basic methods to handle relationships and index-based loading.
 *
 * To use, you should use the Account subclass which
 * extends this AccountGen class.
 *
 * Because subsequent re-code generations will overwrite any changes to this
 * file, you should leave this file unaltered to prevent yourself from losing
 * any information or code changes.  All customizations should be done by
 * overriding existing or implementing new methods, properties and variables
 * in the Account class.
 *
 * @package divblox_app
 * @subpackage GeneratedDataObjects
 * @property-read integer $Id the value for intId (Read-Only PK)
 * @property string $FullName the value for strFullName 
 * @property string $FirstName the value for strFirstName 
 * @property string $MiddleNames the value for strMiddleNames 
 * @property string $LastName the value for strLastName 
 * @property string $EmailAddress the value for strEmailAddress 
 * @property string $Username the value for strUsername (Unique)
 * @property string $Password the value for strPassword 
 * @property string $MaidenName the value for strMaidenName 
 * @property string $ProfilePicturePath the value for strProfilePicturePath 
 * @property string $MainContactNumber the value for strMainContactNumber 
 * @property string $Title the value for strTitle 
 * @property dxDateTime $DateOfBirth the value for dttDateOfBirth 
 * @property string $PhysicalAddressLineOne the value for strPhysicalAddressLineOne 
 * @property string $PhysicalAddressLineTwo the value for strPhysicalAddressLineTwo 
 * @property string $PhysicalAddressPostalCode the value for strPhysicalAddressPostalCode 
 * @property string $PhysicalAddressCountry the value for strPhysicalAddressCountry 
 * @property string $PostalAddressLineOne the value for strPostalAddressLineOne 
 * @property string $PostalAddressLineTwo the value for strPostalAddressLineTwo 
 * @property string $PostalAddressPostalCode the value for strPostalAddressPostalCode 
 * @property string $PostalAddressCountry the value for strPostalAddressCountry 
 * @property string $IdentificationNumber the value for strIdentificationNumber 
 * @property string $Nickname the value for strNickname 
 * @property string $Status the value for strStatus 
 * @property string $Gender the value for strGender 
 * @property boolean $AccessBlocked the value for blnAccessBlocked 
 * @property string $BlockedReason the value for strBlockedReason 
 * @property-read string $LastUpdated the value for strLastUpdated (Read-Only Timestamp)
 * @property integer $UserRole the value for intUserRole 
 * @property string $SearchMetaInfo the value for strSearchMetaInfo 
 * @property integer $ObjectOwner the value for intObjectOwner 
 * @property Userrole $UserRoleObject the value for the Userrole object referenced by intUserRole 
 * @property-read AdditionalAccountInformation $_AdditionalAccountInformationAsAccount the value for the private _objAdditionalAccountInformationAsAccount (Read-Only) if set due to an expansion on the AdditionalAccountInformation.Account reverse relationship
 * @property-read AdditionalAccountInformation[] $_AdditionalAccountInformationAsAccountArray the value for the private _objAdditionalAccountInformationAsAccountArray (Read-Only) if set due to an ExpandAsArray on the AdditionalAccountInformation.Account reverse relationship
 * @property-read ClientConnection $_ClientConnectionAsAccount the value for the private _objClientConnectionAsAccount (Read-Only) if set due to an expansion on the ClientConnection.Account reverse relationship
 * @property-read ClientConnection[] $_ClientConnectionAsAccountArray the value for the private _objClientConnectionAsAccountArray (Read-Only) if set due to an ExpandAsArray on the ClientConnection.Account reverse relationship
 * @property-read PasswordReset $_PasswordResetAsAccount the value for the private _objPasswordResetAsAccount (Read-Only) if set due to an expansion on the PasswordReset.Account reverse relationship
 * @property-read PasswordReset[] $_PasswordResetAsAccountArray the value for the private _objPasswordResetAsAccountArray (Read-Only) if set due to an ExpandAsArray on the PasswordReset.Account reverse relationship
 * @property-read PhotoSubmission $_PhotoSubmissionAsAccount the value for the private _objPhotoSubmissionAsAccount (Read-Only) if set due to an expansion on the PhotoSubmission.Account reverse relationship
 * @property-read PhotoSubmission[] $_PhotoSubmissionAsAccountArray the value for the private _objPhotoSubmissionAsAccountArray (Read-Only) if set due to an ExpandAsArray on the PhotoSubmission.Account reverse relationship
 * @property-read PushRegistration $_PushRegistrationAsAccount the value for the private _objPushRegistrationAsAccount (Read-Only) if set due to an expansion on the PushRegistration.Account reverse relationship
 * @property-read PushRegistration[] $_PushRegistrationAsAccountArray the value for the private _objPushRegistrationAsAccountArray (Read-Only) if set due to an ExpandAsArray on the PushRegistration.Account reverse relationship
 * @property-read StockPhotoRequest $_StockPhotoRequestAsAccount the value for the private _objStockPhotoRequestAsAccount (Read-Only) if set due to an expansion on the StockPhotoRequest.Account reverse relationship
 * @property-read StockPhotoRequest[] $_StockPhotoRequestAsAccountArray the value for the private _objStockPhotoRequestAsAccountArray (Read-Only) if set due to an ExpandAsArray on the StockPhotoRequest.Account reverse relationship
 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
 */
class AccountGen extends dxBaseClass implements IteratorAggregate {

    ///////////////////////////////////////////////////////////////////////
    // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
    ///////////////////////////////////////////////////////////////////////

    /**
     * Protected member variable that maps to the database PK Identity column Account.Id
     * @var integer intId
     */
    protected $intId;
    const IdDefault = null;


    /**
     * Protected member variable that maps to the database column Account.FullName
     * @var string strFullName
     */
    protected $strFullName;
    const FullNameMaxLength = 50;
    const FullNameDefault = null;


    /**
     * Protected member variable that maps to the database column Account.FirstName
     * @var string strFirstName
     */
    protected $strFirstName;
    const FirstNameMaxLength = 50;
    const FirstNameDefault = null;


    /**
     * Protected member variable that maps to the database column Account.MiddleNames
     * @var string strMiddleNames
     */
    protected $strMiddleNames;
    const MiddleNamesMaxLength = 150;
    const MiddleNamesDefault = null;


    /**
     * Protected member variable that maps to the database column Account.LastName
     * @var string strLastName
     */
    protected $strLastName;
    const LastNameMaxLength = 50;
    const LastNameDefault = null;


    /**
     * Protected member variable that maps to the database column Account.EmailAddress
     * @var string strEmailAddress
     */
    protected $strEmailAddress;
    const EmailAddressMaxLength = 150;
    const EmailAddressDefault = null;


    /**
     * Protected member variable that maps to the database column Account.Username
     * @var string strUsername
     */
    protected $strUsername;
    const UsernameMaxLength = 50;
    const UsernameDefault = null;


    /**
     * Protected member variable that maps to the database column Account.Password
     * @var string strPassword
     */
    protected $strPassword;
    const PasswordMaxLength = 250;
    const PasswordDefault = null;


    /**
     * Protected member variable that maps to the database column Account.MaidenName
     * @var string strMaidenName
     */
    protected $strMaidenName;
    const MaidenNameMaxLength = 50;
    const MaidenNameDefault = null;


    /**
     * Protected member variable that maps to the database column Account.ProfilePicturePath
     * @var string strProfilePicturePath
     */
    protected $strProfilePicturePath;
    const ProfilePicturePathMaxLength = 250;
    const ProfilePicturePathDefault = null;


    /**
     * Protected member variable that maps to the database column Account.MainContactNumber
     * @var string strMainContactNumber
     */
    protected $strMainContactNumber;
    const MainContactNumberMaxLength = 25;
    const MainContactNumberDefault = null;


    /**
     * Protected member variable that maps to the database column Account.Title
     * @var string strTitle
     */
    protected $strTitle;
    const TitleMaxLength = 25;
    const TitleDefault = null;


    /**
     * Protected member variable that maps to the database column Account.DateOfBirth
     * @var dxDateTime dttDateOfBirth
     */
    protected $dttDateOfBirth;
    const DateOfBirthDefault = null;


    /**
     * Protected member variable that maps to the database column Account.PhysicalAddressLineOne
     * @var string strPhysicalAddressLineOne
     */
    protected $strPhysicalAddressLineOne;
    const PhysicalAddressLineOneMaxLength = 150;
    const PhysicalAddressLineOneDefault = null;


    /**
     * Protected member variable that maps to the database column Account.PhysicalAddressLineTwo
     * @var string strPhysicalAddressLineTwo
     */
    protected $strPhysicalAddressLineTwo;
    const PhysicalAddressLineTwoMaxLength = 150;
    const PhysicalAddressLineTwoDefault = null;


    /**
     * Protected member variable that maps to the database column Account.PhysicalAddressPostalCode
     * @var string strPhysicalAddressPostalCode
     */
    protected $strPhysicalAddressPostalCode;
    const PhysicalAddressPostalCodeMaxLength = 150;
    const PhysicalAddressPostalCodeDefault = null;


    /**
     * Protected member variable that maps to the database column Account.PhysicalAddressCountry
     * @var string strPhysicalAddressCountry
     */
    protected $strPhysicalAddressCountry;
    const PhysicalAddressCountryMaxLength = 150;
    const PhysicalAddressCountryDefault = null;


    /**
     * Protected member variable that maps to the database column Account.PostalAddressLineOne
     * @var string strPostalAddressLineOne
     */
    protected $strPostalAddressLineOne;
    const PostalAddressLineOneMaxLength = 150;
    const PostalAddressLineOneDefault = null;


    /**
     * Protected member variable that maps to the database column Account.PostalAddressLineTwo
     * @var string strPostalAddressLineTwo
     */
    protected $strPostalAddressLineTwo;
    const PostalAddressLineTwoMaxLength = 150;
    const PostalAddressLineTwoDefault = null;


    /**
     * Protected member variable that maps to the database column Account.PostalAddressPostalCode
     * @var string strPostalAddressPostalCode
     */
    protected $strPostalAddressPostalCode;
    const PostalAddressPostalCodeMaxLength = 150;
    const PostalAddressPostalCodeDefault = null;


    /**
     * Protected member variable that maps to the database column Account.PostalAddressCountry
     * @var string strPostalAddressCountry
     */
    protected $strPostalAddressCountry;
    const PostalAddressCountryMaxLength = 150;
    const PostalAddressCountryDefault = null;


    /**
     * Protected member variable that maps to the database column Account.IdentificationNumber
     * @var string strIdentificationNumber
     */
    protected $strIdentificationNumber;
    const IdentificationNumberMaxLength = 50;
    const IdentificationNumberDefault = null;


    /**
     * Protected member variable that maps to the database column Account.Nickname
     * @var string strNickname
     */
    protected $strNickname;
    const NicknameMaxLength = 50;
    const NicknameDefault = null;


    /**
     * Protected member variable that maps to the database column Account.Status
     * @var string strStatus
     */
    protected $strStatus;
    const StatusMaxLength = 250;
    const StatusDefault = null;


    /**
     * Protected member variable that maps to the database column Account.Gender
     * @var string strGender
     */
    protected $strGender;
    const GenderMaxLength = 25;
    const GenderDefault = null;


    /**
     * Protected member variable that maps to the database column Account.AccessBlocked
     * @var boolean blnAccessBlocked
     */
    protected $blnAccessBlocked;
    const AccessBlockedDefault = null;


    /**
     * Protected member variable that maps to the database column Account.BlockedReason
     * @var string strBlockedReason
     */
    protected $strBlockedReason;
    const BlockedReasonDefault = null;


    /**
     * Protected member variable that maps to the database column Account.LastUpdated
     * @var string strLastUpdated
     */
    protected $strLastUpdated;
    const LastUpdatedDefault = null;


    /**
     * Protected member variable that maps to the database column Account.UserRole
     * @var integer intUserRole
     */
    protected $intUserRole;
    const UserRoleDefault = null;


    /**
     * Protected member variable that maps to the database column Account.SearchMetaInfo
     * @var string strSearchMetaInfo
     */
    protected $strSearchMetaInfo;
    const SearchMetaInfoDefault = null;


    /**
     * Protected member variable that maps to the database column Account.ObjectOwner
     * @var integer intObjectOwner
     */
    protected $intObjectOwner;
    const ObjectOwnerDefault = null;


    /**
     * Private member variable that stores a reference to a single AdditionalAccountInformationAsAccount object
     * (of type AdditionalAccountInformation), if this Account object was restored with
     * an expansion on the AdditionalAccountInformation association table.
     * @var AdditionalAccountInformation _objAdditionalAccountInformationAsAccount;
     */
    private $_objAdditionalAccountInformationAsAccount;

    /**
     * Private member variable that stores a reference to an array of AdditionalAccountInformationAsAccount objects
     * (of type AdditionalAccountInformation[]), if this Account object was restored with
     * an ExpandAsArray on the AdditionalAccountInformation association table.
     * @var AdditionalAccountInformation[] _objAdditionalAccountInformationAsAccountArray;
     */
    private $_objAdditionalAccountInformationAsAccountArray = null;

    /**
     * Private member variable that stores a reference to a single ClientConnectionAsAccount object
     * (of type ClientConnection), if this Account object was restored with
     * an expansion on the ClientConnection association table.
     * @var ClientConnection _objClientConnectionAsAccount;
     */
    private $_objClientConnectionAsAccount;

    /**
     * Private member variable that stores a reference to an array of ClientConnectionAsAccount objects
     * (of type ClientConnection[]), if this Account object was restored with
     * an ExpandAsArray on the ClientConnection association table.
     * @var ClientConnection[] _objClientConnectionAsAccountArray;
     */
    private $_objClientConnectionAsAccountArray = null;

    /**
     * Private member variable that stores a reference to a single PasswordResetAsAccount object
     * (of type PasswordReset), if this Account object was restored with
     * an expansion on the PasswordReset association table.
     * @var PasswordReset _objPasswordResetAsAccount;
     */
    private $_objPasswordResetAsAccount;

    /**
     * Private member variable that stores a reference to an array of PasswordResetAsAccount objects
     * (of type PasswordReset[]), if this Account object was restored with
     * an ExpandAsArray on the PasswordReset association table.
     * @var PasswordReset[] _objPasswordResetAsAccountArray;
     */
    private $_objPasswordResetAsAccountArray = null;

    /**
     * Private member variable that stores a reference to a single PhotoSubmissionAsAccount object
     * (of type PhotoSubmission), if this Account object was restored with
     * an expansion on the PhotoSubmission association table.
     * @var PhotoSubmission _objPhotoSubmissionAsAccount;
     */
    private $_objPhotoSubmissionAsAccount;

    /**
     * Private member variable that stores a reference to an array of PhotoSubmissionAsAccount objects
     * (of type PhotoSubmission[]), if this Account object was restored with
     * an ExpandAsArray on the PhotoSubmission association table.
     * @var PhotoSubmission[] _objPhotoSubmissionAsAccountArray;
     */
    private $_objPhotoSubmissionAsAccountArray = null;

    /**
     * Private member variable that stores a reference to a single PushRegistrationAsAccount object
     * (of type PushRegistration), if this Account object was restored with
     * an expansion on the PushRegistration association table.
     * @var PushRegistration _objPushRegistrationAsAccount;
     */
    private $_objPushRegistrationAsAccount;

    /**
     * Private member variable that stores a reference to an array of PushRegistrationAsAccount objects
     * (of type PushRegistration[]), if this Account object was restored with
     * an ExpandAsArray on the PushRegistration association table.
     * @var PushRegistration[] _objPushRegistrationAsAccountArray;
     */
    private $_objPushRegistrationAsAccountArray = null;

    /**
     * Private member variable that stores a reference to a single StockPhotoRequestAsAccount object
     * (of type StockPhotoRequest), if this Account object was restored with
     * an expansion on the StockPhotoRequest association table.
     * @var StockPhotoRequest _objStockPhotoRequestAsAccount;
     */
    private $_objStockPhotoRequestAsAccount;

    /**
     * Private member variable that stores a reference to an array of StockPhotoRequestAsAccount objects
     * (of type StockPhotoRequest[]), if this Account object was restored with
     * an ExpandAsArray on the StockPhotoRequest association table.
     * @var StockPhotoRequest[] _objStockPhotoRequestAsAccountArray;
     */
    private $_objStockPhotoRequestAsAccountArray = null;

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
     * in the database column Account.UserRole.
     *
     * NOTE: Always use the UserRoleObject property getter to correctly retrieve this Userrole object.
     * (Because this class implements late binding, this variable reference MAY be null.)
     * @var Userrole objUserRoleObject
     */
    protected $objUserRoleObject;


    /**
     * Initialize each property with default values from database definition
     */
    public function Initialize() {
        $this->intId = Account::IdDefault;
        $this->strFullName = Account::FullNameDefault;
        $this->strFirstName = Account::FirstNameDefault;
        $this->strMiddleNames = Account::MiddleNamesDefault;
        $this->strLastName = Account::LastNameDefault;
        $this->strEmailAddress = Account::EmailAddressDefault;
        $this->strUsername = Account::UsernameDefault;
        $this->strPassword = Account::PasswordDefault;
        $this->strMaidenName = Account::MaidenNameDefault;
        $this->strProfilePicturePath = Account::ProfilePicturePathDefault;
        $this->strMainContactNumber = Account::MainContactNumberDefault;
        $this->strTitle = Account::TitleDefault;
        $this->dttDateOfBirth = (Account::DateOfBirthDefault === null)?null:new dxDateTime(Account::DateOfBirthDefault);
        $this->strPhysicalAddressLineOne = Account::PhysicalAddressLineOneDefault;
        $this->strPhysicalAddressLineTwo = Account::PhysicalAddressLineTwoDefault;
        $this->strPhysicalAddressPostalCode = Account::PhysicalAddressPostalCodeDefault;
        $this->strPhysicalAddressCountry = Account::PhysicalAddressCountryDefault;
        $this->strPostalAddressLineOne = Account::PostalAddressLineOneDefault;
        $this->strPostalAddressLineTwo = Account::PostalAddressLineTwoDefault;
        $this->strPostalAddressPostalCode = Account::PostalAddressPostalCodeDefault;
        $this->strPostalAddressCountry = Account::PostalAddressCountryDefault;
        $this->strIdentificationNumber = Account::IdentificationNumberDefault;
        $this->strNickname = Account::NicknameDefault;
        $this->strStatus = Account::StatusDefault;
        $this->strGender = Account::GenderDefault;
        $this->blnAccessBlocked = Account::AccessBlockedDefault;
        $this->strBlockedReason = Account::BlockedReasonDefault;
        $this->strLastUpdated = Account::LastUpdatedDefault;
        $this->intUserRole = Account::UserRoleDefault;
        $this->strSearchMetaInfo = Account::SearchMetaInfoDefault;
        $this->intObjectOwner = Account::ObjectOwnerDefault;
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
     * Load a Account from PK Info
     * @param integer $intId
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return Account
     */
    public static function Load($intId, $objOptionalClauses = null) {
        $strCacheKey = false;
        if (ProjectFunctions::$objCacheProvider && !$objOptionalClauses && ProjectFunctions::$Database[1]->Caching) {
            $strCacheKey = ProjectFunctions::$objCacheProvider->CreateKey(ProjectFunctions::$Database[1]->Database, 'Account', $intId);
            $objCachedObject = ProjectFunctions::$objCacheProvider->Get($strCacheKey);
            if ($objCachedObject !== false) {
                return $objCachedObject;
            }
        }
        // Use QuerySingle to Perform the Query
        $objToReturn = Account::QuerySingle(
            dxQuery::AndCondition(
                dxQuery::Equal(dxQueryN::Account()->Id, $intId)
            ),
            $objOptionalClauses
        );
        if ($strCacheKey !== false) {
            ProjectFunctions::$objCacheProvider->Set($strCacheKey, $objToReturn);
        }
        return $objToReturn;
    }

    /**
     * Load all Accounts
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return Account[]
     */
    public static function LoadAll($objOptionalClauses = null) {
        if (func_num_args() > 1) {
            throw new dxCallerException("LoadAll must be called with an array of optional clauses as a single argument");
        }
        // Call Account::QueryArray to perform the LoadAll query
        try {
            return Account::QueryArray(dxQuery::All(), $objOptionalClauses);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }
    }

    /**
     * Count all Accounts
     * @return int
     */
    public static function CountAll() {
        // Call Account::QueryCount to perform the CountAll query
        return Account::QueryCount(dxQuery::All());
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
        $objDatabase = Account::GetDatabase();

        // Create/Build out the QueryBuilder object with Account-specific SELET and FROM fields
        $objQueryBuilder = new dxQueryBuilder($objDatabase, 'Account');

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
            Account::GetSelectFields($objQueryBuilder, null, dxQuery::extractSelectClause($objOptionalClauses));
        }
        $objQueryBuilder->AddFromItem('Account');

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
     * Static divblox Query method to query for a single Account object.
     * Uses BuildQueryStatment to perform most of the work.
     * @param dxQueryCondition $objConditions any conditions on the query, itself
     * @param dxQueryClause[] $objOptionalClausees additional optional dxQueryClause objects for this query
     * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
     * @return Account the queried object
     */
    public static function QuerySingle(dxQueryCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
        // Get the Query Statement
        try {
            $strQuery = Account::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }

        // Perform the Query, Get the First Row, and Instantiate a new Account object
        $objDbResult = $objQueryBuilder->Database->Query($strQuery);

        // Do we have to expand anything?
        if ($objQueryBuilder->ExpandAsArrayNode) {
            $objToReturn = array();
            $objPrevItemArray = array();
            while ($objDbRow = $objDbResult->GetNextRow()) {
                $objItem = Account::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNode, $objPrevItemArray, $objQueryBuilder->ColumnAliasArray);
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
            return Account::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
        }
    }

    /**
     * Static divblox Query method to query for an array of Account objects.
     * Uses BuildQueryStatment to perform most of the work.
     * @param dxQueryCondition $objConditions any conditions on the query, itself
     * @param dxQueryClause[] $objOptionalClausees additional optional dxQueryClause objects for this query
     * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
     * @return Account[] the queried objects as an array
     */
    public static function QueryArray(dxQueryCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
        // Get the Query Statement
        try {
            $strQuery = Account::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }

        // Perform the Query and Instantiate the Array Result
        $objDbResult = $objQueryBuilder->Database->Query($strQuery);
        return Account::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNode, $objQueryBuilder->ColumnAliasArray);
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
            $strQuery = Account::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
     * Static divblox Query method to query for a count of Account objects.
     * Uses BuildQueryStatment to perform most of the work.
     * @param dxQueryCondition $objConditions any conditions on the query, itself
     * @param dxQueryClause[] $objOptionalClausees additional optional dxQueryClause objects for this query
     * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
     * @return integer the count of queried objects as an integer
     */
    public static function QueryCount(dxQueryCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
        // Get the Query Statement
        try {
            $strQuery = Account::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
        $objDatabase = Account::GetDatabase();

        $strQuery = Account::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

        $objCache = new dxCache('dxquery/account', $strQuery);
        $cacheData = $objCache->GetData();

        if (!$cacheData || $blnForceUpdate) {
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            $arrResult = Account::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNode, $objQueryBuilder->ColumnAliasArray);
            $objCache->SaveData(serialize($arrResult));
        } else {
            $arrResult = unserialize($cacheData);
        }

        return $arrResult;
    }

    /**
     * Updates a dxQueryBuilder with the SELECT fields for this Account
     * @param dxQueryBuilder $objBuilder the Query Builder object to update
     * @param string $strPrefix optional prefix to add to the SELECT fields
     */
    public static function GetSelectFields(dxQueryBuilder $objBuilder, $strPrefix = null, dxQuerySelect $objSelect = null) {
        if ($strPrefix) {
            $strTableName = $strPrefix;
            $strAliasPrefix = $strPrefix . '__';
        } else {
            $strTableName = 'Account';
            $strAliasPrefix = '';
        }

        if ($objSelect) {
            $objBuilder->AddSelectItem($strTableName, 'Id', $strAliasPrefix . 'Id');
            $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
        } else {
            $objBuilder->AddSelectItem($strTableName, 'Id', $strAliasPrefix . 'Id');
            $objBuilder->AddSelectItem($strTableName, 'FullName', $strAliasPrefix . 'FullName');
            $objBuilder->AddSelectItem($strTableName, 'FirstName', $strAliasPrefix . 'FirstName');
            $objBuilder->AddSelectItem($strTableName, 'MiddleNames', $strAliasPrefix . 'MiddleNames');
            $objBuilder->AddSelectItem($strTableName, 'LastName', $strAliasPrefix . 'LastName');
            $objBuilder->AddSelectItem($strTableName, 'EmailAddress', $strAliasPrefix . 'EmailAddress');
            $objBuilder->AddSelectItem($strTableName, 'Username', $strAliasPrefix . 'Username');
            $objBuilder->AddSelectItem($strTableName, 'Password', $strAliasPrefix . 'Password');
            $objBuilder->AddSelectItem($strTableName, 'MaidenName', $strAliasPrefix . 'MaidenName');
            $objBuilder->AddSelectItem($strTableName, 'ProfilePicturePath', $strAliasPrefix . 'ProfilePicturePath');
            $objBuilder->AddSelectItem($strTableName, 'MainContactNumber', $strAliasPrefix . 'MainContactNumber');
            $objBuilder->AddSelectItem($strTableName, 'Title', $strAliasPrefix . 'Title');
            $objBuilder->AddSelectItem($strTableName, 'DateOfBirth', $strAliasPrefix . 'DateOfBirth');
            $objBuilder->AddSelectItem($strTableName, 'PhysicalAddressLineOne', $strAliasPrefix . 'PhysicalAddressLineOne');
            $objBuilder->AddSelectItem($strTableName, 'PhysicalAddressLineTwo', $strAliasPrefix . 'PhysicalAddressLineTwo');
            $objBuilder->AddSelectItem($strTableName, 'PhysicalAddressPostalCode', $strAliasPrefix . 'PhysicalAddressPostalCode');
            $objBuilder->AddSelectItem($strTableName, 'PhysicalAddressCountry', $strAliasPrefix . 'PhysicalAddressCountry');
            $objBuilder->AddSelectItem($strTableName, 'PostalAddressLineOne', $strAliasPrefix . 'PostalAddressLineOne');
            $objBuilder->AddSelectItem($strTableName, 'PostalAddressLineTwo', $strAliasPrefix . 'PostalAddressLineTwo');
            $objBuilder->AddSelectItem($strTableName, 'PostalAddressPostalCode', $strAliasPrefix . 'PostalAddressPostalCode');
            $objBuilder->AddSelectItem($strTableName, 'PostalAddressCountry', $strAliasPrefix . 'PostalAddressCountry');
            $objBuilder->AddSelectItem($strTableName, 'IdentificationNumber', $strAliasPrefix . 'IdentificationNumber');
            $objBuilder->AddSelectItem($strTableName, 'Nickname', $strAliasPrefix . 'Nickname');
            $objBuilder->AddSelectItem($strTableName, 'Status', $strAliasPrefix . 'Status');
            $objBuilder->AddSelectItem($strTableName, 'Gender', $strAliasPrefix . 'Gender');
            $objBuilder->AddSelectItem($strTableName, 'AccessBlocked', $strAliasPrefix . 'AccessBlocked');
            $objBuilder->AddSelectItem($strTableName, 'BlockedReason', $strAliasPrefix . 'BlockedReason');
            $objBuilder->AddSelectItem($strTableName, 'LastUpdated', $strAliasPrefix . 'LastUpdated');
            $objBuilder->AddSelectItem($strTableName, 'UserRole', $strAliasPrefix . 'UserRole');
            $objBuilder->AddSelectItem($strTableName, 'SearchMetaInfo', $strAliasPrefix . 'SearchMetaInfo');
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
     * Instantiate a Account from a Database Row.
     * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
     * is calling this Account::InstantiateDbRow in order to perform
     * early binding on referenced objects.
     * @param DatabaseRowBase $objDbRow
     * @param string $strAliasPrefix
     * @param dxQueryBaseNode $objExpandAsArrayNode
     * @param dxBaseClass $arrPreviousItem
     * @param string[] $strColumnAliasArray
     * @return mixed Either a Account, or false to indicate the dbrow was used in an expansion, or null to indicate that this leaf is a duplicate.
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

            if (Account::ExpandArray ($objDbRow, $strAliasPrefix, $objExpandAsArrayNode, $objPreviousItemArray, $strColumnAliasArray)) {
                return false; // db row was used but no new object was created
            }
        }

        // Create a new instance of the Account object
        $objToReturn = new Account();
        $objToReturn->__blnRestored = true;

        $strAlias = $strAliasPrefix . 'Id';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
        $strAlias = $strAliasPrefix . 'FullName';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strFullName = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'FirstName';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strFirstName = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'MiddleNames';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strMiddleNames = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'LastName';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strLastName = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'EmailAddress';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strEmailAddress = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'Username';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strUsername = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'Password';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strPassword = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'MaidenName';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strMaidenName = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'ProfilePicturePath';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strProfilePicturePath = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'MainContactNumber';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strMainContactNumber = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'Title';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strTitle = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'DateOfBirth';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->dttDateOfBirth = $objDbRow->GetColumn($strAliasName, 'Date');
        $strAlias = $strAliasPrefix . 'PhysicalAddressLineOne';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strPhysicalAddressLineOne = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'PhysicalAddressLineTwo';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strPhysicalAddressLineTwo = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'PhysicalAddressPostalCode';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strPhysicalAddressPostalCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'PhysicalAddressCountry';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strPhysicalAddressCountry = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'PostalAddressLineOne';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strPostalAddressLineOne = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'PostalAddressLineTwo';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strPostalAddressLineTwo = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'PostalAddressPostalCode';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strPostalAddressPostalCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'PostalAddressCountry';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strPostalAddressCountry = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'IdentificationNumber';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strIdentificationNumber = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'Nickname';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strNickname = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'Status';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strStatus = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'Gender';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strGender = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'AccessBlocked';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->blnAccessBlocked = $objDbRow->GetColumn($strAliasName, 'Bit');
        $strAlias = $strAliasPrefix . 'BlockedReason';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strBlockedReason = $objDbRow->GetColumn($strAliasName, 'Blob');
        $strAlias = $strAliasPrefix . 'LastUpdated';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strLastUpdated = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAlias = $strAliasPrefix . 'UserRole';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->intUserRole = $objDbRow->GetColumn($strAliasName, 'Integer');
        $strAlias = $strAliasPrefix . 'SearchMetaInfo';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objToReturn->strSearchMetaInfo = $objDbRow->GetColumn($strAliasName, 'Blob');
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
            $strAliasPrefix = 'Account__';

        // Check for UserRoleObject Early Binding
        $strAlias = $strAliasPrefix . 'UserRole__Id';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        if (!is_null($objDbRow->GetColumn($strAliasName))) {
            $objExpansionNode = (empty($objExpansionAliasArray['UserRole']) ? null : $objExpansionAliasArray['UserRole']);
            $objToReturn->objUserRoleObject = Userrole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'UserRole__', $objExpansionNode, null, $strColumnAliasArray);
        }



        // Check for AdditionalAccountInformationAsAccount Virtual Binding
        $strAlias = $strAliasPrefix . 'additionalaccountinformationasaccount__Id';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objExpansionNode = (empty($objExpansionAliasArray['additionalaccountinformationasaccount']) ? null : $objExpansionAliasArray['additionalaccountinformationasaccount']);
        $blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
        if ($blnExpanded && null === $objToReturn->_objAdditionalAccountInformationAsAccountArray)
            $objToReturn->_objAdditionalAccountInformationAsAccountArray = array();
        if (!is_null($objDbRow->GetColumn($strAliasName))) {
            if ($blnExpanded) {
                $objToReturn->_objAdditionalAccountInformationAsAccountArray[] = AdditionalAccountInformation::InstantiateDbRow($objDbRow, $strAliasPrefix . 'additionalaccountinformationasaccount__', $objExpansionNode, null, $strColumnAliasArray);
            } elseif (is_null($objToReturn->_objAdditionalAccountInformationAsAccount)) {
                $objToReturn->_objAdditionalAccountInformationAsAccount = AdditionalAccountInformation::InstantiateDbRow($objDbRow, $strAliasPrefix . 'additionalaccountinformationasaccount__', $objExpansionNode, null, $strColumnAliasArray);
            }
        }

        // Check for ClientConnectionAsAccount Virtual Binding
        $strAlias = $strAliasPrefix . 'clientconnectionasaccount__Id';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objExpansionNode = (empty($objExpansionAliasArray['clientconnectionasaccount']) ? null : $objExpansionAliasArray['clientconnectionasaccount']);
        $blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
        if ($blnExpanded && null === $objToReturn->_objClientConnectionAsAccountArray)
            $objToReturn->_objClientConnectionAsAccountArray = array();
        if (!is_null($objDbRow->GetColumn($strAliasName))) {
            if ($blnExpanded) {
                $objToReturn->_objClientConnectionAsAccountArray[] = ClientConnection::InstantiateDbRow($objDbRow, $strAliasPrefix . 'clientconnectionasaccount__', $objExpansionNode, null, $strColumnAliasArray);
            } elseif (is_null($objToReturn->_objClientConnectionAsAccount)) {
                $objToReturn->_objClientConnectionAsAccount = ClientConnection::InstantiateDbRow($objDbRow, $strAliasPrefix . 'clientconnectionasaccount__', $objExpansionNode, null, $strColumnAliasArray);
            }
        }

        // Check for PasswordResetAsAccount Virtual Binding
        $strAlias = $strAliasPrefix . 'passwordresetasaccount__Id';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objExpansionNode = (empty($objExpansionAliasArray['passwordresetasaccount']) ? null : $objExpansionAliasArray['passwordresetasaccount']);
        $blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
        if ($blnExpanded && null === $objToReturn->_objPasswordResetAsAccountArray)
            $objToReturn->_objPasswordResetAsAccountArray = array();
        if (!is_null($objDbRow->GetColumn($strAliasName))) {
            if ($blnExpanded) {
                $objToReturn->_objPasswordResetAsAccountArray[] = PasswordReset::InstantiateDbRow($objDbRow, $strAliasPrefix . 'passwordresetasaccount__', $objExpansionNode, null, $strColumnAliasArray);
            } elseif (is_null($objToReturn->_objPasswordResetAsAccount)) {
                $objToReturn->_objPasswordResetAsAccount = PasswordReset::InstantiateDbRow($objDbRow, $strAliasPrefix . 'passwordresetasaccount__', $objExpansionNode, null, $strColumnAliasArray);
            }
        }

        // Check for PhotoSubmissionAsAccount Virtual Binding
        $strAlias = $strAliasPrefix . 'photosubmissionasaccount__Id';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objExpansionNode = (empty($objExpansionAliasArray['photosubmissionasaccount']) ? null : $objExpansionAliasArray['photosubmissionasaccount']);
        $blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
        if ($blnExpanded && null === $objToReturn->_objPhotoSubmissionAsAccountArray)
            $objToReturn->_objPhotoSubmissionAsAccountArray = array();
        if (!is_null($objDbRow->GetColumn($strAliasName))) {
            if ($blnExpanded) {
                $objToReturn->_objPhotoSubmissionAsAccountArray[] = PhotoSubmission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'photosubmissionasaccount__', $objExpansionNode, null, $strColumnAliasArray);
            } elseif (is_null($objToReturn->_objPhotoSubmissionAsAccount)) {
                $objToReturn->_objPhotoSubmissionAsAccount = PhotoSubmission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'photosubmissionasaccount__', $objExpansionNode, null, $strColumnAliasArray);
            }
        }

        // Check for PushRegistrationAsAccount Virtual Binding
        $strAlias = $strAliasPrefix . 'pushregistrationasaccount__Id';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objExpansionNode = (empty($objExpansionAliasArray['pushregistrationasaccount']) ? null : $objExpansionAliasArray['pushregistrationasaccount']);
        $blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
        if ($blnExpanded && null === $objToReturn->_objPushRegistrationAsAccountArray)
            $objToReturn->_objPushRegistrationAsAccountArray = array();
        if (!is_null($objDbRow->GetColumn($strAliasName))) {
            if ($blnExpanded) {
                $objToReturn->_objPushRegistrationAsAccountArray[] = PushRegistration::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pushregistrationasaccount__', $objExpansionNode, null, $strColumnAliasArray);
            } elseif (is_null($objToReturn->_objPushRegistrationAsAccount)) {
                $objToReturn->_objPushRegistrationAsAccount = PushRegistration::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pushregistrationasaccount__', $objExpansionNode, null, $strColumnAliasArray);
            }
        }

        // Check for StockPhotoRequestAsAccount Virtual Binding
        $strAlias = $strAliasPrefix . 'stockphotorequestasaccount__Id';
        $strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
        $objExpansionNode = (empty($objExpansionAliasArray['stockphotorequestasaccount']) ? null : $objExpansionAliasArray['stockphotorequestasaccount']);
        $blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
        if ($blnExpanded && null === $objToReturn->_objStockPhotoRequestAsAccountArray)
            $objToReturn->_objStockPhotoRequestAsAccountArray = array();
        if (!is_null($objDbRow->GetColumn($strAliasName))) {
            if ($blnExpanded) {
                $objToReturn->_objStockPhotoRequestAsAccountArray[] = StockPhotoRequest::InstantiateDbRow($objDbRow, $strAliasPrefix . 'stockphotorequestasaccount__', $objExpansionNode, null, $strColumnAliasArray);
            } elseif (is_null($objToReturn->_objStockPhotoRequestAsAccount)) {
                $objToReturn->_objStockPhotoRequestAsAccount = StockPhotoRequest::InstantiateDbRow($objDbRow, $strAliasPrefix . 'stockphotorequestasaccount__', $objExpansionNode, null, $strColumnAliasArray);
            }
        }

        return $objToReturn;
    }

    /**
     * Instantiate an array of Accounts from a Database Result
     * @param DatabaseResultBase $objDbResult
     * @param dxQueryBaseNode $objExpandAsArrayNode
     * @param string[] $strColumnAliasArray
     * @return Account[]
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
                $objItem = Account::InstantiateDbRow($objDbRow, null, $objExpandAsArrayNode, $objPrevItemArray, $strColumnAliasArray);
                if ($objItem) {
                    $objToReturn[] = $objItem;
                    $objPrevItemArray[$objItem->intId][] = $objItem;
                }
            }
        } else {
            while ($objDbRow = $objDbResult->GetNextRow())
                $objToReturn[] = Account::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
        }

        return $objToReturn;
    }


    /**
     * Instantiate a single Account object from a query cursor (e.g. a DB ResultSet).
     * Cursor is automatically moved to the "next row" of the result set.
     * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
     * @param dxDatabaseResultBase $objDbResult cursor resource
     * @return Account next row resulting from the query
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
        return Account::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
    }

    ///////////////////////////////////////////////////
    // INDEX-BASED LOAD METHODS (Single Load and Array)
    ///////////////////////////////////////////////////

    /**
     * Load a single Account object,
     * by Id Index(es)
     * @param integer $intId
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return Account
    */
    public static function LoadById($intId, $objOptionalClauses = null) {
        return Account::QuerySingle(
            dxQuery::AndCondition(
                dxQuery::Equal(dxQueryN::Account()->Id, $intId)
            ),
            $objOptionalClauses
        );
    }

    /**
     * Load a single Account object,
     * by Username Index(es)
     * @param string $strUsername
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return Account
    */
    public static function LoadByUsername($strUsername, $objOptionalClauses = null) {
        return Account::QuerySingle(
            dxQuery::AndCondition(
                dxQuery::Equal(dxQueryN::Account()->Username, $strUsername)
            ),
            $objOptionalClauses
        );
    }

    /**
     * Load an array of Account objects,
     * by UserRole Index(es)
     * @param integer $intUserRole
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return Account[]
    */
    public static function LoadArrayByUserRole($intUserRole, $objOptionalClauses = null) {
        // Call Account::QueryArray to perform the LoadArrayByUserRole query
        try {
            return Account::QueryArray(
                dxQuery::Equal(dxQueryN::Account()->UserRole, $intUserRole),
                $objOptionalClauses);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }
    }

    /**
     * Count Accounts
     * by UserRole Index(es)
     * @param integer $intUserRole
     * @return int
    */
    public static function CountByUserRole($intUserRole) {
        // Call Account::QueryCount to perform the CountByUserRole query
        return Account::QueryCount(
            dxQuery::Equal(dxQueryN::Account()->UserRole, $intUserRole)
        );
    }
    ////////////////////////////////////////////////////
    // INDEX-BASED LOAD METHODS (Array via Many to Many)
    ////////////////////////////////////////////////////


    //////////////////////////
    // SAVE, DELETE AND RELOAD
    //////////////////////////

    /**
    * Save this Account
    * @param bool $blnForceInsert
    * @param bool $blnForceUpdate
    * @return int
    */
    public function Save($blnForceInsert = false, $blnForceUpdate = false) {
        $ObjectAccessArray = ProjectAccessManager::getObjectAccess(ProjectFunctions::getCurrentAccountId(),"Account",$this->intId);
        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();
        $mixToReturn = null;
        if (!is_numeric($this->intObjectOwner)) {
            $this->intObjectOwner = ProjectFunctions::getCurrentAccountId();
        }
        $ExistingObj = Account::Load($this->intId);
        $newAuditLogEntry = new AuditLogEntry();
        $ChangedArray = array();
        $newAuditLogEntry->EntryTimeStamp = dxDateTime::Now();
        $newAuditLogEntry->ObjectId = $this->intId;
        $newAuditLogEntry->ObjectName = 'Account';
        $newAuditLogEntry->UserEmail = ProjectFunctions::getCurrentUserEmailForAudit();
        if (!$ExistingObj) {
            $newAuditLogEntry->ModificationType = 'Create';
            $ChangedArray = array_merge($ChangedArray,array("Id" => $this->intId));
            $ChangedArray = array_merge($ChangedArray,array("FullName" => $this->strFullName));
            $ChangedArray = array_merge($ChangedArray,array("FirstName" => $this->strFirstName));
            $ChangedArray = array_merge($ChangedArray,array("MiddleNames" => $this->strMiddleNames));
            $ChangedArray = array_merge($ChangedArray,array("LastName" => $this->strLastName));
            $ChangedArray = array_merge($ChangedArray,array("EmailAddress" => $this->strEmailAddress));
            $ChangedArray = array_merge($ChangedArray,array("Username" => $this->strUsername));
            $ChangedArray = array_merge($ChangedArray,array("Password" => $this->strPassword));
            $ChangedArray = array_merge($ChangedArray,array("MaidenName" => $this->strMaidenName));
            $ChangedArray = array_merge($ChangedArray,array("ProfilePicturePath" => $this->strProfilePicturePath));
            $ChangedArray = array_merge($ChangedArray,array("MainContactNumber" => $this->strMainContactNumber));
            $ChangedArray = array_merge($ChangedArray,array("Title" => $this->strTitle));
            $ChangedArray = array_merge($ChangedArray,array("DateOfBirth" => $this->dttDateOfBirth));
            $ChangedArray = array_merge($ChangedArray,array("PhysicalAddressLineOne" => $this->strPhysicalAddressLineOne));
            $ChangedArray = array_merge($ChangedArray,array("PhysicalAddressLineTwo" => $this->strPhysicalAddressLineTwo));
            $ChangedArray = array_merge($ChangedArray,array("PhysicalAddressPostalCode" => $this->strPhysicalAddressPostalCode));
            $ChangedArray = array_merge($ChangedArray,array("PhysicalAddressCountry" => $this->strPhysicalAddressCountry));
            $ChangedArray = array_merge($ChangedArray,array("PostalAddressLineOne" => $this->strPostalAddressLineOne));
            $ChangedArray = array_merge($ChangedArray,array("PostalAddressLineTwo" => $this->strPostalAddressLineTwo));
            $ChangedArray = array_merge($ChangedArray,array("PostalAddressPostalCode" => $this->strPostalAddressPostalCode));
            $ChangedArray = array_merge($ChangedArray,array("PostalAddressCountry" => $this->strPostalAddressCountry));
            $ChangedArray = array_merge($ChangedArray,array("IdentificationNumber" => $this->strIdentificationNumber));
            $ChangedArray = array_merge($ChangedArray,array("Nickname" => $this->strNickname));
            $ChangedArray = array_merge($ChangedArray,array("Status" => $this->strStatus));
            $ChangedArray = array_merge($ChangedArray,array("Gender" => $this->strGender));
            $ChangedArray = array_merge($ChangedArray,array("AccessBlocked" => $this->blnAccessBlocked));
            $ChangedArray = array_merge($ChangedArray,array("BlockedReason" => $this->strBlockedReason));
            $ChangedArray = array_merge($ChangedArray,array("LastUpdated" => $this->strLastUpdated));
            $ChangedArray = array_merge($ChangedArray,array("UserRole" => $this->intUserRole));
            $ChangedArray = array_merge($ChangedArray,array("SearchMetaInfo" => $this->strSearchMetaInfo));
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
            if (!is_null($ExistingObj->FullName)) {
                $ExistingValueStr = $ExistingObj->FullName;
            }
            if ($ExistingObj->FullName != $this->strFullName) {
                $ChangedArray = array_merge($ChangedArray,array("FullName" => array("Before" => $ExistingValueStr,"After" => $this->strFullName)));
                //$ChangedArray = array_merge($ChangedArray,array("FullName" => "From: ".$ExistingValueStr." to: ".$this->strFullName));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->FirstName)) {
                $ExistingValueStr = $ExistingObj->FirstName;
            }
            if ($ExistingObj->FirstName != $this->strFirstName) {
                $ChangedArray = array_merge($ChangedArray,array("FirstName" => array("Before" => $ExistingValueStr,"After" => $this->strFirstName)));
                //$ChangedArray = array_merge($ChangedArray,array("FirstName" => "From: ".$ExistingValueStr." to: ".$this->strFirstName));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->MiddleNames)) {
                $ExistingValueStr = $ExistingObj->MiddleNames;
            }
            if ($ExistingObj->MiddleNames != $this->strMiddleNames) {
                $ChangedArray = array_merge($ChangedArray,array("MiddleNames" => array("Before" => $ExistingValueStr,"After" => $this->strMiddleNames)));
                //$ChangedArray = array_merge($ChangedArray,array("MiddleNames" => "From: ".$ExistingValueStr." to: ".$this->strMiddleNames));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->LastName)) {
                $ExistingValueStr = $ExistingObj->LastName;
            }
            if ($ExistingObj->LastName != $this->strLastName) {
                $ChangedArray = array_merge($ChangedArray,array("LastName" => array("Before" => $ExistingValueStr,"After" => $this->strLastName)));
                //$ChangedArray = array_merge($ChangedArray,array("LastName" => "From: ".$ExistingValueStr." to: ".$this->strLastName));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->EmailAddress)) {
                $ExistingValueStr = $ExistingObj->EmailAddress;
            }
            if ($ExistingObj->EmailAddress != $this->strEmailAddress) {
                $ChangedArray = array_merge($ChangedArray,array("EmailAddress" => array("Before" => $ExistingValueStr,"After" => $this->strEmailAddress)));
                //$ChangedArray = array_merge($ChangedArray,array("EmailAddress" => "From: ".$ExistingValueStr." to: ".$this->strEmailAddress));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->Username)) {
                $ExistingValueStr = $ExistingObj->Username;
            }
            if ($ExistingObj->Username != $this->strUsername) {
                $ChangedArray = array_merge($ChangedArray,array("Username" => array("Before" => $ExistingValueStr,"After" => $this->strUsername)));
                //$ChangedArray = array_merge($ChangedArray,array("Username" => "From: ".$ExistingValueStr." to: ".$this->strUsername));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->Password)) {
                $ExistingValueStr = $ExistingObj->Password;
            }
            if ($ExistingObj->Password != $this->strPassword) {
                $ChangedArray = array_merge($ChangedArray,array("Password" => array("Before" => $ExistingValueStr,"After" => $this->strPassword)));
                //$ChangedArray = array_merge($ChangedArray,array("Password" => "From: ".$ExistingValueStr." to: ".$this->strPassword));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->MaidenName)) {
                $ExistingValueStr = $ExistingObj->MaidenName;
            }
            if ($ExistingObj->MaidenName != $this->strMaidenName) {
                $ChangedArray = array_merge($ChangedArray,array("MaidenName" => array("Before" => $ExistingValueStr,"After" => $this->strMaidenName)));
                //$ChangedArray = array_merge($ChangedArray,array("MaidenName" => "From: ".$ExistingValueStr." to: ".$this->strMaidenName));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->ProfilePicturePath)) {
                $ExistingValueStr = $ExistingObj->ProfilePicturePath;
            }
            if ($ExistingObj->ProfilePicturePath != $this->strProfilePicturePath) {
                $ChangedArray = array_merge($ChangedArray,array("ProfilePicturePath" => array("Before" => $ExistingValueStr,"After" => $this->strProfilePicturePath)));
                //$ChangedArray = array_merge($ChangedArray,array("ProfilePicturePath" => "From: ".$ExistingValueStr." to: ".$this->strProfilePicturePath));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->MainContactNumber)) {
                $ExistingValueStr = $ExistingObj->MainContactNumber;
            }
            if ($ExistingObj->MainContactNumber != $this->strMainContactNumber) {
                $ChangedArray = array_merge($ChangedArray,array("MainContactNumber" => array("Before" => $ExistingValueStr,"After" => $this->strMainContactNumber)));
                //$ChangedArray = array_merge($ChangedArray,array("MainContactNumber" => "From: ".$ExistingValueStr." to: ".$this->strMainContactNumber));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->Title)) {
                $ExistingValueStr = $ExistingObj->Title;
            }
            if ($ExistingObj->Title != $this->strTitle) {
                $ChangedArray = array_merge($ChangedArray,array("Title" => array("Before" => $ExistingValueStr,"After" => $this->strTitle)));
                //$ChangedArray = array_merge($ChangedArray,array("Title" => "From: ".$ExistingValueStr." to: ".$this->strTitle));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->DateOfBirth)) {
                $ExistingValueStr = $ExistingObj->DateOfBirth;
            }
            if ($ExistingObj->DateOfBirth != $this->dttDateOfBirth) {
                $ChangedArray = array_merge($ChangedArray,array("DateOfBirth" => array("Before" => $ExistingValueStr,"After" => $this->dttDateOfBirth)));
                //$ChangedArray = array_merge($ChangedArray,array("DateOfBirth" => "From: ".$ExistingValueStr." to: ".$this->dttDateOfBirth));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->PhysicalAddressLineOne)) {
                $ExistingValueStr = $ExistingObj->PhysicalAddressLineOne;
            }
            if ($ExistingObj->PhysicalAddressLineOne != $this->strPhysicalAddressLineOne) {
                $ChangedArray = array_merge($ChangedArray,array("PhysicalAddressLineOne" => array("Before" => $ExistingValueStr,"After" => $this->strPhysicalAddressLineOne)));
                //$ChangedArray = array_merge($ChangedArray,array("PhysicalAddressLineOne" => "From: ".$ExistingValueStr." to: ".$this->strPhysicalAddressLineOne));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->PhysicalAddressLineTwo)) {
                $ExistingValueStr = $ExistingObj->PhysicalAddressLineTwo;
            }
            if ($ExistingObj->PhysicalAddressLineTwo != $this->strPhysicalAddressLineTwo) {
                $ChangedArray = array_merge($ChangedArray,array("PhysicalAddressLineTwo" => array("Before" => $ExistingValueStr,"After" => $this->strPhysicalAddressLineTwo)));
                //$ChangedArray = array_merge($ChangedArray,array("PhysicalAddressLineTwo" => "From: ".$ExistingValueStr." to: ".$this->strPhysicalAddressLineTwo));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->PhysicalAddressPostalCode)) {
                $ExistingValueStr = $ExistingObj->PhysicalAddressPostalCode;
            }
            if ($ExistingObj->PhysicalAddressPostalCode != $this->strPhysicalAddressPostalCode) {
                $ChangedArray = array_merge($ChangedArray,array("PhysicalAddressPostalCode" => array("Before" => $ExistingValueStr,"After" => $this->strPhysicalAddressPostalCode)));
                //$ChangedArray = array_merge($ChangedArray,array("PhysicalAddressPostalCode" => "From: ".$ExistingValueStr." to: ".$this->strPhysicalAddressPostalCode));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->PhysicalAddressCountry)) {
                $ExistingValueStr = $ExistingObj->PhysicalAddressCountry;
            }
            if ($ExistingObj->PhysicalAddressCountry != $this->strPhysicalAddressCountry) {
                $ChangedArray = array_merge($ChangedArray,array("PhysicalAddressCountry" => array("Before" => $ExistingValueStr,"After" => $this->strPhysicalAddressCountry)));
                //$ChangedArray = array_merge($ChangedArray,array("PhysicalAddressCountry" => "From: ".$ExistingValueStr." to: ".$this->strPhysicalAddressCountry));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->PostalAddressLineOne)) {
                $ExistingValueStr = $ExistingObj->PostalAddressLineOne;
            }
            if ($ExistingObj->PostalAddressLineOne != $this->strPostalAddressLineOne) {
                $ChangedArray = array_merge($ChangedArray,array("PostalAddressLineOne" => array("Before" => $ExistingValueStr,"After" => $this->strPostalAddressLineOne)));
                //$ChangedArray = array_merge($ChangedArray,array("PostalAddressLineOne" => "From: ".$ExistingValueStr." to: ".$this->strPostalAddressLineOne));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->PostalAddressLineTwo)) {
                $ExistingValueStr = $ExistingObj->PostalAddressLineTwo;
            }
            if ($ExistingObj->PostalAddressLineTwo != $this->strPostalAddressLineTwo) {
                $ChangedArray = array_merge($ChangedArray,array("PostalAddressLineTwo" => array("Before" => $ExistingValueStr,"After" => $this->strPostalAddressLineTwo)));
                //$ChangedArray = array_merge($ChangedArray,array("PostalAddressLineTwo" => "From: ".$ExistingValueStr." to: ".$this->strPostalAddressLineTwo));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->PostalAddressPostalCode)) {
                $ExistingValueStr = $ExistingObj->PostalAddressPostalCode;
            }
            if ($ExistingObj->PostalAddressPostalCode != $this->strPostalAddressPostalCode) {
                $ChangedArray = array_merge($ChangedArray,array("PostalAddressPostalCode" => array("Before" => $ExistingValueStr,"After" => $this->strPostalAddressPostalCode)));
                //$ChangedArray = array_merge($ChangedArray,array("PostalAddressPostalCode" => "From: ".$ExistingValueStr." to: ".$this->strPostalAddressPostalCode));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->PostalAddressCountry)) {
                $ExistingValueStr = $ExistingObj->PostalAddressCountry;
            }
            if ($ExistingObj->PostalAddressCountry != $this->strPostalAddressCountry) {
                $ChangedArray = array_merge($ChangedArray,array("PostalAddressCountry" => array("Before" => $ExistingValueStr,"After" => $this->strPostalAddressCountry)));
                //$ChangedArray = array_merge($ChangedArray,array("PostalAddressCountry" => "From: ".$ExistingValueStr." to: ".$this->strPostalAddressCountry));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->IdentificationNumber)) {
                $ExistingValueStr = $ExistingObj->IdentificationNumber;
            }
            if ($ExistingObj->IdentificationNumber != $this->strIdentificationNumber) {
                $ChangedArray = array_merge($ChangedArray,array("IdentificationNumber" => array("Before" => $ExistingValueStr,"After" => $this->strIdentificationNumber)));
                //$ChangedArray = array_merge($ChangedArray,array("IdentificationNumber" => "From: ".$ExistingValueStr." to: ".$this->strIdentificationNumber));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->Nickname)) {
                $ExistingValueStr = $ExistingObj->Nickname;
            }
            if ($ExistingObj->Nickname != $this->strNickname) {
                $ChangedArray = array_merge($ChangedArray,array("Nickname" => array("Before" => $ExistingValueStr,"After" => $this->strNickname)));
                //$ChangedArray = array_merge($ChangedArray,array("Nickname" => "From: ".$ExistingValueStr." to: ".$this->strNickname));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->Status)) {
                $ExistingValueStr = $ExistingObj->Status;
            }
            if ($ExistingObj->Status != $this->strStatus) {
                $ChangedArray = array_merge($ChangedArray,array("Status" => array("Before" => $ExistingValueStr,"After" => $this->strStatus)));
                //$ChangedArray = array_merge($ChangedArray,array("Status" => "From: ".$ExistingValueStr." to: ".$this->strStatus));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->Gender)) {
                $ExistingValueStr = $ExistingObj->Gender;
            }
            if ($ExistingObj->Gender != $this->strGender) {
                $ChangedArray = array_merge($ChangedArray,array("Gender" => array("Before" => $ExistingValueStr,"After" => $this->strGender)));
                //$ChangedArray = array_merge($ChangedArray,array("Gender" => "From: ".$ExistingValueStr." to: ".$this->strGender));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->AccessBlocked)) {
                $ExistingValueStr = $ExistingObj->AccessBlocked;
            }
            if ($ExistingObj->AccessBlocked != $this->blnAccessBlocked) {
                $ChangedArray = array_merge($ChangedArray,array("AccessBlocked" => array("Before" => $ExistingValueStr,"After" => $this->blnAccessBlocked)));
                //$ChangedArray = array_merge($ChangedArray,array("AccessBlocked" => "From: ".$ExistingValueStr." to: ".$this->blnAccessBlocked));
            }
            $ExistingValueStr = "NULL";
            if (!is_null($ExistingObj->BlockedReason)) {
                $ExistingValueStr = $ExistingObj->BlockedReason;
            }
            if ($ExistingObj->BlockedReason != $this->strBlockedReason) {
                $ChangedArray = array_merge($ChangedArray,array("BlockedReason" => array("Before" => $ExistingValueStr,"After" => $this->strBlockedReason)));
                //$ChangedArray = array_merge($ChangedArray,array("BlockedReason" => "From: ".$ExistingValueStr." to: ".$this->strBlockedReason));
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
            if (!is_null($ExistingObj->UserRole)) {
                $ExistingValueStr = $ExistingObj->UserRole;
            }
            if ($ExistingObj->UserRole != $this->intUserRole) {
                $ChangedArray = array_merge($ChangedArray,array("UserRole" => array("Before" => $ExistingValueStr,"After" => $this->intUserRole)));
                //$ChangedArray = array_merge($ChangedArray,array("UserRole" => "From: ".$ExistingValueStr." to: ".$this->intUserRole));
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
                    throw new Exception("User is not allowed to perform operation ".AccessOperation::CREATE_STR." on entity of type 'Account'. Allowed access is ".json_encode($ObjectAccessArray));
                }
                // Perform an INSERT query
                $objDatabase->NonQuery('
                INSERT INTO `Account` (
							`FullName`,
							`FirstName`,
							`MiddleNames`,
							`LastName`,
							`EmailAddress`,
							`Username`,
							`Password`,
							`MaidenName`,
							`ProfilePicturePath`,
							`MainContactNumber`,
							`Title`,
							`DateOfBirth`,
							`PhysicalAddressLineOne`,
							`PhysicalAddressLineTwo`,
							`PhysicalAddressPostalCode`,
							`PhysicalAddressCountry`,
							`PostalAddressLineOne`,
							`PostalAddressLineTwo`,
							`PostalAddressPostalCode`,
							`PostalAddressCountry`,
							`IdentificationNumber`,
							`Nickname`,
							`Status`,
							`Gender`,
							`AccessBlocked`,
							`BlockedReason`,
							`UserRole`,
							`SearchMetaInfo`,
							`ObjectOwner`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strFullName) . ',
							' . $objDatabase->SqlVariable($this->strFirstName) . ',
							' . $objDatabase->SqlVariable($this->strMiddleNames) . ',
							' . $objDatabase->SqlVariable($this->strLastName) . ',
							' . $objDatabase->SqlVariable($this->strEmailAddress) . ',
							' . $objDatabase->SqlVariable($this->strUsername) . ',
							' . $objDatabase->SqlVariable($this->strPassword) . ',
							' . $objDatabase->SqlVariable($this->strMaidenName) . ',
							' . $objDatabase->SqlVariable($this->strProfilePicturePath) . ',
							' . $objDatabase->SqlVariable($this->strMainContactNumber) . ',
							' . $objDatabase->SqlVariable($this->strTitle) . ',
							' . $objDatabase->SqlVariable($this->dttDateOfBirth) . ',
							' . $objDatabase->SqlVariable($this->strPhysicalAddressLineOne) . ',
							' . $objDatabase->SqlVariable($this->strPhysicalAddressLineTwo) . ',
							' . $objDatabase->SqlVariable($this->strPhysicalAddressPostalCode) . ',
							' . $objDatabase->SqlVariable($this->strPhysicalAddressCountry) . ',
							' . $objDatabase->SqlVariable($this->strPostalAddressLineOne) . ',
							' . $objDatabase->SqlVariable($this->strPostalAddressLineTwo) . ',
							' . $objDatabase->SqlVariable($this->strPostalAddressPostalCode) . ',
							' . $objDatabase->SqlVariable($this->strPostalAddressCountry) . ',
							' . $objDatabase->SqlVariable($this->strIdentificationNumber) . ',
							' . $objDatabase->SqlVariable($this->strNickname) . ',
							' . $objDatabase->SqlVariable($this->strStatus) . ',
							' . $objDatabase->SqlVariable($this->strGender) . ',
							' . $objDatabase->SqlVariable($this->blnAccessBlocked) . ',
							' . $objDatabase->SqlVariable($this->strBlockedReason) . ',
							' . $objDatabase->SqlVariable($this->intUserRole) . ',
							' . $objDatabase->SqlVariable($this->strSearchMetaInfo) . ',
							' . $objDatabase->SqlVariable($this->intObjectOwner) . '
						)
                ');
					// Update Identity column and return its value
                $mixToReturn = $this->intId = $objDatabase->InsertId('Account', 'Id');
            } else {
                // Perform an UPDATE query
                // First checking for Optimistic Locking constraints (if applicable)
                if (!in_array(AccessOperation::UPDATE_STR,$ObjectAccessArray)) {
                    // This user is not allowed to create an object of this type
                    throw new Exception("User is not allowed to perform operation ".AccessOperation::UPDATE_STR." on entity of type 'Account'. Allowed access is ".json_encode($ObjectAccessArray));
                }
                if (!$blnForceUpdate) {
                    // Perform the Optimistic Locking check
                    $objResult = $objDatabase->Query('
                    SELECT `LastUpdated` FROM `Account` WHERE
							`Id` = ' . $objDatabase->SqlVariable($this->intId) . '');

                $objRow = $objResult->FetchArray();
                if ($objRow[0] != $this->strLastUpdated)
                    throw new dxOptimisticLockingException('Account');
            }

            // Perform the UPDATE query
            $objDatabase->NonQuery('
            UPDATE `Account` SET
							`FullName` = ' . $objDatabase->SqlVariable($this->strFullName) . ',
							`FirstName` = ' . $objDatabase->SqlVariable($this->strFirstName) . ',
							`MiddleNames` = ' . $objDatabase->SqlVariable($this->strMiddleNames) . ',
							`LastName` = ' . $objDatabase->SqlVariable($this->strLastName) . ',
							`EmailAddress` = ' . $objDatabase->SqlVariable($this->strEmailAddress) . ',
							`Username` = ' . $objDatabase->SqlVariable($this->strUsername) . ',
							`Password` = ' . $objDatabase->SqlVariable($this->strPassword) . ',
							`MaidenName` = ' . $objDatabase->SqlVariable($this->strMaidenName) . ',
							`ProfilePicturePath` = ' . $objDatabase->SqlVariable($this->strProfilePicturePath) . ',
							`MainContactNumber` = ' . $objDatabase->SqlVariable($this->strMainContactNumber) . ',
							`Title` = ' . $objDatabase->SqlVariable($this->strTitle) . ',
							`DateOfBirth` = ' . $objDatabase->SqlVariable($this->dttDateOfBirth) . ',
							`PhysicalAddressLineOne` = ' . $objDatabase->SqlVariable($this->strPhysicalAddressLineOne) . ',
							`PhysicalAddressLineTwo` = ' . $objDatabase->SqlVariable($this->strPhysicalAddressLineTwo) . ',
							`PhysicalAddressPostalCode` = ' . $objDatabase->SqlVariable($this->strPhysicalAddressPostalCode) . ',
							`PhysicalAddressCountry` = ' . $objDatabase->SqlVariable($this->strPhysicalAddressCountry) . ',
							`PostalAddressLineOne` = ' . $objDatabase->SqlVariable($this->strPostalAddressLineOne) . ',
							`PostalAddressLineTwo` = ' . $objDatabase->SqlVariable($this->strPostalAddressLineTwo) . ',
							`PostalAddressPostalCode` = ' . $objDatabase->SqlVariable($this->strPostalAddressPostalCode) . ',
							`PostalAddressCountry` = ' . $objDatabase->SqlVariable($this->strPostalAddressCountry) . ',
							`IdentificationNumber` = ' . $objDatabase->SqlVariable($this->strIdentificationNumber) . ',
							`Nickname` = ' . $objDatabase->SqlVariable($this->strNickname) . ',
							`Status` = ' . $objDatabase->SqlVariable($this->strStatus) . ',
							`Gender` = ' . $objDatabase->SqlVariable($this->strGender) . ',
							`AccessBlocked` = ' . $objDatabase->SqlVariable($this->blnAccessBlocked) . ',
							`BlockedReason` = ' . $objDatabase->SqlVariable($this->strBlockedReason) . ',
							`UserRole` = ' . $objDatabase->SqlVariable($this->intUserRole) . ',
							`SearchMetaInfo` = ' . $objDatabase->SqlVariable($this->strSearchMetaInfo) . ',
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
            error_log('Could not save audit log while saving Account. Details: '.$newAuditLogEntry->getJson().'<br>Error details: '.$e->getMessage());
        }
        // Update __blnRestored and any Non-Identity PK Columns (if applicable)
        $this->__blnRestored = true;

        // Update Local Timestamp
        $objResult = $objDatabase->Query('SELECT `LastUpdated` FROM
                                            `Account` WHERE
                							`Id` = ' . $objDatabase->SqlVariable($this->intId) . '');

        $objRow = $objResult->FetchArray();
        $this->strLastUpdated = $objRow[0];

        $this->DeleteCache();

        // Return
        return $mixToReturn;
    }
    /**
     * Delete this Account
     * @return void
     */
    public function Delete() {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Cannot delete this Account with an unset primary key.');

        $ObjectAccessArray = ProjectAccessManager::getObjectAccess(ProjectFunctions::getCurrentAccountId(),"Account",$this->intId);
        if (!in_array(AccessOperation::DELETE_STR,$ObjectAccessArray)) {
            // This user is not allowed to delete an object of this type
            throw new Exception("User is not allowed to perform operation ".AccessOperation::DELETE_STR." on entity of type 'Account'. Allowed access is ".json_encode($ObjectAccessArray));
        }

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();
        $newAuditLogEntry = new AuditLogEntry();
        $ChangedArray = array();
        $newAuditLogEntry->EntryTimeStamp = dxDateTime::Now();
        $newAuditLogEntry->ObjectId = $this->intId;
        $newAuditLogEntry->ObjectName = 'Account';
        $newAuditLogEntry->UserEmail = ProjectFunctions::getCurrentUserEmailForAudit();
        $newAuditLogEntry->ModificationType = 'Delete';
        $ChangedArray = array_merge($ChangedArray,array("Id" => $this->intId));
        $ChangedArray = array_merge($ChangedArray,array("FullName" => $this->strFullName));
        $ChangedArray = array_merge($ChangedArray,array("FirstName" => $this->strFirstName));
        $ChangedArray = array_merge($ChangedArray,array("MiddleNames" => $this->strMiddleNames));
        $ChangedArray = array_merge($ChangedArray,array("LastName" => $this->strLastName));
        $ChangedArray = array_merge($ChangedArray,array("EmailAddress" => $this->strEmailAddress));
        $ChangedArray = array_merge($ChangedArray,array("Username" => $this->strUsername));
        $ChangedArray = array_merge($ChangedArray,array("Password" => $this->strPassword));
        $ChangedArray = array_merge($ChangedArray,array("MaidenName" => $this->strMaidenName));
        $ChangedArray = array_merge($ChangedArray,array("ProfilePicturePath" => $this->strProfilePicturePath));
        $ChangedArray = array_merge($ChangedArray,array("MainContactNumber" => $this->strMainContactNumber));
        $ChangedArray = array_merge($ChangedArray,array("Title" => $this->strTitle));
        $ChangedArray = array_merge($ChangedArray,array("DateOfBirth" => $this->dttDateOfBirth));
        $ChangedArray = array_merge($ChangedArray,array("PhysicalAddressLineOne" => $this->strPhysicalAddressLineOne));
        $ChangedArray = array_merge($ChangedArray,array("PhysicalAddressLineTwo" => $this->strPhysicalAddressLineTwo));
        $ChangedArray = array_merge($ChangedArray,array("PhysicalAddressPostalCode" => $this->strPhysicalAddressPostalCode));
        $ChangedArray = array_merge($ChangedArray,array("PhysicalAddressCountry" => $this->strPhysicalAddressCountry));
        $ChangedArray = array_merge($ChangedArray,array("PostalAddressLineOne" => $this->strPostalAddressLineOne));
        $ChangedArray = array_merge($ChangedArray,array("PostalAddressLineTwo" => $this->strPostalAddressLineTwo));
        $ChangedArray = array_merge($ChangedArray,array("PostalAddressPostalCode" => $this->strPostalAddressPostalCode));
        $ChangedArray = array_merge($ChangedArray,array("PostalAddressCountry" => $this->strPostalAddressCountry));
        $ChangedArray = array_merge($ChangedArray,array("IdentificationNumber" => $this->strIdentificationNumber));
        $ChangedArray = array_merge($ChangedArray,array("Nickname" => $this->strNickname));
        $ChangedArray = array_merge($ChangedArray,array("Status" => $this->strStatus));
        $ChangedArray = array_merge($ChangedArray,array("Gender" => $this->strGender));
        $ChangedArray = array_merge($ChangedArray,array("AccessBlocked" => $this->blnAccessBlocked));
        $ChangedArray = array_merge($ChangedArray,array("BlockedReason" => $this->strBlockedReason));
        $ChangedArray = array_merge($ChangedArray,array("LastUpdated" => $this->strLastUpdated));
        $ChangedArray = array_merge($ChangedArray,array("UserRole" => $this->intUserRole));
        $ChangedArray = array_merge($ChangedArray,array("SearchMetaInfo" => $this->strSearchMetaInfo));
        $ChangedArray = array_merge($ChangedArray,array("ObjectOwner" => $this->intObjectOwner));
        $newAuditLogEntry->AuditLogEntryDetail = json_encode($ChangedArray);
        try {
            $newAuditLogEntry->Save();
        } catch(dxCallerException $e) {
            error_log('Could not save audit log while deleting Account. Details: '.$newAuditLogEntry->getJson().'<br>Error details: '.$e->getMessage());
        }

        // Perform the SQL Query
        $objDatabase->NonQuery('
            DELETE FROM
                `Account`
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($this->intId) . '');

        $this->DeleteCache();
    }

    /**
     * Delete this Account ONLY from the cache
     * @return void
     */
    public function DeleteCache() {
        if (ProjectFunctions::$objCacheProvider && ProjectFunctions::$Database[1]->Caching) {
            $strCacheKey = ProjectFunctions::$objCacheProvider->CreateKey(ProjectFunctions::$Database[1]->Database, 'Account', $this->intId);
            ProjectFunctions::$objCacheProvider->Delete($strCacheKey);
        }
    }

    /**
     * Delete all Accounts
     * @return void
     */
    public static function DeleteAll() {
        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the Query
        $objDatabase->NonQuery('
            DELETE FROM
                `Account`');

        if (ProjectFunctions::$objCacheProvider && ProjectFunctions::$Database[1]->Caching) {
            ProjectFunctions::$objCacheProvider->DeleteAll();
        }
    }

    /**
     * Truncate Account table
     * @return void
     */
    public static function Truncate() {
        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the Query
        $objDatabase->NonQuery('
            TRUNCATE `Account`');

        if (ProjectFunctions::$objCacheProvider && ProjectFunctions::$Database[1]->Caching) {
            ProjectFunctions::$objCacheProvider->DeleteAll();
        }
    }
    /**
     * Reload this Account from the database.
     * @return void
     */
    public function Reload() {
        // Make sure we are actually Restored from the database
        if (!$this->__blnRestored)
            throw new dxCallerException('Cannot call Reload() on a new, unsaved Account object.');

        $this->DeleteCache();

        // Reload the Object
        $objReloaded = Account::Load($this->intId);

        // Update $this's local variables to match
        $this->strFullName = $objReloaded->strFullName;
        $this->strFirstName = $objReloaded->strFirstName;
        $this->strMiddleNames = $objReloaded->strMiddleNames;
        $this->strLastName = $objReloaded->strLastName;
        $this->strEmailAddress = $objReloaded->strEmailAddress;
        $this->strUsername = $objReloaded->strUsername;
        $this->strPassword = $objReloaded->strPassword;
        $this->strMaidenName = $objReloaded->strMaidenName;
        $this->strProfilePicturePath = $objReloaded->strProfilePicturePath;
        $this->strMainContactNumber = $objReloaded->strMainContactNumber;
        $this->strTitle = $objReloaded->strTitle;
        $this->dttDateOfBirth = $objReloaded->dttDateOfBirth;
        $this->strPhysicalAddressLineOne = $objReloaded->strPhysicalAddressLineOne;
        $this->strPhysicalAddressLineTwo = $objReloaded->strPhysicalAddressLineTwo;
        $this->strPhysicalAddressPostalCode = $objReloaded->strPhysicalAddressPostalCode;
        $this->strPhysicalAddressCountry = $objReloaded->strPhysicalAddressCountry;
        $this->strPostalAddressLineOne = $objReloaded->strPostalAddressLineOne;
        $this->strPostalAddressLineTwo = $objReloaded->strPostalAddressLineTwo;
        $this->strPostalAddressPostalCode = $objReloaded->strPostalAddressPostalCode;
        $this->strPostalAddressCountry = $objReloaded->strPostalAddressCountry;
        $this->strIdentificationNumber = $objReloaded->strIdentificationNumber;
        $this->strNickname = $objReloaded->strNickname;
        $this->strStatus = $objReloaded->strStatus;
        $this->strGender = $objReloaded->strGender;
        $this->blnAccessBlocked = $objReloaded->blnAccessBlocked;
        $this->strBlockedReason = $objReloaded->strBlockedReason;
        $this->strLastUpdated = $objReloaded->strLastUpdated;
        $this->UserRole = $objReloaded->UserRole;
        $this->strSearchMetaInfo = $objReloaded->strSearchMetaInfo;
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

            case 'FullName':
                /**
                 * Gets the value for strFullName 
                 * @return string
                 */
                return $this->strFullName;

            case 'FirstName':
                /**
                 * Gets the value for strFirstName 
                 * @return string
                 */
                return $this->strFirstName;

            case 'MiddleNames':
                /**
                 * Gets the value for strMiddleNames 
                 * @return string
                 */
                return $this->strMiddleNames;

            case 'LastName':
                /**
                 * Gets the value for strLastName 
                 * @return string
                 */
                return $this->strLastName;

            case 'EmailAddress':
                /**
                 * Gets the value for strEmailAddress 
                 * @return string
                 */
                return $this->strEmailAddress;

            case 'Username':
                /**
                 * Gets the value for strUsername (Unique)
                 * @return string
                 */
                return $this->strUsername;

            case 'Password':
                /**
                 * Gets the value for strPassword 
                 * @return string
                 */
                return $this->strPassword;

            case 'MaidenName':
                /**
                 * Gets the value for strMaidenName 
                 * @return string
                 */
                return $this->strMaidenName;

            case 'ProfilePicturePath':
                /**
                 * Gets the value for strProfilePicturePath 
                 * @return string
                 */
                return $this->strProfilePicturePath;

            case 'MainContactNumber':
                /**
                 * Gets the value for strMainContactNumber 
                 * @return string
                 */
                return $this->strMainContactNumber;

            case 'Title':
                /**
                 * Gets the value for strTitle 
                 * @return string
                 */
                return $this->strTitle;

            case 'DateOfBirth':
                /**
                 * Gets the value for dttDateOfBirth 
                 * @return dxDateTime
                 */
                return $this->dttDateOfBirth;

            case 'PhysicalAddressLineOne':
                /**
                 * Gets the value for strPhysicalAddressLineOne 
                 * @return string
                 */
                return $this->strPhysicalAddressLineOne;

            case 'PhysicalAddressLineTwo':
                /**
                 * Gets the value for strPhysicalAddressLineTwo 
                 * @return string
                 */
                return $this->strPhysicalAddressLineTwo;

            case 'PhysicalAddressPostalCode':
                /**
                 * Gets the value for strPhysicalAddressPostalCode 
                 * @return string
                 */
                return $this->strPhysicalAddressPostalCode;

            case 'PhysicalAddressCountry':
                /**
                 * Gets the value for strPhysicalAddressCountry 
                 * @return string
                 */
                return $this->strPhysicalAddressCountry;

            case 'PostalAddressLineOne':
                /**
                 * Gets the value for strPostalAddressLineOne 
                 * @return string
                 */
                return $this->strPostalAddressLineOne;

            case 'PostalAddressLineTwo':
                /**
                 * Gets the value for strPostalAddressLineTwo 
                 * @return string
                 */
                return $this->strPostalAddressLineTwo;

            case 'PostalAddressPostalCode':
                /**
                 * Gets the value for strPostalAddressPostalCode 
                 * @return string
                 */
                return $this->strPostalAddressPostalCode;

            case 'PostalAddressCountry':
                /**
                 * Gets the value for strPostalAddressCountry 
                 * @return string
                 */
                return $this->strPostalAddressCountry;

            case 'IdentificationNumber':
                /**
                 * Gets the value for strIdentificationNumber 
                 * @return string
                 */
                return $this->strIdentificationNumber;

            case 'Nickname':
                /**
                 * Gets the value for strNickname 
                 * @return string
                 */
                return $this->strNickname;

            case 'Status':
                /**
                 * Gets the value for strStatus 
                 * @return string
                 */
                return $this->strStatus;

            case 'Gender':
                /**
                 * Gets the value for strGender 
                 * @return string
                 */
                return $this->strGender;

            case 'AccessBlocked':
                /**
                 * Gets the value for blnAccessBlocked 
                 * @return boolean
                 */
                return $this->blnAccessBlocked;

            case 'BlockedReason':
                /**
                 * Gets the value for strBlockedReason 
                 * @return string
                 */
                return $this->strBlockedReason;

            case 'LastUpdated':
                /**
                 * Gets the value for strLastUpdated (Read-Only Timestamp)
                 * @return string
                 */
                return $this->strLastUpdated;

            case 'UserRole':
                /**
                 * Gets the value for intUserRole 
                 * @return integer
                 */
                return $this->intUserRole;

            case 'SearchMetaInfo':
                /**
                 * Gets the value for strSearchMetaInfo 
                 * @return string
                 */
                return $this->strSearchMetaInfo;

            case 'ObjectOwner':
                /**
                 * Gets the value for intObjectOwner 
                 * @return integer
                 */
                return $this->intObjectOwner;


            ///////////////////
            // Member Objects
            ///////////////////
            case 'UserRoleObject':
                /**
                 * Gets the value for the Userrole object referenced by intUserRole 
                 * @return Userrole
                 */
                try {
                    if ((!$this->objUserRoleObject) && (!is_null($this->intUserRole)))
                        $this->objUserRoleObject = Userrole::Load($this->intUserRole);
                    return $this->objUserRoleObject;
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }


            ////////////////////////////
            // Virtual Object References (Many to Many and Reverse References)
            // (If restored via a "Many-to" expansion)
            ////////////////////////////

            case '_AdditionalAccountInformationAsAccount':
                /**
                 * Gets the value for the private _objAdditionalAccountInformationAsAccount (Read-Only)
                 * if set due to an expansion on the AdditionalAccountInformation.Account reverse relationship
                 * @return AdditionalAccountInformation
                 */
                return $this->_objAdditionalAccountInformationAsAccount;

            case '_AdditionalAccountInformationAsAccountArray':
                /**
                 * Gets the value for the private _objAdditionalAccountInformationAsAccountArray (Read-Only)
                 * if set due to an ExpandAsArray on the AdditionalAccountInformation.Account reverse relationship
                 * @return AdditionalAccountInformation[]
                 */
                return $this->_objAdditionalAccountInformationAsAccountArray;

            case '_ClientConnectionAsAccount':
                /**
                 * Gets the value for the private _objClientConnectionAsAccount (Read-Only)
                 * if set due to an expansion on the ClientConnection.Account reverse relationship
                 * @return ClientConnection
                 */
                return $this->_objClientConnectionAsAccount;

            case '_ClientConnectionAsAccountArray':
                /**
                 * Gets the value for the private _objClientConnectionAsAccountArray (Read-Only)
                 * if set due to an ExpandAsArray on the ClientConnection.Account reverse relationship
                 * @return ClientConnection[]
                 */
                return $this->_objClientConnectionAsAccountArray;

            case '_PasswordResetAsAccount':
                /**
                 * Gets the value for the private _objPasswordResetAsAccount (Read-Only)
                 * if set due to an expansion on the PasswordReset.Account reverse relationship
                 * @return PasswordReset
                 */
                return $this->_objPasswordResetAsAccount;

            case '_PasswordResetAsAccountArray':
                /**
                 * Gets the value for the private _objPasswordResetAsAccountArray (Read-Only)
                 * if set due to an ExpandAsArray on the PasswordReset.Account reverse relationship
                 * @return PasswordReset[]
                 */
                return $this->_objPasswordResetAsAccountArray;

            case '_PhotoSubmissionAsAccount':
                /**
                 * Gets the value for the private _objPhotoSubmissionAsAccount (Read-Only)
                 * if set due to an expansion on the PhotoSubmission.Account reverse relationship
                 * @return PhotoSubmission
                 */
                return $this->_objPhotoSubmissionAsAccount;

            case '_PhotoSubmissionAsAccountArray':
                /**
                 * Gets the value for the private _objPhotoSubmissionAsAccountArray (Read-Only)
                 * if set due to an ExpandAsArray on the PhotoSubmission.Account reverse relationship
                 * @return PhotoSubmission[]
                 */
                return $this->_objPhotoSubmissionAsAccountArray;

            case '_PushRegistrationAsAccount':
                /**
                 * Gets the value for the private _objPushRegistrationAsAccount (Read-Only)
                 * if set due to an expansion on the PushRegistration.Account reverse relationship
                 * @return PushRegistration
                 */
                return $this->_objPushRegistrationAsAccount;

            case '_PushRegistrationAsAccountArray':
                /**
                 * Gets the value for the private _objPushRegistrationAsAccountArray (Read-Only)
                 * if set due to an ExpandAsArray on the PushRegistration.Account reverse relationship
                 * @return PushRegistration[]
                 */
                return $this->_objPushRegistrationAsAccountArray;

            case '_StockPhotoRequestAsAccount':
                /**
                 * Gets the value for the private _objStockPhotoRequestAsAccount (Read-Only)
                 * if set due to an expansion on the StockPhotoRequest.Account reverse relationship
                 * @return StockPhotoRequest
                 */
                return $this->_objStockPhotoRequestAsAccount;

            case '_StockPhotoRequestAsAccountArray':
                /**
                 * Gets the value for the private _objStockPhotoRequestAsAccountArray (Read-Only)
                 * if set due to an ExpandAsArray on the StockPhotoRequest.Account reverse relationship
                 * @return StockPhotoRequest[]
                 */
                return $this->_objStockPhotoRequestAsAccountArray;


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
            case 'FullName':
                /**
                 * Sets the value for strFullName 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strFullName = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'FirstName':
                /**
                 * Sets the value for strFirstName 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strFirstName = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'MiddleNames':
                /**
                 * Sets the value for strMiddleNames 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strMiddleNames = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'LastName':
                /**
                 * Sets the value for strLastName 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strLastName = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'EmailAddress':
                /**
                 * Sets the value for strEmailAddress 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strEmailAddress = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'Username':
                /**
                 * Sets the value for strUsername (Unique)
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strUsername = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'Password':
                /**
                 * Sets the value for strPassword 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strPassword = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'MaidenName':
                /**
                 * Sets the value for strMaidenName 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strMaidenName = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'ProfilePicturePath':
                /**
                 * Sets the value for strProfilePicturePath 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strProfilePicturePath = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'MainContactNumber':
                /**
                 * Sets the value for strMainContactNumber 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strMainContactNumber = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'Title':
                /**
                 * Sets the value for strTitle 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strTitle = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'DateOfBirth':
                /**
                 * Sets the value for dttDateOfBirth 
                 * @param dxDateTime $mixValue
                 * @return dxDateTime
                 */
                try {
                    return ($this->dttDateOfBirth = dxType::Cast($mixValue, dxType::DateTime));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'PhysicalAddressLineOne':
                /**
                 * Sets the value for strPhysicalAddressLineOne 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strPhysicalAddressLineOne = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'PhysicalAddressLineTwo':
                /**
                 * Sets the value for strPhysicalAddressLineTwo 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strPhysicalAddressLineTwo = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'PhysicalAddressPostalCode':
                /**
                 * Sets the value for strPhysicalAddressPostalCode 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strPhysicalAddressPostalCode = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'PhysicalAddressCountry':
                /**
                 * Sets the value for strPhysicalAddressCountry 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strPhysicalAddressCountry = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'PostalAddressLineOne':
                /**
                 * Sets the value for strPostalAddressLineOne 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strPostalAddressLineOne = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'PostalAddressLineTwo':
                /**
                 * Sets the value for strPostalAddressLineTwo 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strPostalAddressLineTwo = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'PostalAddressPostalCode':
                /**
                 * Sets the value for strPostalAddressPostalCode 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strPostalAddressPostalCode = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'PostalAddressCountry':
                /**
                 * Sets the value for strPostalAddressCountry 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strPostalAddressCountry = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'IdentificationNumber':
                /**
                 * Sets the value for strIdentificationNumber 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strIdentificationNumber = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'Nickname':
                /**
                 * Sets the value for strNickname 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strNickname = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'Status':
                /**
                 * Sets the value for strStatus 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strStatus = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'Gender':
                /**
                 * Sets the value for strGender 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strGender = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'AccessBlocked':
                /**
                 * Sets the value for blnAccessBlocked 
                 * @param boolean $mixValue
                 * @return boolean
                 */
                try {
                    return ($this->blnAccessBlocked = dxType::Cast($mixValue, dxType::Boolean));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'BlockedReason':
                /**
                 * Sets the value for strBlockedReason 
                 * @param string $mixValue
                 * @return string
                 */
                try {
                    return ($this->strBlockedReason = dxType::Cast($mixValue, dxType::String));
                } catch (dxCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'UserRole':
                /**
                 * Sets the value for intUserRole 
                 * @param integer $mixValue
                 * @return integer
                 */
                try {
                    $this->objUserRoleObject = null;
                    return ($this->intUserRole = dxType::Cast($mixValue, dxType::Integer));
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
            case 'UserRoleObject':
                /**
                 * Sets the value for the Userrole object referenced by intUserRole 
                 * @param Userrole $mixValue
                 * @return Userrole
                 */
                if (is_null($mixValue)) {
                    $this->intUserRole = null;
                    $this->objUserRoleObject = null;
                    return null;
                } else {
                    // Make sure $mixValue actually is a Userrole object
                    try {
                        $mixValue = dxType::Cast($mixValue, 'Userrole');
                    } catch (dxInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                    // Make sure $mixValue is a SAVED Userrole object
                    if (is_null($mixValue->Id))
                        throw new dxCallerException('Unable to set an unsaved UserRoleObject for this Account');

                    // Update Local Member Variables
                    $this->objUserRoleObject = $mixValue;
                    $this->intUserRole = $mixValue->Id;

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



    // Related Objects' Methods for AdditionalAccountInformationAsAccount
    //-------------------------------------------------------------------

    /**
     * Gets all associated AdditionalAccountInformationsAsAccount as an array of AdditionalAccountInformation objects
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return AdditionalAccountInformation[]
    */
    public function GetAdditionalAccountInformationAsAccountArray($objOptionalClauses = null) {
        if ((is_null($this->intId)))
            return array();

        try {
            return AdditionalAccountInformation::LoadArrayByAccount($this->intId, $objOptionalClauses);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }
    }

    /**
     * Counts all associated AdditionalAccountInformationsAsAccount
     * @return int
    */
    public function CountAdditionalAccountInformationsAsAccount() {
        if ((is_null($this->intId)))
            return 0;

        return AdditionalAccountInformation::CountByAccount($this->intId);
    }

    /**
     * Associates a AdditionalAccountInformationAsAccount
     * @param AdditionalAccountInformation $objAdditionalAccountInformation
     * @return void
    */
    public function AssociateAdditionalAccountInformationAsAccount(AdditionalAccountInformation $objAdditionalAccountInformation) {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call AssociateAdditionalAccountInformationAsAccount on this unsaved Account.');
        if ((is_null($objAdditionalAccountInformation->Id)))
            throw new dxUndefinedPrimaryKeyException('Unable to call AssociateAdditionalAccountInformationAsAccount on this Account with an unsaved AdditionalAccountInformation.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            UPDATE
                `AdditionalAccountInformation`
            SET
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($objAdditionalAccountInformation->Id) . '
        ');
    }

    /**
     * Unassociates a AdditionalAccountInformationAsAccount
     * @param AdditionalAccountInformation $objAdditionalAccountInformation
     * @return void
    */
    public function UnassociateAdditionalAccountInformationAsAccount(AdditionalAccountInformation $objAdditionalAccountInformation) {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociateAdditionalAccountInformationAsAccount on this unsaved Account.');
        if ((is_null($objAdditionalAccountInformation->Id)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociateAdditionalAccountInformationAsAccount on this Account with an unsaved AdditionalAccountInformation.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            UPDATE
                `AdditionalAccountInformation`
            SET
                `Account` = null
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($objAdditionalAccountInformation->Id) . ' AND
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }

    /**
     * Unassociates all AdditionalAccountInformationsAsAccount
     * @return void
    */
    public function UnassociateAllAdditionalAccountInformationsAsAccount() {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociateAdditionalAccountInformationAsAccount on this unsaved Account.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            UPDATE
                `AdditionalAccountInformation`
            SET
                `Account` = null
            WHERE
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }

    /**
     * Deletes an associated AdditionalAccountInformationAsAccount
     * @param AdditionalAccountInformation $objAdditionalAccountInformation
     * @return void
    */
    public function DeleteAssociatedAdditionalAccountInformationAsAccount(AdditionalAccountInformation $objAdditionalAccountInformation) {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociateAdditionalAccountInformationAsAccount on this unsaved Account.');
        if ((is_null($objAdditionalAccountInformation->Id)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociateAdditionalAccountInformationAsAccount on this Account with an unsaved AdditionalAccountInformation.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            DELETE FROM
                `AdditionalAccountInformation`
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($objAdditionalAccountInformation->Id) . ' AND
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }

    /**
     * Deletes all associated AdditionalAccountInformationsAsAccount
     * @return void
    */
    public function DeleteAllAdditionalAccountInformationsAsAccount() {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociateAdditionalAccountInformationAsAccount on this unsaved Account.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            DELETE FROM
                `AdditionalAccountInformation`
            WHERE
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }


    // Related Objects' Methods for ClientConnectionAsAccount
    //-------------------------------------------------------------------

    /**
     * Gets all associated ClientConnectionsAsAccount as an array of ClientConnection objects
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return ClientConnection[]
    */
    public function GetClientConnectionAsAccountArray($objOptionalClauses = null) {
        if ((is_null($this->intId)))
            return array();

        try {
            return ClientConnection::LoadArrayByAccount($this->intId, $objOptionalClauses);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }
    }

    /**
     * Counts all associated ClientConnectionsAsAccount
     * @return int
    */
    public function CountClientConnectionsAsAccount() {
        if ((is_null($this->intId)))
            return 0;

        return ClientConnection::CountByAccount($this->intId);
    }

    /**
     * Associates a ClientConnectionAsAccount
     * @param ClientConnection $objClientConnection
     * @return void
    */
    public function AssociateClientConnectionAsAccount(ClientConnection $objClientConnection) {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call AssociateClientConnectionAsAccount on this unsaved Account.');
        if ((is_null($objClientConnection->Id)))
            throw new dxUndefinedPrimaryKeyException('Unable to call AssociateClientConnectionAsAccount on this Account with an unsaved ClientConnection.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            UPDATE
                `ClientConnection`
            SET
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($objClientConnection->Id) . '
        ');
    }

    /**
     * Unassociates a ClientConnectionAsAccount
     * @param ClientConnection $objClientConnection
     * @return void
    */
    public function UnassociateClientConnectionAsAccount(ClientConnection $objClientConnection) {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociateClientConnectionAsAccount on this unsaved Account.');
        if ((is_null($objClientConnection->Id)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociateClientConnectionAsAccount on this Account with an unsaved ClientConnection.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            UPDATE
                `ClientConnection`
            SET
                `Account` = null
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($objClientConnection->Id) . ' AND
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }

    /**
     * Unassociates all ClientConnectionsAsAccount
     * @return void
    */
    public function UnassociateAllClientConnectionsAsAccount() {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociateClientConnectionAsAccount on this unsaved Account.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            UPDATE
                `ClientConnection`
            SET
                `Account` = null
            WHERE
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }

    /**
     * Deletes an associated ClientConnectionAsAccount
     * @param ClientConnection $objClientConnection
     * @return void
    */
    public function DeleteAssociatedClientConnectionAsAccount(ClientConnection $objClientConnection) {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociateClientConnectionAsAccount on this unsaved Account.');
        if ((is_null($objClientConnection->Id)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociateClientConnectionAsAccount on this Account with an unsaved ClientConnection.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            DELETE FROM
                `ClientConnection`
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($objClientConnection->Id) . ' AND
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }

    /**
     * Deletes all associated ClientConnectionsAsAccount
     * @return void
    */
    public function DeleteAllClientConnectionsAsAccount() {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociateClientConnectionAsAccount on this unsaved Account.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            DELETE FROM
                `ClientConnection`
            WHERE
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }


    // Related Objects' Methods for PasswordResetAsAccount
    //-------------------------------------------------------------------

    /**
     * Gets all associated PasswordResetsAsAccount as an array of PasswordReset objects
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return PasswordReset[]
    */
    public function GetPasswordResetAsAccountArray($objOptionalClauses = null) {
        if ((is_null($this->intId)))
            return array();

        try {
            return PasswordReset::LoadArrayByAccount($this->intId, $objOptionalClauses);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }
    }

    /**
     * Counts all associated PasswordResetsAsAccount
     * @return int
    */
    public function CountPasswordResetsAsAccount() {
        if ((is_null($this->intId)))
            return 0;

        return PasswordReset::CountByAccount($this->intId);
    }

    /**
     * Associates a PasswordResetAsAccount
     * @param PasswordReset $objPasswordReset
     * @return void
    */
    public function AssociatePasswordResetAsAccount(PasswordReset $objPasswordReset) {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call AssociatePasswordResetAsAccount on this unsaved Account.');
        if ((is_null($objPasswordReset->Id)))
            throw new dxUndefinedPrimaryKeyException('Unable to call AssociatePasswordResetAsAccount on this Account with an unsaved PasswordReset.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            UPDATE
                `PasswordReset`
            SET
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($objPasswordReset->Id) . '
        ');
    }

    /**
     * Unassociates a PasswordResetAsAccount
     * @param PasswordReset $objPasswordReset
     * @return void
    */
    public function UnassociatePasswordResetAsAccount(PasswordReset $objPasswordReset) {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePasswordResetAsAccount on this unsaved Account.');
        if ((is_null($objPasswordReset->Id)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePasswordResetAsAccount on this Account with an unsaved PasswordReset.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            UPDATE
                `PasswordReset`
            SET
                `Account` = null
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($objPasswordReset->Id) . ' AND
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }

    /**
     * Unassociates all PasswordResetsAsAccount
     * @return void
    */
    public function UnassociateAllPasswordResetsAsAccount() {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePasswordResetAsAccount on this unsaved Account.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            UPDATE
                `PasswordReset`
            SET
                `Account` = null
            WHERE
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }

    /**
     * Deletes an associated PasswordResetAsAccount
     * @param PasswordReset $objPasswordReset
     * @return void
    */
    public function DeleteAssociatedPasswordResetAsAccount(PasswordReset $objPasswordReset) {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePasswordResetAsAccount on this unsaved Account.');
        if ((is_null($objPasswordReset->Id)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePasswordResetAsAccount on this Account with an unsaved PasswordReset.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            DELETE FROM
                `PasswordReset`
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($objPasswordReset->Id) . ' AND
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }

    /**
     * Deletes all associated PasswordResetsAsAccount
     * @return void
    */
    public function DeleteAllPasswordResetsAsAccount() {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePasswordResetAsAccount on this unsaved Account.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            DELETE FROM
                `PasswordReset`
            WHERE
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }


    // Related Objects' Methods for PhotoSubmissionAsAccount
    //-------------------------------------------------------------------

    /**
     * Gets all associated PhotoSubmissionsAsAccount as an array of PhotoSubmission objects
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return PhotoSubmission[]
    */
    public function GetPhotoSubmissionAsAccountArray($objOptionalClauses = null) {
        if ((is_null($this->intId)))
            return array();

        try {
            return PhotoSubmission::LoadArrayByAccount($this->intId, $objOptionalClauses);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }
    }

    /**
     * Counts all associated PhotoSubmissionsAsAccount
     * @return int
    */
    public function CountPhotoSubmissionsAsAccount() {
        if ((is_null($this->intId)))
            return 0;

        return PhotoSubmission::CountByAccount($this->intId);
    }

    /**
     * Associates a PhotoSubmissionAsAccount
     * @param PhotoSubmission $objPhotoSubmission
     * @return void
    */
    public function AssociatePhotoSubmissionAsAccount(PhotoSubmission $objPhotoSubmission) {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call AssociatePhotoSubmissionAsAccount on this unsaved Account.');
        if ((is_null($objPhotoSubmission->Id)))
            throw new dxUndefinedPrimaryKeyException('Unable to call AssociatePhotoSubmissionAsAccount on this Account with an unsaved PhotoSubmission.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            UPDATE
                `PhotoSubmission`
            SET
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($objPhotoSubmission->Id) . '
        ');
    }

    /**
     * Unassociates a PhotoSubmissionAsAccount
     * @param PhotoSubmission $objPhotoSubmission
     * @return void
    */
    public function UnassociatePhotoSubmissionAsAccount(PhotoSubmission $objPhotoSubmission) {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePhotoSubmissionAsAccount on this unsaved Account.');
        if ((is_null($objPhotoSubmission->Id)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePhotoSubmissionAsAccount on this Account with an unsaved PhotoSubmission.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            UPDATE
                `PhotoSubmission`
            SET
                `Account` = null
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($objPhotoSubmission->Id) . ' AND
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }

    /**
     * Unassociates all PhotoSubmissionsAsAccount
     * @return void
    */
    public function UnassociateAllPhotoSubmissionsAsAccount() {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePhotoSubmissionAsAccount on this unsaved Account.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            UPDATE
                `PhotoSubmission`
            SET
                `Account` = null
            WHERE
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }

    /**
     * Deletes an associated PhotoSubmissionAsAccount
     * @param PhotoSubmission $objPhotoSubmission
     * @return void
    */
    public function DeleteAssociatedPhotoSubmissionAsAccount(PhotoSubmission $objPhotoSubmission) {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePhotoSubmissionAsAccount on this unsaved Account.');
        if ((is_null($objPhotoSubmission->Id)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePhotoSubmissionAsAccount on this Account with an unsaved PhotoSubmission.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            DELETE FROM
                `PhotoSubmission`
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($objPhotoSubmission->Id) . ' AND
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }

    /**
     * Deletes all associated PhotoSubmissionsAsAccount
     * @return void
    */
    public function DeleteAllPhotoSubmissionsAsAccount() {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePhotoSubmissionAsAccount on this unsaved Account.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            DELETE FROM
                `PhotoSubmission`
            WHERE
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }


    // Related Objects' Methods for PushRegistrationAsAccount
    //-------------------------------------------------------------------

    /**
     * Gets all associated PushRegistrationsAsAccount as an array of PushRegistration objects
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return PushRegistration[]
    */
    public function GetPushRegistrationAsAccountArray($objOptionalClauses = null) {
        if ((is_null($this->intId)))
            return array();

        try {
            return PushRegistration::LoadArrayByAccount($this->intId, $objOptionalClauses);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }
    }

    /**
     * Counts all associated PushRegistrationsAsAccount
     * @return int
    */
    public function CountPushRegistrationsAsAccount() {
        if ((is_null($this->intId)))
            return 0;

        return PushRegistration::CountByAccount($this->intId);
    }

    /**
     * Associates a PushRegistrationAsAccount
     * @param PushRegistration $objPushRegistration
     * @return void
    */
    public function AssociatePushRegistrationAsAccount(PushRegistration $objPushRegistration) {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call AssociatePushRegistrationAsAccount on this unsaved Account.');
        if ((is_null($objPushRegistration->Id)))
            throw new dxUndefinedPrimaryKeyException('Unable to call AssociatePushRegistrationAsAccount on this Account with an unsaved PushRegistration.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            UPDATE
                `PushRegistration`
            SET
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($objPushRegistration->Id) . '
        ');
    }

    /**
     * Unassociates a PushRegistrationAsAccount
     * @param PushRegistration $objPushRegistration
     * @return void
    */
    public function UnassociatePushRegistrationAsAccount(PushRegistration $objPushRegistration) {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePushRegistrationAsAccount on this unsaved Account.');
        if ((is_null($objPushRegistration->Id)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePushRegistrationAsAccount on this Account with an unsaved PushRegistration.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            UPDATE
                `PushRegistration`
            SET
                `Account` = null
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($objPushRegistration->Id) . ' AND
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }

    /**
     * Unassociates all PushRegistrationsAsAccount
     * @return void
    */
    public function UnassociateAllPushRegistrationsAsAccount() {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePushRegistrationAsAccount on this unsaved Account.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            UPDATE
                `PushRegistration`
            SET
                `Account` = null
            WHERE
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }

    /**
     * Deletes an associated PushRegistrationAsAccount
     * @param PushRegistration $objPushRegistration
     * @return void
    */
    public function DeleteAssociatedPushRegistrationAsAccount(PushRegistration $objPushRegistration) {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePushRegistrationAsAccount on this unsaved Account.');
        if ((is_null($objPushRegistration->Id)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePushRegistrationAsAccount on this Account with an unsaved PushRegistration.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            DELETE FROM
                `PushRegistration`
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($objPushRegistration->Id) . ' AND
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }

    /**
     * Deletes all associated PushRegistrationsAsAccount
     * @return void
    */
    public function DeleteAllPushRegistrationsAsAccount() {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociatePushRegistrationAsAccount on this unsaved Account.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            DELETE FROM
                `PushRegistration`
            WHERE
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }


    // Related Objects' Methods for StockPhotoRequestAsAccount
    //-------------------------------------------------------------------

    /**
     * Gets all associated StockPhotoRequestsAsAccount as an array of StockPhotoRequest objects
     * @param dxQueryClause[] $objOptionalClauses additional optional dxQueryClause objects for this query
     * @return StockPhotoRequest[]
    */
    public function GetStockPhotoRequestAsAccountArray($objOptionalClauses = null) {
        if ((is_null($this->intId)))
            return array();

        try {
            return StockPhotoRequest::LoadArrayByAccount($this->intId, $objOptionalClauses);
        } catch (dxCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }
    }

    /**
     * Counts all associated StockPhotoRequestsAsAccount
     * @return int
    */
    public function CountStockPhotoRequestsAsAccount() {
        if ((is_null($this->intId)))
            return 0;

        return StockPhotoRequest::CountByAccount($this->intId);
    }

    /**
     * Associates a StockPhotoRequestAsAccount
     * @param StockPhotoRequest $objStockPhotoRequest
     * @return void
    */
    public function AssociateStockPhotoRequestAsAccount(StockPhotoRequest $objStockPhotoRequest) {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call AssociateStockPhotoRequestAsAccount on this unsaved Account.');
        if ((is_null($objStockPhotoRequest->Id)))
            throw new dxUndefinedPrimaryKeyException('Unable to call AssociateStockPhotoRequestAsAccount on this Account with an unsaved StockPhotoRequest.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            UPDATE
                `StockPhotoRequest`
            SET
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($objStockPhotoRequest->Id) . '
        ');
    }

    /**
     * Unassociates a StockPhotoRequestAsAccount
     * @param StockPhotoRequest $objStockPhotoRequest
     * @return void
    */
    public function UnassociateStockPhotoRequestAsAccount(StockPhotoRequest $objStockPhotoRequest) {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociateStockPhotoRequestAsAccount on this unsaved Account.');
        if ((is_null($objStockPhotoRequest->Id)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociateStockPhotoRequestAsAccount on this Account with an unsaved StockPhotoRequest.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            UPDATE
                `StockPhotoRequest`
            SET
                `Account` = null
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($objStockPhotoRequest->Id) . ' AND
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }

    /**
     * Unassociates all StockPhotoRequestsAsAccount
     * @return void
    */
    public function UnassociateAllStockPhotoRequestsAsAccount() {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociateStockPhotoRequestAsAccount on this unsaved Account.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            UPDATE
                `StockPhotoRequest`
            SET
                `Account` = null
            WHERE
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }

    /**
     * Deletes an associated StockPhotoRequestAsAccount
     * @param StockPhotoRequest $objStockPhotoRequest
     * @return void
    */
    public function DeleteAssociatedStockPhotoRequestAsAccount(StockPhotoRequest $objStockPhotoRequest) {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociateStockPhotoRequestAsAccount on this unsaved Account.');
        if ((is_null($objStockPhotoRequest->Id)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociateStockPhotoRequestAsAccount on this Account with an unsaved StockPhotoRequest.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            DELETE FROM
                `StockPhotoRequest`
            WHERE
                `Id` = ' . $objDatabase->SqlVariable($objStockPhotoRequest->Id) . ' AND
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
        ');
    }

    /**
     * Deletes all associated StockPhotoRequestsAsAccount
     * @return void
    */
    public function DeleteAllStockPhotoRequestsAsAccount() {
        if ((is_null($this->intId)))
            throw new dxUndefinedPrimaryKeyException('Unable to call UnassociateStockPhotoRequestAsAccount on this unsaved Account.');

        // Get the Database Object for this Class
        $objDatabase = Account::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
            DELETE FROM
                `StockPhotoRequest`
            WHERE
                `Account` = ' . $objDatabase->SqlVariable($this->intId) . '
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
        return "Account";
    }

    /**
     * Static method to retrieve the Table name from which this class has been created.
     * @return string Name of the table from which this class has been created.
     */
    public static function GetDatabaseName() {
        return ProjectFunctions::$Database[Account::GetDatabaseIndex()]->Database;
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
        $strToReturn = '<complexType name="Account"><sequence>';
        $strToReturn .= '<element name="Id" type="xsd:int"/>';
        $strToReturn .= '<element name="FullName" type="xsd:string"/>';
        $strToReturn .= '<element name="FirstName" type="xsd:string"/>';
        $strToReturn .= '<element name="MiddleNames" type="xsd:string"/>';
        $strToReturn .= '<element name="LastName" type="xsd:string"/>';
        $strToReturn .= '<element name="EmailAddress" type="xsd:string"/>';
        $strToReturn .= '<element name="Username" type="xsd:string"/>';
        $strToReturn .= '<element name="Password" type="xsd:string"/>';
        $strToReturn .= '<element name="MaidenName" type="xsd:string"/>';
        $strToReturn .= '<element name="ProfilePicturePath" type="xsd:string"/>';
        $strToReturn .= '<element name="MainContactNumber" type="xsd:string"/>';
        $strToReturn .= '<element name="Title" type="xsd:string"/>';
        $strToReturn .= '<element name="DateOfBirth" type="xsd:dateTime"/>';
        $strToReturn .= '<element name="PhysicalAddressLineOne" type="xsd:string"/>';
        $strToReturn .= '<element name="PhysicalAddressLineTwo" type="xsd:string"/>';
        $strToReturn .= '<element name="PhysicalAddressPostalCode" type="xsd:string"/>';
        $strToReturn .= '<element name="PhysicalAddressCountry" type="xsd:string"/>';
        $strToReturn .= '<element name="PostalAddressLineOne" type="xsd:string"/>';
        $strToReturn .= '<element name="PostalAddressLineTwo" type="xsd:string"/>';
        $strToReturn .= '<element name="PostalAddressPostalCode" type="xsd:string"/>';
        $strToReturn .= '<element name="PostalAddressCountry" type="xsd:string"/>';
        $strToReturn .= '<element name="IdentificationNumber" type="xsd:string"/>';
        $strToReturn .= '<element name="Nickname" type="xsd:string"/>';
        $strToReturn .= '<element name="Status" type="xsd:string"/>';
        $strToReturn .= '<element name="Gender" type="xsd:string"/>';
        $strToReturn .= '<element name="AccessBlocked" type="xsd:boolean"/>';
        $strToReturn .= '<element name="BlockedReason" type="xsd:string"/>';
        $strToReturn .= '<element name="LastUpdated" type="xsd:string"/>';
        $strToReturn .= '<element name="UserRoleObject" type="xsd1:Userrole"/>';
        $strToReturn .= '<element name="SearchMetaInfo" type="xsd:string"/>';
        $strToReturn .= '<element name="ObjectOwner" type="xsd:int"/>';
        $strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
        $strToReturn .= '</sequence></complexType>';
        return $strToReturn;
    }

    public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
        if (!array_key_exists('Account', $strComplexTypeArray)) {
            $strComplexTypeArray['Account'] = Account::GetSoapComplexTypeXml();
            Userrole::AlterSoapComplexTypeArray($strComplexTypeArray);
        }
    }

    public static function GetArrayFromSoapArray($objSoapArray) {
        $objArrayToReturn = array();

        foreach ($objSoapArray as $objSoapObject)
            array_push($objArrayToReturn, Account::GetObjectFromSoapObject($objSoapObject));

        return $objArrayToReturn;
    }

    public static function GetObjectFromSoapObject($objSoapObject) {
        $objToReturn = new Account();
        if (property_exists($objSoapObject, 'Id'))
            $objToReturn->intId = $objSoapObject->Id;
        if (property_exists($objSoapObject, 'FullName'))
            $objToReturn->strFullName = $objSoapObject->FullName;
        if (property_exists($objSoapObject, 'FirstName'))
            $objToReturn->strFirstName = $objSoapObject->FirstName;
        if (property_exists($objSoapObject, 'MiddleNames'))
            $objToReturn->strMiddleNames = $objSoapObject->MiddleNames;
        if (property_exists($objSoapObject, 'LastName'))
            $objToReturn->strLastName = $objSoapObject->LastName;
        if (property_exists($objSoapObject, 'EmailAddress'))
            $objToReturn->strEmailAddress = $objSoapObject->EmailAddress;
        if (property_exists($objSoapObject, 'Username'))
            $objToReturn->strUsername = $objSoapObject->Username;
        if (property_exists($objSoapObject, 'Password'))
            $objToReturn->strPassword = $objSoapObject->Password;
        if (property_exists($objSoapObject, 'MaidenName'))
            $objToReturn->strMaidenName = $objSoapObject->MaidenName;
        if (property_exists($objSoapObject, 'ProfilePicturePath'))
            $objToReturn->strProfilePicturePath = $objSoapObject->ProfilePicturePath;
        if (property_exists($objSoapObject, 'MainContactNumber'))
            $objToReturn->strMainContactNumber = $objSoapObject->MainContactNumber;
        if (property_exists($objSoapObject, 'Title'))
            $objToReturn->strTitle = $objSoapObject->Title;
        if (property_exists($objSoapObject, 'DateOfBirth'))
            $objToReturn->dttDateOfBirth = new dxDateTime($objSoapObject->DateOfBirth);
        if (property_exists($objSoapObject, 'PhysicalAddressLineOne'))
            $objToReturn->strPhysicalAddressLineOne = $objSoapObject->PhysicalAddressLineOne;
        if (property_exists($objSoapObject, 'PhysicalAddressLineTwo'))
            $objToReturn->strPhysicalAddressLineTwo = $objSoapObject->PhysicalAddressLineTwo;
        if (property_exists($objSoapObject, 'PhysicalAddressPostalCode'))
            $objToReturn->strPhysicalAddressPostalCode = $objSoapObject->PhysicalAddressPostalCode;
        if (property_exists($objSoapObject, 'PhysicalAddressCountry'))
            $objToReturn->strPhysicalAddressCountry = $objSoapObject->PhysicalAddressCountry;
        if (property_exists($objSoapObject, 'PostalAddressLineOne'))
            $objToReturn->strPostalAddressLineOne = $objSoapObject->PostalAddressLineOne;
        if (property_exists($objSoapObject, 'PostalAddressLineTwo'))
            $objToReturn->strPostalAddressLineTwo = $objSoapObject->PostalAddressLineTwo;
        if (property_exists($objSoapObject, 'PostalAddressPostalCode'))
            $objToReturn->strPostalAddressPostalCode = $objSoapObject->PostalAddressPostalCode;
        if (property_exists($objSoapObject, 'PostalAddressCountry'))
            $objToReturn->strPostalAddressCountry = $objSoapObject->PostalAddressCountry;
        if (property_exists($objSoapObject, 'IdentificationNumber'))
            $objToReturn->strIdentificationNumber = $objSoapObject->IdentificationNumber;
        if (property_exists($objSoapObject, 'Nickname'))
            $objToReturn->strNickname = $objSoapObject->Nickname;
        if (property_exists($objSoapObject, 'Status'))
            $objToReturn->strStatus = $objSoapObject->Status;
        if (property_exists($objSoapObject, 'Gender'))
            $objToReturn->strGender = $objSoapObject->Gender;
        if (property_exists($objSoapObject, 'AccessBlocked'))
            $objToReturn->blnAccessBlocked = $objSoapObject->AccessBlocked;
        if (property_exists($objSoapObject, 'BlockedReason'))
            $objToReturn->strBlockedReason = $objSoapObject->BlockedReason;
        if (property_exists($objSoapObject, 'LastUpdated'))
            $objToReturn->strLastUpdated = $objSoapObject->LastUpdated;
        if ((property_exists($objSoapObject, 'UserRoleObject')) &&
            ($objSoapObject->UserRoleObject))
            $objToReturn->UserRoleObject = Userrole::GetObjectFromSoapObject($objSoapObject->UserRoleObject);
        if (property_exists($objSoapObject, 'SearchMetaInfo'))
            $objToReturn->strSearchMetaInfo = $objSoapObject->SearchMetaInfo;
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
            array_push($objArrayToReturn, Account::GetSoapObjectFromObject($objObject, true));

        return unserialize(serialize($objArrayToReturn));
    }

    public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
        if ($objObject->dttDateOfBirth)
            $objObject->dttDateOfBirth = $objObject->dttDateOfBirth->qFormat(dxDateTime::FormatSoap);
        if ($objObject->objUserRoleObject)
            $objObject->objUserRoleObject = Userrole::GetSoapObjectFromObject($objObject->objUserRoleObject, false);
        else if (!$blnBindRelatedObjects)
            $objObject->intUserRole = null;
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
        $iArray['FullName'] = $this->strFullName;
        $iArray['FirstName'] = $this->strFirstName;
        $iArray['MiddleNames'] = $this->strMiddleNames;
        $iArray['LastName'] = $this->strLastName;
        $iArray['EmailAddress'] = $this->strEmailAddress;
        $iArray['Username'] = $this->strUsername;
        $iArray['Password'] = $this->strPassword;
        $iArray['MaidenName'] = $this->strMaidenName;
        $iArray['ProfilePicturePath'] = $this->strProfilePicturePath;
        $iArray['MainContactNumber'] = $this->strMainContactNumber;
        $iArray['Title'] = $this->strTitle;
        $iArray['DateOfBirth'] = $this->dttDateOfBirth;
        $iArray['PhysicalAddressLineOne'] = $this->strPhysicalAddressLineOne;
        $iArray['PhysicalAddressLineTwo'] = $this->strPhysicalAddressLineTwo;
        $iArray['PhysicalAddressPostalCode'] = $this->strPhysicalAddressPostalCode;
        $iArray['PhysicalAddressCountry'] = $this->strPhysicalAddressCountry;
        $iArray['PostalAddressLineOne'] = $this->strPostalAddressLineOne;
        $iArray['PostalAddressLineTwo'] = $this->strPostalAddressLineTwo;
        $iArray['PostalAddressPostalCode'] = $this->strPostalAddressPostalCode;
        $iArray['PostalAddressCountry'] = $this->strPostalAddressCountry;
        $iArray['IdentificationNumber'] = $this->strIdentificationNumber;
        $iArray['Nickname'] = $this->strNickname;
        $iArray['Status'] = $this->strStatus;
        $iArray['Gender'] = $this->strGender;
        $iArray['AccessBlocked'] = $this->blnAccessBlocked;
        $iArray['BlockedReason'] = $this->strBlockedReason;
        $iArray['LastUpdated'] = $this->strLastUpdated;
        $iArray['UserRole'] = $this->intUserRole;
        $iArray['SearchMetaInfo'] = $this->strSearchMetaInfo;
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
     * @property-read dxQueryNode $FullName
     * @property-read dxQueryNode $FirstName
     * @property-read dxQueryNode $MiddleNames
     * @property-read dxQueryNode $LastName
     * @property-read dxQueryNode $EmailAddress
     * @property-read dxQueryNode $Username
     * @property-read dxQueryNode $Password
     * @property-read dxQueryNode $MaidenName
     * @property-read dxQueryNode $ProfilePicturePath
     * @property-read dxQueryNode $MainContactNumber
     * @property-read dxQueryNode $Title
     * @property-read dxQueryNode $DateOfBirth
     * @property-read dxQueryNode $PhysicalAddressLineOne
     * @property-read dxQueryNode $PhysicalAddressLineTwo
     * @property-read dxQueryNode $PhysicalAddressPostalCode
     * @property-read dxQueryNode $PhysicalAddressCountry
     * @property-read dxQueryNode $PostalAddressLineOne
     * @property-read dxQueryNode $PostalAddressLineTwo
     * @property-read dxQueryNode $PostalAddressPostalCode
     * @property-read dxQueryNode $PostalAddressCountry
     * @property-read dxQueryNode $IdentificationNumber
     * @property-read dxQueryNode $Nickname
     * @property-read dxQueryNode $Status
     * @property-read dxQueryNode $Gender
     * @property-read dxQueryNode $AccessBlocked
     * @property-read dxQueryNode $BlockedReason
     * @property-read dxQueryNode $LastUpdated
     * @property-read dxQueryNode $UserRole
     * @property-read dxQueryNodeUserrole $UserRoleObject
     * @property-read dxQueryNode $SearchMetaInfo
     * @property-read dxQueryNode $ObjectOwner
     *
     *
     * @property-read dxQueryReverseReferenceNodeAdditionalAccountInformation $AdditionalAccountInformationAsAccount
     * @property-read dxQueryReverseReferenceNodeClientConnection $ClientConnectionAsAccount
     * @property-read dxQueryReverseReferenceNodePasswordReset $PasswordResetAsAccount
     * @property-read dxQueryReverseReferenceNodePhotoSubmission $PhotoSubmissionAsAccount
     * @property-read dxQueryReverseReferenceNodePushRegistration $PushRegistrationAsAccount
     * @property-read dxQueryReverseReferenceNodeStockPhotoRequest $StockPhotoRequestAsAccount

     * @property-read dxQueryNode $_PrimaryKeyNode
     **/
	class dxQueryNodeAccount extends dxQueryNode {
		protected $strTableName = 'Account';
		protected $strPrimaryKey = 'Id';
		protected $strClassName = 'Account';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new dxQueryNode('Id', 'Id', 'Integer', $this);
				case 'FullName':
					return new dxQueryNode('FullName', 'FullName', 'VarChar', $this);
				case 'FirstName':
					return new dxQueryNode('FirstName', 'FirstName', 'VarChar', $this);
				case 'MiddleNames':
					return new dxQueryNode('MiddleNames', 'MiddleNames', 'VarChar', $this);
				case 'LastName':
					return new dxQueryNode('LastName', 'LastName', 'VarChar', $this);
				case 'EmailAddress':
					return new dxQueryNode('EmailAddress', 'EmailAddress', 'VarChar', $this);
				case 'Username':
					return new dxQueryNode('Username', 'Username', 'VarChar', $this);
				case 'Password':
					return new dxQueryNode('Password', 'Password', 'VarChar', $this);
				case 'MaidenName':
					return new dxQueryNode('MaidenName', 'MaidenName', 'VarChar', $this);
				case 'ProfilePicturePath':
					return new dxQueryNode('ProfilePicturePath', 'ProfilePicturePath', 'VarChar', $this);
				case 'MainContactNumber':
					return new dxQueryNode('MainContactNumber', 'MainContactNumber', 'VarChar', $this);
				case 'Title':
					return new dxQueryNode('Title', 'Title', 'VarChar', $this);
				case 'DateOfBirth':
					return new dxQueryNode('DateOfBirth', 'DateOfBirth', 'Date', $this);
				case 'PhysicalAddressLineOne':
					return new dxQueryNode('PhysicalAddressLineOne', 'PhysicalAddressLineOne', 'VarChar', $this);
				case 'PhysicalAddressLineTwo':
					return new dxQueryNode('PhysicalAddressLineTwo', 'PhysicalAddressLineTwo', 'VarChar', $this);
				case 'PhysicalAddressPostalCode':
					return new dxQueryNode('PhysicalAddressPostalCode', 'PhysicalAddressPostalCode', 'VarChar', $this);
				case 'PhysicalAddressCountry':
					return new dxQueryNode('PhysicalAddressCountry', 'PhysicalAddressCountry', 'VarChar', $this);
				case 'PostalAddressLineOne':
					return new dxQueryNode('PostalAddressLineOne', 'PostalAddressLineOne', 'VarChar', $this);
				case 'PostalAddressLineTwo':
					return new dxQueryNode('PostalAddressLineTwo', 'PostalAddressLineTwo', 'VarChar', $this);
				case 'PostalAddressPostalCode':
					return new dxQueryNode('PostalAddressPostalCode', 'PostalAddressPostalCode', 'VarChar', $this);
				case 'PostalAddressCountry':
					return new dxQueryNode('PostalAddressCountry', 'PostalAddressCountry', 'VarChar', $this);
				case 'IdentificationNumber':
					return new dxQueryNode('IdentificationNumber', 'IdentificationNumber', 'VarChar', $this);
				case 'Nickname':
					return new dxQueryNode('Nickname', 'Nickname', 'VarChar', $this);
				case 'Status':
					return new dxQueryNode('Status', 'Status', 'VarChar', $this);
				case 'Gender':
					return new dxQueryNode('Gender', 'Gender', 'VarChar', $this);
				case 'AccessBlocked':
					return new dxQueryNode('AccessBlocked', 'AccessBlocked', 'Bit', $this);
				case 'BlockedReason':
					return new dxQueryNode('BlockedReason', 'BlockedReason', 'Blob', $this);
				case 'LastUpdated':
					return new dxQueryNode('LastUpdated', 'LastUpdated', 'VarChar', $this);
				case 'UserRole':
					return new dxQueryNode('UserRole', 'UserRole', 'Integer', $this);
				case 'UserRoleObject':
					return new dxQueryNodeUserrole('UserRole', 'UserRoleObject', 'Integer', $this);
				case 'SearchMetaInfo':
					return new dxQueryNode('SearchMetaInfo', 'SearchMetaInfo', 'Blob', $this);
				case 'ObjectOwner':
					return new dxQueryNode('ObjectOwner', 'ObjectOwner', 'Integer', $this);
				case 'AdditionalAccountInformationAsAccount':
					return new dxQueryReverseReferenceNodeAdditionalAccountInformation($this, 'additionalaccountinformationasaccount', 'reverse_reference', 'Account', 'AdditionalAccountInformationAsAccount');
				case 'ClientConnectionAsAccount':
					return new dxQueryReverseReferenceNodeClientConnection($this, 'clientconnectionasaccount', 'reverse_reference', 'Account', 'ClientConnectionAsAccount');
				case 'PasswordResetAsAccount':
					return new dxQueryReverseReferenceNodePasswordReset($this, 'passwordresetasaccount', 'reverse_reference', 'Account', 'PasswordResetAsAccount');
				case 'PhotoSubmissionAsAccount':
					return new dxQueryReverseReferenceNodePhotoSubmission($this, 'photosubmissionasaccount', 'reverse_reference', 'Account', 'PhotoSubmissionAsAccount');
				case 'PushRegistrationAsAccount':
					return new dxQueryReverseReferenceNodePushRegistration($this, 'pushregistrationasaccount', 'reverse_reference', 'Account', 'PushRegistrationAsAccount');
				case 'StockPhotoRequestAsAccount':
					return new dxQueryReverseReferenceNodeStockPhotoRequest($this, 'stockphotorequestasaccount', 'reverse_reference', 'Account', 'StockPhotoRequestAsAccount');

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
     * @property-read dxQueryNode $FullName
     * @property-read dxQueryNode $FirstName
     * @property-read dxQueryNode $MiddleNames
     * @property-read dxQueryNode $LastName
     * @property-read dxQueryNode $EmailAddress
     * @property-read dxQueryNode $Username
     * @property-read dxQueryNode $Password
     * @property-read dxQueryNode $MaidenName
     * @property-read dxQueryNode $ProfilePicturePath
     * @property-read dxQueryNode $MainContactNumber
     * @property-read dxQueryNode $Title
     * @property-read dxQueryNode $DateOfBirth
     * @property-read dxQueryNode $PhysicalAddressLineOne
     * @property-read dxQueryNode $PhysicalAddressLineTwo
     * @property-read dxQueryNode $PhysicalAddressPostalCode
     * @property-read dxQueryNode $PhysicalAddressCountry
     * @property-read dxQueryNode $PostalAddressLineOne
     * @property-read dxQueryNode $PostalAddressLineTwo
     * @property-read dxQueryNode $PostalAddressPostalCode
     * @property-read dxQueryNode $PostalAddressCountry
     * @property-read dxQueryNode $IdentificationNumber
     * @property-read dxQueryNode $Nickname
     * @property-read dxQueryNode $Status
     * @property-read dxQueryNode $Gender
     * @property-read dxQueryNode $AccessBlocked
     * @property-read dxQueryNode $BlockedReason
     * @property-read dxQueryNode $LastUpdated
     * @property-read dxQueryNode $UserRole
     * @property-read dxQueryNodeUserrole $UserRoleObject
     * @property-read dxQueryNode $SearchMetaInfo
     * @property-read dxQueryNode $ObjectOwner
     *
     *
     * @property-read dxQueryReverseReferenceNodeAdditionalAccountInformation $AdditionalAccountInformationAsAccount
     * @property-read dxQueryReverseReferenceNodeClientConnection $ClientConnectionAsAccount
     * @property-read dxQueryReverseReferenceNodePasswordReset $PasswordResetAsAccount
     * @property-read dxQueryReverseReferenceNodePhotoSubmission $PhotoSubmissionAsAccount
     * @property-read dxQueryReverseReferenceNodePushRegistration $PushRegistrationAsAccount
     * @property-read dxQueryReverseReferenceNodeStockPhotoRequest $StockPhotoRequestAsAccount

     * @property-read dxQueryNode $_PrimaryKeyNode
     **/
	class dxQueryReverseReferenceNodeAccount extends dxQueryReverseReferenceNode {
		protected $strTableName = 'Account';
		protected $strPrimaryKey = 'Id';
		protected $strClassName = 'Account';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new dxQueryNode('Id', 'Id', 'integer', $this);
				case 'FullName':
					return new dxQueryNode('FullName', 'FullName', 'string', $this);
				case 'FirstName':
					return new dxQueryNode('FirstName', 'FirstName', 'string', $this);
				case 'MiddleNames':
					return new dxQueryNode('MiddleNames', 'MiddleNames', 'string', $this);
				case 'LastName':
					return new dxQueryNode('LastName', 'LastName', 'string', $this);
				case 'EmailAddress':
					return new dxQueryNode('EmailAddress', 'EmailAddress', 'string', $this);
				case 'Username':
					return new dxQueryNode('Username', 'Username', 'string', $this);
				case 'Password':
					return new dxQueryNode('Password', 'Password', 'string', $this);
				case 'MaidenName':
					return new dxQueryNode('MaidenName', 'MaidenName', 'string', $this);
				case 'ProfilePicturePath':
					return new dxQueryNode('ProfilePicturePath', 'ProfilePicturePath', 'string', $this);
				case 'MainContactNumber':
					return new dxQueryNode('MainContactNumber', 'MainContactNumber', 'string', $this);
				case 'Title':
					return new dxQueryNode('Title', 'Title', 'string', $this);
				case 'DateOfBirth':
					return new dxQueryNode('DateOfBirth', 'DateOfBirth', 'dxDateTime', $this);
				case 'PhysicalAddressLineOne':
					return new dxQueryNode('PhysicalAddressLineOne', 'PhysicalAddressLineOne', 'string', $this);
				case 'PhysicalAddressLineTwo':
					return new dxQueryNode('PhysicalAddressLineTwo', 'PhysicalAddressLineTwo', 'string', $this);
				case 'PhysicalAddressPostalCode':
					return new dxQueryNode('PhysicalAddressPostalCode', 'PhysicalAddressPostalCode', 'string', $this);
				case 'PhysicalAddressCountry':
					return new dxQueryNode('PhysicalAddressCountry', 'PhysicalAddressCountry', 'string', $this);
				case 'PostalAddressLineOne':
					return new dxQueryNode('PostalAddressLineOne', 'PostalAddressLineOne', 'string', $this);
				case 'PostalAddressLineTwo':
					return new dxQueryNode('PostalAddressLineTwo', 'PostalAddressLineTwo', 'string', $this);
				case 'PostalAddressPostalCode':
					return new dxQueryNode('PostalAddressPostalCode', 'PostalAddressPostalCode', 'string', $this);
				case 'PostalAddressCountry':
					return new dxQueryNode('PostalAddressCountry', 'PostalAddressCountry', 'string', $this);
				case 'IdentificationNumber':
					return new dxQueryNode('IdentificationNumber', 'IdentificationNumber', 'string', $this);
				case 'Nickname':
					return new dxQueryNode('Nickname', 'Nickname', 'string', $this);
				case 'Status':
					return new dxQueryNode('Status', 'Status', 'string', $this);
				case 'Gender':
					return new dxQueryNode('Gender', 'Gender', 'string', $this);
				case 'AccessBlocked':
					return new dxQueryNode('AccessBlocked', 'AccessBlocked', 'boolean', $this);
				case 'BlockedReason':
					return new dxQueryNode('BlockedReason', 'BlockedReason', 'string', $this);
				case 'LastUpdated':
					return new dxQueryNode('LastUpdated', 'LastUpdated', 'string', $this);
				case 'UserRole':
					return new dxQueryNode('UserRole', 'UserRole', 'integer', $this);
				case 'UserRoleObject':
					return new dxQueryNodeUserrole('UserRole', 'UserRoleObject', 'integer', $this);
				case 'SearchMetaInfo':
					return new dxQueryNode('SearchMetaInfo', 'SearchMetaInfo', 'string', $this);
				case 'ObjectOwner':
					return new dxQueryNode('ObjectOwner', 'ObjectOwner', 'integer', $this);
				case 'AdditionalAccountInformationAsAccount':
					return new dxQueryReverseReferenceNodeAdditionalAccountInformation($this, 'additionalaccountinformationasaccount', 'reverse_reference', 'Account', 'AdditionalAccountInformationAsAccount');
				case 'ClientConnectionAsAccount':
					return new dxQueryReverseReferenceNodeClientConnection($this, 'clientconnectionasaccount', 'reverse_reference', 'Account', 'ClientConnectionAsAccount');
				case 'PasswordResetAsAccount':
					return new dxQueryReverseReferenceNodePasswordReset($this, 'passwordresetasaccount', 'reverse_reference', 'Account', 'PasswordResetAsAccount');
				case 'PhotoSubmissionAsAccount':
					return new dxQueryReverseReferenceNodePhotoSubmission($this, 'photosubmissionasaccount', 'reverse_reference', 'Account', 'PhotoSubmissionAsAccount');
				case 'PushRegistrationAsAccount':
					return new dxQueryReverseReferenceNodePushRegistration($this, 'pushregistrationasaccount', 'reverse_reference', 'Account', 'PushRegistrationAsAccount');
				case 'StockPhotoRequestAsAccount':
					return new dxQueryReverseReferenceNodeStockPhotoRequest($this, 'stockphotorequestasaccount', 'reverse_reference', 'Account', 'StockPhotoRequestAsAccount');

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
