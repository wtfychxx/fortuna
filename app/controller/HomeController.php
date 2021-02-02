<?php

use \app\controller\MainController;

class HomeController extends MainController{
  public function index(){
    $this->template('home');
  }
}

?>
