<?php /* Smarty version 2.6.31, created on 2019-01-27 19:53:22
         compiled from custom/include/SugarFields/Fields/Photo/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'custom/include/SugarFields/Fields/Photo/EditView.tpl', 35, false),array('modifier', 'default', 'custom/include/SugarFields/Fields/Photo/EditView.tpl', 37, false),)), $this); ?>

 {literal}
    <script type="text/javascript">
		function remove(id) {			
		document.getElementById("remove").remove();	
		var a = document.getElementById('upload_photo_'+id);
		a.style.display = 'block';	
		document.getElementById("remove_"+id).value = '1';	
		} 
		
		function check_file(id,size,type) {	
			$('.alert_contact_photo_upload').remove();
			console.log(type);
			file_type = type.toLowerCase();
			if(file_type == 'image/png' || file_type == 'image/jpeg' || file_type == 'image/jpg' || file_type == 'image/gif') {
				if(size > (2 * 1024 *1024)) {
					console.log(size+'--'+2 * 1024 *1024);
					
				document.getElementById(id).value = '';		
				$('#'+id).after('<span class="alert_contact_photo_upload" style="color:red;">  Maximum file upload size is 2 MB.</span>');
				return false;	
				}
			} else {
				document.getElementById(id).value = '';
				$('#'+id).after('<span class="alert_contact_photo_upload" style="color:red;">  Only jpg,png and gif images are allowed.</span>');
				return false;	
				
			}
			
		}
		
		</script>
{/literal}

<input type="hidden" id="remove_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" name="remove_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" value="0"/>
<input type="hidden" id="old_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" name="old_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" value="{$fields[<?php echo smarty_function_sugarvar(array('key' => 'name','stringFormat' => true), $this);?>
].value}"/>
<input class="upload_photo" id="upload_photo_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" onchange="javascript:check_file(this.id,this.files[0].size,this.files[0].type);" name="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" style="{if !empty(<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
)}display:none;{/if}" type="file" title='<?php echo $this->_tpl_vars['vardef']['help']; ?>
' size="<?php echo ((is_array($_tmp=@$this->_tpl_vars['displayParams']['size'])) ? $this->_run_mod_handler('default', true, $_tmp, 30) : smarty_modifier_default($_tmp, 30)); ?>
" <?php if (! empty ( $this->_tpl_vars['vardef']['len'] )): ?>maxlength='<?php echo $this->_tpl_vars['vardef']['len']; ?>
'<?php elseif (! empty ( $this->_tpl_vars['displayParams']['maxlength'] )): ?>maxlength="<?php echo $this->_tpl_vars['displayParams']['maxlength']; ?>
"<?php else: ?>maxlength="255"<?php endif; ?> value="{$fields[<?php echo smarty_function_sugarvar(array('key' => 'name','stringFormat' => true), $this);?>
].value}" <?php echo $this->_tpl_vars['displayParams']['field']; ?>
>

    
    {if !empty(<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
)}
    <div class="remove" id="remove"> 
		
    <img src='cache/images/{$fields.<?php echo $this->_tpl_vars['displayParams']['id']; ?>
.value}_<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
' height='100'><br>
    {$fields[<?php echo smarty_function_sugarvar(array('key' => 'name','stringFormat' => true), $this);?>
].value}
    <a href="javascript:void(0)" onclick="javascript:remove('<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
');">remove</a>
    </div>
    {/if}
 
 