<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

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
        // replace this example code with whatever you need
        return $this->render('main/songs.html.php', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/artists", name="artists")
     */
    public function artistsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('main/artists.html.php', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/genres", name="genres")
     */
    public function genresAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('main/genres.html.php', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
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
