
{if empty($fields.chat_description_c.value)}
{assign var="value" value=$fields.chat_description_c.default_value }
{else}
{assign var="value" value=$fields.chat_description_c.value }
{/if}




<textarea  id='{$fields.chat_description_c.name}' name='{$fields.chat_description_c.name}'
rows="2"
cols="32"
title='' tabindex="1" 
 >{$value}</textarea>


{literal}{/literal}