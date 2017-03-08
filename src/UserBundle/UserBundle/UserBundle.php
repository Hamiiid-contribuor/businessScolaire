<?php

namespace UserBundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UserBundle extends Bundle {

    //signifie  comme  quoi ce bundle est un bundle fils  du fosUser 
    public function getParent() {
        return 'FOSUserBundle';
    }

}
