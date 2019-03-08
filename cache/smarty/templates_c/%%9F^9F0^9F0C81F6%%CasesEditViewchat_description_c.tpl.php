<?php /* Smarty version 2.6.31, created on 2019-03-01 14:58:42
         compiled from cache/include/InlineEditing/CasesEditViewchat_description_c.tpl */ ?>

<?php if (empty ( $this->_tpl_vars['fields']['chat_description_c']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['chat_description_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['chat_description_c']['value']); ?>
<?php endif; ?>




<textarea  id='<?php echo $this->_tpl_vars['fields']['chat_description_c']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['chat_description_c']['name']; ?>
'
rows="2"
cols="32"
title='' tabindex="1" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>


<?php echo ''; ?>