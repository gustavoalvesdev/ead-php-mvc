<?php 

namespace Core;

class Controller 
{


    public function __construct()
    {

    }

    public function loadView($viewName, $viewData = array()) 
    {
        extract($viewData);



        require_once 'views/'.$viewName.'.php';
    } 

    public function loadTemplate($templateName, $templateData = array()) 
    {
        extract($templateData);



        require_once 'views/template_parts/'.$templateName.'.php';
    } 

    public function actionNotFound() 
    {
        $this->loadView('not-found');
    }

    public function sendTo($url = '') 
    {
        header('Location: ' . BASE_URL . $url);
        exit;
    }
}
