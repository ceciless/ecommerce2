<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Velos
 *
 * @ORM\Table(name="velos")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\VelosRepository")
 */
class Velos
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
    *
     * @ORM\OneToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $image;


     /**
     * @ORM\ManyToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Tva", cascade={"persist","remove"})
     *
     * @ORM\JoinColumn(nullable=false)
     */
    private $tva;

     /**
     * @ORM\ManyToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Categories", cascade={"persist","remove"})
     *
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;


    /**
     * @var string
     *
     * @ORM\Column(name="velonom", type="string", length=125)
     */
    private $velonom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255)
     */
    private $position;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var bool
     *
     * @ORM\Column(name="disponible", type="boolean")
     */
    private $disponible;


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
     * Set velonom
     *
     * @param string $velonom
     * @return Velos
     */
    public function setVelonom($velonom)
    {
        $this->velonom = $velonom;

        return $this;
    }

    /**
     * Get velonom
     *
     * @return string 
     */
    public function getVelonom()
    {
        return $this->velonom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Velos
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set position
     *
     * @param string $position
     * @return Velos
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Velos
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set disponible
     *
     * @param boolean $disponible
     * @return Velos
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return boolean 
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set image
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Media $image
     * @return Velos
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

    /**
     * Set tva
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Tva $tva
     * @return Velos
     */
    public function setTva(\Ecommerce\EcommerceBundle\Entity\Tva $tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Tva 
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set categorie
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Categories $categorie
     * @return Velos
     */
    public function setCategorie(\Ecommerce\EcommerceBundle\Entity\Categories $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Categories 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}
