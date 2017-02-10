<?php

include_once('nota.php');
include_once('Collector.php');

class NotaCollector extends Collector
{
  
  function showNotas() {
    $rows = self::$db->getRows("SELECT * FROM nota ");        
    $arrayNota= array();        
    foreach ($rows as $c){
      $aux = new Nota($c{'id'},$c{'nombre'},$c{'parcial'},$c{'final'},$c{'mejoramiento'},$c{'aprueba'});
      array_push($arrayNota, $aux);
    }
    return $arrayNota;        
  }

}
?>
