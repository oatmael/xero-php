<?php

namespace XeroPHP\Models\Accounting;

use XeroPHP\Remote;

use XeroPHP\Models\Accounting\BankTransaction\LineItem;
use XeroPHP\Models\Accounting\CreditNote\Allocation;

class CreditNote extends Remote\Object {

    /**
     * An optional field to store a reference
     *
     * @property string Reference
     */

    /**
     * See Credit Note Types
     *
     * @property string Type
     */

    /**
     * See Contacts
     *
     * @property Contact Contact
     */

    /**
     * The date the credit note is created YYYY-MM-DD
     *
     * @property \DateTime Date
     */

    /**
     * See Invoice Status Codes
     *
     * @property string Status
     */

    /**
     * See Invoice Line Amount Types
     *
     * @property float[] LineAmountTypes
     */

    /**
     * See Invoice Line Items
     *
     * @property LineItem[] LineItems
     */

    /**
     * The subtotal of the credit note excluding taxes
     *
     * @property float SubTotal
     */

    /**
     * The total tax on the credit note
     *
     * @property float TotalTax
     */

    /**
     * The total of the Credit Note(subtotal + total tax)
     *
     * @property float Total
     */

    /**
     * UTC timestamp of last update to contact
     *
     * @property \DateTime UpdatedDateUTC
     */

    /**
     * Currency used for the Credit Note
     *
     * @property string CurrencyCode
     */

    /**
     * Date when credit note was fully paid(UTC format)
     *
     * @property \DateTime FullyPaidOnDate
     */

    /**
     * Xero generated unique identifier
     *
     * @property string CreditNoteID
     */

    /**
     * The user friendly unique identifier for a credit note e.g. CN 1001
     *
     * @property string CreditNoteNumber
     */

    /**
     * boolean to indicate if a credit note has been sent to a contact via the Xero app
     *
     * @property bool SentToContact
     */

    /**
     * The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used
     *
     * @property float CurrencyRate
     */

    /**
     * The remaining credit balance on the Credit Note
     *
     * @property string RemainingCredit
     */

    /**
     * See Allocations
     *
     * @property Allocation[] Allocations
     */

    /**
     * See BrandingThemes
     *
     * @property string BrandingThemeID
     */

    /**
     * boolean to indicate if a credit note has an attachment
     *
     * @property bool HasAttachments
     */


    const CREDIT_NOTE_TYPE_ACCPAYCREDIT = 'ACCPAYCREDIT'; 
    const CREDIT_NOTE_TYPE_ACCRECCREDIT = 'ACCRECCREDIT'; 


    /*
    * Get the resource uri of the class (Contacts) etc
    *
    * @return string
    */
    public static function getResourceURI(){
        return 'CreditNotes';
    }


    /*
    * Get the root node name.  Just the unqualified classname
    *
    * @return string
    */
    public static function getRootNodeName(){
        return 'CreditNote';
    }


    /*
    * Get the guid property
    *
    * @return string
    */
    public static function getGUIDProperty(){
        return 'CreditNoteID';
    }


    /**
    * Get the stem of the API (core.xro) etc
    *
    * @return string|null
    */
    public static function getAPIStem(){
        return Remote\URL::API_CORE;
    }


    /*
    * Get the supported methods
    */
    public static function getSupportedMethods(){
        return array(
            Remote\Request::METHOD_POST,
            Remote\Request::METHOD_PUT,
            Remote\Request::METHOD_GET
        );
    }

