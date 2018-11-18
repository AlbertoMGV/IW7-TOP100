<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Entity\Genero;
use AppBundle\Entity\Cancion;
use AppBundle\Entity\Autor;


class DatabasePopulatorController extends Controller{

    /**
     * @Route("/filldb")
     */

     public function fillDatabase(){
         $songNo = 0;
         $entityManager = $this->getDoctrine()->getManager();

         if (($fp = fopen("songs.csv", "r")) !== FALSE) {
            while (($row = fgetcsv($fp, 1000, ",")) !== FALSE) {
                $num = count($row);
                $genreName = $row[29];
                $artistName = explode(" ", $row[2])[0];
                $artistSurname = null;
                if(count(explode(" ", $row[2])) > 1){
                    $artistSurname = explode(" ", $row[2], 2)[1];
                }
                $artistId = $row[1];
                $timestamp = mt_rand(1, time());
                $artistDob = new \DateTime(date("d-M-Y", $timestamp));
                $artistRating = intval(floatval($row[0])*100);
                $songName = $row[33];
                $songDuration = intval($row[9]);
                $songRating = intval(floatval($row[23])*100);


                $genre = new Genero();
                $genre->setNombre($genreName);

                $artist = new Autor();
                $artist->setId($artistId);
                $artist->setNombre($artistName);
                if($artistSurname != null){
                    $artist->setApellidos($artistSurname);
                }else{
                    $artist->setApellidos(" ");
                }
                $artist->setRating($artistRating);
                $artist->setFechaNacimiento($artistDob);

                $song = new Cancion();
                $song->setNombre($songName);
                $song->setDuracion($songDuration);
                $song->setRating($songRating);
                $song->setGenero($genre);
                $song->setAutor($artist);

                $tempArtist = $this->getDoctrine()->getRepository(Autor::class)->find($artistId);
                $tempGenre = $this->getDoctrine()->getRepository(Genero::class)->findOneBy(array('nombre' => $genreName));

                                    
                if($tempArtist){
                    $song->setAutor($tempArtist);
                }if($tempGenre){
                    $song->setGenero($tempGenre);
                }
                if($song->getRating() > 0 && $artist->getRating() > 0){
                    if(!$tempArtist){
                        $entityManager->persist($artist);
                    }if(!$tempGenre){
                        $entityManager->persist($genre);
                    }
                    $entityManager->persist($song);
                    $songNo++;
                }
                $entityManager->flush();

            }
            fclose($fp);
        }
        return new Response('done');

     }



}


?>