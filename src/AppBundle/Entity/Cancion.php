<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;


/**
 * Cancion
 *
 * @ORM\Table(name="cancion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CancionRepository")
 */
class Cancion
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="duracion", type="integer")
     */
    private $duracion;

    /**
     *
     * @ManyToOne(targetEntity="Autor", inversedBy="canciones")
     * @JoinColumn(name="autor_id", referencedColumnName="id")
     */
    private $autor;

     /**
     *
     * @ManyToOne(targetEntity="Genero", inversedBy="canciones")
     * @JoinColumn(name="genero_id", referencedColumnName="id")
     */
    private $genero;

    /**
     * @var int
     *
     * @ORM\Column(name="rating", type="integer")
     */
    private $rating;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre.
     *
     * @param string $nombre
     *
     * @return Cancion
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set duracion.
     *
     * @param int $duracion
     *
     * @return Cancion
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion.
     *
     * @return int
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set autor.
     *
     * @param \stdClass $autor
     *
     * @return Cancion
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor.
     *
     * @return \stdClass
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set genero.
     *
     * @param \stdClass $genero
     *
     * @return Cancion
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero.
     *
     * @return \stdClass
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set rating.
     *
     * @param int $rating
     *
     * @return Cancion
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating.
     *
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

}
