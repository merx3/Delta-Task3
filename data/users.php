<?php
	function db_addNewUSer($name, $password, $is_admin, $is_deleted){
		global $_dbcon;
		$statement = $_dbcon->prepare("INSERT INTO `users`(`name`, `password`, `is_admin`, `is_deleted`) VALUES (?, ?, ?, ?)");
		$statement->bind_param("ssii", $name, $password, $is_admin, $is_deleted);
		$result =$statement->execute();
		if(!$result){
	        echo "Execute failed: (" . $statement->errno . ") " . $statement->error;
	    }
		$statement->free_result();
	}
?>