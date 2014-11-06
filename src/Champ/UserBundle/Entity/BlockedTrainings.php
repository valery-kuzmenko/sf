<?php

namespace Champ\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlockedTrainings
 *
 * @ORM\Table(name="blocked_trainings", indexes={@ORM\Index(name="fk_training_id_idx", columns={"training_id"})})
 * @ORM\Entity
 */
class BlockedTrainings
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="blocked_day", type="string", length=10, nullable=false)
     */
    private $blockedDay;

    /**
     * @var \Training
     *
     * @ORM\ManyToOne(targetEntity="Training")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="training_id", referencedColumnName="id")
     * })
     */
    private $training;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return BlockedTrainings
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
     * Set blockedDay
     *
     * @param string $blockedDay
     * @return BlockedTrainings
     */
    public function setBlockedDay($blockedDay)
    {
        $this->blockedDay = $blockedDay;

        return $this;
    }

    /**
     * Get blockedDay
     *
     * @return string 
     */
    public function getBlockedDay()
    {
        return $this->blockedDay;
    }

    /**
     * Set training
     *
     * @param \Champ\UserBundle\Entity\Training $training
     * @return BlockedTrainings
     */
    public function setTraining(\Champ\UserBundle\Entity\Training $training = null)
    {
        $this->training = $training;

        return $this;
    }

    /**
     * Get training
     *
     * @return \Champ\UserBundle\Entity\Training 
     */
    public function getTraining()
    {
        return $this->training;
    }
}
