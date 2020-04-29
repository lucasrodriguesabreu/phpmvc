<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerController;


class ListarCursos{

    private $repositorioDeCursos;

    public function __construct(){
        $entityManager = (new EntityManagerCreator())
            ->getEntityManager();
        $this->repositorioDeCursos = $entityManager
            ->getRepository(\Alura\Cursos\Entity\Curso::class);
    }

    public function processaRequisicao(){
        
        $cursos = $this->$repositorioDeCursos->findAll();
        $titulo = 'Lista de cursos';
        require __DIR__ . '/../../view/cursos/listar-cursos.php';

    }
}