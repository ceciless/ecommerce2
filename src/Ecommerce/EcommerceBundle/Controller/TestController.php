<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Produits;

class TestController extends Controller
{
    public function ajoutAction()
    {

        $em = $this->getDoctrine()->getEntityManager();

        $produit = new Produits();

        $produit->setCategorie('Bouquet');
        $produit->setDescription('Dans ce bouquet, se mêlent des senteurs uniques et des couleurs élégantes, qui émoustilleront les sens de vos proches.');
        $produit->setDisponible('1');
        $produit->setImage('https://lebouquetdefleurs.com/216-large_default/bouquet-somptueux.jpgg');
        $produit->setNom('Bouquet Somptueux');
        $produit->setPrix('27.5');
        $produit->setTva('19.6');

        $em->persist($produit);



        $produit2 = new Produits();

        $produit2->setCategorie('Bouquet');
        $produit2->setDescription('Tout droit sorti du monde des barbes à papa avec ses Roses roses, ses Freesias roses et ses Matricaires, nos fleuristes ont confectionné pour vous ce bouquet de fleurs tout rond. ');
        $produit2->setDisponible('1');
        $produit2->setImage('https://lebouquetdefleurs.com/221-large_default/bouquet-candide.jpg');
        $produit2->setNom('Bouquet Candide');
        $produit2->setPrix('27.0');
        $produit2->setTva('19.6');

        $em->persist($produit2);


        $em->flush();

        $produits = $em->getRepository('EcommerceBundle:Produits')->findAll();

        //return $this->render('EcommerceBundle:Default:test.html.twig');
        return $this->render('EcommerceBundle:Default:test.html.twig',array('produits'=> $produits));
    }


}