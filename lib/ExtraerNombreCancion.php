<?php


trait ExtraerNombreCancion
{
    /**
     * Extrae el nombre de la cancion  LetraDeCancion
     */
    public function extraerDesdeLDCCancion(){
        preg_match("/<h1 class=\"h1\">(.*?)<\/h1>/si", $this->data, $coincidencias);
        return strip_tags(substr(str_replace("Letra", "", $coincidencias[1]), 1, -1));
    }

    /**
     * Extrae el nombre de la cancion  DiceLaCancion
     */
    public function extraerDesdeDLCCancion(){
        preg_match("/<h1 class=\"lyricTitle\">(.*)<\/h1>/ui", $this->data, $coincidencias);
        return strip_tags(substr($coincidencias[1], 0, -20));
    }

}