<?php
include_once("ExtraerNombreArtista.php");
include_once("ExtraerNombreCancion.php");
include_once("ExtraerLetra.php");
include_once("ExtraerLinkYoutube.php");

abstract class Extractor
{
    use ExtraerNombreArtista;
    use ExtraerNombreCancion;
    use ExtraerLetraCancion;
    use ExtraerLinkYoutube;


    protected $url;
    protected $data;

    public function __construct($url){
        $this->url = $url;
        $this->data = $this->getDataFrom($url);
    }
    /**
     * Devuelve el nombre del artista
     * @return string
     */
    abstract protected function getNombreArtista();

    /**
     * Devuelve el nombre de la cancion
     * @return string
     */
    abstract protected function getNombreCancion();

    /**
     * Devuelve la letra
     * @return string
     */
    abstract protected function getLetra();

    /**
     * Devuelve el link de youtube
     * @return string
     */
    abstract protected function getLinkYoutube();



    /**
     * Me devueve la info de la url
     * @param $url
     * @return string
     */
    protected function getDataFrom($url){
        return file_get_contents($url);
    }

    /**
     * Devuelve un arreglo con todos los datos extraidos
     * @return array
     */
    public function getTodosLosDatos(){
        $data = [
            'artista'=>$this->getNombreArtista(),
            'cancion'=>$this->getNombreCancion(),
            'Letra'=>$this->getLetra(),
            'youtube'=>$this->getLinkYoutube()
        ];

        return $data;
    }
}