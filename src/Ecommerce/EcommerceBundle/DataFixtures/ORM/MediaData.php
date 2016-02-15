<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Media;

class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $media1 = new Media();
        $media1->setAlt('Pro');
        $media1->setPath('http://www.btwin.com/blog/fr/files/2013/08/position-velo-route.jpg');
        $manager->persist($media1);

        $media2 = new Media();
        $media2->setAlt('Plaisir');
        $media2->setPath('https://www.axaprevention.fr/assets/qy/cm/s2/45/qycms245y3.png');
        $manager->persist($media2);

        $media3 = new Media();
        $media3->setAlt('Cyclo-pousse');
        $media3->setPath('http://planetkdo.com/wp-content/uploads/2008/10/cyclopousse.jpg?76f232');
        $manager->persist($media3);

        $media4 = new Media();
        $media4->setAlt('semi-rigide');
        $media4->setPath('http://www.nutri-cycles.com/documents/Image/vtt-look-986-2.jpg');
        $manager->persist($media4);      

        $media5 = new Media();
        $media5->setAlt('tout suspendu');
        $media5->setPath('http://www.nutri-cycles.com/documents/Image/different-type-vtt-2.jpg');
        $manager->persist($media5);

        $media6 = new Media();
        $media6->setAlt('All Moutain');
        $media6->setPath('http://www.nutri-cycles.com/documents/Image/different-type-vtt-6.jpg');
        $manager->persist($media6);

        $media7 = new Media();
        $media7->setAlt('TANDEM');
        $media7->setPath('http://www.docvelo.com/images_d/ctandem.gif');
        $manager->persist($media7);
        
        $media8 = new Media();
        $media8->setAlt('Finance The Arc');
        $media8->setPath('http://www.elliptigo.com/wp-content/uploads/2015/12/Arc_angled.jpg');
        $manager->persist($media8);     


        $manager->flush();

        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);
        $this->addReference('media6', $media6);
        $this->addReference('media7', $media7);
        $this->addReference('media8', $media8);
    }

        public function getOrder()
        {
        	return 1;
        }

 
}