<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Reserver;

class ReserverData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $reserver1= new Reserver();
        $reserver1->setUtilisateur($this->getReference('utilisateur1'));
        $reserver1->setValider('1');
        $reserver1->setDate( new \DateTime());
        $reserver1->setReference('1');
        $reserver1->setVelos( array('0' => array('1'  => '1'),
                                                               '1' => array('2'  => '1'),                                                       
                                                 ));

        $manager->persist($reserver1);


        $reserver2= new Reserver();
        $reserver2->setUtilisateur($this->getReference('utilisateur2'));
        $reserver2->setValider('1');
        $reserver2->setDate( new \DateTime());
        $reserver2->setReference('2');
        $reserver2->setVelos( array('0' => array('1'  => '1'),
                                                               '1' => array('3'  => '1'),
                                                 ));

        $manager->persist($reserver2);


        $manager->flush();

    }

        public function getOrder()
        {
        	return 7;
        }

 
}