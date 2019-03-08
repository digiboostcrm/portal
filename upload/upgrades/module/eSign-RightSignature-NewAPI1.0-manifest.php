<?php
/*
   Created By : Urdhva Tech Pvt. Ltd.
   Created date : 12/06/2017
   Contact at : contact@urdhva-tech.com
   Module : eSign RightSignature
*/

$manifest = array(
   'acceptable_sugar_versions' => array(
        "regex_matches" => array(
                    0 => "6\\.5\\.*",
                    1 => "6\\.6\\.*",
                    2 => "6\\.7\\.*",
                    )
    ),
	'acceptable_sugar_flavors' => array (
		'CE'
	),
	'name' 				=> 'eSign - RightSignature(New API)',
	'description' 		=> 'A RightSignature(New API) document signing integration for SuiteCRM',
	'author' 			=> 'Urdhva Tech Pvt Ltd.',
	'published_date'	=> '2017/08/18',
	'version' 			=> '1.0',
	'type' 				=> 'module',
	'is_uninstallable' 	=> true,
    'remove_tables' => 'prompt',
);

$installdefs = array(
	'id'=> 'eSignRightSignature',
    'post_uninstall' => array(
        '<basepath>/scripts/post_uninstall.php',
     ),
    'beans' =>
    array(
        0 =>
        array(
            'module' => 'UT_RightSignature',
            'class' => 'UT_RightSignature',
            'path' => 'modules/UT_RightSignature/UT_RightSignature.php',
            'tab' => true,
        ),
        1 =>
        array(
            'module' => 'UT_RSActivities',
            'class' => 'UT_RSActivities',
            'path' => 'modules/UT_RSActivities/UT_RSActivities.php',
            'tab' => false,
        ),
        2 =>
        array(
            'module' => 'UT_Signers',
            'class' => 'UT_Signers',
            'path' => 'modules/UT_Signers/UT_Signers.php',
            'tab' => false,
        ),
    ),
    'relationships' =>
    array(
        0 =>
        array(
            'meta_data' => '<basepath>/custom/metadata/ut_oauth_sessionMetaData.php',
        ),
        1 =>
        array(
            'meta_data' => '<basepath>/custom/metadata/ut_rightsignature_api_keysMetaData.php',
        ),
        2 =>
        array(
            'meta_data' => '<basepath>/custom/metadata/ut_rightsignature_ut_rsactivitiesMetaData.php',
        ),
        3 =>
        array(
            'meta_data' => '<basepath>/custom/metadata/ut_signers_ut_rightsignatureMetaData.php',
        ),
        4 =>
        array(
            'meta_data' => '<basepath>/custom/metadata/ut_rightsignature_accounts_1MetaData.php',
        ),
        5 =>
        array(
            'meta_data' => '<basepath>/custom/metadata/ut_rightsignature_contacts_1MetaData.php',
        ),
        6 =>
        array(
            'meta_data' => '<basepath>/custom/metadata/ut_rightsignature_leads_1MetaData.php',
        ),
        7 =>
        array(
            'meta_data' => '<basepath>/custom/metadata/ut_rightsignature_prospects_1MetaData.php',
        ),
        8 =>
        array(
            'meta_data' => '<basepath>/custom/metadata/ut_rightsignature_aos_contracts_1MetaData.php',
        ),
        9 =>
        array(
            'meta_data' => '<basepath>/custom/metadata/ut_rightsignature_aos_quotes_1MetaData.php',
        ),
    ),
	'copy' => array(
        array(
            'from' => '<basepath>/custom/Extension/application/Ext/EntryPointRegistry/UT_RightSignatureEntryPoints.php',
            'to' => 'custom/Extension/application/Ext/EntryPointRegistry/UT_RightSignatureEntryPoints.php',
        ),
		array(
            'from'=> '<basepath>/SugarModules/UT_RightSignature',
            'to'=> 'modules/UT_RightSignature',
		),
        array(
            'from'=> '<basepath>/SugarModules/UT_RSActivities',
            'to'=> 'modules/UT_RSActivities',
        ),
        array(
            'from'=> '<basepath>/SugarModules/UT_Signers',
            'to'=> 'modules/UT_Signers',
        ),
		array(
            'from'=> '<basepath>/UT_RSCallback.php',
            'to'=> 'UT_RSCallback.php',
        ),
	),
    'layoutdefs' => 
     array (
        0 =>
        array(
            'from' => '<basepath>/custom/Extension/modules/Accounts/Ext/Layoutdefs/ut_right_signature.php',
            'to_module' => 'Accounts',
        ),
        1 =>
        array(
            'from' => '<basepath>/custom/Extension/modules/AOS_Contracts/Ext/Layoutdefs/ut_right_signature.php',
            'to_module' => 'AOS_Contracts',
        ),
        2 =>
        array(
            'from' => '<basepath>/custom/Extension/modules/AOS_Quotes/Ext/Layoutdefs/ut_right_signature.php',
            'to_module' => 'AOS_Quotes',
        ),
        3 =>
        array(
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Layoutdefs/ut_right_signature.php',
            'to_module' => 'Contacts',
        ),
        4 =>
        array(
            'from' => '<basepath>/custom/Extension/modules/Leads/Ext/Layoutdefs/ut_right_signature.php',
            'to_module' => 'Leads',
        ),
        5 =>
        array(
            'from' => '<basepath>/custom/Extension/modules/Prospects/Ext/Layoutdefs/ut_right_signature.php',
            'to_module' => 'Prospects',
        ),
     ),
    'language' => 
      array (
        0 =>
        array(
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.RightSignature.php',
            'to_module' => 'application',
            'language' => 'en_us',
        ),
        1 =>
        array(
            'from' => '<basepath>/custom/Extension/modules/Accounts/Ext/Language/en_us.RightSignature.php',
            'to_module' => 'Accounts',
            'language' => 'en_us',
        ),
        2 =>
        array(
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Language/en_us.RightSignature.php',
            'to_module' => 'Contacts',
            'language' => 'en_us',
        ),
        3 =>
        array(
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.UT_RightSignature.php',
            'to_module' => 'Administration',
            'language' => 'en_us',
        ),
        4 =>
        array(
            'from' => '<basepath>/custom/Extension/modules/AOS_Contracts/Ext/Language/en_us.RightSignature.php',
            'to_module' => 'AOS_Contracts',
            'language' => 'en_us',
        ),
        5 =>
        array(
            'from' => '<basepath>/custom/Extension/modules/AOS_Quotes/Ext/Language/en_us.RightSignature.php',
            'to_module' => 'AOS_Quotes',
            'language' => 'en_us',
        ),
        6 =>
        array(
            'from' => '<basepath>/custom/Extension/modules/Leads/Ext/Language/en_us.RightSignature.php',
            'to_module' => 'Leads',
            'language' => 'en_us',
        ),
        7 =>
        array(
            'from' => '<basepath>/custom/Extension/modules/Prospects/Ext/Language/en_us.RightSignature.php',
            'to_module' => 'Prospects',
            'language' => 'en_us',
        ),
        8 =>
        array(
            'from' => '<basepath>/custom/Extension/modules/Schedulers/Ext/Language/en_us.rightsignature_scheduler.php',
            'to_module' => 'Schedulers',
            'language' => 'en_us',
        ),
      ),
	'administration' => array(
        array(
           'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration/UT_RightSignature_keys.php'
        )
      ),
     'scheduledefs' => array(
        array(
            'from' => '<basepath>/custom/Extension/modules/Schedulers/Ext/ScheduledTasks/rightsignature_scheduler.php',
        ),
     ),
     'vardefs' => 
        array(
            array(
               'from'            => '<basepath>/custom/Extension/modules/Accounts/Ext/Vardefs/ut_right_signature.php', 
               'to_module'       => 'Accounts',
             ),
            array(
               'from'            => '<basepath>/custom/Extension/modules/AOS_Contracts/Ext/Vardefs/ut_right_signature.php', 
               'to_module'       => 'AOS_Contracts',
             ),
            array(
               'from'            => '<basepath>/custom/Extension/modules/AOS_Quotes/Ext/Vardefs/ut_right_signature.php', 
               'to_module'       => 'AOS_Quotes',
             ),
            array(
               'from'            => '<basepath>/custom/Extension/modules/Contacts/Ext/Vardefs/ut_right_signature.php', 
               'to_module'       => 'Contacts',
             ),
            array(
               'from'            => '<basepath>/custom/Extension/modules/Leads/Ext/Vardefs/ut_right_signature.php', 
               'to_module'       => 'Leads',
             ),
            array(
               'from'            => '<basepath>/custom/Extension/modules/Prospects/Ext/Vardefs/ut_right_signature.php', 
               'to_module'       => 'Prospects',
             ),
    ),
    'logic_hooks' => array(
        array(
            'module' => '',
            'hook' => 'after_ui_footer',
            'order' => 15,
            'description' => 'custom action button for right signature',
            'file' => 'modules/UT_RightSignature/logic_hooks/display_action_button.php',
            'class' => 'UT_RS_DisplayActionButton',
            'function' => 'UT_RS_DisplayActionButtonProcess',
        ),
        array(
            'module' => 'UT_RightSignature',
            'hook' => 'process_record',
            'order' => 13,
            'description' => 'Colouring Accounts fields',
            'file' => 'modules/UT_RightSignature/logic_hooks/RSLogicHooks.php',
            'class' => 'RSLogicHooksCls',
            'function' => 'colourFields',
        ),
    ),
);
?>