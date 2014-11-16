<?php

namespace Champ\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InviteTraining
 *
 * @ORM\Entity
 */
class InviteTraining extends MyRequests
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

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
     * Set date
     *
     * @param \DateTime $date
     * @return SingleTrainings
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
     * Set training
     *
     * @param \Champ\UserBundle\Entity\Training $training
     * @return SingleTrainings
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
