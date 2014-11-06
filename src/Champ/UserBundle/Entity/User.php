<?php

namespace Champ\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity="Champ\UserBundle\Entity\Group")
     * @ORM\JoinTable(name="user_group",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $group;
	
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Sport", inversedBy="User")
     * @ORM\JoinTable(name="user_sport",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="sport_id", referencedColumnName="id")
     *   }
     * )
     */
    private $sport;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Team", inversedBy="User")
     * @ORM\JoinTable(name="user_team",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="team_id", referencedColumnName="id")
     *   }
     * )
     */
    private $team;	

    public function __construct()
    {
        $this->group = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sport = new \Doctrine\Common\Collections\ArrayCollection();
        $this->team = new \Doctrine\Common\Collections\ArrayCollection();
    }
	
	    /**
     * Set description
     *
     * @param string $description
     * @return User
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
     * @return User
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
     * @return User
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
     * Add group
     *
     * @param \Champ\UserBundle\Entity\Group $group
     * @return User
     */
    public function addGroup(\Champ\UserBundle\Entity\Group $group)
    {
        $this->group[] = $group;

        return $this;
    }

    /**
     * Remove group
     *
     * @param \Champ\UserBundle\Entity\Group $group
     */
    public function removeGroup(\Champ\UserBundle\Entity\Group $group)
    {
        $this->group->removeElement($group);
    }

    /**
     * Get group
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Add sport
     *
     * @param \Champ\UserBundle\Entity\Sport $sport
     * @return User
     */
    public function addSport(\Champ\UserBundle\Entity\Sport $sport)
    {
        $this->sport[] = $sport;

        return $this;
    }

    /**
     * Remove sport
     *
     * @param \Champ\UserBundle\Entity\Sport $sport
     */
    public function removeSport(\Champ\UserBundle\Entity\Sport $sport)
    {
        $this->sport->removeElement($sport);
    }

    /**
     * Get sport
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSport()
    {
        return $this->sport;
    }

    /**
     * Add team
     *
     * @param \Champ\UserBundle\Entity\Team $team
     * @return User
     */
    public function addTeam(\Champ\UserBundle\Entity\Team $team)
    {
        $this->team[] = $team;

        return $this;
    }

    /**
     * Remove team
     *
     * @param \Champ\UserBundle\Entity\Team $team
     */
    public function removeTeam(\Champ\UserBundle\Entity\Team $team)
    {
        $this->team->removeElement($team);
    }

    /**
     * Get team
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTeam()
    {
        return $this->team;
    }
}
