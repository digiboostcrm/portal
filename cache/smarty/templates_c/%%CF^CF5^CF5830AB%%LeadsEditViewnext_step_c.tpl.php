<?php /* Smarty version 2.6.31, created on 2019-02-16 19:50:38
         compiled from cache/include/InlineEditing/LeadsEditViewnext_step_c.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['next_step_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['next_step_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['next_step_c']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['next_step_c']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['next_step_c']['name']; ?>
' size='30' 
    maxlength='255' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title='Enter the next steps for this lead'  tabindex='1'      >