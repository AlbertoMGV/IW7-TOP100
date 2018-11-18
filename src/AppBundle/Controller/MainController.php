<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Entity;

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
        
        $em = $this->getDoctrine();


        $generos = $em->getRepository(Genero::class)->findAll();
        $songs = $em->getRepository(Cancion::class)->findAll();
        $test='aaaaaaaaaa';

        /* pillar los tops de cada genero y meterlo a un array  */

        $rsm = new ResultSetMapping();

        
        foreach ($generos as $genero) {
            $sql= 'SELECT name FROM cancion WHERE genero_id= :x ORDER BY rating DESC LIMIT 3';
            $query = $em->createQuery($sql);
            $query->setParameter('x', $genero->getId());
            $top = $query->getResult();

            $tops[$genero->getNombre()] = $top;
        }
      
        return $this->render('main/index.html.php', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR, 'generos' => $generos,'songs' => $songs,'test' => $test,
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
