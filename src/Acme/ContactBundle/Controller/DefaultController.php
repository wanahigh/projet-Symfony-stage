<?php

namespace Acme\ContactBundle\Controller;


use Acme\ContactBundle\Entity\Entity\Contact;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    public function contactAction(Request $request)
    {

        $form = $this->createFormBuilder()
            ->add('Nom', TextType::class)
            ->add('Prenom', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Envoyer'))
            ->getForm();

        return $this->render('Default:contact.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
