<?php

use \app\controller\MainController;

class ProductController extends MainController{
	function __construct(){
		$this->model('product');
	}

	public function index(){
		$data['breadcrumb'] = 'Product';
		$this->template('store/product/index', $data);
	}

	public function listData(){
		$query = $this->product->selectAll();
		$list = $this->product->getResult($query);

		$data = array();
		$no = 0;

		foreach($list as $li){
			$no++;

			$row = array();
			$row[] = $li['code'];
			$row[] = $li['name'];
			$row[] = $li['price'];
			$row[] = $li['description'];
			$row[] = $li['stock'];
			$row[] = "<a class='btn btn-success btn-rounded' onclick='editForm(\"".$li['id']."\")'><i class='fa fa-pencil'></i> <a> <a class='btn btn-danger' onclick='deleteForm(\"".$li['id']."\")'><i class='fa fa-trash'></i><a>";


			$data[] = $row;
		}

		$output = array("data" => $data);

		echo json_encode($output);
	}

	public function edit($prm_id = ''){
		$query = $this->product->selectWhere(array("id" => $prm_id));

		$data = $this->product->getResult($query);

		echo json_encode($data[0]);
	}

	public function insert(){
		$data = [
			'code' => $_POST['code'],
			'name' => $_POST['name'],
			'price' => $_POST['price'],
			'stock' => $_POST['stock'],
			'description' => $_POST['description']
		];

		if(trim($_POST['id']) == ''){
			$query = $this->product->insert($data);
		}else{
			$query = $this->product->update($data, array('id' => $_POST['id']));
		}

		if($query){
			$return_value = array('formInsert', array('Save Success!', 'ok'));
		}else{
			$return_value = array('formError', array('Error when save data!!', 'error'));
		}

		echo json_encode($return_value);
	}

	public function generateCode(){
		$number = $this->product->generateCodes();

		echo json_encode($number);
	}

	public function deleteData($prm_id = ''){
		$query = $this->product->delete(array('id' => $prm_id));

		$return_value = array('formError', array('Error when delete data!', 'error'));
		if($query){
			$return_value = array('formDelete', array('Delete Success!', 'ok'));
		}

		echo json_encode($return_value);
	}

	public function test(){
		$return_value = [
			'status' => 'success',
			'message' => 'Your account has been created!',
			'url' => BASE_PATH.'/login'
		];
		echo json_encode($return_value);
	}
}

 ?>
