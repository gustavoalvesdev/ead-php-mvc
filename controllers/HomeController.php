<?php

namespace Controllers;

use Core\Controller;

class HomeController extends Controller {

    public function __construct()
    {
   
    }

    public function index() {
        $this->loadView('home');
    }

}
