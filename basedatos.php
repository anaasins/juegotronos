<?php
/**
 *Clase para conexion y consultas a la base de datos de juego de tronos.Ana Asins.
 */
class JuegoTronos
{
  private $mysqli;
  private $error=false;
  //conexion y comprobacion de errores.
  function __construct()
  {
    $this->mysqli= new mysqli("localhost", "root", "", "gameofthrones");
    if ($this->mysqli->connect_errno) {
      $this->error=true;
    }
  }
  //primera consulta: resumen de la serie a partir de la tabla titles.
  public function resumenSerie(){
    return $resumen=$this->mysqli->query("SELECT plot FROM titles");
  }
  //segunda consulta: listado de actores a partir de la tabla cast.
  public function actoresSerie(){
    return $actores=$this->mysqli->query("SELECT serie_name, name FROM cast");
  }
  //tercera consulta: listado de actores por temporada a partir de la tabla season_ep.
  public function actoresTemporada($temporada, $episodio){
    return $temporada=$this->mysqli->query("SELECT serie_name, name, season, episode FROM season_ep WHERE season='" .$temporada ."' AND episode='" .$episodio ."'");
  }
}

 ?>
