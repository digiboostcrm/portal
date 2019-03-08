<?php
/**
  Created By : Urdhva Tech Pvt. Ltd.
  Created date : 02/20/2017
  Contact at : contact@urdhva-tech.com
  Web : www.urdhva-tech.com
  Skype : urdhvatech
*/

/**
 * THIS CLASS IS GENERATED BY MODULE BUILDER
 * PLEASE DO NOT CHANGE THIS CLASS
 * PLACE ANY CUSTOMIZATIONS IN UT_RightSignature
 */

require_once('include/SugarObjects/templates/file/File.php');

class UT_RightSignature_sugar extends File {
	var $new_schema = true;
	var $module_dir = 'UT_RightSignature';
	var $object_name = 'UT_RightSignature';
	var $table_name = 'ut_rightsignature';
	var $importable = false;
	var $disable_row_level_security = true ; // to ensure that modules created and deployed under CE will continue to function under team security if the instance is upgraded to PRO

	var $id;
	var $date_entered;
	var $date_modified;
	var $modified_user_id;
	var $modified_by_name;
	var $created_by;
	var $created_by_name;
	var $description;
	var $deleted;
	var $created_by_link;
	var $modified_user_link;
	var $assigned_user_id;
	var $assigned_user_name;
	var $assigned_user_link;
	var $SecurityGroups;
	var $document_name;
	var $filename;
	var $file_ext;
	var $file_mime_type;
	var $uploadfile;
	var $active_date;
	var $exp_date;
	var $category_id;
	var $subcategory_id;
	var $status_id;
	var $status;
	var $parent_name;
	var $parent_type;
	var $parent_id;
	var $email_address;
	var $rightsignature_templates;
	var $sending_type;
	var $recipient_name;
	var $rs_doc_id;
	var $subject;
	var $message;
	var $state;
	var $rs_created_at;
	var $rs_completed_at;
	var $note_id_c;
	var $original_file;
	var $note_id1_c;
	var $signed_file;
	var $rs_expires_on;
	var $processing_state;
	var $original_url;
	var $pdf_url;
	var $thumbnail_url;
	var $signed_pdf_url;
	var $size;
	
	function __construct(){
		parent::__construct();
	}
	
	function bean_implements($interface){
		switch($interface){
			case 'ACL': return true;
		}
		return false;
	}
		
}
?>