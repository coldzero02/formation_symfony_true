<?php

namespace Bo\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Entity\ProduitRepository")
 */
class Produit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    
    /**
     * @var boolean
     * 
     * @ORM\Column(name="is_disponible", type="boolean")
     */
    private $isDisponible;

    /**
     * @var string
     *
     * @ORM\Column(name="file_img", type="string", length=255)
     */
    private $fileImg;
    
    /**
     * @var datetime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;
    
    /**
     * @var datetime
     *
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;
    
    /**
     * @ORM\ManyToOne(targetEntity="ProduitCategorie", inversedBy="produits")
     * @ORM\JoinColumn(name="produit_category_id", referencedColumnName="id")
     */
    protected $produitcategory;
    
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
     * Set nom
     *
     * @param string $nom
     * @return Produit
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Produit
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
     * Set description
     *
     * @param string $description
     * @return Produit
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
     * Set produitcategory
     *
     * @param \Bo\AdminBundle\Entity\ProduitCategorie $produitcategory
     * @return Produit
     */
    public function setProduitcategory(\Bo\AdminBundle\Entity\ProduitCategorie $produitcategory = null)
    {
        $this->produitcategory = $produitcategory;

        return $this;
    }

    /**
     * Get produitcategory
     *
     * @return \Bo\AdminBundle\Entity\ProduitCategorie 
     */
    public function getProduitcategory()
    {
        return $this->produitcategory;
    }

    /**
     * Set isDisponible
     *
     * @param string $isDisponible
     * @return Produit
     */
    public function setIsDisponible($isDisponible)
    {
        $this->isDisponible = $isDisponible;

        return $this;
    }

    /**
     * Get isDisponible
     *
     * @return string 
     */
    public function getIsDisponible()
    {
        return $this->isDisponible;
    }

    /**
     * Set fileImg
     *
     * @param string $fileImg
     * @return Produit
     */
    public function setFileImg($fileImg)
    {
        $this->fileImg = $fileImg;

        return $this;
    }

    /**
     * Get fileImg
     *
     * @return string 
     */
    public function getFileImg()
    {
        return $this->fileImg;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Produit
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Produit
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}
