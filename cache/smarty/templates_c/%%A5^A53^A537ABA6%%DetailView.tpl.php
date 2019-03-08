<?php /* Smarty version 2.6.31, created on 2019-01-27 19:52:58
         compiled from custom/include/SugarFields/Fields/Photo/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'custom/include/SugarFields/Fields/Photo/DetailView.tpl', 1, false),)), $this); ?>
{if !empty(<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
)}
    <img src='cache/images/{$fields.<?php echo $this->_tpl_vars['displayParams']['id']; ?>
.value}_<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
' height='100'>
    {/if}