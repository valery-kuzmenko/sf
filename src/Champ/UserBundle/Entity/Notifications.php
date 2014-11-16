<?php

namespace Champ\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notifications
 * 
 * @ORM\Entity
 * @ORM\Table(name="user_notifications")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"refusetournament" = "RefuseTournament", "refusetraining" = "RefuseTraining",
 * "finduser" = "FindUser", "findteam" = "FindTeam", "invitetraining" = "InviteTraining", "jointraining" = "JoinTraining"})
 */
class Notifications extends Requests
{
    
}
