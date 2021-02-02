<?php

class LoginModel extends Model{
	public function __construct(){
		$this->connect();
	}

	public function check($prm_username = '', $prm_password = ''){
		$strQuery = "SELECT * from user_data where email = '$prm_username' and password = '".md5($prm_password)."'";

		$query = $this->query($strQuery);
		$result = $this->getResult($query);

		if(count($result) > 0){
			$user_id = $result[0]['id'];
			$dataQuery = "SELECT * FROM officer_data where id = '$user_id'";
			$queryData = $this->query($dataQuery);
			$resultData = $this->getResult($queryData);

			$userdata = array(
				'login_stat' => true,
				'user_id' => $user_id,
				'name_official' => $resultData[0]['name_official'],
				'birth_date' => $resultData[0]['birth_date'],
				'akses' => $result[0]['akses__id']
			);

			$_SESSION['userdata'] = $userdata;

			return true;
		}else{
			return false;
		}
	}
}

 ?>
