<?php /* Smarty version 2.6.31, created on 2019-02-18 21:03:19
         compiled from cache/include/InlineEditing/AOS_ContractsEditViewtotal_contract_value.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_number_format', 'cache/include/InlineEditing/AOS_ContractsEditViewtotal_contract_value.tpl', 8, false),)), $this); ?>

<?php if (strlen ( $this->_tpl_vars['fields']['total_contract_value']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['total_contract_value']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['total_contract_value']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['total_contract_value']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['total_contract_value']['name']; ?>
' size='30' maxlength='26,6' value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='1'
 >