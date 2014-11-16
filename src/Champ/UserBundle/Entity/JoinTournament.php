<?php
namespace Champ\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JoinTournament<br>
 * Requests which team sends to join to tournament.
 * 
 * @ORM\Entity
 */
class JoinTournament extends MyRequests {
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
    
}