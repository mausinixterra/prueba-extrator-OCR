<?php


trait ExtraerLinkYoutube
{
    /**
     * Extrae link de la cancion  LetraDeCancion
     */
    public function extraerDesdeLDCLink(){
        preg_match("/<iframe .* src=\"(h.*) /sU", $this->data, $coincidencias);
        return strip_tags(substr($coincidencias[1], 0, -1));
    }

    /**
     * Extrae link de la cancion  DiceLaCancion
     */
    public function extraerDesdeDLCLink(){
        preg_match("/<iframe src=\"(h.*) /sU", $this->data, $coincidencias);
        return strip_tags(substr($coincidencias[1], 0, -1));
    }

}