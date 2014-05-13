<?php
	require_once 'groups.php';

	function db_addNewUSer($name, $password, $is_admin, $user_groups, $is_deleted){
		global $_dbcon;
		$statement = $_dbcon->prepare("INSERT INTO `users`(`name`, `password`, `is_admin`, `is_deleted`) VALUES (?, ?, ?, ?)");
		$statement->bind_param("ssii", $name, $password, $is_admin, $is_deleted);
		$result =$statement->execute();
		if(!$result){
	        echo "Execute failed: (" . $statement->errno . ") " . $statement->error;
	    }
		$user_id = $_dbcon->insert_id;
		$statement->free_result();	
		if($is_admin === 0){
			$groups = preg_split("/[, ]/", $user_groups, -1, PREG_SPLIT_NO_EMPTY);
			if(count($groups) === 0){
				$groups[] = "default";
			}
			foreach($groups as $group){
				$group_id = db_getGroupId($group);
				db_addGroupToUser($user_id, $group_id);
			}
		}
	}

	function db_addGroupToUser($user_id, $group_id){
		global $_dbcon;
		$statement = $_dbcon->prepare("INSERT INTO `users_groups`(`user_id`, `group_id`) VALUES (?, ?)");
		$statement->bind_param("ii", $user_id, $group_id);
		$result =$statement->execute();
		if(!$result){
	        echo "Execute failed: (" . $statement->errno . ") " . $statement->error;
	  	}
		$statement->free_result();	
	}

	function db_getUserGroups($username){
		global $_dbcon;
		$query = 'SELECT `name` FROM `groups` ';
		$query .= 'WHERE `group_id` IN (';
		$query .=   'SElECT `group_id` ';
		$query .=   'FROM `users_groups` JOIN `users` ';
		$query .=   'ON `users_groups`.`user_id` = `users`.`user_id` ';
		$query .=   'AND `users`.`name` = \''.$username.'\'';
		$query .= ')';
		$result = $_dbcon->query($query);
		$groups = array();
		if($result->num_rows > 0){
		    while($row = $result->fetch_assoc()){
	                $groups[] = $row["name"]; 	
		    }
		}
        return $groups;	
	}
?>