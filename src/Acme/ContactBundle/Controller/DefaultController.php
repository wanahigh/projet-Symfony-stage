<?php

namespace Acme\ContactBundle\Controller;




use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class DefaultController extends Controller
{
    public function contactAction(Request $request)
    {

        $form = $this->createFormBuilder()
            ->add('Nom', TextType::class)
            ->add('Prenom', TextType::class)
            ->add('Organisation', TextType::class)
            ->add('Email', TextType::class)
            ->add('Sujet', TextType::class)
            ->add('Message', TextType::class)
            ->getForm();

        return $this->render('contact.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
