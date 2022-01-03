<?php

namespace App\Controller\Page;
use \App\Utils\View;

Class Home{
    /**
     * Método resposavel por retornar o conteúdo (view) do nosso site
     *
     * @return string
     */
    public static function getHome(){
        return View::render('page/home');
    }

}