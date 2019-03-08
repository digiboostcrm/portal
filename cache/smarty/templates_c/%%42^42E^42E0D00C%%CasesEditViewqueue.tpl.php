<?php /* Smarty version 2.6.31, created on 2019-02-28 06:16:55
         compiled from cache/include/InlineEditing/CasesEditViewqueue.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['queue']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['queue']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['queue']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['queue']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['queue']['name']; ?>
' size='30' 
     
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >