<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-03-16 15:23:30
$dictionary["Case"]["fields"]["cases_dg_comments_1"] = array (
  'name' => 'cases_dg_comments_1',
  'type' => 'link',
  'relationship' => 'cases_dg_comments_1',
  'source' => 'non-db',
  'module' => 'dg_comments',
  'bean_name' => 'dg_comments',
  'side' => 'right',
  'vname' => 'LBL_CASES_DG_COMMENTS_1_FROM_DG_COMMENTS_TITLE',
);


 // created: 2019-01-03 21:04:31
$dictionary['Case']['fields']['category']['name']='category';
$dictionary['Case']['fields']['category']['studio']=true;
$dictionary['Case']['fields']['category']['required']=false;
$dictionary['Case']['fields']['category']['vname']='LBL_CATEGORY';
$dictionary['Case']['fields']['category']['type']='enum';
$dictionary['Case']['fields']['category']['options']='dom_ticket_category';
$dictionary['Case']['fields']['category']['importable']=true;
$dictionary['Case']['fields']['category']['audited']=false;
$dictionary['Case']['fields']['category']['reportable']=true;
$dictionary['Case']['fields']['category']['inline_edit']=true;
$dictionary['Case']['fields']['category']['merge_filter']='disabled';

 

 // created: 2019-01-09 04:33:48
$dictionary['Case']['fields']['chat_description_c']['inline_edit']='1';
$dictionary['Case']['fields']['chat_description_c']['labelValue']='Description';

 

$dictionary['Case']['fields']['created_by_name'] = array(
	'name' => 'created_by_name',
	'studio' => true,
	'required' => false,
	'vname' => 'LBL_CREATED_BY_NAME',
	'type' => 'varchar',
	'default_value' => '',
	'importable' => true,
	'audited' => false,
	'reportable' => true,
);


 // created: 2017-12-13 17:21:55
$dictionary['Case']['fields']['created_from_c']['inline_edit']=1;
$dictionary['Case']['fields']['created_from_c']['duplicate_merge_dom_value']=0;

 

 // created: 2019-03-12 15:46:16
$dictionary['Case']['fields']['custom_attachment_c']['inline_edit']='1';
$dictionary['Case']['fields']['custom_attachment_c']['labelValue']='Attachment';

 

 // created: 2019-01-09 04:22:16
$dictionary['Case']['fields']['description']['audited']=true;
$dictionary['Case']['fields']['description']['inline_edit']=true;
$dictionary['Case']['fields']['description']['comments']='Full text of the description';
$dictionary['Case']['fields']['description']['merge_filter']='disabled';
$dictionary['Case']['fields']['description']['rows']='4';
$dictionary['Case']['fields']['description']['cols']='20';

 

 // created: 2017-12-13 17:21:56
$dictionary['Case']['fields']['email_uid_c']['inline_edit']=1;

 

$dictionary['Case']['fields']['file_mime_type'] = array(
  'name' => 'file_mime_type',
  'vname' => 'LBL_FILE_MIME_TYPE',
  'type' => 'varchar',
  'len' => '100',
  'importable' => false,
);
$dictionary['Case']['fields']['file_url'] = array(
  'name'=>'file_url',
  'vname' => 'LBL_FILE_URL',
  'type'=>'function',
  'function_class'=>'UploadFile',
  'function_name'=>'get_upload_url',
  'function_params'=> array('$this'),
  'source'=>'function',
  'reportable'=>false,
  'importable' => false,
);
$dictionary['Case']['fields']['filename'] = array(
  'name' => 'filename',
  'vname' => 'LBL_FILENAME',
  'type' => 'file',
  'dbType' => 'varchar',
  'len' => '255',
  'reportable'=>true,
  'importable' => false,
);


 // created: 2017-09-13 15:42:10
$dictionary['Case']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2017-09-13 15:42:10
$dictionary['Case']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2017-09-13 15:42:10
$dictionary['Case']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2017-09-13 15:42:10
$dictionary['Case']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

$dictionary['Case']['fields']['queue'] = array(
	'name' => 'queue',
	'studio' => true,
	'required' => false,
	'vname' => 'LBL_QUEUE',
	'type' => 'varchar',
	'default_value' => '',
	'importable' => true,
	'audited' => false,
	'reportable' => true,
);


 // created: 2019-01-27 16:47:07
$dictionary['Case']['fields']['subject']['name']='subject';
$dictionary['Case']['fields']['subject']['studio']=true;
$dictionary['Case']['fields']['subject']['required']=true;
$dictionary['Case']['fields']['subject']['vname']='LBL_SUBJECT';
$dictionary['Case']['fields']['subject']['type']='enum';
$dictionary['Case']['fields']['subject']['options']='dom_ticket_subject';
$dictionary['Case']['fields']['subject']['importable']=true;
$dictionary['Case']['fields']['subject']['audited']=false;
$dictionary['Case']['fields']['subject']['reportable']=true;
$dictionary['Case']['fields']['subject']['default']='Add_Subject';
$dictionary['Case']['fields']['subject']['inline_edit']=true;
$dictionary['Case']['fields']['subject']['merge_filter']='disabled';

 

 // created: 2018-06-25 10:47:50
$dictionary['Case']['fields']['update_attachment_c']['inline_edit']='1';
$dictionary['Case']['fields']['update_attachment_c']['labelValue']='update attachment';

 
?>