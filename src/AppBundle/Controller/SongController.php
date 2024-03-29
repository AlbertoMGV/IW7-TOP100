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
     * @Route("/songs/{songId}")
     */

     public function displaySongInfo($songId){

        $song = $this->getDoctrine()->getRepository(Cancion::class)->find($songId);

        return $this->render('main/song_view.html.php', ['base_dir' => 'web','song' => $song,]);
     }



}


?>