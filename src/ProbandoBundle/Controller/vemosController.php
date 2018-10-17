<?php

namespace ProbandoBundle\Controller;

use ProbandoBundle\Entity\vemos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Vemo controller.
 *
 * @Route("vemos")
 */
class vemosController extends Controller
{
    /**
     * Lists all vemo entities.
     *
     * @Route("/", name="vemos_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $vemos = $em->getRepository('ProbandoBundle:vemos')->findAll();

        return $this->render('vemos/index.html.twig', array(
            'vemos' => $vemos,
        ));
    }

    /**
     * Creates a new vemo entity.
     *
     * @Route("/new", name="vemos_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $vemo = new Vemo();
        $form = $this->createForm('ProbandoBundle\Form\vemosType', $vemo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($vemo);
            $em->flush();

            return $this->redirectToRoute('vemos_show', array('id' => $vemo->getId()));
        }

        return $this->render('vemos/new.html.twig', array(
            'vemo' => $vemo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a vemo entity.
     *
     * @Route("/{id}", name="vemos_show")
     * @Method("GET")
     */
    public function showAction(vemos $vemo)
    {
        $deleteForm = $this->createDeleteForm($vemo);

        return $this->render('vemos/show.html.twig', array(
            'vemo' => $vemo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing vemo entity.
     *
     * @Route("/{id}/edit", name="vemos_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, vemos $vemo)
    {
        $deleteForm = $this->createDeleteForm($vemo);
        $editForm = $this->createForm('ProbandoBundle\Form\vemosType', $vemo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('vemos_edit', array('id' => $vemo->getId()));
        }

        return $this->render('vemos/edit.html.twig', array(
            'vemo' => $vemo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a vemo entity.
     *
     * @Route("/{id}", name="vemos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, vemos $vemo)
    {
        $form = $this->createDeleteForm($vemo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($vemo);
            $em->flush();
        }

        return $this->redirectToRoute('vemos_index');
    }

    /**
     * Creates a form to delete a vemo entity.
     *
     * @param vemos $vemo The vemo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(vemos $vemo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('vemos_delete', array('id' => $vemo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
