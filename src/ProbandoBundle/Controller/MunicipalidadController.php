<?php

namespace ProbandoBundle\Controller;

use ProbandoBundle\Entity\Municipalidad;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Municipalidad controller.
 *
 */
class MunicipalidadController extends Controller
{
    /**
     * Lists all municipalidad entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $municipalidads = $em->getRepository('ProbandoBundle:Municipalidad')->findAll();

        return $this->render('@Probando/municipalidad/index.html.twig', array(
            'municipalidads' => $municipalidads,
        ));
    }

    /**
     * Creates a new municipalidad entity.
     *
     */
    public function newAction(Request $request)
    {
        $municipalidad = new Municipalidad();
        $form          = $this->createForm('ProbandoBundle\Form\MunicipalidadType', $municipalidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($municipalidad);
            $em->flush();

            return $this->redirectToRoute('ProbandoBundle_show', array('id' => $municipalidad->getId()));
        }
        
        return $this->render('@Probando/municipalidad/new.html.twig', array(
            'municipalidad' => $municipalidad,
            'form'          => $form->createView(),
        ));
    }

    /**
     * Finds and displays a municipalidad entity.
     *
     */
    public function showAction(Municipalidad $municipalidad)
    {
        $deleteForm = $this->createDeleteForm($municipalidad);
       
        return $this->render('@Probando/municipalidad/show.html.twig', array(
            'municipalidad' => $municipalidad,
            'delete_form'   => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing municipalidad entity.
     *
     */
    public function editAction(Request $request, Municipalidad $municipalidad)
    {
        $deleteForm = $this->createDeleteForm($municipalidad);
        $editForm   = $this->createForm('ProbandoBundle\Form\MunicipalidadType', $municipalidad);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ProbandoBundle_edit', array('id' => $municipalidad->getId()));
        }
          
        return $this->render('@Probando/municipalidad/edit.html.twig', array(
            'municipalidad' => $municipalidad,
            'edit_form'     => $editForm->createView(),
            'delete_form'   => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a municipalidad entity.
     *
     */
    public function deleteAction(Request $request, Municipalidad $municipalidad)
    {
        $form = $this->createDeleteForm($municipalidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($municipalidad);
            $em->flush();
        }

        return $this->redirectToRoute('ProbandoBundle_index');
    }

    /**
     * Creates a form to delete a municipalidad entity.
     *
     * @param Municipalidad $municipalidad The municipalidad entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Municipalidad $municipalidad)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ProbandoBundle_delete', array('id' => $municipalidad->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
