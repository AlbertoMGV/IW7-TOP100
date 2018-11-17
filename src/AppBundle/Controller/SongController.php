<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Entity\Genero;
use AppBundle\Entity\Cancion;
use AppBundle\Entity\Autor;


class SongController extends Controller{

    /**
     * @Route("/songs/create")
     */

     public function createSong(){
        $genre = new Genero();
        $genre->setNombre("jazz");
        $genre->setDescripcion("El jazz es un género musical nacido a finales del siglo XIX en los Estados Unidos, que se expandió de forma global a lo largo de todo el siglo XX.");
        $autor = new Autor();
        $autor->setNombre("Louis");
        $autor->setApellidos("Armstrong");
        $autor->setFechaNacimiento(new \Datetime("04-08-1901"));
        $cancion = new Cancion();
        $cancion->setNombre("What a wonderful world");
        $cancion->setDuracion(150);
        $cancion->setAutor($autor);
        $cancion->setGenero($genre);

        $em = $this->getDoctrine()->getManager();
        $em->persist($genre);
        $em->persist($autor);
        $em->persist($cancion);

        $em->flush();

        return new Response('Saved louis armstrong song');
     }



}


?>