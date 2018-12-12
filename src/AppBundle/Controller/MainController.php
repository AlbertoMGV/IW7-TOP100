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
        $test=$em->getRepository(Cancion::class);

        /* pillar los tops de cada genero y meterlo a un array  */

        

        
        foreach ($generos as $genero) {

            $cid=$genero->getId();

            $top = array_slice($test->findBy(array('genero' => $cid)), 0, 3);

            $tops[$genero->getNombre()] = $top;
        }
      
        return $this->render('main/index.html.php', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR, 'generos' => $generos,'songs' => $songs,'tops' => $tops,
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
     * @Route("/search/{txt}")
     */
    public function searchAct($txt)
    {

       

        $em = $this->getDoctrine();

        $songs = $em->getRepository(Cancion::class)->createQueryBuilder('s');
        $songs->where(
                 $songs->expr()->like('s.nombre', ':txt')
             )
             ->setParameter('txt', $txt.'%')
             ->getQuery()
             ->getResult();
        


        return $this->render('main/search.html.php', ['base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,'songs' => $songs, 'txt' => $txt,]);
    }
    /**
     * @Route("/search/")
     */
public function searchActNull()
    {

       $em = $this->getDoctrine();
       $txt = '';

        $songs = $em->getRepository(Cancion::class)->findAll();

        // replace this example code with whatever you need
        return $this->render('main/search.html.php', ['base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,'songs' => $songs,'txt' => $txt,]);
    }

    
}
