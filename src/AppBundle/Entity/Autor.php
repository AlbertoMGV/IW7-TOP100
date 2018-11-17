<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Autor
 *
 * @ORM\Table(name="autor")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AutorRepository")
 */
class Autor
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
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    private $apellidos;

    /**
     * @var int
     *
     * @ORM\Column(name="fecha_nacimiento", type="date")
     */
    private $fechaNacimiento;

    /**
     * One product has many features. This is the inverse side.
     * @OneToMany(targetEntity="Cancion", mappedBy="autor")
     */

    private $canciones;

    public function __construct(){
        $this->canciones = new ArrayCollection();
    }

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
     * @return Autor
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
     * Set apellidos.
     *
     * @param string $apellidos
     *
     * @return Autor
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos.
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    public function setCanciones($canciones = null){
        $this->canciones = $canciones;

        return $this;
    }

    public function getCanciones(){
        return $this->canciones;
    }



    /**
     * Add cancione.
     *
     * @param \AppBundle\Entity\Cancion $cancione
     *
     * @return Autor
     */
    public function addCancione(\AppBundle\Entity\Cancion $cancione)
    {
        $this->canciones[] = $cancione;

        return $this;
    }

    /**
     * Remove cancione.
     *
     * @param \AppBundle\Entity\Cancion $cancione
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCancione(\AppBundle\Entity\Cancion $cancione)
    {
        return $this->canciones->removeElement($cancione);
    }
}
