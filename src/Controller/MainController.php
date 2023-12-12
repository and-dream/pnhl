<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'site_homepage')]
    public function home(): Response
    {
        return $this->render('pages/index.html.twig', [
            'title' => 'Bienvenue sur Holi Sens',
            'age' => '28',
        ]);
    }

    #[Route('/a-propos', name: 'site_about')]
    public function about(): Response
    {
        return $this->render('pages/apropos.html.twig');
    }

    #[Route('/cours', name: 'site_cours')]
    public function cours(): Response
    {
        return $this->render('pages/cours.html.twig');
    }

    #[Route('/retraites', name: 'site_retraites')]
    public function retraites(): Response
    {
        return $this->render('pages/retraites.html.twig');
    }

    // Pour plus tard lorsque Holi Sens voudra lancer son e-shop
    #[Route('/boutique', name: 'site_shop')]
    public function boutique(): Response
    {
        return $this->render('pages/boutique.html.twig');
    }

    #[Route('/mentions-legales', name: 'site_mentions')]
    public function mentions(): Response
    {
        return $this->render('pages/mentions.html.twig');
    }

    #[Route('/cgv', name:'site_cgv')]
    public function cgv(): Response
    {
        return $this->render('pages/cgv.html.twig');
    }

    #[Route('/contact', name:'site_contact')]
    public function contact(): Response
    {
        return $this->render('pages/contact.html.twig');
    }
}
