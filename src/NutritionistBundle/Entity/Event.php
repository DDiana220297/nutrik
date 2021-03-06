<?php

namespace NutritionistBundle\Entity;

/**
 * Event
 */
class Event
{
    /**
     * @var integer
     */
    private $idEvent;

    /**
     * @var integer
     */
    private $idUser;

    /**
     * @var integer
     */
    private $idCategory;

    /**
     * @var integer
     */
    private $idTag;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $eventLink;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $frecuency = 'puntual';

    /**
     * @var integer
     */
    private $duration;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;


    /**
     * Get idEvent
     *
     * @return integer
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Event
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
     * Set idCategory
     *
     * @param integer $idCategory
     *
     * @return Event
     */
    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    /**
     * Get idCategory
     *
     * @return integer
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * Set idTag
     *
     * @param integer $idTag
     *
     * @return Event
     */
    public function setIdTag($idTag)
    {
        $this->idTag = $idTag;

        return $this;
    }

    /**
     * Get idTag
     *
     * @return integer
     */
    public function getIdTag()
    {
        return $this->idTag;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Event
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Event
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
     * Set eventLink
     *
     * @param string $eventLink
     *
     * @return Event
     */
    public function setEventLink($eventLink)
    {
        $this->eventLink = $eventLink;

        return $this;
    }

    /**
     * Get eventLink
     *
     * @return string
     */
    public function getEventLink()
    {
        return $this->eventLink;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Event
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set frecuency
     *
     * @param string $frecuency
     *
     * @return Event
     */
    public function setFrecuency($frecuency)
    {
        $this->frecuency = $frecuency;

        return $this;
    }

    /**
     * Get frecuency
     *
     * @return string
     */
    public function getFrecuency()
    {
        return $this->frecuency;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Event
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
     * @return Event
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

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }
}
