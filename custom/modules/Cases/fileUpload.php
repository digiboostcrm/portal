<?php
Class fileUpload{
	public function upload_files(&$bean, $event, $arguments){
		global $sugar_config;
		if(empty($bean->name)){
			$bean->name = $bean->subject;
			
		}
				/*Add Total Minuts Logic */
		$bean->total_spent_minuts = $bean->spent_hours + $bean->total_spent_minuts;
		if(!empty($_FILES["case_attachment"]["name"])){			
			$this->upload($_FILES , 'case', $bean);
		}
		if(!empty($_FILES["update_attachment"]["name"])){
			$this->upload($_FILES , 'update', $bean);
		}

		/*
		$type = explode(".",$_FILES["case_attachment"]["name"]);
		$legn = sizeof($type) - 1;
		$type_low = strtolower($type[$legn]);
		$myarr = ["txt", "doc", "docx", "pdf", "png", "jpeg", "jpg", "img", "ppt", "xls", "xlsx", "csv", "css", "xml", "gif"];
		if (in_array($type_low, $myarr) && !empty($type)) 
		  { 
			if(!empty($_FILES["case_attachment"]["size"]) && $_FILES["case_attachment"]["size"] <= $sugar_config['upload_maxsize']){
			
				$target_dir = "upload/case_attachement/";
				//$target_file = $target_dir . basename($_FILES["case_attachment"]["name"]);
				$target_file = $target_dir . $bean->id;
				if (file_exists($target_file)) {
						unlink($target_file);
				}
				if(move_uploaded_file($_FILES["case_attachment"]["tmp_name"], $target_file)){
						$bean->case_attachment = $_FILES["case_attachment"]["name"];
				}
			} 
		  }else{			
			//SugarApplication::appendErrorMessage("Case Attachement ' $type ' ISN'T Uploaded");
		}

		$utype = explode(".",$_FILES["update_attachment"]["name"]);
		$ulegn = sizeof($utype) - 1;
		$utype_low = strtolower($utype[$ulegn]);
		if (in_array($utype_low, $myarr) && !empty($utype)) 
		  {
			if(!empty($_FILES["update_attachment"]["size"]) && $_FILES["update_attachment"]["size"] <= $sugar_config['upload_maxsize']){
				
				$target_dir = "upload/update_attachement/";
				$target_file = $target_dir . $bean->id;
				if (file_exists($target_file)) {
					unlink($target_file);
				}
				if(move_uploaded_file($_FILES["update_attachment"]["tmp_name"], $target_file)){
						$bean->update_attachment = $_FILES["update_attachment"]["name"];
				}
			}
		  }else{			
				//SugarApplication::appendErrorMessage("Update Attachement ISN'T Uploaded");
			}
			
			*/
	}
	
	private function upload($files , $field , $bean){
		global $sugar_config;
		$utype = explode(".",$files[$field."_attachment"]["name"]);
		$ulegn = sizeof($utype) - 1;
		$utype_low = strtolower($utype[$ulegn]);
		$myarr = ["txt", "doc", "docx", "pdf", "png", "jpeg", "jpg", "img", "ppt", "xls", "xlsx", "csv", "css", "xml", "gif"];
		if (in_array($utype_low, $myarr) && !empty($utype)) 
		  {
			if(!empty($files[$field."_attachment"]["size"]) && $files[$field."_attachment"]["size"] <= $sugar_config['upload_maxsize']){
				
				$target_dir = "upload/".$field."_attachement/";
				$target_file = $target_dir . $bean->id;
				if (file_exists($target_file)) {
					unlink($target_file);
				}
				if(move_uploaded_file($files[$field."_attachment"]["tmp_name"], $target_file)){
						if($field == 'case')
							$bean->case_attachment = $files[$field."_attachment"]["name"];
						if($field == 'update')
							$bean->update_attachment = $files[$field."_attachment"]["name"];
				}
			}
		  }else{			
				//SugarApplication::appendErrorMessage("Update Attachement ISN'T Uploaded");
			}
		
	}
	
}


?>