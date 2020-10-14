<?php


trait ExtraerNombreArtista
{
    /**
     * Extrae el nombre del artista  LetraDeCancion
     */
    public function extraerDesdeLDC(){
        preg_match("/<span class=\"small\">(.*?)<\/span>/si", $this->data, $coincidencias);
        return strip_tags($coincidencias[1]);
    }

    /**
     * Extrae el nombre del artista  DiceLaCancion
     */
    public function extraerDesdeDLC(){
        preg_match("/<h2 class=\"artistTitle\">(.*)<\/h2>/ui", $this->data, $coincidencias);
        return strip_tags($coincidencias[1]);
    }

}