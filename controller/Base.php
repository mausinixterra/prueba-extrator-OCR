<?php
include_once ('lib/GstBase.php');

class Base{

    //funcion principal
    public function main(){
        $var['titulo'] = "Prueba para OCR de GEVIR";
        self::vista($var, 'views/form.php');
    }

    //funcion post que devuelve un json de la informacion extraida
    public function post(){
        if ($_POST){
            $gstBase = new GstBase();
            $res = $gstBase->extraerDatos($_POST['url']);
            echo json_encode($res);
        }
    }

    static function vista(array $vars, $vista){
        extract($vars, EXTR_PREFIX_SAME, "wddx");
        include_once($vista);
    }
}