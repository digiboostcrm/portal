<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(77, 'updateGeocodeInfo', 'modules/Accounts/AccountsJjwg_MapsLogicHook.php','AccountsJjwg_MapsLogicHook', 'updateGeocodeInfo'); 
$hook_array['before_save'][] = Array(81, 'update account number', 'custom/modules/Accounts/AccountsNumber_LogicHook.php','AccountsNumber_LogicHook', 'accountNumber'); 
$hook_array['before_save'][] = Array(82, 'SendEmailAuto',  'custom/modules/Accounts/AccountsNumber_LogicHook.php','AccountsNumber_LogicHook', 'autoEmailSent'); 
$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(77, 'updateRelatedMeetingsGeocodeInfo', 'modules/Accounts/AccountsJjwg_MapsLogicHook.php','AccountsJjwg_MapsLogicHook', 'updateRelatedMeetingsGeocodeInfo'); 
$hook_array['after_save'][] = Array(78, 'updateRelatedProjectGeocodeInfo', 'modules/Accounts/AccountsJjwg_MapsLogicHook.php','AccountsJjwg_MapsLogicHook', 'updateRelatedProjectGeocodeInfo'); 
$hook_array['after_save'][] = Array(79, 'updateRelatedOpportunitiesGeocodeInfo', 'modules/Accounts/AccountsJjwg_MapsLogicHook.php','AccountsJjwg_MapsLogicHook', 'updateRelatedOpportunitiesGeocodeInfo'); 
$hook_array['after_save'][] = Array(80, 'updateRelatedCasesGeocodeInfo', 'modules/Accounts/AccountsJjwg_MapsLogicHook.php','AccountsJjwg_MapsLogicHook', 'updateRelatedCasesGeocodeInfo'); 
$hook_array['after_relationship_add'] = Array(); 
$hook_array['after_relationship_add'][] = Array(77, 'addRelationship', 'modules/Accounts/AccountsJjwg_MapsLogicHook.php','AccountsJjwg_MapsLogicHook', 'addRelationship'); 
$hook_array['after_relationship_delete'] = Array(); 
$hook_array['after_relationship_delete'][] = Array(77, 'deleteRelationship', 'modules/Accounts/AccountsJjwg_MapsLogicHook.php','AccountsJjwg_MapsLogicHook', 'deleteRelationship'); 
$hook_array['process_record'][] = Array(
        //Processing index. For sorting the array.
			1,'process_record example','custom/modules/Accounts/AccountsNumber_LogicHook.php','AccountsNumber_LogicHook', 'process_record'
		
		); 
//$hook_array['after_relationship_delete'][] = Array(178, 'add data into custom table', 'custom/modules/Accounts/save_record_data.php','AccountData', 'save_deleted_data'); 
$hook_array['before_delete'] = Array(); 
$hook_array['before_delete'][] = Array(178, 'Save record data on db operation ', 'custom/include/ActivityLog.php','ActivityLog', 'save_deleted_data'); 

?>