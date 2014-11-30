<?php

namespace Champ\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tournament
 *
 * @ORM\Table(name="tournament", indexes={@ORM\Index(name="fk_user_id_idx", columns={"user_id"})})
 * @ORM\Entity
 */
class Tournament
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
     * @ORM\Column(name="created_date", type="datetime", nullable=true)
     */
    private $createdDate;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Team", mappedBy="tournament")
     */
    private $team;
    
    
    /**
     * @var \TournamentPeriod
     * 
     * @ORM\OneToMany(targetEntity="TournamentPeriod", mappedBy="tournament")
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="tournament_id", referencedColumnName="id")
     * })
     */
    private $period;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->team = new \Doctrine\Common\Collections\ArrayCollection();
        $this->period = new \Doctrine\Comon\Collections\ArrayCollection();
    }


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
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Tournament
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime 
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set User
     *
     * @param \Champ\UserBundle\Entity\User $User
     * @return Tournament
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
     * Add team
     *
     * @param \Champ\UserBundle\Entity\Team $team
     * @return Tournament
     */
    public function addTeam(\Champ\UserBundle\Entity\Team $team)
    {
        $this->team[] = $team;

        return $this;
    }

    /**
     * Remove team
     *
     * @param \Champ\UserBundle\Entity\Team $team
     */
    public function removeTeam(\Champ\UserBundle\Entity\Team $team)
    {
        $this->team->removeElement($team);
    }

    /**
     * Get team
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Add Tournament Period
     *
     * @param \Champ\UserBundle\Entity\TournamentPeriod $period
     * @return Tournament
     */
    public function addPeriod(\Champ\UserBundle\Entity\TournamentPeriod $period)
    {
        $this->period[] = $period;

        return $this;
    }

    /**
     * Remove Tournament Period
     *
     * @param \Champ\UserBundle\Entity\TournamentPeriod $period
     */
    public function removePeriod(\Champ\UserBundle\Entity\TournamentPeriod $period)
    {
        $this->period->removeElement($period);
    }

    /**
     * Get Tournament Periods
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPeriod()
    {
        return $this->period;
    }
}
