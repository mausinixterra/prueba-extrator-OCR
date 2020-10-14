<?php
include_once('Extractor.php');
foreach (glob(dirname(__FILE__)."/formatos/*.php") as $filename)
{
    include $filename;
}

class GstBase{
    /**
     * Se le pasa una url ejemplo: https://www.dicelacancion.com/letra-ora-por-mi-daddy-yankee
     * y devuelve una estructura JSON de la cancion
     * @param $url
     * @return array|string[]
     * @throws Exception
     */
    public function extraerDatos($url)
    {
        if(stripos($url, 'letradecancion')!==FALSE){
            $dlc = new ExtraerDesdeLDC($url);
            return $dlc->getTodosLosDatos();
        } else if(stripos($url, 'dicelacancion')!==FALSE){
            $dlc = new ExtraerDesdeDLC($url);
            return $dlc->getTodosLosDatos();
        }

        throw new Exception("Dato no soportado");
    }
}