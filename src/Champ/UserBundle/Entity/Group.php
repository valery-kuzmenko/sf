<?php

namespace Champ\UserBundle\Entity;

use FOS\UserBundle\Model\Group as BaseGroup;
use Doctrine\ORM\Mapping as ORM;

/**
 * ChampGroup
 *
 * @ORM\Table(name="champ_group", indexes={@ORM\Index(name="fk_team_id_idx", columns={"team_id"})})
 * @ORM\Entity
 */
class Group extends BaseGroup {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var \Team
     *
     * @ORM\ManyToOne(targetEntity="Team")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_id", referencedColumnName="id")
     * })
     */
    private $team;
}

