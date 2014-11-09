<?php

namespace Champ\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Requests
 * 
 * @ORM\Entity
 * @ORM\Table(name="requests")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"joinrequest" = "JoinTeam", "jointournament" = "JoinTournament", "inviteuser" = "InviteUser",
 *  "invitetournament" = "InviteTournament", "refusetournament" = "RefuseTournament", "refusetraining" = "RefuseTraining",
 *	"finduser" = "FindUser", "findteam" = "FindTeam"})
 */
class Requests
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected  $id;



    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=true)
     */
    protected  $message;

    /**
     * @var boolean
     *
     * @ORM\Column(name="approved", type="boolean", nullable=true)
     */
    protected  $approved;

    /**
     * @var \User
     * 
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    protected  $user;

    /**
     * @var \Team
     *
     * @ORM\ManyToOne(targetEntity="Team")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_id", referencedColumnName="id")
     * })
     */
    protected  $team;

    /**
     * @var \Tournament
     *
     * @ORM\ManyToOne(targetEntity="Tournament")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tournament_id", referencedColumnName="id")
     * })
     */
    protected  $tournament;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *    @ORM\JoinColumn(name="tournament_owner_id", referencedColumnName="id")  
     * })
     */
    protected  $tournamentOwner;

    /**
     * @var \Sport
     *
     * @ORM\ManyToOne(targetEntity="Sport")
     * @ORM\JoinColumns({
     *    @ORM\JoinColumn(name="sport_id", referencedColumnName="id")  
     * })
     */
    protected  $sport;

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
     * Set discr
     *
     * @param string $discr
     * @return Requests
     */
    public function setDiscr($discr)
    {
        $this->discr = $discr;

        return $this;
    }

    /**
     * Get discr
     *
     * @return string 
     */
    public function getDiscr()
    {
        return $this->discr;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Requests
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set approved
     *
     * @param boolean $approved
     * @return Requests
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * Get approved
     *
     * @return boolean 
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * Set User
     *
     * @param c $user
     * @return Requests
     */
    public function setUser(\Champ\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get User
     *
     * @return \Champ\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set team
     *
     * @param \Champ\UserBundle\Entity\Team $team
     * @return Requests
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

    /**
     * Set tournament
     *
     * @param \Champ\UserBundle\Entity\Tournament $tournament
     * @return Requests
     */
    public function setTournament(\Champ\UserBundle\Entity\Tournament $tournament = null)
    {
        $this->tournament = $tournament;

        return $this;
    }

    /**
     * Get tournament
     *
     * @return \Champ\UserBundle\Entity\Tournament 
     */
    public function getTournament()
    {
        return $this->tournament;
    }

    /**
     * Set tournamentOwner
     *
     * @param \Champ\UserBundle\Entity\User $tournamentOwner
     * @return Requests
     */
    public function setTournamentOwner(\Champ\UserBundle\Entity\User $tournamentOwner = null)
    {
        $this->tournamentOwner = $tournamentOwner;

        return $this;
    }

    /**
     * Get tournamentOwner
     *
     * @return \Champ\UserBundle\Entity\User 
     */
    public function getTournamentOwner()
    {
        return $this->tournamentOwner;
    }

    /**
     * Set sport
     *
     * @param \Champ\UserBundle\Entity\Sport $sport
     * @return Requests
     */
    public function setSport(\Champ\UserBundle\Entity\Sport $sport = null)
    {
        $this->sport = $sport;

        return $this;
    }

    /**
     * Get sportId
     *
     * @return \Champ\UserBundle\Entity\Sport 
     */
    public function getSport()
    {
        return $this->sport;
    }
}
