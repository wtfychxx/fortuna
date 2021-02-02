<?php

class ProductModel extends Model{
	public function __construct(){
		$this->connect();
		$this->_table = "product";
	}

	public function generateCode(){
		$today = date('Y-m-d');

		$strQuery = "SELECT count(code) FROM product WHERE date(created_date) = '$today'";

		$query = $this->getRows($strQuery);
		$query = $query + 1;

		$end = '00';
		if($query > 9){
			$end = '0';
		}elseif($query > 99){
			$end = '';
		}

		$year_format = date('ymd');

	 	$result = 'BRG'.$year_format.$end.$query;

	 	return $result;
	}

	public function generateCodes(){
		$strQuery = "SELECT fn_generate_product_number() as number";

		$query = $this->getRows($strQuery);

		return $query;
	}
}

 ?>
