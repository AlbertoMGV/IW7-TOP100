<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Entity\Genero;
use AppBundle\Entity\Cancion;
use AppBundle\Entity\Autor;


class ArtistController extends Controller{

    /**
     * @Route("/artists/{artistId}")
     */

     public function displayGenreInfo($artistId){

        $artist = $this->getDoctrine()->getRepository(Autor::class)->find($artistId);

        return $this->render('main/artist_view.html.php', ['base_dir' => 'web','artist' => $artist,]);
     }



}


?>