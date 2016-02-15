<?php

namespace Utilisateurs\UtilisateursBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\UtilisateursProfiles;

class UtilisateursProfilesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $profile1= new UtilisateursProfiles();
        $profile1->setUtilisateur( $this->getReference('utilisateur1'));
        $profile1->setNom('PAUL');
        $profile1->setPrenom('Delphine');
        $profile1->setTelephone('0978354322');
        $profile1->setAdresse('33 rue de Lyon');
        $profile1->setCp('29200');
        $profile1->setPays('France');
        $profile1->setVille('Brest');
        $profile1->setComplement('a cote de cafe ocean');
        $manager->persist($profile1);

        $profile2= new UtilisateursProfiles();
        $profile2->setUtilisateur( $this->getReference('utilisateur2'));
        $profile2->setNom('CHAMPEAU');
        $profile2->setPrenom('Joel');
        $profile2->setTelephone('0767532190');
        $profile2->setAdresse('2 rue Francois Verny');
        $profile2->setCp('29200');
        $profile2->setPays('France');
        $profile2->setVille('Brest');
        $profile2->setComplement('ensta bretagne');
        $manager->persist($profile2);


        $manager->flush();

        //$this->addReference('profile1', $profile1);
        //$this->addReference('profile2', $profile2);

    }

        public function getOrder()
        {
        	return 6;
        }

 
}