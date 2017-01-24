<?php
/**
 *
 */
class CalculosGym
{
  //Array interno privado para hombres
  private $hombres=[];
  //Array interno privado para mujeres
  private $mujeres=[];
  //Método público que permite almacenar un nuevo dato del número de hombres
  public function nuevoHombre($hombre){
    if($hombre>0) $this->hombres[]=$hombre;
  }
  //Método públicos que permite almacenar un nuevo dato del número de mujeres
  public function nuevoMujer($mujer){
    if($mujer>0) $this->mujeres[]=$mujer;
  }
  //Calcular media de Hombres
  public function mediaHombres(){
    $total=0;
    foreach ($this->hombres as $key => $value) {
      $total=$total+$value;
    }
    return array_sum($this->hombres)/count($this->hombres);
  }
  //Calcular media de Mujeres
  public function mediaMujeres(){
    $total=0;
    foreach ($this->mujeres as $key => $value) {
      $total=$total+$value;
    }
    return array_sum($this->mujeres)/count($this->mujeres);
  }
 }
 ?>
