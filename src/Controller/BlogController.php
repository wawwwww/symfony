<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/page/{id<[a-z]+>}", methods={"GET"})
     * @param string/null $id
     * @return Response
     */
    public function page(?string $id = null): Response
    {
        var_dump($id);
        return $this->render("blog.html.twig");
    }


    /**
     * @Route ("/support")
     * @return BinaryFileResponse
     */
    public function filepdf(): BinaryFileResponse
    {

        //return $this->file('pdf/suppsym.pdf');

        return $this->file('suppsym.pdf', null,ResponseHeaderBag::DISPOSITION_INLINE);
    }
    /**
     * @Route("/redirige-moi-sur-accueil")
     * @return Response
     */

    public function redirection()

    {
        return $this->redirectToRoute('app_homepage');

    }

    /**
     * @Route("/formulaire/affichage")
     */
    public function displayForm(): Response
    {
        return $this->render('form/index.html.twig');
    }

    /**
     * @Route("/formulaire/traitement", name="form_handler")
     * @param Request $request
     */
    public function handleForm(Request $request)
    {
        $posts = $request->request;
        var_dump($posts);
        var_dump("Le formulaire a été soumis");
        die('debug');
    }



}