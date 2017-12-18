<?php

namespace Acme\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;
class DefaultController extends Controller
{
    public function indexAction()
    {
        // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR

        if (!$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {

            // Sinon on déclenche une exception « Accès interdit »

            throw new AccessDeniedException('Accès limité aux ADMIN.');

        }



        return $this->render('AcmeHomeBundle:Default:index.html.twig');


        // Ici l'utilisateur a les droits suffisant,

        // on le laisse entrer dans le backoffice

    }

}

