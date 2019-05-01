<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2016 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/
/*
require_once('include/MVC/View/views/view.edit.php');
require_once('include/SugarTinyMCE.php');
*/

class CasesViewEdit extends ViewEdit {


	    function display(){
			
		global $db;
		global $current_user;
		$user_id = $current_user->id;
		$queueID = $this->bean->fetched_row['queue'];
		$sql = 'SELECT id, name FROM acl_roles WHERE deleted = 0';
		$res = $db->query($sql);
		$options = "<option value=''>All Ticket</option>";
		while($result = $db->fetchByAssoc($res)){
			$id = '';
			$id = $result['id'];
			$name = $result['name'];
			$selected = "";
			if($name == $queueID){ 
				$selected = "selected";
			}
			
			$options .= "<option $selected value='$name'>$name</option>";
		}
		
		$this->ss->assign('options_queue', $options);
        
		if(!$this->bean->id){			
			$this->bean->assigned_user_id = " ";
			$this->bean->created_by_name = $current_user->full_name;
		}
			//$this->bean->spent_hours = " Null ";
		parent::display();
		
		echo "<pre>";print_r($this->bean);die;
		echo '<script type="text/javascript" src="custom/modules/Cases/js/validation_state.js"></script>';
		$recID = $this->bean->fetched_row['id'];
		echo '<script>$("#created_by_name").prop("readonly", true);</script>';
		
		$newScript = '';
        if(empty($this->bean->id)){
            $newScript = "
                    $('#update_text').closest('.edit-view-row-item').hide();
                    $('#update_text_label').closest('.edit-view-row-item').hide();
                    $('#internal').closest('.edit-view-row-item').hide();
                    $('#internal_label').closest('.edit-view-row-item').hide();
                    $('#addFileButton').closest('.edit-view-row-item').hide();
                    $('#case_update_form_label').closest('.edit-view-row-item').hide();"; 

        }

        echo  "<script>$(document).ready(function(){"
                  . $newScript
                  . "tinyMCE.execCommand('mceAddControl', false, document.getElementById('description'));
                });
            </script>";
		if(!empty($this->bean->case_attachment)){			
			$catt = "<p style = 'color : #f08377'>".$this->bean->case_attachment."</p>";
			echo '<script> $("#case_attachment").parent("div").append("'.$catt.'"); </script> ';
			
		}	
		if(!empty($this->bean->update_attachment)){			
			$uatt = "<p style = 'color : #f08377'>".$this->bean->update_attachment."</p>";
			echo '<script> $("#update_attachment").parent("div").append("'.$uatt.'"); </script> ';
		}			
    }
	
   
}
