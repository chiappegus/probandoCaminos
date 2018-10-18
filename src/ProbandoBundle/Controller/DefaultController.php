<?php

namespace ProbandoBundle\Controller;

use ProbandoBundle\Entity\Vemos;
use ProbandoBundle\Form\vemosType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    public function indexAction()
    {
        return $this->render('@Probando/Default/index.html.twig');
    }

    /**
     * @Route("/register", name="user_registration")
     */
    public function registerAction(Request $request)
    {
        // 1) build the form
        //$user = new User();
        $vemos = new Vemos();
        $form  = $this->createForm(vemosType::class, $vemos);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            //$password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            //$user->setPassword($password);

            // 4) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($vemos);
            $entityManager->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('probando_homepage');
        }

        return $this->render(
            '@Probando/registration/register.html.twig',
            array('form' => $form->createView())
        );
    }
}
