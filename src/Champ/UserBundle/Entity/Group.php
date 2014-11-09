<?php

namespace Champ\UserBundle\Entity;

use FOS\UserBundle\Model\Group as BaseGroup;
use Doctrine\ORM\Mapping as ORM;

/**
 * Group
 *
 * @ORM\Table(name="champ_group", uniqueConstraints={@ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"})}, indexes={@ORM\Index(name="IDX_DA25FC0D296CD8AE", columns={"team_id"})})
 * @ORM\Entity(repositoryClass="Champ\UserBundle\Repository\GroupRepository")
 */

class Group extends BaseGroup {
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var \Team
     *
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="group")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_id", referencedColumnName="id")
     * })
     */
    private $team;

    /**
     * Set team
     *
     * @param \Champ\UserBundle\Entity\Team $team
     * @return Group
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
