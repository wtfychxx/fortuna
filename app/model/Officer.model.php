<?php

class OfficerModel extends Model{
  public function __construct(){
    $this->connect();
    $this->_table = 'officer_data';
  }
}

 ?>
