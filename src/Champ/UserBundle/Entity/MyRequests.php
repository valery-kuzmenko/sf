<?php

namespace Champ\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MyRequests
 * 
 * @ORM\Entity
 * @ORM\Table(name="user_requests")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"joinrequest" = "JoinTeam", "jointournament" = "JoinTournament", "inviteuser" = "InviteUser",
 *  "invitetournament" = "InviteTournament", "invitetraining" = "InviteTraining", "jointraining" = "JoinTraining"})
 */
class MyRequests extends Requests
{
    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status;   

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=true)
     */
    private $createdDate;
    
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
}
