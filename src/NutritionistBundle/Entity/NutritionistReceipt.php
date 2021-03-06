<?php

namespace NutritionistBundle\Entity;

/**
 * NutritionistReceipt
 */
class NutritionistReceipt
{
    /**
     * @var integer
     */
    private $idReceipt;

    /**
     * @var integer
     */
    private $idUser;

    /**
     * @var integer
     */
    private $idCustomer;

    /**
     * @var integer
     */
    private $idTransaction;

    /**
     * @var integer
     */
    private $idInvoice;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;


    /**
     * Get idReceipt
     *
     * @return integer
     */
    public function getIdReceipt()
    {
        return $this->idReceipt;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return NutritionistReceipt
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idCustomer
     *
     * @param integer $idCustomer
     *
     * @return NutritionistReceipt
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;

        return $this;
    }

    /**
     * Get idCustomer
     *
     * @return integer
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * Set idTransaction
     *
     * @param integer $idTransaction
     *
     * @return NutritionistReceipt
     */
    public function setIdTransaction($idTransaction)
    {
        $this->idTransaction = $idTransaction;

        return $this;
    }

    /**
     * Get idTransaction
     *
     * @return integer
     */
    public function getIdTransaction()
    {
        return $this->idTransaction;
    }

    /**
     * Set idInvoice
     *
     * @param integer $idInvoice
     *
     * @return NutritionistReceipt
     */
    public function setIdInvoice($idInvoice)
    {
        $this->idInvoice = $idInvoice;

        return $this;
    }

    /**
     * Get idInvoice
     *
     * @return integer
     */
    public function getIdInvoice()
    {
        return $this->idInvoice;
    }

    /**
     * Set amount
     *
     * @param float $amount
     *
     * @return NutritionistReceipt
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return NutritionistReceipt
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return NutritionistReceipt
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return NutritionistReceipt
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     *
     * @return NutritionistReceipt
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return \DateTime
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }
}
