<?php

namespace IofXmlPhp\Model;

/**
 * Class representing FeeType
 *
 * A fee that applies when entering a class at a race or ordering a service.
 * XSD Type: Fee
 */
class FeeType
{
    /**
     * The type of fee.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * @var \IofXmlPhp\Model\IdType $id
     */
    private $id = null;

    /**
     * A describing name of the fee, e.g. 'Late entry fee'.
     *
     * @var \IofXmlPhp\Model\LanguageStringType[] $name
     */
    private $name = [
        
    ];

    /**
     * The fee amount, optionally including currency code. This element must not be present if a Percentage element exists.
     *
     * @var \IofXmlPhp\Model\AmountType $amount
     */
    private $amount = null;

    /**
     * The fee amount that is taxable, i.e. considered when calculating taxes for an event. This element must not be present if a Percentage element exists, or if an Amount element does not exist.
     *
     * @var \IofXmlPhp\Model\AmountType $taxableAmount
     */
    private $taxableAmount = null;

    /**
     * The percentage to increase or decrease already existing fees in a fee list with. This element must not be present if an Amount element exists.
     *
     * @var float $percentage
     */
    private $percentage = null;

    /**
     * The percentage to increase or decrease already existing taxable fees in a fee list with. This element must not be present if an Amount element exists, or if a Percentage element does not exist.
     *
     * @var float $taxablePercentage
     */
    private $taxablePercentage = null;

    /**
     * The time when the fee takes effect.
     *
     * @var \DateTime $validFromTime
     */
    private $validFromTime = null;

    /**
     * The time when the fee expires.
     *
     * @var \DateTime $validToTime
     */
    private $validToTime = null;

    /**
     * The start of the birth date interval that the fee should be applied to. Omit if no lower birth date restriction.
     *
     * @var \DateTime $fromDateOfBirth
     */
    private $fromDateOfBirth = null;

    /**
     * The end of the birth date interval that the fee should be applied to. Omit if no upper birth date restriction.
     *
     * @var \DateTime $toDateOfBirth
     */
    private $toDateOfBirth = null;

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as type
     *
     * The type of fee.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of fee.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as modifyTime
     *
     * @return \DateTime
     */
    public function getModifyTime()
    {
        return $this->modifyTime;
    }

    /**
     * Sets a new modifyTime
     *
     * @param \DateTime $modifyTime
     * @return self
     */
    public function setModifyTime(\DateTime $modifyTime)
    {
        $this->modifyTime = $modifyTime;
        return $this;
    }

