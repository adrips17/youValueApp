<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuarioRepository")
 */
class Usuario
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
     * @ORM\Column(name="nombreUsuario", type="string", length=128, unique=true)
     */
    private $nombreUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="passwordUsuario", type="string", length=256)
     */
    private $passwordUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreUser", type="string", length=256)
     */
    private $nombreUser;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidosUser", type="string", length=256)
     */
    private $apellidosUser;

    /**
     * @var string
     *
     * @ORM\Column(name="sexoUser", type="string", length=256)
     */
    private $sexoUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaNacimientoUser", type="date")
     */
    private $fechaNacimientoUser;


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
     * Set nombreUsuario
     *
     * @param string $nombreUsuario
     *
     * @return Usuario
     */
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;

        return $this;
    }

    /**
     * Get nombreUsuario
     *
     * @return string
     */
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * Set passwordUsuario
     *
     * @param string $passwordUsuario
     *
     * @return Usuario
     */
    public function setPasswordUsuario($passwordUsuario)
    {
        $this->passwordUsuario = $passwordUsuario;

        return $this;
    }

    /**
     * Get passwordUsuario
     *
     * @return string
     */
    public function getPasswordUsuario()
    {
        return $this->passwordUsuario;
    }

    /**
     * Set nombreUser
     *
     * @param string $nombreUser
     *
     * @return Usuario
     */
    public function setNombreUser($nombreUser)
    {
        $this->nombreUser = $nombreUser;

        return $this;
    }

    /**
     * Get nombreUser
     *
     * @return string
     */
    public function getNombreUser()
    {
        return $this->nombreUser;
    }

    /**
     * Set apellidosUser
     *
     * @param string $apellidosUser
     *
     * @return Usuario
     */
    public function setApellidosUser($apellidosUser)
    {
        $this->apellidosUser = $apellidosUser;

        return $this;
    }

    /**
     * Get apellidosUser
     *
     * @return string
     */
    public function getApellidosUser()
    {
        return $this->apellidosUser;
    }

    /**
     * Set sexoUser
     *
     * @param string $sexoUser
     *
     * @return Usuario
     */
    public function setSexoUser($sexoUser)
    {
        $this->sexoUser = $sexoUser;

        return $this;
    }

    /**
     * Get sexoUser
     *
     * @return string
     */
    public function getSexoUser()
    {
        return $this->sexoUser;
    }

    /**
     * Set fechaNacimientoUser
     *
     * @param \DateTime $fechaNacimientoUser
     *
     * @return Usuario
     */
    public function setFechaNacimientoUser($fechaNacimientoUser)
    {
        $this->fechaNacimientoUser = $fechaNacimientoUser;

        return $this;
    }

    /**
     * Get fechaNacimientoUser
     *
     * @return \DateTime
     */
    public function getFechaNacimientoUser()
    {
        return $this->fechaNacimientoUser;
    }
}
