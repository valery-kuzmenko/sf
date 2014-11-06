<?php

namespace Champ\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sport
 *
 * @ORM\Table(name="sport")
 * @ORM\Entity
 */
class Sport
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="User", mappedBy="sport")
     */
    private $User;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->User = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Sport
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
     * Add User
     *
     * @param \Champ\UserBundle\Entity\User $User
     * @return Sport
     */
    public function addUser(\Champ\UserBundle\Entity\User $User)
    {
        $this->User[] = $User;

        return $this;
    }

    /**
     * Remove User
     *
     * @param \Champ\UserBundle\Entity\User $User
     */
    public function removeUser(\Champ\UserBundle\Entity\User $User)
    {
        $this->User->removeElement($User);
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
}
