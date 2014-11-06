<?php

namespace Champ\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 *
 * @ORM\Table(name="messages", indexes={@ORM\Index(name="fk_messages_user1_idx", columns={"user_id"}), @ORM\Index(name="fk_messages_team1_idx", columns={"team_id"})})
 * @ORM\Entity
 */
class Messages
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
     * @ORM\Column(name="message", type="text", nullable=true)
     */
    private $message;

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
     * Set message
     *
     * @param string $message
     * @return Messages
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
     * Set User
     *
     * @param \Champ\UserBundle\Entity\User $User
     * @return Messages
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
     * @return Messages
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
