<?php /* Smarty version 2.6.31, created on 2019-02-12 17:51:05
         compiled from cache/include/InlineEditing/LeadsEditViewrefered_by.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['refered_by']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['refered_by']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['refered_by']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['refered_by']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['refered_by']['name']; ?>
' size='30' 
    maxlength='100' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >