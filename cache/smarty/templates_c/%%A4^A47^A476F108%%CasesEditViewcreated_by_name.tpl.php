<?php /* Smarty version 2.6.31, created on 2019-02-08 20:22:47
         compiled from cache/include/InlineEditing/CasesEditViewcreated_by_name.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['created_by_name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['created_by_name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['created_by_name']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['created_by_name']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['created_by_name']['name']; ?>
' size='30' 
     
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >