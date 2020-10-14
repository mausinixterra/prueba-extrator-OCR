<?php
/**
 *Extrae toda la data de el sitio web dicelacancion.com
 */


class ExtraerDesdeLDC extends Extractor{

    protected function getNombreArtista()
    {
        return $this->extraerDesdeLDC();
    }

    protected function getNombreCancion()
    {
        return $this->extraerDesdeLDCCancion();
    }

    protected function getLetra()
    {
        return $this->extraerDesdeLDCLetra();
    }

    protected function getLinkYoutube()
    {
        return $this->extraerDesdeLDCLink();
    }
}