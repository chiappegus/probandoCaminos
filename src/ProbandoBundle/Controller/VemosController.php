<?php

namespace ProbandoBundle\Controller;

use ProbandoBundle\Entity\Vemos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Vemo controller.
 *
 */
class VemosController extends Controller
{
    /**
     * Lists all vemo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $vemos = $em->getRepository('ProbandoBundle:Vemos')->findAll();

        return $this->render('vemos/index.html.twig', array(
            'vemos' => $vemos,
        ));
    }

    /**
     * Creates a new vemo entity.
     *
     */
    public function newAction(Request $request)
    {
        $vemo = new Vemos();
        $form = $this->createForm('ProbandoBundle\Form\VemosType', $vemo);
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
     */
    public function showAction(Vemos $vemo)
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
     */
    public function editAction(Request $request, Vemos $vemo)
    {
        $deleteForm = $this->createDeleteForm($vemo);
        $editForm = $this->createForm('ProbandoBundle\Form\VemosType', $vemo);
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
     */
    public function deleteAction(Request $request, Vemos $vemo)
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
     * @param Vemos $vemo The vemo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Vemos $vemo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('vemos_delete', array('id' => $vemo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
