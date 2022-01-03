<?php

namespace App\Utils;

Class View{

    /**
     * Método responsável por retornar o conteúdo de uma View
     * @param string $string
     * @param string 
     */

    private static function getContentView($view){
        $file = __DIR__.'/../../resources/view/'.$view.'.html'; 
        return file_exists($file) ? file_get_contents($file) : 'falha'; // operador ternario
    }

    /**
     * Método responsável por retornar o conteúdo Rederizado da uma VIEW
     * @param string $string
     * @param array $vars (string/numerico)
     * @param string
     */

    public static function render($view, $vars = []){
        // CONTEÚDO DA VIEW
        $contentView = self::getContentView($view);
        // Returno o conteúdo Renderizados
        return $contentView;

    }
}