<?php
class Auto{
    public $color;
    public function setColor($color){
        $this->Color = $color;
    }
    public function getColor(){
        return $this->Color;
    }

    public function Pintar(){
        echo'Nuevo color:'.$this->Color;
    }
}
$nuevoAuto = new Auto();
$nuevoAuto->setColor(' rojo');
$nuevoAuto->Pintar();
?>