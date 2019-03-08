<?php /* Smarty version 2.6.31, created on 2019-02-28 14:22:53
         compiled from cache/include/InlineEditing/CasesEditViewresolution.tpl */ ?>

<?php if (empty ( $this->_tpl_vars['fields']['resolution']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['resolution']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['resolution']['value']); ?>
<?php endif; ?>




<textarea  id='<?php echo $this->_tpl_vars['fields']['resolution']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['resolution']['name']; ?>
'
rows="2"
cols="32"
title='' tabindex="1" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>


<?php echo ''; ?>