<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Entity\Genero;
use AppBundle\Entity\Cancion;
use AppBundle\Entity\Autor;


class GenreController extends Controller{

    /**
     * @Route("/genres/{genreId}")
     */

     public function displayGenreInfo($genreId){

        $genre = $this->getDoctrine()->getRepository(Genero::class)->find($genreId);

        return $this->render('main/genre_view.html.php', ['base_dir' => 'web','genre' => $genre,]);
     }



}


?>