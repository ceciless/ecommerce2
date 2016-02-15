<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\CategoriesRepository")
 */
class Categories
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Media", cascade={"persist","remove"})
     *
     * @ORM\JoinColumn(nullable=false)
     */

    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="catenom", type="string", length=125)
     */
    private $catenom;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set catenom
     *
     * @param string $catenom
     * @return Categories
     */
    public function setCatenom($catenom)
    {
        $this->catenom = $catenom;

        return $this;
    }

    /**
     * Get catenom
     *
     * @return string 
     */
    public function getCatenom()
    {
        return $this->catenom;
    }

    /**
     * Set image
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Media $image
     * @return Categories
     */
    public function setImage(\Ecommerce\EcommerceBundle\Entity\Media $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Media 
     */
    public function getImage()
    {
        return $this->image;
    }
}