    /**
     *
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *
     * @return array
     */
    public static function getProperties(){
        return array(
            'Reference' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'Type' => array (false, self::PROPERTY_TYPE_ENUM, null, false),
            'Contact' => array (false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Contact', false),
            'Date' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false),
            'Status' => array (false, self::PROPERTY_TYPE_ENUM, null, false),
            'LineAmountTypes' => array (false, self::PROPERTY_TYPE_FLOAT, null, true),
            'LineItems' => array (false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\BankTransaction\\LineItem', true),
            'SubTotal' => array (false, self::PROPERTY_TYPE_FLOAT, null, false),
            'TotalTax' => array (false, self::PROPERTY_TYPE_FLOAT, null, false),
            'Total' => array (false, self::PROPERTY_TYPE_FLOAT, null, false),
            'UpdatedDateUTC' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false),
            'CurrencyCode' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'FullyPaidOnDate' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false),
            'CreditNoteID' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'CreditNoteNumber' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'SentToContact' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false),
            'CurrencyRate' => array (false, self::PROPERTY_TYPE_FLOAT, null, false),
            'RemainingCredit' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'Allocations' => array (false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\CreditNote\\Allocation', true),
            'BrandingThemeID' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'HasAttachments' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false)
        );
    }


    /**
     * @return string
     */
    public function getReference(){
        return $this->_data['Reference'];
    }

    /**
     * @param string $value
     * @return CreditNote
     */
    public function setReference($value){
        $this->propertyUpdated('Reference', $value);
        $this->_data['Reference'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(){
        return $this->_data['Type'];
    }

    /**
     * @param string $value
     * @return CreditNote
     */
    public function setType($value){
        $this->propertyUpdated('Type', $value);
        $this->_data['Type'] = $value;
        return $this;
    }

    /**
     * @return Contact
     */
    public function getContact(){
        return $this->_data['Contact'];
    }

    /**
     * @param Contact $value
     * @return CreditNote
     */
    public function setContact(Contact $value){
        $this->propertyUpdated('Contact', $value);
        $this->_data['Contact'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate(){
        return $this->_data['Date'];
    }

    /**
     * @param \DateTime $value
     * @return CreditNote
     */
    public function setDate(\DateTime $value){
        $this->propertyUpdated('Date', $value);
        $this->_data['Date'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(){
        return $this->_data['Status'];
    }

    /**
     * @param string $value
     * @return CreditNote
     */
    public function setStatus($value){
        $this->propertyUpdated('Status', $value);
        $this->_data['Status'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getLineAmountTypes(){
        return $this->_data['LineAmountTypes'];
    }

    /**
     * @param float[] $value
     * @return CreditNote
     */
    public function addLineAmountType($value){
        $this->propertyUpdated('LineAmountTypes', $value);
        $this->_data['LineAmountTypes'][] = $value;
        return $this;
    }

    /**
     * @return LineItem
     */
    public function getLineItems(){
        return $this->_data['LineItems'];
    }

    /**
     * @param LineItem[] $value
     * @return CreditNote
     */
    public function addLineItem(LineItem $value){
        $this->propertyUpdated('LineItems', $value);
        $this->_data['LineItems'][] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getSubTotal(){
        return $this->_data['SubTotal'];
    }

    /**
     * @param float $value
     * @return CreditNote
     */
    public function setSubTotal($value){
        $this->propertyUpdated('SubTotal', $value);
        $this->_data['SubTotal'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalTax(){
        return $this->_data['TotalTax'];
    }

    /**
     * @param float $value
     * @return CreditNote
     */
    public function setTotalTax($value){
        $this->propertyUpdated('TotalTax', $value);
        $this->_data['TotalTax'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotal(){
        return $this->_data['Total'];
    }

    /**
     * @param float $value
     * @return CreditNote
     */
    public function setTotal($value){
        $this->propertyUpdated('Total', $value);
        $this->_data['Total'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedDateUTC(){
        return $this->_data['UpdatedDateUTC'];
    }

    /**
     * @param \DateTime $value
     * @return CreditNote
     */
    public function setUpdatedDateUTC(\DateTime $value){
        $this->propertyUpdated('UpdatedDateUTC', $value);
        $this->_data['UpdatedDateUTC'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(){
        return $this->_data['CurrencyCode'];
    }

    /**
     * @param string $value
     * @return CreditNote
     */
    public function setCurrencyCode($value){
        $this->propertyUpdated('CurrencyCode', $value);
        $this->_data['CurrencyCode'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFullyPaidOnDate(){
        return $this->_data['FullyPaidOnDate'];
    }

    /**
     * @param \DateTime $value
     * @return CreditNote
     */
    public function setFullyPaidOnDate(\DateTime $value){
        $this->propertyUpdated('FullyPaidOnDate', $value);
        $this->_data['FullyPaidOnDate'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreditNoteID(){
        return $this->_data['CreditNoteID'];
    }

    /**
     * @param string $value
     * @return CreditNote
     */
    public function setCreditNoteID($value){
        $this->propertyUpdated('CreditNoteID', $value);
        $this->_data['CreditNoteID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreditNoteNumber(){
        return $this->_data['CreditNoteNumber'];
    }

    /**
     * @param string $value
     * @return CreditNote
     */
    public function setCreditNoteNumber($value){
        $this->propertyUpdated('CreditNoteNumber', $value);
        $this->_data['CreditNoteNumber'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSentToContact(){
        return $this->_data['SentToContact'];
    }

    /**
     * @param bool $value
     * @return CreditNote
     */
    public function setSentToContact($value){
        $this->propertyUpdated('SentToContact', $value);
        $this->_data['SentToContact'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getCurrencyRate(){
        return $this->_data['CurrencyRate'];
    }

    /**
     * @param float $value
     * @return CreditNote
     */
    public function setCurrencyRate($value){
        $this->propertyUpdated('CurrencyRate', $value);
        $this->_data['CurrencyRate'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemainingCredit(){
        return $this->_data['RemainingCredit'];
    }

    /**
     * @param string $value
     * @return CreditNote
     */
    public function setRemainingCredit($value){
        $this->propertyUpdated('RemainingCredit', $value);
        $this->_data['RemainingCredit'] = $value;
        return $this;
    }

    /**
     * @return Allocation
     */
    public function getAllocations(){
        return $this->_data['Allocations'];
    }

    /**
     * @param Allocation[] $value
     * @return CreditNote
     */
    public function addAllocation(Allocation $value){
        $this->propertyUpdated('Allocations', $value);
        $this->_data['Allocations'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrandingThemeID(){
        return $this->_data['BrandingThemeID'];
    }

    /**
     * @param string $value
     * @return CreditNote
     */
    public function setBrandingThemeID($value){
        $this->propertyUpdated('BrandingThemeID', $value);
        $this->_data['BrandingThemeID'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasAttachments(){
        return $this->_data['HasAttachments'];
    }

    /**
     * @param bool $value
     * @return CreditNote
     */
    public function setHasAttachment($value){
        $this->propertyUpdated('HasAttachments', $value);
        $this->_data['HasAttachments'] = $value;
        return $this;
    }


}