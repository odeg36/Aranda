<?php

namespace LogicBundle\Entity\Soporte;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nota
 *
 * @ORM\Table(name="Nota")
 * @ORM\Entity
 */
class Nota
{
    /**
     * @var int
     *
     * @ORM\Column(name="NotCodigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $notCodigo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NotDescripcion", type="text", length=-1, nullable=true)
     */
    private $notDescripcion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NotTicket", type="string", length=20, nullable=true)
     */
    private $notTicket;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuarioId", referencedColumnName="id")
     * })
     */
    private $usuario;



    /**
     * Get notCodigo.
     *
     * @return int
     */
    public function getNotCodigo()
    {
        return $this->notCodigo;
    }

    /**
     * Set notDescripcion.
     *
     * @param string|null $notDescripcion
     *
     * @return Nota
     */
    public function setNotDescripcion($notDescripcion = null)
    {
        $this->notDescripcion = $notDescripcion;

        return $this;
    }

    /**
     * Get notDescripcion.
     *
     * @return string|null
     */
    public function getNotDescripcion()
    {
        return $this->notDescripcion;
    }

    /**
     * Set notTicket.
     *
     * @param string|null $notTicket
     *
     * @return Nota
     */
    public function setNotTicket($notTicket = null)
    {
        $this->notTicket = $notTicket;

        return $this;
    }

    /**
     * Get notTicket.
     *
     * @return string|null
     */
    public function getNotTicket()
    {
        return $this->notTicket;
    }

    /**
     * Set fecha.
     *
     * @param \DateTime|null $fecha
     *
     * @return Nota
     */
    public function setFecha($fecha = null)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha.
     *
     * @return \DateTime|null
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set usuario.
     *
     * @param \Application\Sonata\UserBundle\Entity\User|null $usuario
     *
     * @return Nota
     */
    public function setUsuario(\Application\Sonata\UserBundle\Entity\User $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario.
     *
     * @return \Application\Sonata\UserBundle\Entity\User|null
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
