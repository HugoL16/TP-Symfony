<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AproposController extends AbstractController
{
    #[Route('/a-propos')]
    public function number(): Response
    {
        return $this->render('pages/aPropos.html.twig');
    }
}