<?php
class dxQueryN {
    /**
     * @return dxQueryNodeAccount
     */
    static public function Account() {
        return new dxQueryNodeAccount('Account', null, null);
    }
    /**
     * @return dxQueryNodeAdditionalAccountInformation
     */
    static public function AdditionalAccountInformation() {
        return new dxQueryNodeAdditionalAccountInformation('AdditionalAccountInformation', null, null);
    }
    /**
     * @return dxQueryNodeAuditLogEntry
     */
    static public function AuditLogEntry() {
        return new dxQueryNodeAuditLogEntry('AuditLogEntry', null, null);
    }
    /**
     * @return dxQueryNodeBackgroundProcess
     */
    static public function BackgroundProcess() {
        return new dxQueryNodeBackgroundProcess('BackgroundProcess', null, null);
    }
    /**
     * @return dxQueryNodeBackgroundProcessUpdate
     */
    static public function BackgroundProcessUpdate() {
        return new dxQueryNodeBackgroundProcessUpdate('BackgroundProcessUpdate', null, null);
    }
    /**
     * @return dxQueryNodeClientAuthenticationToken
     */
    static public function ClientAuthenticationToken() {
        return new dxQueryNodeClientAuthenticationToken('ClientAuthenticationToken', null, null);
    }
    /**
     * @return dxQueryNodeClientConnection
     */
    static public function ClientConnection() {
        return new dxQueryNodeClientConnection('ClientConnection', null, null);
    }
    /**
     * @return dxQueryNodeEmailMessage
     */
    static public function EmailMessage() {
        return new dxQueryNodeEmailMessage('EmailMessage', null, null);
    }
    /**
     * @return dxQueryNodeFileDocument
     */
    static public function FileDocument() {
        return new dxQueryNodeFileDocument('FileDocument', null, null);
    }
    /**
     * @return dxQueryNodePageView
     */
    static public function PageView() {
        return new dxQueryNodePageView('PageView', null, null);
    }
    /**
     * @return dxQueryNodePasswordReset
     */
    static public function PasswordReset() {
        return new dxQueryNodePasswordReset('PasswordReset', null, null);
    }
    /**
     * @return dxQueryNodePhotoSubmission
     */
    static public function PhotoSubmission() {
        return new dxQueryNodePhotoSubmission('PhotoSubmission', null, null);
    }
    /**
     * @return dxQueryNodePushRegistration
     */
    static public function PushRegistration() {
        return new dxQueryNodePushRegistration('PushRegistration', null, null);
    }
    /**
     * @return dxQueryNodeRequestStatus
     */
    static public function RequestStatus() {
        return new dxQueryNodeRequestStatus('RequestStatus', null, null);
    }
    /**
     * @return dxQueryNodeStockPhotoRequest
     */
    static public function StockPhotoRequest() {
        return new dxQueryNodeStockPhotoRequest('StockPhotoRequest', null, null);
    }
    /**
     * @return dxQueryNodeUserRole
     */
    static public function UserRole() {
        return new dxQueryNodeUserRole('UserRole', null, null);
    }
}
// Shorthand for dxQueryN
class dxQN extends dxQueryN {}
?>