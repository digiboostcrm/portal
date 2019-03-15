<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2019-03-14 17:23:24
$dictionary['Document']['fields']['accounts_contacts_c']['inline_edit']='1';
$dictionary['Document']['fields']['accounts_contacts_c']['labelValue']='Accounts';

 

 // created: 2019-03-14 17:23:24
$dictionary['Document']['fields']['account_id_c']['inline_edit']=1;

 

 // created: 2018-09-07 12:39:15
$dictionary['Document']['fields']['contact_id_c']['inline_edit']=1;

 

$dictionary["Document"]["fields"]["contact_list"] =array (
	'name' => 'contact_list',
	'default_value' => '',
	'studio' => true,
	'required' => false,
	'vname' => 'LBL_CONTACT_LIST',
	'type' => 'varchar',
	'massupdate' => 0,
	'max_size' => 255,
	'source' => 'non-db',
	'displayParams' =>
		array (
		'rows' => 4,
		'cols' => 100,
		),

);



 // created: 2017-12-13 17:21:54
$dictionary['Document']['fields']['created_from_c']['inline_edit']=1;
$dictionary['Document']['fields']['created_from_c']['duplicate_merge_dom_value']=0;

 

$dictionary["Document"]["fields"]["portal_id"] =array (
	'name' => 'portal_id',
	'default_value' => '',
	'studio' => true,
	'required' => false,
	'vname' => 'LBL_PORTAL_ID',
	'type' => 'varchar',
	'massupdate' => 0,
	'max_size' => 11,
	'importable' => true,
	'audited' => false,
	'reportable' => true,

);



 // created: 2018-09-07 12:39:15
$dictionary['Document']['fields']['portal_user_c']['inline_edit']='1';
$dictionary['Document']['fields']['portal_user_c']['labelValue']='Portal User';

 
?>