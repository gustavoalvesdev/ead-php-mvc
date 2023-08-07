<?php

namespace Controllers;

use Core\Controller;
use Models\Aluno;
use Models\Curso;

class CursosController extends Controller {

    private $dados;
    private $aluno;
    private $curso;

    public function __construct()
    {
        parent::__construct();

        $this->dados = array(
            'info' => array()
        );

        $this->aluno = new Aluno();

        if (! $this->aluno->isLogged())
            $this->sendTo('login');

        $this->aluno->setAluno($_SESSION['lgaluno']);
        $this->dados['info'] = $this->aluno;

        $this->loadTemplate('header', $this->dados);
    }

    public function index() 
    {
        $this->sendTo();
    }

    public function __destruct()
    {
        $this->loadTemplate('footer');
    }

    public function acessar($id)
    {
        $this->dados = array(
            'curso' => array(),
            'aulas' => array()
        );

        $this->aluno = new Aluno();
        $this->aluno->setAluno($_SESSION['lgaluno']);

        if ($this->aluno->isInscrito($id)) {

            $this->curso = new Curso();
            $this->curso->setCurso($id);
            $this->dados['curso'] = $this->curso;

            $this->loadView('curso_entrar', $this->dados);
        } else
            $this->sendTo();
        

    }

}
