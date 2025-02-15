<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class ApiController extends AbstractController
{
    #[Route('/api/content', name: 'app_api_content', methods: ['GET'])]
    public function getContent(): JsonResponse
    {
        $data = [
            'title' => 'Hello from Symfony!',
            'description' => 'This is some content from the Symfony backend.'
        ];

        return new JsonResponse($data);
    }
}
