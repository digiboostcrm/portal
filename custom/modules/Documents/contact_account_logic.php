<?php

	global $db;
	$acc_id = $_REQUEST['acc_id'];
	//echo $acc_id;
	$sql = "SELECT acc_cont.* ,contacts.id as cont_id, contacts.first_name , contacts.last_name FROM accounts_contacts as acc_cont 
			JOIN contacts ON contacts.id = acc_cont.contact_id WHERE account_id = '$acc_id' AND acc_cont.deleted = 0 AND contacts.deleted = 0 ";
			
	//echo $sql;die;
	$result = $db->query($sql);
	while($res = $db->fetchByAssoc($result)){
		
		$arrayData[] = $res;
		
	}
	echo json_encode($arrayData);
?>