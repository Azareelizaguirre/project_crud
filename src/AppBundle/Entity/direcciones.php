<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * direcciones
 *
 * @ORM\Table(name="direcciones")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\direccionesRepository")
 */
class direcciones
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
     * @var string
     *
     * @ORM\Column(name="calle", type="string", length=50)
     */
    private $calle;

    /**
     * @var string
     *
     * @ORM\Column(name="colonia", type="string", length=50)
     */
    private $colonia;

    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="integer")
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=50)
     */
    private $cp;


    private $direcCompleta;


    /*
     * @ORM\OneToMany(targetEntity="entidad", mappedBy  ="direcciones")
     */
    private $usuarios;

    public function __construct()
    {
        $this->usuarios = new ArrayCollection();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set calle
     *
     * @param string $calle
     *
     * @return direcciones
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set colonia
     *
     * @param string $colonia
     *
     * @return direcciones
     */
    public function setColonia($colonia)
    {
        $this->colonia = $colonia;

        return $this;
    }

    /**
     * Get colonia
     *
     * @return string
     */
    public function getColonia()
    {
        return $this->colonia;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return direcciones
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return int
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return direcciones
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }


    public function setUsuarios($usuarios)
    {
        $this->usuarios = $usuarios;

        return $this;
    }

    public function getUsuarios()
    {
        return $this->usuarios;
    }

    
    public function __toString()
        {
        return $this->calle;
    }

}

