<?php
	class Model{
		protected $_dbHandle;
		protected $_table;

		public function connect(){
			$this->_dbHandle = new PDO(DB_XX, DB_USER, DB_PASS);

			try{
				new PDO(DB_XX, DB_USER, DB_PASS);
			}catch(PDOException $e){
				echo 'Koneksi Ke database gagal'.$e->getMessage();
			}
		}

		public function query($query){
			return $this->_dbHandle->query($query);
		}

		public function getResult($pdoQuery){
			$data = array();
			foreach($pdoQuery as $row){
				array_push($data, $row);
			}
			return $data;
		}

		public function getRows($pdoQuery){
			$res = $this->_dbHandle->prepare($pdoQuery);
			$res->execute();
			$num_rows = $res->fetchColumn();
			return $num_rows;
 		}

 		public function selectAll($orderBy = '', $order = 'ASC', $limit = ''){
 			$query = "SELECT * FROM ".$this->_table;
 			if($orderBy != '') $query .= " ORDER BY $orderBy $order";

 			if($limit != '') $query = " LIMIT $limit";

 			return $this->query($query);
 		}

 		public function selectWhere($where = '', $orderBy = '', $order = 'ASC', $limit = ''){
 			$query = "SELECT * FROM ".$this->_table;

 			if(is_array($where)){
 				$query .= " WHERE";
 				foreach($where as $key => $val){
 					$query .= " $key='$val' AND";
 				}

 				$query = substr($query, 0, -3);
 			}

 			if($orderBy != '') $query .= "ORDER BY $orderBy $order";

 			if($limit != '') $query .= " LIMIT $limit";

 			return $this->query($query);
 		}

 		public function selectLike($where = '', $orderBy = '', $order = 'ASC', $limit = ''){
 			$query = "SELECT * FROM ".$this->_table;

 			if(is_array($where)){
 				$query .= " WHERE";

 				foreach($where as $key => $val){
 					$query .= " $key like '$val' OR";
 				}

 				$query = substr($query, 0, -2);
 			}

 			if($orderBy != '') $query .= " ORDER BY $orderBy $order";

 			if($limit != '') $query .= " LIMIT $limit";

 			return $this->query($query);
 		}

 		public function selectJoin($table, $join = "JOIN", $param, $where = "", $orderBy = "", $order = 'ASC', $limit = ''){
 			$query = "SELECT * FROM ".$this->_table;

 			if(is_array($table)){
 				foreach($table as $tbl){
 					$query .= " $join $tbl";
 				}
 			}else{
 				$query .= " $join $table";
 			}

 			foreach($param as $key => $val){
 				$query .= " ON $key=$val";
 			}

 			if(is_array($where)){
 				$query .= " WHERE";
 				foreach($where as $key => $val){
 					$query .= " $key='$val' AND";
 				}
 				$query = substr($query, 0, -3);
 			}

 			if($orderBy != '') $query .= " ORDER BY $orderBy $order";

 			if($limit != '') $query .= " LIMIT $limit";

 			return $this->query($query);
 		}

 		public function delete($where = ''){
 			$query = "DELETE FROM ".$this->_table;

 			if(is_array($where)){
 				$query .= " WHERE";

 				foreach($where as $key=>$val){
 					$query .= " $key='$val' AND";
 				}

 				$query = substr($query, 0, -3);
 			}

 			return $this->query($query);
 		}

 		public function insert($data, $prm_table = ''){
 			$table = $this->_table;
 			if($prm_table != ''){
 				$table = $prm_table;
 			}

 			$query = "INSERT INTO ".$table." SET";
 			foreach($data as $key => $val){
 				$query .= " $key = '$val',";
 			}

 			$query = substr($query, 0, -1);
 			return $this->query($query);
 		}

 		public function update($data, $where = '', $prm_table = ''){
 			$table = $this->_table;
 			if($prm_table != ''){
 				$table = $prm_table;
 			}
 			$query = "UPDATE ".$table." SET ";

 			foreach($data as $key => $val){
 				$query .= "$key = '$val',";
 			}

 			$query = substr($query, 0, -1);
 			if(is_array($where)){
 				$query .= " WHERE";
 				foreach($where as $key => $val){
 					$query .= " $key = '$val' AND";
 				}
 				$query = substr($query, 0, -3);
 			}

 			return $this->query($query);
 		}
	}
 ?>
