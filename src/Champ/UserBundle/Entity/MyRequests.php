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
 *  "invitetournament" = "InviteTournament"})
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
}
