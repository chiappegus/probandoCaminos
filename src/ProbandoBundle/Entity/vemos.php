<?php

namespace 'ProbandoBundle\Entity';

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


}

