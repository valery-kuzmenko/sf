<?php

namespace Champ\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ChampUserBundle extends Bundle
{
    public function getParent(){
        return 'FOSUserBundle';
    }
}
