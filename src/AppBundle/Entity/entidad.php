<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * entidad
 *
 * @ORM\Table(name="entidad")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\entidadRepository")
 */
class entidad
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
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidoPat", type="string", length=50)
     */
    private $apellidoPat;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidoMat", type="string", length=50)
     */
    private $apellidoMat;

    /**
     * @var int
     *
     * @ORM\Column(name="edad", type="integer")
     */
    private $edad;

    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer")
     */
    private $tel;


    /**
     * @ORM\ManyToOne(targetEntity="direcciones", inversedBy="entidad")
     * @ORM\JoinColumn(name="direcciones_id", referencedColumnName="id")
     */
    private $direcciones;
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return entidad
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidoPat
     *
     * @param string $apellidoPat
     *
     * @return entidad
     */
    public function setApellidoPat($apellidoPat)
    {
        $this->apellidoPat = $apellidoPat;

        return $this;
    }

    /**
     * Get apellidoPat
     *
     * @return string
     */
    public function getApellidoPat()
    {
        return $this->apellidoPat;
    }

    /**
     * Set apellidoMat
     *
     * @param string $apellidoMat
     *
     * @return entidad
     */
    public function setApellidoMat($apellidoMat)
    {
        $this->apellidoMat = $apellidoMat;

        return $this;
    }

    /**
     * Get apellidoMat
     *
     * @return string
     */
    public function getApellidoMat()
    {
        return $this->apellidoMat;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     *
     * @return entidad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return int
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     *
     * @return entidad
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return int
     */
    public function getTel()
    {
        return $this->tel;
    }

    public function setDirecciones($direcciones)
    {
        $this->direcciones = $direcciones;

        return $this;
    }

    public function getDirecciones()
    {
        return $this->direcciones;
    }
}

