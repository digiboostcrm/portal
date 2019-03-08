<?php

$manifest = array(
	'acceptable_sugar_versions' => array(
		'6.*.*'
	),
	  'acceptable_sugar_flavors' => array(
			'CE',
			'PRO',
			'CORP',
			'ENT'
	),
  	'readme'=>'',
  	'key'=>'',
	'author' => 'Cyborg Solution (Pvt) Ltd.',
	'description' => 'New datatype Multiupload for multiple file uploads. Workflow action to send files as attachments with Email.',
	'icon' => '',
	'is_uninstallable' => true,
	'name' => 'multiupload-files-with-workflow', 
  	'published_date' => '2017/05/25',
    'type' => 'module',
    'version' => '1.2',
    'remove_tables' => false,  
);


$installdefs = array(
  'id'  => 'Multiupload_Workflow',
  
  'copy' => array(
  	//copy license directory to your module
    array (
		'from' => '<basepath>/license',
		'to' => 'modules/Multiupload/license', 
	),
	//Copy Files
 	array (
		'from' => '<basepath>/modules/Multiupload/views',
		'to' => 'modules/Multiupload/views', 
	),
	array (
		'from' => '<basepath>/modules/Multiupload/outfitterscontroller.php',
		'to' => 'modules/Multiupload/outfitterscontroller.php', 
	),
	array( 
      'from' => '<basepath>/download2.php',
      'to' => 'download2.php',
    ),
	array( 
      'from' => '<basepath>/multiupload.php',
      'to' => 'multiupload.php',
    ),
	array( 
      'from' => '<basepath>/custom/Extension/application/Ext/EntryPointRegistry/customDownloadEntryPoint.php',
      'to' => 'custom/Extension/application/Ext/EntryPointRegistry/customDownloadEntryPoint.php',
    ),
	array( 
      'from' => '<basepath>/custom/Extension/modules/AOW_Actions/Ext/Actions/mySendEmailMultiupload.php',
      'to' => 'custom/Extension/modules/AOW_Actions/Ext/Actions/mySendEmailMultiupload.php',
    ),
	array( 
      'from' => '<basepath>/custom/Extension/modules/AOW_Actions/Ext/Language/en_us.SendEmailMultiupload.php',
      'to' => 'custom/Extension/modules/AOW_Actions/Ext/Language/en_us.SendEmailMultiupload.php',
    ),
	array( 
      'from' => '<basepath>/custom/Extension/modules/DynamicFields/Ext/Language/en_us.Multiupload.php',
      'to' => 'custom/Extension/modules/DynamicFields/Ext/Language/en_us.Multiupload.php',
    ),
	array( 
      'from' => '<basepath>/custom/Extension/modules/ModuleBuilder/Ext/Language/en_us.Multiupload.php',
      'to' => 'custom/Extension/modules/ModuleBuilder/Ext/Language/en_us.Multiupload.php',
    ),
	array( 
      'from' => '<basepath>/custom/include/SugarFields/Fields/Multiupload',
      'to' => 'custom/include/SugarFields/Fields/Multiupload',
    ),
	array( 
      'from' => '<basepath>/custom/modules/AOW_Actions/actions',
      'to' => 'custom/modules/AOW_Actions/actions',
    ),
	array( 
      'from' => '<basepath>/custom/modules/DynamicFields/templates/Fields/TemplateMultiupload.php',
      'to' => 'custom/modules/DynamicFields/templates/Fields/TemplateMultiupload.php',
    ),
	array( 
      'from' => '<basepath>/custom/modules/DynamicFields/templates/Fields/Forms/multiupload.php',
      'to' => 'custom/modules/DynamicFields/templates/Fields/Forms/multiupload.php',
    ),
	array( 
      'from' => '<basepath>/custom/modules/DynamicFields/templates/Fields/Forms/multiupload.tpl',
      'to' => 'custom/modules/DynamicFields/templates/Fields/Forms/multiupload.tpl',
    ),	
  ),
  
   'administration' =>
	array(
		array(
			'from'=>'<basepath>/license_admin/menu/multiupload_admin.php',
			'to' => 'modules/Administration/multiupload_admin.php', 
		),
	),

	'language' =>
	array (
		array(
			'from'=> '<basepath>/license_admin/language/en_us.multiupload.php', 
			'to_module'=> 'Administration',
			'language'=>'en_us'
		),
	),
	 'action_view_map' =>
        array (
            array(
                'from'=> '<basepath>/license_admin/actionviewmap/multiupload_actionviewmap.php', 
                'to_module'=> 'Multiupload', 
            ),
        ),
);

