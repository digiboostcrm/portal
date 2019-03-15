<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2017-11-14 16:52:19
$dictionary["Lead"]["fields"]["leads_aos_products_1"] = array (
  'name' => 'leads_aos_products_1',
  'type' => 'link',
  'relationship' => 'leads_aos_products_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_LEADS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
);


// created: 2017-11-14 16:51:37
$dictionary["Lead"]["fields"]["leads_aos_product_categories_1"] = array (
  'name' => 'leads_aos_product_categories_1',
  'type' => 'link',
  'relationship' => 'leads_aos_product_categories_1',
  'source' => 'non-db',
  'module' => 'AOS_Product_Categories',
  'bean_name' => 'AOS_Product_Categories',
  'vname' => 'LBL_LEADS_AOS_PRODUCT_CATEGORIES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
);


 // created: 2018-03-03 19:26:06
$dictionary['Lead']['fields']['contact_id_c']['inline_edit']=1;

 

 // created: 2018-03-03 19:26:06
$dictionary['Lead']['fields']['contact_lead_c']['inline_edit']='1';
$dictionary['Lead']['fields']['contact_lead_c']['labelValue']='Contacts';

 

 // created: 2017-09-13 15:42:11
$dictionary['Lead']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2017-09-13 15:42:11
$dictionary['Lead']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2017-09-13 15:42:10
$dictionary['Lead']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2017-09-13 15:42:10
$dictionary['Lead']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2018-10-04 17:22:10
$dictionary['Lead']['fields']['lead_source']['inline_edit']=true;
$dictionary['Lead']['fields']['lead_source']['options']='lead_source_1';
$dictionary['Lead']['fields']['lead_source']['comments']='Lead source (ex: Web, print)';
$dictionary['Lead']['fields']['lead_source']['merge_filter']='disabled';
$dictionary['Lead']['fields']['lead_source']['required']=true;
$dictionary['Lead']['fields']['lead_source']['default']='unknown';

 

 // created: 2018-10-04 17:01:46
$dictionary['Lead']['fields']['lead_source_1_c']['inline_edit']='1';
$dictionary['Lead']['fields']['lead_source_1_c']['labelValue']='Secondary Lead Source';

 

 // created: 2018-03-01 16:32:40
$dictionary['Lead']['fields']['lead_type']['name']='lead_type';
$dictionary['Lead']['fields']['lead_type']['studio']=true;
$dictionary['Lead']['fields']['lead_type']['required']=true;
$dictionary['Lead']['fields']['lead_type']['vname']='LBL_LEAD_TYPE';
$dictionary['Lead']['fields']['lead_type']['type']='enum';
$dictionary['Lead']['fields']['lead_type']['options']='opportunity_type_dom';
$dictionary['Lead']['fields']['lead_type']['importable']=true;
$dictionary['Lead']['fields']['lead_type']['audited']=false;
$dictionary['Lead']['fields']['lead_type']['reportable']=true;
$dictionary['Lead']['fields']['lead_type']['inline_edit']=true;
$dictionary['Lead']['fields']['lead_type']['merge_filter']='disabled';

 

 // created: 2017-11-14 14:43:40
$dictionary['Lead']['fields']['next_step_c']['inline_edit']='1';
$dictionary['Lead']['fields']['next_step_c']['labelValue']='Next Step:';

 

 // created: 2017-11-06 11:02:13
$dictionary['Lead']['fields']['phone_fax']['inline_edit']=true;
$dictionary['Lead']['fields']['phone_fax']['comments']='Contact facebook:';
$dictionary['Lead']['fields']['phone_fax']['merge_filter']='disabled';

 

 // created: 2018-06-29 17:39:20
$dictionary['Lead']['fields']['sdr']['name']='sdr';
$dictionary['Lead']['fields']['sdr']['studio']=true;
$dictionary['Lead']['fields']['sdr']['required']=true;
$dictionary['Lead']['fields']['sdr']['vname']='LBL_SDR';
$dictionary['Lead']['fields']['sdr']['type']='enum';
$dictionary['Lead']['fields']['sdr']['options']='sales_sdr_list';
$dictionary['Lead']['fields']['sdr']['importable']=true;
$dictionary['Lead']['fields']['sdr']['audited']=false;
$dictionary['Lead']['fields']['sdr']['reportable']=true;
$dictionary['Lead']['fields']['sdr']['default']='Madison_Spaulding';
$dictionary['Lead']['fields']['sdr']['inline_edit']=true;
$dictionary['Lead']['fields']['sdr']['merge_filter']='disabled';

 

 // created: 2018-01-26 17:46:31
$dictionary['Lead']['fields']['status']['inline_edit']=true;
$dictionary['Lead']['fields']['status']['comments']='Status of the lead';
$dictionary['Lead']['fields']['status']['merge_filter']='disabled';

 

$dictionary["Lead"]["fields"]["tracking_number"] =array (
	'name' => 'tracking_number',
	'default_value' => '',
	'studio' => true,
	'required' => false,
	'vname' => 'LBL_TRACKING_NUMBER',
	'type' => 'varchar',
	'massupdate' => 0,
	'max_size' => 11,
	'importable' => true,
	'audited' => false,
	'reportable' => true,

);


?>