<?php


trait ExtraerLetraCancion
{
    /**
     * Extrae la letra de la cancion  LetraDeCancion
     */
    public function extraerDesdeLDCLetra(){
        preg_match("/<p>(.*?)<\/p>/s", $this->data, $coincidencias);
        return strip_tags(substr($coincidencias[1], 1, -1));
    }

    /**
     * Extrae la letra de la cancion  DiceLaCancion
     */
    public function extraerDesdeDLCLetra(){
        preg_match("/<p>(.*?)<\/p>/s", $this->data, $coincidencias);
        return strip_tags($coincidencias[1]);
    }

}