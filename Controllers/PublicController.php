<?php

namespace Controllers;

use Controllers\Abstract\AbstractController;

class PublicController extends Abstract\AbstractController
{
 public function browse() : void
 {
     global $systemMessage, $sessionRole;

     echo $this->twig->render('public/public.browse.html.twig');
 }
}