    /**
     * Gets as id
     *
     * @return \IofXmlPhp\Model\IdType
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param \IofXmlPhp\Model\IdType $id
     * @return self
     */
    public function setId(?\IofXmlPhp\Model\IdType $id = null)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Adds as name
     *
     * A describing name of the fee, e.g. 'Late entry fee'.
     *
     * @return self
     * @param \IofXmlPhp\Model\LanguageStringType $name
     */
    public function addToName(\IofXmlPhp\Model\LanguageStringType $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * isset name
     *
     * A describing name of the fee, e.g. 'Late entry fee'.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * A describing name of the fee, e.g. 'Late entry fee'.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * A describing name of the fee, e.g. 'Late entry fee'.
     *
     * @return \IofXmlPhp\Model\LanguageStringType[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A describing name of the fee, e.g. 'Late entry fee'.
     *
     * @param \IofXmlPhp\Model\LanguageStringType[] $name
     * @return self
     */
    public function setName(array $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as amount
     *
     * The fee amount, optionally including currency code. This element must not be present if a Percentage element exists.
     *
     * @return \IofXmlPhp\Model\AmountType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * The fee amount, optionally including currency code. This element must not be present if a Percentage element exists.
     *
     * @param \IofXmlPhp\Model\AmountType $amount
     * @return self
     */
    public function setAmount(?\IofXmlPhp\Model\AmountType $amount = null)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as taxableAmount
     *
     * The fee amount that is taxable, i.e. considered when calculating taxes for an event. This element must not be present if a Percentage element exists, or if an Amount element does not exist.
     *
     * @return \IofXmlPhp\Model\AmountType
     */
    public function getTaxableAmount()
    {
        return $this->taxableAmount;
    }

    /**
     * Sets a new taxableAmount
     *
     * The fee amount that is taxable, i.e. considered when calculating taxes for an event. This element must not be present if a Percentage element exists, or if an Amount element does not exist.
     *
     * @param \IofXmlPhp\Model\AmountType $taxableAmount
     * @return self
     */
    public function setTaxableAmount(?\IofXmlPhp\Model\AmountType $taxableAmount = null)
    {
        $this->taxableAmount = $taxableAmount;
        return $this;
    }

    /**
     * Gets as percentage
     *
     * The percentage to increase or decrease already existing fees in a fee list with. This element must not be present if an Amount element exists.
     *
     * @return float
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Sets a new percentage
     *
     * The percentage to increase or decrease already existing fees in a fee list with. This element must not be present if an Amount element exists.
     *
     * @param float $percentage
     * @return self
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
        return $this;
    }

    /**
     * Gets as taxablePercentage
     *
     * The percentage to increase or decrease already existing taxable fees in a fee list with. This element must not be present if an Amount element exists, or if a Percentage element does not exist.
     *
     * @return float
     */
    public function getTaxablePercentage()
    {
        return $this->taxablePercentage;
    }

    /**
     * Sets a new taxablePercentage
     *
     * The percentage to increase or decrease already existing taxable fees in a fee list with. This element must not be present if an Amount element exists, or if a Percentage element does not exist.
     *
     * @param float $taxablePercentage
     * @return self
     */
    public function setTaxablePercentage($taxablePercentage)
    {
        $this->taxablePercentage = $taxablePercentage;
        return $this;
    }

    /**
     * Gets as validFromTime
     *
     * The time when the fee takes effect.
     *
     * @return \DateTime
     */
    public function getValidFromTime()
    {
        return $this->validFromTime;
    }

    /**
     * Sets a new validFromTime
     *
     * The time when the fee takes effect.
     *
     * @param \DateTime $validFromTime
     * @return self
     */
    public function setValidFromTime(?\DateTime $validFromTime = null)
    {
        $this->validFromTime = $validFromTime;
        return $this;
    }

    /**
     * Gets as validToTime
     *
     * The time when the fee expires.
     *
     * @return \DateTime
     */
    public function getValidToTime()
    {
        return $this->validToTime;
    }

    /**
     * Sets a new validToTime
     *
     * The time when the fee expires.
     *
     * @param \DateTime $validToTime
     * @return self
     */
    public function setValidToTime(?\DateTime $validToTime = null)
    {
        $this->validToTime = $validToTime;
        return $this;
    }

    /**
     * Gets as fromDateOfBirth
     *
     * The start of the birth date interval that the fee should be applied to. Omit if no lower birth date restriction.
     *
     * @return \DateTime
     */
    public function getFromDateOfBirth()
    {
        return $this->fromDateOfBirth;
    }

    /**
     * Sets a new fromDateOfBirth
     *
     * The start of the birth date interval that the fee should be applied to. Omit if no lower birth date restriction.
     *
     * @param \DateTime $fromDateOfBirth
     * @return self
     */
    public function setFromDateOfBirth(?\DateTime $fromDateOfBirth = null)
    {
        $this->fromDateOfBirth = $fromDateOfBirth;
        return $this;
    }

    /**
     * Gets as toDateOfBirth
     *
     * The end of the birth date interval that the fee should be applied to. Omit if no upper birth date restriction.
     *
     * @return \DateTime
     */
    public function getToDateOfBirth()
    {
        return $this->toDateOfBirth;
    }

    /**
     * Sets a new toDateOfBirth
     *
     * The end of the birth date interval that the fee should be applied to. Omit if no upper birth date restriction.
     *
     * @param \DateTime $toDateOfBirth
     * @return self
     */
    public function setToDateOfBirth(?\DateTime $toDateOfBirth = null)
    {
        $this->toDateOfBirth = $toDateOfBirth;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * Container element for custom elements from other schemas.
     *
     * @return \IofXmlPhp\Model\ExtensionsType
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * Container element for custom elements from other schemas.
     *
     * @param \IofXmlPhp\Model\ExtensionsType $extensions
     * @return self
     */
    public function setExtensions(?\IofXmlPhp\Model\ExtensionsType $extensions = null)
    {
        $this->extensions = $extensions;
        return $this;
    }
}

