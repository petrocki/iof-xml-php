<?php

namespace Petrocki\IofXmlPhp\Model;

/**
 * Class representing AssignedFeeType
 *
 * Contains information about a fee that has been assigned to a competitor or a team, and the amount that has been paid.
 * XSD Type: AssignedFee
 */
class AssignedFeeType
{
    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * The fee that has been assigned to the competitor or the team.
     *
     * @var \Petrocki\IofXmlPhp\Model\FeeType $fee
     */
    private $fee = null;

    /**
     * The amount that has been paid, optionally including currency code.
     *
     * @var \Petrocki\IofXmlPhp\Model\AmountType $paidAmount
     */
    private $paidAmount = null;

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

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
     * Gets as fee
     *
     * The fee that has been assigned to the competitor or the team.
     *
     * @return \Petrocki\IofXmlPhp\Model\FeeType
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * The fee that has been assigned to the competitor or the team.
     *
     * @param \Petrocki\IofXmlPhp\Model\FeeType $fee
     * @return self
     */
    public function setFee(\Petrocki\IofXmlPhp\Model\FeeType $fee)
    {
        $this->fee = $fee;
        return $this;
    }

    /**
     * Gets as paidAmount
     *
     * The amount that has been paid, optionally including currency code.
     *
     * @return \Petrocki\IofXmlPhp\Model\AmountType
     */
    public function getPaidAmount()
    {
        return $this->paidAmount;
    }

    /**
     * Sets a new paidAmount
     *
     * The amount that has been paid, optionally including currency code.
     *
     * @param \Petrocki\IofXmlPhp\Model\AmountType $paidAmount
     * @return self
     */
    public function setPaidAmount(?\Petrocki\IofXmlPhp\Model\AmountType $paidAmount = null)
    {
        $this->paidAmount = $paidAmount;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * Container element for custom elements from other schemas.
     *
     * @return \Petrocki\IofXmlPhp\Model\ExtensionsType
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
     * @param \Petrocki\IofXmlPhp\Model\ExtensionsType $extensions
     * @return self
     */
    public function setExtensions(?\Petrocki\IofXmlPhp\Model\ExtensionsType $extensions = null)
    {
        $this->extensions = $extensions;
        return $this;
    }
}

