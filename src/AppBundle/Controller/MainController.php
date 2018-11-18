<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\ORM\EntityRepository;

use AppBundle\Entity\Cancion;
use AppBundle\Entity\Genero;
use AppBundle\Entity\Autor;



class MainController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('main/index.html.php', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/songs", name="songs")
     */
    public function songsAction(Request $request)
    {
        $em = $this->getDoctrine();


        $songs = $em->getRepository(Cancion::class)->findAll();

        // replace this example code with whatever you need
        return $this->render('main/songs.html.php', ['base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,'songs' => $songs,]);
    }
    /**
     * @Route("/artists", name="artists")
     */
    public function artistsAction(Request $request)
    {
        $em = $this->getDoctrine();


        $autores = $em->getRepository(Autor::class)->findAll();

        return $this->render('main/artists.html.php', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR, 'autores' => $autores,
        ]);
    }
    /**
     * @Route("/genres", name="genres")
     */
    public function genresAction(Request $request)
    {
        $em = $this->getDoctrine();


        $generos = $em->getRepository(Genero::class)->findAll();

        return $this->render('main/genres.html.php', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR, 'generos' => $generos,
        ]);
    }
    /**
     * @Route("/test", name="test")
     */
    public function testIndex()
    {
        return $this->render('main/test.html.php', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
