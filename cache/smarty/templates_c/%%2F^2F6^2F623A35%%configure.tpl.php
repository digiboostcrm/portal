<?php /* Smarty version 2.6.31, created on 2019-01-30 17:19:36
         compiled from modules/rls_Reports/Dashlets/MyReports/configure.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'modules/rls_Reports/Dashlets/MyReports/configure.tpl', 62, false),)), $this); ?>


<div style='width:100%'>
<form name='configure_<?php echo $this->_tpl_vars['id']; ?>
' action="index.php" method="post" onSubmit='return SUGAR.dashlets.postForm("configure_<?php echo $this->_tpl_vars['id']; ?>
", SUGAR.mySugar.uncoverPage);'>
<input type='hidden' name='id' value='<?php echo $this->_tpl_vars['id']; ?>
'>
<input type='hidden' name='module' value='<?php echo $this->_tpl_vars['module']; ?>
'>
<input type='hidden' name='action' value='ConfigureDashlet'>
<input type='hidden' name='to_pdf' value='true'>
<input type='hidden' name='configure' value='true'>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="edit view" align="center">
<tr>
    <td scope='row'><?php echo $this->_tpl_vars['titleLBL']; ?>
</td>
    <td>
      <input class="text" name="title" size='20' maxlength='80' value='<?php echo $this->_tpl_vars['title']; ?>
'>
    </td>
</tr>
<?php if ($this->_tpl_vars['isRefreshable']): ?>
<tr>
    <td scope='row'>
        <?php echo $this->_tpl_vars['autoRefresh']; ?>

    </td>
    <td>
        <select name='autoRefresh'>
            <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['autoRefreshOptions'],'selected' => $this->_tpl_vars['autoRefreshSelect']), $this);?>

        </select>
    </td>
</tr>
<?php endif; ?>
<tr>
    <td scope='row'><?php echo $this->_tpl_vars['reportLBL']; ?>
</td>
    <td>
        <input type="text" autocomplete="off" title="" value="<?php echo $this->_tpl_vars['report_c']; ?>
" size="" id="report_c" tabindex="0" class="sqsEnabled yui-ac-input" name="report_c">
        <input type="hidden" value="<?php echo $this->_tpl_vars['rls_reports_id_c']; ?>
" id="rls_reports_id_c" name="rls_reports_id_c">
        <?php echo '    
            <span class="id-ff multiple"> 
            <button
              onclick="open_popup(&quot;rls_Reports&quot;, 600, 400, &quot;&quot;, true, false,
              {&quot;call_back_function&quot;:&quot;set_return_rls&quot;,
              &quot;form_name&quot;:&quot;'; ?>
configure_<?php echo $this->_tpl_vars['id']; ?>
<?php echo '&quot;,
              &quot;field_to_name_array&quot;:{&quot;id&quot;:&quot;rls_reports_id_c&quot;,&quot;name&quot;:&quot;report_c&quot;}}, &quot;single&quot;, true );"
              value="Выбрать" class="button firstChild" accesskey="T" title="Select [Alt+T]" id="btn_report_c" name="btn_report_c" type="button">
              <img src="themes/default/images/id-ff-select.png?v=mgtokehP0hlxfqolZv7qOw">
            </button>
            <button value="Clear Selection" onclick="SUGAR.clearRelateField(this.form, \'report_c\', \'rls_reports_id_c\');" class="button lastChild" 
                title="Clear Selection" id="btn_clr_report_c" name="btn_clr_report_c" type="button">
                <img src="themes/default/images/id-ff-clear.png?v=mgtokehP0hlxfqolZv7qOw">
            </button>
            </span>
        '; ?>
    
    </td>
</tr>

<tr>
    <td align="right" colspan="2">
        <input type='submit' class='button' value='<?php echo $this->_tpl_vars['saveLBL']; ?>
'>
    </td>
</tr>
</table>
</form>
</div>
<?php echo '
<script type="text/javascript">
function set_return_rls(popup_reply_data) {
    from_popup_return = true;
    var form_name = popup_reply_data.form_name;
    var name_to_value_array = popup_reply_data.name_to_value_array;
    name_to_value_array[\'title\'] = name_to_value_array[\'report_c\'];
    if (typeof name_to_value_array != \'undefined\' && name_to_value_array[\'account_id\']) {
        var label_str = \'\';
        var label_data_str = \'\';
        var current_label_data_str = \'\';
        var popupConfirm = popup_reply_data.popupConfirm;
        for (var the_key in name_to_value_array) {
            if (the_key == \'toJSON\') {
            }
            else {
                var displayValue = replaceHTMLChars(name_to_value_array[the_key]);
                if (window.document.forms[form_name] && document.getElementById(the_key + \'_label\') && !the_key.match(/account/)) {
                    var data_label = document.getElementById(the_key + \'_label\').innerHTML.replace(/\\n/gi, \'\').replace(/<\\/?[^>]+(>|$)/g, "");
                    label_str += data_label + \' \\n\';
                    label_data_str += data_label + \' \' + displayValue + \'\\n\';
                    if (window.document.forms[form_name].elements[the_key]) {
                        current_label_data_str += data_label + \' \' + window.document.forms[form_name].elements[the_key].value + \'\\n\';
                    }
                }
            }
        }
        if (label_data_str != label_str && current_label_data_str != label_str) {
            if (typeof popupConfirm != \'undefined\') {
                if (popupConfirm > -1) {
                    set_return_basic(popup_reply_data, /\\S/);
                } else {
                    set_return_basic(popup_reply_data, /account/);
                }
            }
            else if (confirm(SUGAR.language.get(\'app_strings\', \'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM\') + \'\\n\\n\' + label_data_str)) {
                set_return_basic(popup_reply_data, /\\S/);
            }
            else {
                set_return_basic(popup_reply_data, /account/);
            }
        } else if (label_data_str != label_str && current_label_data_str == label_str) {
            set_return_basic(popup_reply_data, /\\S/);
        } else if (label_data_str == label_str) {
            set_return_basic(popup_reply_data, /account/);
        }
    } else {
        set_return_basic(popup_reply_data, /\\S/);
    }
}
</script>
'; ?>
