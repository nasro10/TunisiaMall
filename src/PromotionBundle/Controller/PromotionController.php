<?php

namespace PromotionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PromotionBundle\Entity\Promotion;
use PromotionBundle\Form\PromotionType;
use Symfony\Component\HttpFoundation\Request;

class PromotionController extends Controller
{
    public function indexAction()
    {
        return $this->render('PromotionBundle:Default:index.html.twig');
    }

    public function ajoutAction(Request $request,$id){
        $Promotion = new Promotion();
        $form = $this->createForm(PromotionType::class, $Promotion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($Promotion->getDateDeb()>= new \DateTime('now')&& $Promotion->getDateFin() >= $Promotion->getDateDeb()){
            $produit= $this->getDoctrine()
                ->getRepository('PromotionBundle:Produit')
                ->find($id);
            $Promotion->setIdProd($produit);
            $em = $this->getDoctrine()->getManager();
            $em->persist($Promotion);
            $em->flush();

            $produit = $this->getDoctrine()
                ->getRepository('PromotionBundle:Produit')
                ->find($id);
            $produit->setPrixP($produit->getPrixP() - ($produit->getPrixP() * $Promotion->getPrixPromo()) / 100);
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();

            return $this->redirectToRoute('ShowProd');}
        else{
                echo"<h1>Date Non valide</h1>";
            }
        }
        return $this->render(
            'PromotionBundle:Promotion:ajout.html.twig',
            array('f2' => $form->createView())
        );
    }

    public function afficherProdAction()
    {

        $produit = $this->getDoctrine()
            ->getRepository('PromotionBundle:Produit')
            ->findAll();
        return $this->render('PromotionBundle:Default:showProd.html.twig',
            array('produit' => $produit));
    }

    public function afficherPromotionAction()
    {
        $Promotion = $this->getDoctrine()
            ->getRepository('PromotionBundle:Promotion')
            ->findAll();
        return $this->render('PromotionBundle:Promotion:affiche.html.twig',
            array('Promotion' => $Promotion));
    }

    function supprimePromotionAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $Promotion = $em->getRepository('PromotionBundle:Promotion')->find($id);
        $em->remove($Promotion);
        $em->flush();
        return $this->redirectToRoute('showPromo');

    }

    function modificationPromotionAction(Request $req, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $Promotion = $em->getRepository('PromotionBundle:Promotion')->find($id);
        $form = $this->createForm(PromotionType::class, $Promotion);
        if ($form->handleRequest($req)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Promotion);//insert into model
            $em->flush();//execution de la requete
            return $this->redirectToRoute('showPromo');

        }
        return $this->render('PromotionBundle:Promotion:ajout.html.twig', array('f2' => $form->createView()));
    }

    public function afficherProdpromoAction()
    {
        
        $prodpromo = array();
        $Promotion = $this->getDoctrine()
            ->getRepository('PromotionBundle:Promotion')
            ->findAll();
        $produit = $this->getDoctrine()
            ->getRepository('PromotionBundle:Produit')
            ->findAll();



        return $this->render('PromotionBundle:Promotion:AfficheProdPromo.html.twig',
            array('produit' => $prodpromo));

    }



}

