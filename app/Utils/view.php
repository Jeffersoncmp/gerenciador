<?php

namespace App\Utils;


class View{

    /**
     * Método responsável por retornar o conteúdo de uma View
     * @param string $view
     * @return string 
     */

     
    private static function getContentView($view){
        $file = __DIR__.'/../../resources/view/'.$view.'html';
        
    }
    /**
     * Método responsável por retornar o conteúdo renderizado de uma View
     * @param string $view
     * @return string
     */
    public static function render($view){

    }
}