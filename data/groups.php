<?php
	function db_getAllGroups(){
		global $_dbcon;
		$query = 'SELECT `name` FROM `groups`';
		$result = $_dbcon->query($query);
		$groups = array();
		while($row = $result->fetch_assoc()){
            $workdays[] = $row["name"]; 
		}
        return $workdays;
	}
?>