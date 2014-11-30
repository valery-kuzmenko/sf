<?php
namespace Champ\UserBundle\Entity;

use Doctrine\Orm\Mapping as ORM;

/**
 * TournamentPeriod
 * 
 * @ORM\Table(name="tournament_period")
 * @ORM\Entity
 */
class TournamentPeriod {
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
     * @var \Tournament
     *
     * @ORM\ManyToOne(targetEntity="Tournament", inversedBy="period")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tournament_id", referencedColumnName="id")
     * })
     */
    protected  $tournament;    
    
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
     * Set dateFrom
     *
     * @param \DateTime $dateFrom
     * @return Training
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
     * @return Training
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
