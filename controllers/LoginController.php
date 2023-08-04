<?php

namespace Controllers;

use Core\Controller;
use Models\Aluno;

class LoginController extends Controller 
{

    public function __construct()
    {
        
    }

    public function index() {

        $array = array();

        if (isset($_POST['email']) && !empty($_POST['email'])) 
        {
            $email = addslashes($_POST['email']);
            $senha = md5($_POST['senha']);

            $aluno = new Aluno();

            if ($aluno->fazerLogin($email, $senha)) {
                header('Location: ' . BASE_URL);
            }
        }

        $this->loadView('login', $array);
    }

    public function logout()
    {
        unset($_SESSION['lgaluno']);
        header('Location: ' . BASE_URL);
    }

}
