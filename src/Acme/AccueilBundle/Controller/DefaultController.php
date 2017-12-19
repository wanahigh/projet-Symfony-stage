<?php

namespace Acme\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function contactAction()
    {
        return $this->render('AcmeAccueilBundle:Default:contact.html.twig');
    }
}
