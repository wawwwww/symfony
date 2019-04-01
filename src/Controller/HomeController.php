<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Tests\Controller\TestAbstractController;
use Twig\Environment;


class HomeController extends AbstractController
{
    /**
     * @var
     */
    private $twig;

    /**
     * @return Response
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function home(): Response
    {

          return  $this->render('home.html.twig');
    }
    public function contact()
    {
        return new Response('<h1>page contact</h1>');
    }
}
