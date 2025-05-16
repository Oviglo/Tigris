<?php
namespace App\Controller;

use App\Form\DummyType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AppController extends AbstractController
{

    #[Route(path: '/form/dummy', name: 'app_dummy', methods: ['GET', 'POST'])]
    public function dummy(Request $request): Response
    {
        $form = $this->createForm(DummyType::class);
        $form->handleRequest($request);

        return $this->render('dummy.html.twig', [
            'form' => $form,
        ]);
    }
}