<?php

use \app\controller\MainController;

class OfficerController extends MainController{
  public function __construct(){
    $this->model('officer');
  }

  public function index(){
    $data['breadcrumb'] = 'Officer Data';
    $this->template('store/officer/vofficer', $data);
  }

  public function listData(){
    $query = $this->officer->query("SELECT
                                      name_official,
                                      (select official_name from store where id = store__id) as store,
                                      join_store
                                      from officer_data order by name_official asc");
    $list = $this->officer->getResult($query);

    $data = array();
    $no = 0;

    foreach($list as $li){
      $no++;

      $row = array();
      $row[] = $li['name_official'];
      $row[] = $li['store'];
      $row[] = $li['join_store'];

      $data[] = $row;
    }

    $output = array("data" => $data);

    echo json_encode($output);
  }
}

?>
