<?php

namespace App\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class RECUCController extends AbstractController
{
    private Connection $conn;

    public function __construct(Connection $conn)
    {
        $this->conn = $conn;
    }

    #[Route('/api/recuc', name: 'api_recuc')]
    public function index(): JsonResponse
    {
        $sql = 'SELECT fraseRECUC FROM secretosRECUC LIMIT 1';
        $frase = $this->conn->fetchOne($sql);

        return $this->json([
            'message' => 'Backend operativo, respuesta de la BD: ' . $frase,
        ]);
    }
}
