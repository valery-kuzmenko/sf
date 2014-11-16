<?php
namespace Champ\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FindUser<br>
 * Request which team sends when it finds new player.
 * 
 * @ORM\Entity
 */
class FindUser extends Notifications {    
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
     * Get sport
     *
     * @return \Champ\UserBundle\Entity\Sport 
     */
    public function getSport()
    {
        return $this->sport;
    }     
}

