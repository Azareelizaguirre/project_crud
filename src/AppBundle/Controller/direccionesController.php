<?php

namespace AppBundle\Controller;

use AppBundle\Entity\direcciones;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Direccione controller.
 *
 * @Route("direcciones")
 */
class direccionesController extends Controller
{
    /**
     * Lists all direccione entities.
     *
     * @Route("/", name="direcciones_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $direcciones = $em->getRepository('AppBundle:direcciones')->findAll();

        return $this->render('direcciones/index.html.twig', array(
            'direcciones' => $direcciones,
        ));
    }

    /**
     * Creates a new direccione entity.
     *
     * @Route("/new", name="direcciones_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $direccione = new Direcciones();
        $form = $this->createForm('AppBundle\Form\direccionesType', $direccione);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($direccione);
            $em->flush();

            return $this->redirectToRoute('direcciones_show', array('id' => $direccione->getId()));
        }

        return $this->render('direcciones/new.html.twig', array(
            'direccione' => $direccione,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a direccione entity.
     *
     * @Route("/{id}", name="direcciones_show")
     * @Method("GET")
     */
    public function showAction(direcciones $direccione)
    {
        $deleteForm = $this->createDeleteForm($direccione);

        return $this->render('direcciones/show.html.twig', array(
            'direccione' => $direccione,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing direccione entity.
     *
     * @Route("/{id}/edit", name="direcciones_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, direcciones $direccione)
    {
        $deleteForm = $this->createDeleteForm($direccione);
        $editForm = $this->createForm('AppBundle\Form\direccionesType', $direccione);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('direcciones_edit', array('id' => $direccione->getId()));
        }

        return $this->render('direcciones/edit.html.twig', array(
            'direccione' => $direccione,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a direccione entity.
     *
     * @Route("/{id}", name="direcciones_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, direcciones $direccione)
    {
        $form = $this->createDeleteForm($direccione);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($direccione);
            $em->flush();
        }

        return $this->redirectToRoute('direcciones_index');
    }

    /**
     * Creates a form to delete a direccione entity.
     *
     * @param direcciones $direccione The direccione entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(direcciones $direccione)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('direcciones_delete', array('id' => $direccione->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
