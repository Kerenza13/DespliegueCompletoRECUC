<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RECUCController
{
    #[Route('/api/db', name: 'get_db')]
    public function index(): JsonResponse
    {
        $sql = 'SELECT fraseRECUC FROM secretosRECUC LIMIT 1';
        $result = $this->connection->fetchOne($sql);
        if (!$result) {
            return $this->json(['message' => '¡No se encontraron mensajes en la base de datos!']);
        }
        return $this->json(['message' => 'Symfony de Carlos Morillas Delgado Responde a la llamada de React, respuesta de la BD: ' . $result]);
    }
}
