<?php
namespace Champ\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FindTeam<br>
 * Request which user sends when it finds new team.
 * 
 * @ORM\Entity
 */
class FindTeam extends Requests {
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_from", type="datetime", nullable=true)
     */
    protected  $dateFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_to", type="datetime", nullable=true)
     */
    protected  $dateTo;
    
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

