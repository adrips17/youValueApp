<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lugar
 *
 * @ORM\Table(name="lugar")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LugarRepository")
 */
class Lugar
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
     * @ORM\Column(name="nombreLugar", type="string", length=256)
     */
    private $nombreLugar;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcionLugar", type="string", length=256)
     */
    private $descripcionLugar;

    /**
     * @var string
     *
     * @ORM\Column(name="comentariosLugar", type="string", length=256, nullable=true)
     */
    private $comentariosLugar;

    /**
     * @var float
     *
     * @ORM\Column(name="notaMediaLugar", type="float")
     */
    private $notaMediaLugar;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacionLugar", type="string", length=256)
     */
    private $ubicacionLugar;

    /**
     * @var string
     *
     * @ORM\Column(name="imagenLugar", type="string", length=256,nullable=true)
     */
    private $imagenLugar;

    /**
     * @var string
     *
     * @ORM\Column(name="categoriaLugar", type="string", length=256)
     */
    private $categoriaLugar;


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
     * Set nombreLugar
     *
     * @param string $nombreLugar
     *
     * @return Lugar
     */
    public function setNombreLugar($nombreLugar)
    {
        $this->nombreLugar = $nombreLugar;

        return $this;
    }

    /**
     * Get nombreLugar
     *
     * @return string
     */
    public function getNombreLugar()
    {
        return $this->nombreLugar;
    }

    /**
     * Set descripcionLugar
     *
     * @param string $descripcionLugar
     *
     * @return Lugar
     */
    public function setDescripcionLugar($descripcionLugar)
    {
        $this->descripcionLugar = $descripcionLugar;

        return $this;
    }

    /**
     * Get descripcionLugar
     *
     * @return string
     */
    public function getDescripcionLugar()
    {
        return $this->descripcionLugar;
    }

    /**
     * Set comentariosLugar
     *
     * @param string $comentariosLugar
     *
     * @return Lugar
     */
    public function setComentariosLugar($comentariosLugar)
    {
        $this->comentariosLugar = $comentariosLugar;

        return $this;
    }

    /**
     * Get comentariosLugar
     *
     * @return string
     */
    public function getComentariosLugar()
    {
        return $this->comentariosLugar;
    }

    /**
     * Set notaMediaLugar
     *
     * @param float $notaMediaLugar
     *
     * @return Lugar
     */
    public function setNotaMediaLugar($notaMediaLugar)
    {
        $this->notaMediaLugar = $notaMediaLugar;

        return $this;
    }

    /**
     * Get notaMediaLugar
     *
     * @return float
     */
    public function getNotaMediaLugar()
    {
        return $this->notaMediaLugar;
    }

    /**
     * Set ubicacionLugar
     *
     * @param string $ubicacionLugar
     *
     * @return Lugar
     */
    public function setUbicacionLugar($ubicacionLugar)
    {
        $this->ubicacionLugar = $ubicacionLugar;

        return $this;
    }

    /**
     * Get ubicacionLugar
     *
     * @return string
     */
    public function getUbicacionLugar()
    {
        return $this->ubicacionLugar;
    }

    /**
     * Set imagenLugar
     *
     * @param string $imagenLugar
     *
     * @return Lugar
     */
    public function setImagenLugar($imagenLugar)
    {
        $this->imagenLugar = $imagenLugar;

        return $this;
    }

    /**
     * Get imagenLugar
     *
     * @return string
     */
    public function getImagenLugar()
    {
        return $this->imagenLugar;
    }

    /**
     * Set categoriaLugar
     *
     * @param string $categoriaLugar
     *
     * @return Lugar
     */
    public function setCategoriaLugar($categoriaLugar)
    {
        $this->categoriaLugar = $categoriaLugar;

        return $this;
    }

    /**
     * Get categoriaLugar
     *
     * @return string
     */
    public function getCategoriaLugar()
    {
        return $this->categoriaLugar;
    }
}
