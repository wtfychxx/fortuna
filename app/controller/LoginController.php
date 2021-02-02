<?php

use \app\controller\MainController;

class LoginController extends MainController{
	public function __construct(){
		$this->model('login');
	}

	public function index(){
		$this->view('auth/v_login');
	}

	public function ajx_login(){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$check = $this->login->check($username, $password);
		$return_value = array('formLogin', array('Successfully Login', 'ok'));
		if(!$check){
			$return_value = array('formError', array('Incorrect email or password', 'error'));
		}

		echo json_encode($return_value);
	}

	public function register(){
		$this->view('auth/v_register');
	}

	public function register_data(){
		// get all POST data
		$store_name = trim($_POST['store_name']) == '' ? null : $_POST['store_name'];
		$store_address = trim($_POST['store_address']) == '' ? null : $_POST['store_address'];
		$store_type = trim($_POST['store_business_type']) == '' ? null : $_POST['store_business_type'];
		$store_logo = trim($_FILES['store_logo']['tmp_name']) == '' ? null : file_get_contents($_FILES['store_logo']['tmp_name']);
		$username = trim($_POST['username']) == '' ? null : $_POST['username'];
		$email = trim($_POST['user_email']) == '' ? null : $_POST['user_email'];
		$password = trim($_POST['password']) == '' ? null : $_POST['password'];

		$data = [
			'official_name' => $store_name,
			'store_type' => $store_type,
			'address' => $store_address,
			'owner_name' => $username,
			'store_logo' => $store_logo
		];


		$query = $this->login->insert($data, 'store');
		$store_id = $this->login->getRows('select last_insert_id() from store');

		// owner id
		$user_id = $this->login->getRows("select fn_user_id_generate() as user_id");

		$data = [
			'id' => $user_id,
			'name_official' => $username,
			'store__id' => $store_id
		];

		$query = $this->login->insert($data, 'officer_data');

		$data = [
			'id' => $user_id,
			'email' => $email,
			'password' => md5($password),
			'name' => $username
		];

		$query = $this->login->insert($data, 'user_data');

		if($query){
			$return_value = [
				'status' => 'success',
				'message' => 'Your account has been created!',
				'url' => BASE_PATH.'/login'
			];
		}else{
			$return_value = [
				'status' => 'error',
				'message' => 'Oops..something went wrong!'
			];
		}

		echo json_encode($return_value);
	}
}

 ?>
