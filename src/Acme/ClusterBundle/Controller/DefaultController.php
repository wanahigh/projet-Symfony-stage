<?php

namespace Acme\ClusterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeClusterBundle:Default:index.html.twig');
    }
}
