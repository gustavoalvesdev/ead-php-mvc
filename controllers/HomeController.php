<?php

namespace Controllers;

use Core\Controller;
use Models\Aluno;
use Models\Curso;

class HomeController extends Controller {

    private $dados;
    private $aluno;

    public function __construct()
    {
        parent::__construct();

        $this->dados = array(
            'info' => array()
        );

        $this->aluno = new Aluno();

        if (! $this->aluno->isLogged()) {
            header('Location: ' . BASE_URL . 'login');
            exit;
        }

        $this->aluno->setAluno($_SESSION['lgaluno']);
        $this->dados['info'] = $this->aluno;

        $this->loadTemplate('header', $this->dados);
    }

    public function index() {
        $this->dados = [
            'cursos' => array()
        ];


        $cursos = new Curso();
        $this->dados['cursos'] = $cursos->getCursosDoAluno($this->aluno->getId());

        $this->loadView('home', $this->dados);
    }

    public function __destruct()
    {
        $this->loadTemplate('footer');
    }

}
