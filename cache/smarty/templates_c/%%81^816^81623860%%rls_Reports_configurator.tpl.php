<?php /* Smarty version 2.6.31, created on 2019-02-26 01:31:12
         compiled from custom/modules/Configurator/rls_Reports_configurator.tpl */ ?>

<script type='text/javascript' src='modules/rls_Reports/js/adminPanel.js'></script>
<h3>Reports parameters:</h3>
<form name="ConfigureSettings" enctype='multipart/form-data' method="POST" action="index.php" onSubmit="return (add_checks(document.ConfigureSettings) && check_form('ConfigureSettings'));">
    <input type='hidden' name='action' value='rls_Reports_configurator'/>
    <input type='hidden' name='module' value='Configurator'/>
    <span class='error'><?php echo $this->_tpl_vars['error']['main']; ?>
</span>
    <BR/>
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td style="padding-bottom: 2px;">
                <input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button"  type="submit"  name="save" value="  <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
  " >
                &nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_BUTTON_TITLE']; ?>
"  class="button"  type="submit" name="restore" value="  <?php echo $this->_tpl_vars['MOD']['LBL_RESTORE_BUTTON_LABEL']; ?>
  " >
                &nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL_BUTTON_TITLE']; ?>
"  onclick="document.location.href = 'index.php?module=Administration&action=index'" class="button"  type="button" name="cancel" value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
  " >
            </td>
        </tr>
        <tr><td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
                    <tr>
                        <td>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
  									<td nowrap width="10%" class="dataLabel">Use NodeJs image generator
									</td>
									<td width="25%" class="dataField">
										<?php if (is_null ( $this->_tpl_vars['config']['switch_mode'] )): ?>
            								<?php $this->assign('switch_mode', $this->_tpl_vars['reports_config']['switch_mode']); ?>
										<?php else: ?>
            								<?php $this->assign('switch_mode', $this->_tpl_vars['config']['switch_mode']); ?>
        								<?php endif; ?>

										<?php if ($this->_tpl_vars['switch_mode'] == 1): ?>
            								<?php $this->assign('switch_mode', ' checked="checked"'); ?>
										<?php else: ?>
												<?php $this->assign('switch_mode', ''); ?>		
										<?php endif; ?>
										<input type='checkbox' id='switch_mode' name='switch_mode' size="45" value='1' <?php echo $this->_tpl_vars['switch_mode']; ?>
>
									</td>

                                    <td nowrap width="10%" class="dataLabel">Node Js Hostname
                                    </td>
                                    <td width="25%" class="dataField"> 
                                        <input type='textbox' name='nodejshost' size="45" value='<?php echo $this->_tpl_vars['config']['nodejshost']; ?>
'>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            <td>
                <br>
    </table>
    <div style="padding-top: 2px;">
        <input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" class="button"  type="submit" name="save" value="  <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
  " />
        &nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_BUTTON_TITLE']; ?>
"  class="button"  type="submit" name="restore" value="  <?php echo $this->_tpl_vars['MOD']['LBL_RESTORE_BUTTON_LABEL']; ?>
  " />
        &nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL_BUTTON_TITLE']; ?>
"  onclick="document.location.href = 'index.php?module=Administration&action=index'" class="button"  type="button" name="cancel" value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
  " />
    </div>
</form>
<?php echo $this->_tpl_vars['JAVASCRIPT']; ?>
