<?php

namespace Portrino\PxSemantic\SchemaOrg;

/**
 * A contact point—for example, a Customer Complaints department.
 *
 * @see http://schema.org/ContactPoint Documentation on Schema.org
 *
 * @author Andre Wuttig<wuttig@portrino.de>
 */
class ContactPoint extends StructuredValue {

    /**
     * @var string The geographic area where a service or offered item is provided.
     */
    private $areaServed;

    /**
     * @var Language A language someone may use with the item.
     */
    private $availableLanguage;

    /**
     * @var string A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact point and so on. This property is used to specify the kind of contact point.
     */
    private $contactType;

    /**
     * @var string Email address.
     */
    private $email;

    /**
     * @var string The fax number.
     */
    private $faxNumber;

    /**
     * @var string The telephone number.
     */
    private $telephone;

    /**
     * Sets areaServed.
     *
     * @param string $areaServed
     *
     * @return $this
     */
    public function setAreaServed($areaServed) {
        $this->areaServed = $areaServed;

        return $this;
    }

    /**
     * Gets areaServed.
     *
     * @return string
     */
    public function getAreaServed() {
        return $this->areaServed;
    }

    /**
     * Sets availableLanguage.
     *
     * @param Language $availableLanguage
     *
     * @return $this
     */
    public function setAvailableLanguage(Language $availableLanguage = NULL) {
        $this->availableLanguage = $availableLanguage;

        return $this;
    }

    /**
     * Gets availableLanguage.
     *
     * @return Language
     */
    public function getAvailableLanguage() {
        return $this->availableLanguage;
    }

    /**
     * Sets contactType.
     *
     * @param string $contactType
     *
     * @return $this
     */
    public function setContactType($contactType) {
        $this->contactType = $contactType;

        return $this;
    }

    /**
     * Gets contactType.
     *
     * @return string
     */
    public function getContactType() {
        return $this->contactType;
    }

    /**
     * Sets email.
     *
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets email.
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Sets faxNumber.
     *
     * @param string $faxNumber
     *
     * @return $this
     */
    public function setFaxNumber($faxNumber) {
        $this->faxNumber = $faxNumber;

        return $this;
    }

    /**
     * Gets faxNumber.
     *
     * @return string
     */
    public function getFaxNumber() {
        return $this->faxNumber;
    }

    /**
     * Sets telephone.
     *
     * @param string $telephone
     *
     * @return $this
     */
    public function setTelephone($telephone) {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Gets telephone.
     *
     * @return string
     */
    public function getTelephone() {
        return $this->telephone;
    }
}
