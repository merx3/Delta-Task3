<?php
	function db_getAllGroups(){
		global $_dbcon;
		$query = 'SELECT `name` FROM `groups`';
		$result = $_dbcon->query($query);
		$groups = array();
		if($result->num_rows > 0){
		    while($row = $result->fetch_assoc()){
	                $groups[] = $row["name"]; 	
		    }
		}
        return $groups;
	}

	function db_getGroupId($group_name){		
		global $_dbcon;
		$query = 'SELECT `group_id` FROM `groups` WHERE `name`=\''.$group_name.'\' LIMIT 1';
		$result = $_dbcon->query($query);
		$groups = array();
		$row = $result->fetch_assoc();
        $group_id= (int)$row["group_id"]; 	
        return $group_id;
	}
?>