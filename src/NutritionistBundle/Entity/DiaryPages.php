<?php

namespace NutritionistBundle\Entity;

/**
 * DiaryPages
 */
class DiaryPages
{
    /**
     * @var integer
     */
    private $idDiaryPage;

    /**
     * @var integer
     */
    private $idUser;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $tasks;

    /**
     * @var string
     */
    private $events;

    /**
     * @var string
     */
    private $memosAndNotes;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;


    /**
     * Get idDiaryPage
     *
     * @return integer
     */
    public function getIdDiaryPage()
    {
        return $this->idDiaryPage;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return DiaryPages
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return DiaryPages
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
     * Set tasks
     *
     * @param string $tasks
     *
     * @return DiaryPages
     */
    public function setTasks($tasks)
    {
        $this->tasks = $tasks;

        return $this;
    }

    /**
     * Get tasks
     *
     * @return string
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * Set events
     *
     * @param string $events
     *
     * @return DiaryPages
     */
    public function setEvents($events)
    {
        $this->events = $events;

        return $this;
    }

    /**
     * Get events
     *
     * @return string
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Set memosAndNotes
     *
     * @param string $memosAndNotes
     *
     * @return DiaryPages
     */
    public function setMemosAndNotes($memosAndNotes)
    {
        $this->memosAndNotes = $memosAndNotes;

        return $this;
    }

    /**
     * Get memosAndNotes
     *
     * @return string
     */
    public function getMemosAndNotes()
    {
        return $this->memosAndNotes;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return DiaryPages
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
     * @return DiaryPages
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
