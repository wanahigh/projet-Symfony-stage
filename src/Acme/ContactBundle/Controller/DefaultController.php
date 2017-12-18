<?php

namespace Acme\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\ContactBundle\Form\Entity\ContactType;


class DefaultController extends Controller
{
    public function indexAction(){
        $form = $this->createForm(new ContactType());
        return $this->render('AcmeContactBundle::index.html.twig',array('form' => $form->createView()));

    }
}
