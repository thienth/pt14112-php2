<?php 
/**
 * 
 */
class BaseModel
{
	
	function __construct()
	{
		$this->conn = new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8",
			"root",
			"123456");
	}

	public static function all(){
		$model = new static();
		$model->queryBuilder = 
					"select * from " . $model->tableName;
		$stmt = $model->conn->prepare($model->queryBuilder);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
	}

	public function where($col, $con, $val){
		$this->queryBuilder = 
					"select * from " . $this->tableName
					. " where $col $con '$val'";
		$stmt = $this->conn->prepare($this->queryBuilder);
		$stmt->execute();
		return $stmt->fetchAll();
	}
}
 ?>