<?php

namespace Champ\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table(name="team", indexes={@ORM\Index(name="fk_team_sport1_idx", columns={"sport_id"}), @ORM\Index(name="fk_team_city1_idx", columns={"city_id"})})
 * @ORM\Entity(repositoryClass="Champ\UserBundle\Repository\TeamRepository")
 */
class Team
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
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var \City
     *
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     * })
     */
    private $city;

    /**
     * @var \Sport
     *
     * @ORM\ManyToOne(targetEntity="Sport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sport_id", referencedColumnName="id")
     * })
     */
    private $sport;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="User", mappedBy="team")
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tournament", inversedBy="team")
     * @ORM\JoinTable(name="team_tournament",
     *   joinColumns={
     *     @ORM\JoinColumn(name="team_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="tournament_id", referencedColumnName="id")
     *   }
     * )
     */
    private $tournament;

	/**
	 * @var \Group
	 * 
	 * @ORM\OneToMany(targetEntity="Group", inversedBy="team")
	 */
	private $group;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Training", mappedBy="team")
     */
    private $training;	

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tournament = new \Doctrine\Common\Collections\ArrayCollection();
        $this->training = new \Doctrine\Common\Collections\ArrayCollection();
    }	
	
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
     * Set name
     *
     * @param string $name
     * @return Team
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Team
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Team
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set city
     *
     * @param \Champ\UserBundle\Entity\City $city
     * @return Team
     */
    public function setCity(\Champ\UserBundle\Entity\City $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \Champ\UserBundle\Entity\City 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set sport
     *
     * @param \Champ\UserBundle\Entity\Sport $sport
     * @return Team
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

    /**
     * Add User
     *
     * @param \Champ\UserBundle\Entity\User $User
     * @return Team
     */
    public function addUser(\Champ\UserBundle\Entity\User $User)
    {
        $this->user[] = $User;

        return $this;
    }

    /**
     * Remove User
     *
     * @param \Champ\UserBundle\Entity\User $User
     */
    public function removeUser(\Champ\UserBundle\Entity\User $User)
    {
        $this->user->removeElement($User);
    }

    /**
     * Get User
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * Add tournament
     *
     * @param \Champ\UserBundle\Entity\Tournament $tournament
     * @return Team
     */
    public function addTournament(\Champ\UserBundle\Entity\Tournament $tournament)
    {
        $this->tournament[] = $tournament;

        return $this;
    }

    /**
     * Remove tournament
     *
     * @param \Champ\UserBundle\Entity\Tournament $tournament
     */
    public function removeTournament(\Champ\UserBundle\Entity\Tournament $tournament)
    {
        $this->tournament->removeElement($tournament);
    }

    /**
     * Get tournament
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTournament()
    {
        return $this->tournament;
    }

	/**
     * Add training
     *
     * @param \Champ\UserBundle\Entity\Training $training
     * @return training
     */
    public function addTraining(\Champ\UserBundle\Entity\Training $training)
    {
        $this->training[] = $training;

        return $this;
    }

    /**
     * Remove training
     *
     * @param \Champ\UserBundle\Entity\Training $training
     */
    public function removeTraining(\Champ\UserBundle\Entity\Training $training)
    {
        $this->tournament->removeElement($training);
    }

    /**
     * Get training
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTraining()
    {
        return $this->training;
    }
}
