<?php

namespace ProbandoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vemos
 *
 * @ORM\Table(name="vemos")
 * @ORM\Entity
 */
class Vemos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255, nullable=false)
     */
    private $apellido;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel", type="smallint", nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo", type="string", length=255, nullable=false)
     */
    private $cargo;


    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Vemos
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
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Vemos
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     *
     * @return Vemos
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return integer
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set cargo
     *
     * @param string $cargo
     *
     * @return Vemos
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string
     */
    public function getCargo()
    {
        return $this->cargo;
    }

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
     * @var string
     */
    private $cargo2;


    /**
     * Set cargo2
     *
     * @param string $cargo2
     *
     * @return Vemos
     */
    public function setCargo2($cargo2)
    {
        $this->cargo2 = $cargo2;

        return $this;
    }

    /**
     * Get cargo2
     *
     * @return string
     */
    public function getCargo2()
    {
        return $this->cargo2;
    }
}
