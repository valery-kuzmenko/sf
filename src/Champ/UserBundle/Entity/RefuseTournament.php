<?php
namespace Champ\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefuseTournament<br>
 * Request which team sends to refuse from tournament.
 * 
 * @ORM\Entity
 */
class RefuseTournament extends Notifications {
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
}

