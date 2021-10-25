<?php

namespace NutritionistBundle\Entity;

/**
 * CustomerMetrics
 */
class CustomerMetrics
{
    /**
     * @var integer
     */
    private $idCustomerMetrics;

    /**
     * @var integer
     */
    private $idCustomer;

    /**
     * @var float
     */
    private $weight;

    /**
     * @var float
     */
    private $height;

    /**
     * @var integer
     */
    private $age;

    /**
     * @var string
     */
    private $movement;

    /**
     * @var \DateTime
     */
    private $dateAdd;


    /**
     * Get idCustomerMetrics
     *
     * @return integer
     */
    public function getIdCustomerMetrics()
    {
        return $this->idCustomerMetrics;
    }

    /**
     * Set idCustomer
     *
     * @param integer $idCustomer
     *
     * @return CustomerMetrics
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
     * Set weight
     *
     * @param float $weight
     *
     * @return CustomerMetrics
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set height
     *
     * @param float $height
     *
     * @return CustomerMetrics
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return CustomerMetrics
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set movement
     *
     * @param string $movement
     *
     * @return CustomerMetrics
     */
    public function setMovement($movement)
    {
        $this->movement = $movement;

        return $this;
    }

    /**
     * Get movement
     *
     * @return string
     */
    public function getMovement()
    {
        return $this->movement;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return CustomerMetrics
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
}
