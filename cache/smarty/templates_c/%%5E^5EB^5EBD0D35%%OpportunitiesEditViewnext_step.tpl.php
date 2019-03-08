<?php /* Smarty version 2.6.31, created on 2019-02-15 21:55:53
         compiled from cache/include/InlineEditing/OpportunitiesEditViewnext_step.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['next_step']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['next_step']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['next_step']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['next_step']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['next_step']['name']; ?>
' size='30' 
    maxlength='100' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >