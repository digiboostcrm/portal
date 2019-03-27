<?php

Class ActivityLog{
	
	function save_deleted_data($bean, $event, $arguments){
		global $db, $current_user;
		echo $bean->module_name;
		$data = [];
		$data = " RECORD_ID => $bean->id,";
			if($bean->module_name == 'Accounts'){
				$module = "ACCOUNTS";
				$data .="ACCOUNT_NAME => $bean->name,
					ACCOUNT_NUMBER =>  $bean->account_number_c,
					ACCOUNT_STATUS =>  $bean->account_status_c,
					ACCOUNT_MANAGER =>  $bean->account_manager_c,
					PHONE =>  $bean->phone_office, 
					WEBSITE =>  $bean->website , ";
			}else if($bean->module_name == 'Contacts'){
				$module = "CONTACTS";
				$data .= "CONTACT_NAME => $bean->name
							TITLE =>  $bean->title, 
							PHONE =>  $bean->phone_work, 
							PHONE_MOBILE =>  $bean->phone_mobile, 
							LEAD_SOURCE =>  $bean->lead_source,
							REPORTS_TO => $bean->report_to_name";
			}
			
		$data .= "EMAIL =>  $bean->email1" ;
		$data_encoded =  json_encode(array($data));
		$ip = getenv('HTTP_CLIENT_IP')?:
		getenv('HTTP_X_FORWARDED_FOR')?:
		getenv('HTTP_X_FORWARDED')?:
		getenv('HTTP_FORWARDED_FOR')?:
		getenv('HTTP_FORWARDED')?:
		getenv('REMOTE_ADDR');
		
		$date = date("Y-m-d H:i:s");
		$sql = "INSERT INTO RECORD_ACTIVITY_LOG (USER_NAME , USER_ID , ACTIVITY_TYPE , MODULE_NAME , USER_IP , RECORD_ID , ACTIVITY_ON,  RECORD_DATA) VALUES ('$current_user->name', '$current_user->id' , 'DELETE' , '$module' , '$ip' , '$bean->id' , '$date' , '$data_encoded')";
		$db->query($sql);

	}
	/* once testing on live then we will delete it 
	// Function to get the client IP address
	function get_client_ip() {
		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if(isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		else
			$ipaddress = 'UNKNOWN';
		return $ipaddress;
	}
	*/
	
}

?>


