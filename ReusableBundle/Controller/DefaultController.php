<?php

namespace Emokykla\ReusableBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EmokyklaReusableBundle:Default:index.html.twig');
    }
}
