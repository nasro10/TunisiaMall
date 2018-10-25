<?php

namespace tmClientBundle\Controller;

use tmClientBundle\Entity\Personnel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Personnel controller.
 *
 */
class PersonnelController extends Controller
{
    /**
     * Lists all personnel entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $personnels = $em->getRepository('tmClientBundle:Personnel')->findAll();

        return $this->render('personnel/index.html.twig', array(
            'personnels' => $personnels,
        ));
    }

    /**
     * Creates a new personnel entity.
     *
     */
    public function newAction(Request $request)
    {
        $personnel = new Personnel();
        $form = $this->createForm('tmClientBundle\Form\PersonnelType', $personnel);
        $personnel->setTypePr("Personnel");
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($personnel);
            $em->flush();

            return $this->redirectToRoute('personnel_show', array('idPr' => $personnel->getIdpr()));
        }

        return $this->render('personnel/new.html.twig', array(
            'personnel' => $personnel,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a personnel entity.
     *
     */
    public function showAction(Personnel $personnel)
    {
        $deleteForm = $this->createDeleteForm($personnel);

        return $this->render('personnel/show.html.twig', array(
            'personnel' => $personnel,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing personnel entity.
     *
     */
    public function editAction(Request $request, Personnel $personnel)
    {
        $deleteForm = $this->createDeleteForm($personnel);
        $editForm = $this->createForm('tmClientBundle\Form\PersonnelType', $personnel);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('personnel_edit', array('idPr' => $personnel->getIdpr()));
        }

        return $this->render('personnel/edit.html.twig', array(
            'personnel' => $personnel,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a personnel entity.
     *
     */
    public function deleteAction(Request $request, Personnel $personnel)
    {
        $form = $this->createDeleteForm($personnel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($personnel);
            $em->flush();
        }

        return $this->redirectToRoute('personnel_index');
    }

    /**
     * Creates a form to delete a personnel entity.
     *
     * @param Personnel $personnel The personnel entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Personnel $personnel)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('personnel_delete', array('idPr' => $personnel->getIdpr())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
