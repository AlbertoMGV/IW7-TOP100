<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Entity\Genero;
use AppBundle\Entity\Cancion;
use AppBundle\Entity\Autor;


class SongController {

    /**
     * @Route('/songs/create', name=create_song)
     */

     public function createSong(){
         $genre = new Genre();
         $genre->setNombre("jazz");
         $genre->setDescripcion("El jazz es un género musical nacido a finales del siglo XIX en los Estados Unidos, que se expandió de forma global a lo largo de todo el siglo XX.");
         $autor = new Autor();
         $autor->setNombre("Louis");
         $autor->setApellidos("Armstrong");


     }



}


?>