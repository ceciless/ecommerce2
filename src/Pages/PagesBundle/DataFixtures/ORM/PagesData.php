<?php
namespace Pages\PagesBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Pages\PagesBundle\Entity\Pages;

class PagesData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $page1 = new Pages();
        $page1->setTitre('CGV');
        $page1->setContenu('
            <div class="row">
                <h4>titrecgv1</h4>
                <h5>categoriecgv1</h5>
                <p>contenucgv1</p>
            </div>
            <div class="row">
                <h4>titrecgv2</h4>
                <h5>categoriecgv2</h5>
                <p>contenucgv2</p>
            </div>
            <div class="row">
                <h4>titrecgv3</h4>
                <h5>categoriecgv3</h5>
                <p>contenucgv3</p>
            </div>');
        $manager->persist($page1);
        

        
        $page2 = new Pages();
        $page2->setTitre('Mentions légales');
        $page2->setContenu('<div class="row">
                <h4>titreMentions légales1</h4>
                <h5>categorieMentions légales1</h5>
                <p>contenuMentions légales1</p>
            </div>
            <div class="row">
                <h4>titreMentions légales2</h4>
                <h5>categorieMentions légales2</h5>
                <p>contenuMentions légales2</p>
            </div>
            <div class="row">
                <h4>titreMentions légales3</h4>
                <h5>categorieMentions légales3</h5>
                <p>contenuMentions légales3</p>
            </div>');
        $manager->persist($page2);
        
        $manager->flush();
    }
}