<?php

class persona {

    public $nombre;
    public $direcion;
    public $numerodedocumento;
    public $edad;
    public $nacionalidad;


    public function mostrardatos ()

    {
      
       echo 'nacionalidad' . '<br>';
       echo 'id' . $this->nacionalidad->id . '<br>';
       echo 'descripcion' . $this->nacionalidad->descripcion . '<br>';


       echo '---------------------' . '<br>';
       echo 'Persona'. '<br>';
       echo 'nombre' . $this->nombre . '<br>';
       echo 'direccion' . $this->direccion . '<br>';
       echo 'numero de documento' . $this->numerodedocumento . '<br>';
       echo 'edad' . $this->edad . '<br>';
       

       

    }


}
