<?php /* Smarty version 2.6.31, created on 2019-03-06 21:00:15
         compiled from cache/include/InlineEditing/CasesEditViewupdate_attachment_c.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'cache/include/InlineEditing/CasesEditViewupdate_attachment_c.tpl', 1, false),array('function', 'sugar_getimagepath', 'cache/include/InlineEditing/CasesEditViewupdate_attachment_c.tpl', 16, false),array('modifier', 'explode', 'cache/include/InlineEditing/CasesEditViewupdate_attachment_c.tpl', 19, false),)), $this); ?>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "custom/include/SugarFields/Fields/Multiupload/SugarFieldMultiupload.js"), $this);?>
'></script>


<?php if (! empty ( $this->_tpl_vars['fields']['id']['value'] )): ?>

    <?php $this->assign('file_names', $this->_tpl_vars['fields']['update_attachment_c']['value']); ?>
    
    <?php $this->assign('record_id', $this->_tpl_vars['fields']['id']['value']); ?>
         
    <div id="drop-zone_<?php echo $this->_tpl_vars['fields']['update_attachment_c']['name']; ?>
"> 
     <input type="hidden" name="file_names" id="file_names" value="<?php echo $this->_tpl_vars['file_names']; ?>
" /> 
      <span class="id-ff multiple"><input type='file' name="<?php echo $this->_tpl_vars['fields']['update_attachment_c']['name']; ?>
[]" multiple="multiple" id="<?php echo $this->_tpl_vars['fields']['update_attachment_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['update_attachment_c']['value']; ?>
" onchange="fileControlChanged(this);"> </span>
      <div id='files_list_<?php echo $this->_tpl_vars['fields']['update_attachment_c']['name']; ?>
'>
        <table>
            <tr>
                <div id="loading" style="display:none"><img border='0' src='<?php echo smarty_function_sugar_getimagepath(array('file' => "img_loading.gif"), $this);?>
'></div>
            </tr>
            
            <?php $this->assign('files', ((is_array($_tmp=":")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['file_names']) : explode($_tmp, $this->_tpl_vars['file_names']))); ?>
            <?php $_from = $this->_tpl_vars['files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['filename']):
?>
                <?php if (! empty ( $this->_tpl_vars['filename'] )): ?>
                <?php $this->assign('filepath', "/var/www/vhosts.local/digiboost.com/upload/multi_".($this->_tpl_vars['record_id'])."/update_attachment_c/".($this->_tpl_vars['filename'])); ?>
                    <?php if (file_exists ( $this->_tpl_vars['filepath'] )): ?>
                      <tr id="file_<?php echo $this->_tpl_vars['k']; ?>
">
                        <td width="75%"> <?php echo $this->_tpl_vars['filename']; ?>

                          <input type='hidden' name='uploaded_files[]' value='<?php echo $this->_tpl_vars['filename']; ?>
'/></td>
                        <td><input type='button' class='button' value='Remove' onclick='removeLine(this, "<?php echo $this->_tpl_vars['fields']['update_attachment_c']['name']; ?>
")' ></td>
                      </tr>
                    <?php endif; ?>
                <?php endif; ?>                    
            <?php endforeach; endif; unset($_from); ?>
        </table>
      </div>
    </div>
    
<script>
<?php echo '

function fileControlChanged(element) {
	  	// Files List
		var field_id 		= $(element).attr(\'id\'); 
		var fileList		= "files_list_"+ field_id;
	  	var dropZoneId 		= "drop-zone_"+ field_id;
		var record_id 		= '; ?>
 "<?php echo $this->_tpl_vars['record_id']; ?>
";<?php echo '
		var files 		= [];
		var mystrr 		= [];
		var fileNum 	= element.files.length; // Files to Upload
		var initial 	= 0;
		var allowedExt 	= new Array(\'pdf\',\'doc\',\'docx\',\'xls\',\'xlsx\',\'csv\',\'txt\',\'rtf\',\'zip\',\'html\',\'mp3\',\'jpg\',\'jpeg\',\'png\',\'gif\');
		
		$(\'#\'+fileList+\' #loading\').show();//show loader 
		
		for (initial; initial < fileNum; initial++) 
		{
			var fname 		= element.files[initial].name.split(".");
			var extension 	= (fname[fname.length-1]).toLowerCase();
			var isAllowed 	= allowedExt.indexOf(extension);
		
			if(isAllowed > -1)
			{
				$(\'#\'+fileList+\' tr:last\').after(\'<tr id="file_\'+ initial +\'"><td width="74%">\' + element.files[initial].name + \'</td><td><input type="button" class="button" value="Remove" onclick="removeLine(this, \\\'\'+field_id+\'\\\' )"></td></tr>\');
			
				if(element.files[initial] !== undefined)
					mystrr.push(element.files[initial].name); 
			}
			else
			{
				alert("File extension ."+extension+" is not allowed.");
				//Remove this from Files and correct Length
				continue;
			}
		}
		
		// Update Files Name 
		$(\'#\'+dropZoneId+\' #file_names\').val(mystrr);// Save File Names
		var form_data 	= new FormData(); // Creating object of FormData class
		// File Field ID
		form_data.append("file_input_id", field_id);
		// Record ID
		form_data.append("record_id", record_id);
		
		for (var i = 0; i < fileNum; i++) 
		{	 
					
			var file_name = element.files[i].name;
			
			// Only Valid Extension Files to Be Uploaded
			if(mystrr.indexOf(file_name) > -1)
			{
				form_data.append("fileToUpload[]", element.files[i]);
			}
		} // end for
		
		// Send Upload Call
		$.ajax({
			url: "multiupload.php",
			type: "POST",
			data:  form_data,
			contentType: false,
			cache: false,
			processData:false,
			success: function(data)
			{
				console.log(data);
			},
			error: function() 
			{
				alert("An error occured while uploading files. Please make sure the upload path is writable and try again.");
				return false;
			},
			complete: function (data) {
				$(\'#\'+fileList+\' #loading\').hide();
			}
		}); 
		
	}; // File Change Ftn
'; ?>

</script>

<?php else: ?>
  Save Record to upload files.
<?php endif; ?>