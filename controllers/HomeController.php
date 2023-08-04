<?php

namespace Controllers;

use Core\Controller;
use Models\Aluno;

class HomeController extends Controller {

    public function __construct()
    {
        parent::__construct();

        $aluno = new Aluno();

        if (! $aluno->isLogged()) {
            header('Location: ' . BASE_URL . 'login');
        }
    }

    public function index() {
        $this->loadView('home');
    }

}
