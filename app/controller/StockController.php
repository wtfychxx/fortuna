<?php

use \app\controller\MainController;

class StockController extends MainController{
  public function __construct(){
    $this->model('Stock');
  }

  public function index(){
    $this->template('store/stock/view');
  }
}

?>
