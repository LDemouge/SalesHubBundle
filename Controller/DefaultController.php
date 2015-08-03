<?php

namespace Exxan\Sgv3\SalesHubBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Sgv3SalesBundle:Default:index.html.twig', array('name' => $name));
    }
}
