<?php
namespace Champ\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefuseTraining<br>
 * Request which user sends to refuse training.
 * 
 * @ORM\Entity
 */
class RefuseTraining extends Requests {
    /**
     * @var \Training
     *
     * @ORM\ManyToOne(targetEntity="Training")
     * @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="training_id", referencedColumnName="id")
     * })
     */
    protected  $training;

    /**
     * @var string
     *
     * @ORM\Column(name="day", type="string", length=10, nullable=true)
     */
    protected  $day;
    
    /**
     * Set training
     *
     * @param \Champ\UserBundle\Entity\Training $training
     * @return Requests
     */
    public function setTraining(\Champ\UserBundle\Entity\Training $training = null)
    {
        $this->training = $training;

        return $this;
    }

    /**
     * Get training
     *
     * @return \Champ\UserBundle\Entity\Training 
     */
    public function getTraining()
    {
        return $this->training;
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
}

