<?php

namespace 'ProbandoBundle\Entity';

use Doctrine\ORM\Mapping as ORM;

/**
 * Municipalidad
 *
 * @ORM\Table(name="municipalidad")
 * @ORM\Entity
 */
class Municipalidad
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
     * @ORM\Column(name="direccion", type="string", length=255, nullable=false)
     */
    private $direccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel", type="smallint", nullable=false)
     */
    private $tel;


}

