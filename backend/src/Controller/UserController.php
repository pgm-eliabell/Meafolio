<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    #[Route('/api/users', name: 'api_users', methods: ['GET'])]
    public function getUsers(): JsonResponse
    {
        $users = $this->userRepository->findAll();
        $userData = [];

        foreach ($users as $user) {
            $userData[] = [
                'id' => $user->getId(),
                'username' => $user->getUsername(),
                'email' => $user->getEmail(),
            ];
        }

        return new JsonResponse($userData);
    }
}