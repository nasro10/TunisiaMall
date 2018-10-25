<?php

namespace StandBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use StandBundle\Entity\Stand;
use StandBundle\Form\StandType;
use Symfony\Component\HttpFoundation\Request;

class StandController extends Controller
{
    public function indexAction()
    {
        return $this->render('StandBundle:Default:index.html.twig');
    }

    public function ajoutAction(Request $request,$id){
        $Stand = new Stand();
        $form = $this->createForm(StandType::class, $Stand);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $prop= $this->getDoctrine()
                ->getRepository('StandBundle:Adherent')->find($id);

            $Stand->setIdProp($prop);
            $Stand->setEtat(0);
            $em = $this->getDoctrine()->getManager();
            $em->persist($Stand);
            $em->flush();
            return $this->redirectToRoute("showStand");
        }
        return $this->render(
            'StandBundle:Stand:ajout.html.twig',
            array('f' => $form->createView())
        );
    }

    public function afficherPropAction()
    {

        $prop = $this->getDoctrine()
            ->getRepository('StandBundle:Adherent')
            ->findAll();
        return $this->render('StandBundle:Default:showProp.html.twig',
            array('prop' => $prop));
    }


    public function afficherStandAction()
    {
        $Stand = $this->getDoctrine()
            ->getRepository('StandBundle:Stand')
            ->findAll();
        return $this->render('StandBundle:Stand:affiche.html.twig',
            array('Stand' => $Stand));
    }

    function supprimeStandAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $Promotion = $em->getRepository('StandBundle:Stand')->find($id);
        $em->remove($Promotion);
        $em->flush();
        return $this->redirectToRoute('showStand');

    }

    function modificationStandAction(Request $req, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $Stand = $em->getRepository('StandBundle:Stand')->find($id);
        $form = $this->createForm(StandType::class, $Stand);
        if ($form->handleRequest($req)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Stand);//insert into model
            $em->flush();//execution de la requete
            return $this->redirectToRoute('showStand');

        }
        return $this->render('StandBundle:Stand:ajout.html.twig', array('f' => $form->createView()));
    }

    function autorisationStandAction(Request $req, $id){
        $em = $this->getDoctrine()->getManager();
        $Stand = $em->getRepository('StandBundle:Stand')->find($id);
        $Stand = $this->getDoctrine()
            ->getRepository('StandBundle:Stand')
            ->findAll();
        foreach ($Stand as $val1){
        $val1->setEtat(1);}
        $em = $this->getDoctrine()->getManager();
        $em->persist($Stand);//insert into Stand
        $em->flush();
        return $this->render('StandBundle:Stand:AutoriserStand.html.twig',
            array('Stand' => $Stand));
    }
}
