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

  public function insert(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $id = $this->officer->getRows("select fn_user_id_generate() as user_id");
      // print_r($_SESSION['']); exit;

      $data = [
        'id' => $id,
        'email' => $_POST['email'],
        'password' => md5('123123123'),
        'name' => $_POST['name_first'],
        'akses__id' => 2
      ];

      $query = $this->officer->insert($data, 'user_data');

      $data = [
        'id' => $id,
        'name_first' => $_POST['name_first'],
        'name_middle' => $_POST['name_middle'],
        'name_last' => $_POST['name_last'],
        'name_official' => $_POST['name_official'],
        'birth_date' => $_POST['birth_date'],
        'store__id' => $_SESSION['userdata']['user_store_id'],
        'join_store' => date('Y-m-d')
      ];

      $query = $this->officer->insert($data, 'officer_data');

      $message = 'Save Data Success!';
    }elseif($_SERVER['REQUEST_METHOD'] == 'PUT'){
      $data = [
        'name_first' => $_PUT['name_first'],
        'name_middle' => $_PUT['name_middle'],
        'name_last' => $_PUT['name_last'],
        'name_official' => $_PUT['name_official'],
        'birth_date' => $_PUT['birth_date'],
        'store__id' => $_SESSION['user_store_id']
      ];

      $query = $this->officer->update($data, array('id' => $_PUT['id']));

      $data = [
        'email' => $_PUT['email']
      ];

      $query = $this->officer->update($data, array('id' => $_PUT['id']), 'user_data');

      $message = 'Update Data Success!';
    }

    if($query){
      $return_value = array('formInsert', array($message, 'ok'));
    }else{
      $return_value = array('formError', array('Error when save data!', 'error'));
    }

    echo json_encode($return_value);
  }
}

?>
