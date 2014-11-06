<?php

namespace Champ\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Requests
 *
 * @ORM\Table(name="requests")
 * @ORM\Entity
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"joinrequest" = "JoinTeam", "jointournament" = "JoinTournament", "inviteuser" = "InviteUser",
 *  "invitetournament" = "InviteTournament", "refusetournament" = "RefuseTournament", "refusetraining" = "RefuseTraining"
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
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="discr", type="string", length=45, nullable=false)
     */
    private $discr;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=true)
     */
    private $message;

    /**
     * @var boolean
     *
     * @ORM\Column(name="approved", type="boolean", nullable=true)
     */
    private $approved;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $UserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="team_id", type="integer", nullable=true)
     */
    private $teamId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tournament_id", type="integer", nullable=true)
     */
    private $tournamentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tournament_owner_id", type="integer", nullable=true)
     */
    private $tournamentOwnerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="training_id", type="integer", nullable=true)
     */
    private $trainingId;

    /**
     * @var string
     *
     * @ORM\Column(name="day", type="string", length=10, nullable=true)
     */
    private $day;

    /**
     * @var integer
     *
     * @ORM\Column(name="sport_id", type="integer", nullable=true)
     */
    private $sportId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_from", type="datetime", nullable=true)
     */
    private $dateFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_to", type="datetime", nullable=true)
     */
    private $dateTo;



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
     * Set UserId
     *
     * @param integer $UserId
     * @return Requests
     */
    public function setUserId($UserId)
    {
        $this->UserId = $UserId;

        return $this;
    }

    /**
     * Get UserId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->UserId;
    }

    /**
     * Set teamId
     *
     * @param integer $teamId
     * @return Requests
     */
    public function setTeamId($teamId)
    {
        $this->teamId = $teamId;

        return $this;
    }

    /**
     * Get teamId
     *
     * @return integer 
     */
    public function getTeamId()
    {
        return $this->teamId;
    }

    /**
     * Set tournamentId
     *
     * @param integer $tournamentId
     * @return Requests
     */
    public function setTournamentId($tournamentId)
    {
        $this->tournamentId = $tournamentId;

        return $this;
    }

    /**
     * Get tournamentId
     *
     * @return integer 
     */
    public function getTournamentId()
    {
        return $this->tournamentId;
    }

    /**
     * Set tournamentOwnerId
     *
     * @param integer $tournamentOwnerId
     * @return Requests
     */
    public function setTournamentOwnerId($tournamentOwnerId)
    {
        $this->tournamentOwnerId = $tournamentOwnerId;

        return $this;
    }

    /**
     * Get tournamentOwnerId
     *
     * @return integer 
     */
    public function getTournamentOwnerId()
    {
        return $this->tournamentOwnerId;
    }

    /**
     * Set trainingId
     *
     * @param integer $trainingId
     * @return Requests
     */
    public function setTrainingId($trainingId)
    {
        $this->trainingId = $trainingId;

        return $this;
    }

    /**
     * Get trainingId
     *
     * @return integer 
     */
    public function getTrainingId()
    {
        return $this->trainingId;
    }

    /**
     * Set day
     *
     * @param string $day
     * @return Requests
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return string 
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set sportId
     *
     * @param integer $sportId
     * @return Requests
     */
    public function setSportId($sportId)
    {
        $this->sportId = $sportId;

        return $this;
    }

    /**
     * Get sportId
     *
     * @return integer 
     */
    public function getSportId()
    {
        return $this->sportId;
    }

    /**
     * Set dateFrom
     *
     * @param \DateTime $dateFrom
     * @return Requests
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Get dateFrom
     *
     * @return \DateTime 
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Set dateTo
     *
     * @param \DateTime $dateTo
     * @return Requests
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;

        return $this;
    }

    /**
     * Get dateTo
     *
     * @return \DateTime 
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }
}
