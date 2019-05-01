<?php 
 //WARNING: The contents of this file are auto-generated


/**
 * The file used to handle layout actions
 *
 * LICENSE: The contents of this file are subject to the license agreement ("License") which is included
 * in the installation package (LICENSE.txt). By installing or using this file, you have unconditionally
 * agreed to the terms and conditions of the License, and you may not use this file except in compliance
 * with the License.
 *
 * @author     Biztech Consultancy
 */
$entry_point_registry['portalentry'] = array(
        'file' => 'custom/modules/Administration/portalHandler.php',
        'auth' => false
    );



$entry_point_registry['download2'] = array('file' => 'download2.php', 'auth' => false);

/**
 * The file used to handle layout actions
 *
 * LICENSE: The contents of this file are subject to the license agreement ("License") which is included
 * in the installation package (LICENSE.txt). By installing or using this file, you have unconditionally
 * agreed to the terms and conditions of the License, and you may not use this file except in compliance
 * with the License.
 *
 * @author     Biztech Consultancy
 */
$entry_point_registry['customexport'] = array(
        'file' => 'custom/modules/Contacts/customexport.php',
        'auth' => false
    );


/*
    if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    global $db;
	
	
	$sql = "SELECT 
				main.id, 
				custom.contact_id_c as contact_id ,
				custom.account_id_c as account_id , 
				main.document_name,
				main.description,
				main.doc_type,
				main.active_date,
				main.exp_date,
				main.category_id as category,
				main.subcategory_id as sub_category,
				main.status_id as status,
				main.is_template,
				main.related_document_name,
				acc.first_name,
				cont.first_name,
				
				
				FROM documents as main
				JOIN documents_cstm as custom 
					ON custom.id_c = main.id  
				JOIN contacts as cont
					ON id = main.contact_id
				JOIN accounts as acc
					ON id = acc.account_id
				WHERE main.deleted = 0 AND main.id = 'afd22432-d512-cc7c-abf9-5c8b7370b149' ";
				
$result = $db->query($sql);
$data_array = [];
if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		
		$acc_id = $row['account_id'];
		if($acc_id != ''){
			$sql_j = "SELECT acc_cont.* ,contacts.id as cont_id, contacts.first_name , contacts.last_name FROM accounts_contacts as acc_cont 
				JOIN contacts ON contacts.id = acc_cont.contact_id WHERE acc_cont.account_id = '$acc_id' AND acc_cont.deleted = 0 AND contacts.deleted = 0";
			
			//echo $sql_j;die;
			$sql_res = $db->query($sql_j);
			if ($sql_res->num_rows > 0) {				
				while($res = $sql_res->fetch_assoc()){
					
					$cont_rec[] = $res;
					
				}
			}
			
		}
		$row['contact_list'] = $cont_rec;
		$cont_rec = [];
		$data_array[$row['id']] = $row;
		//echo json_encode($data_array);

		
    }
} else {
    echo "0 results";
}
		//echo json_encode($data_array);
		arr_show($data_array);
		
		
 function arr_show($data){
	 
	echo "<pre>";
		print_r($data);
	echo "</pre>";
	 
 } 
 */
        //print_r($data_array);


$entry_point_registry['LogActivityData'] = array(
	'file' => 'custom/LogActivityData.php',
	'auth' => false,
);

$entry_point_registry['customDownload'] = array(
	'file' => 'custom/customDownload.php',
	'auth' => false,
);

$entry_point_registry['RSPushServiceCallback'] = array(
    'file' => 'modules/UT_RightSignature/RSPushServiceCallback.php',
    'auth' => false
);

$entry_point_registry['RightSignatureCallback'] = array(
    'file' => 'modules/UT_RightSignature/UT_AuthorizeApps.php',
    'auth' => false
);
?>