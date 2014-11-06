<?php

namespace Champ\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SingleTrainings
 *
 * @ORM\Table(name="single_trainings", indexes={@ORM\Index(name="fk_trainings_user1_idx", columns={"user_id"}), @ORM\Index(name="fk_trainings_team1_idx", columns={"team_id"}), @ORM\Index(name="fk_single_trainings_training1_idx", columns={"training_id"})})
 * @ORM\Entity
 */
class SingleTrainings
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
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status;

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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $User;

    /**
     * @var \Team
     *
     * @ORM\ManyToOne(targetEntity="Team")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_id", referencedColumnName="id")
     * })
     */
    private $team;



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
     * Set status
     *
     * @param string $status
     * @return SingleTrainings
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

    /**
     * Set User
     *
     * @param \Champ\UserBundle\Entity\User $User
     * @return SingleTrainings
     */
    public function setUser(\Champ\UserBundle\Entity\User $User = null)
    {
        $this->User = $User;

        return $this;
    }

    /**
     * Get User
     *
     * @return \Champ\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * Set team
     *
     * @param \Champ\UserBundle\Entity\Team $team
     * @return SingleTrainings
     */
    public function setTeam(\Champ\UserBundle\Entity\Team $team = null)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return \Champ\UserBundle\Entity\Team 
     */
    public function getTeam()
    {
        return $this->team;
    }
}
