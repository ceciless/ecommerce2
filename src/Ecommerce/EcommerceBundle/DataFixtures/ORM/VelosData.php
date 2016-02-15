<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Velos;

class VelosData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {


        $velo3 = new Velos();
        $velo3->setCategorie($this->getReference('categorie2'));
        $velo3->setDescription('description de Cyclo-pousse');
        $velo3->setDisponible('1');
        $velo3->setImage($this->getReference('media3'));
        $velo3->setVelonom('Cyclo-pousse');
        $velo3->setPrix('30');
        $velo3->setTva($this->getReference('tva2'));
        $velo3->setPosition('rue3');
        $manager->persist($velo3);

        $velo4 = new Velos();
        $velo4->setCategorie($this->getReference('categorie1'));
        $velo4->setDescription('description de semi-rigide');
        $velo4->setDisponible('1');
        $velo4->setImage($this->getReference('media4'));
        $velo4->setVelonom('semi-rigide');
        $velo4->setPrix('40');
        $velo4->setTva($this->getReference('tva1'));
        $velo4->setPosition('rue4');
        $manager->persist($velo4);

        $velo5 = new Velos();
        $velo5->setCategorie($this->getReference('categorie1'));
        $velo5->setDescription('description de tout suspendu');
        $velo5->setDisponible('1');
        $velo5->setImage($this->getReference('media5'));
        $velo5->setVelonom('tout suspendu');
        $velo5->setPrix('50');
        $velo5->setTva($this->getReference('tva1'));
        $velo5->setPosition('rue5');
        $manager->persist($velo5);

        $velo6 = new Velos();
        $velo6->setCategorie($this->getReference('categorie1'));
        $velo6->setDescription('description de all moutain');
        $velo6->setDisponible('1');
        $velo6->setImage($this->getReference('media6'));
        $velo6->setVelonom('All Moutain');
        $velo6->setPrix('60');
        $velo6->setTva($this->getReference('tva2'));
        $velo6->setPosition('rue6');
        $manager->persist($velo6);

        $velo7 = new Velos();
        $velo7->setCategorie($this->getReference('categorie2'));
        $velo7->setDescription('description de TANDEM');
        $velo7->setDisponible('1');
        $velo7->setImage($this->getReference('media7'));
        $velo7->setVelonom('TANDEM');
        $velo7->setPrix('70');
        $velo7->setTva($this->getReference('tva1'));
        $velo7->setPosition('rue7');
        $manager->persist($velo7);

        $velo8 = new Velos();
        $velo8->setCategorie($this->getReference('categorie2'));
        $velo8->setDescription('description de Finance The Arc');
        $velo8->setDisponible('1');
        $velo8->setImage($this->getReference('media8'));
        $velo8->setVelonom('Finance The Arc');
        $velo8->setPrix('80');
        $velo8->setTva($this->getReference('tva2'));
        $velo8->setPosition('rue8');
        $manager->persist($velo8);


        $manager->flush();

    }

        public function getOrder()
        {
        	return 4;
        }

 
}