<?php
/**
 *Extrae toda la data de el sitio web dicelacancion.com
 */


class ExtraerDesdeDLC extends Extractor{

    protected function getNombreArtista()
    {
        return $this->extraerDesdeDLC();
    }

    protected function getNombreCancion()
    {
        return $this->extraerDesdeDLCCancion();
    }

    protected function getLetra()
    {
        return $this->extraerDesdeDLCLetra();
    }

    protected function getLinkYoutube()
    {
        return $this->extraerDesdeDLCLink();
    }
}