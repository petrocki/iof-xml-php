<?php

namespace IofXmlPhp\Model;

/**
 * Class representing EntryReceiverType
 *
 *
 * XSD Type: EntryReceiver
 */
class EntryReceiverType
{
    /**
     * @var \IofXmlPhp\Model\AddressType[] $address
     */
    private $address = [
        
    ];

    /**
     * @var \IofXmlPhp\Model\ContactType[] $contact
     */
    private $contact = [
        
    ];

    /**
     * Adds as address
     *
     * @return self
     * @param \IofXmlPhp\Model\AddressType $address
     */
    public function addToAddress(\IofXmlPhp\Model\AddressType $address)
    {
        $this->address[] = $address;
        return $this;
    }

    /**
     * isset address
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddress($index)
    {
        return isset($this->address[$index]);
    }

    /**
     * unset address
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddress($index)
    {
        unset($this->address[$index]);
    }

    /**
     * Gets as address
     *
     * @return \IofXmlPhp\Model\AddressType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \IofXmlPhp\Model\AddressType[] $address
     * @return self
     */
    public function setAddress(?array $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Adds as contact
     *
     * @return self
     * @param \IofXmlPhp\Model\ContactType $contact
     */
    public function addToContact(\IofXmlPhp\Model\ContactType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContact($index)
    {
        return isset($this->contact[$index]);
    }

    /**
     * unset contact
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContact($index)
    {
        unset($this->contact[$index]);
    }

    /**
     * Gets as contact
     *
     * @return \IofXmlPhp\Model\ContactType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * @param \IofXmlPhp\Model\ContactType[] $contact
     * @return self
     */
    public function setContact(?array $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }
}

