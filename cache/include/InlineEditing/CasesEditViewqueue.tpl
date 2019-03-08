
{if strlen($fields.queue.value) <= 0}
{assign var="value" value=$fields.queue.default_value }
{else}
{assign var="value" value=$fields.queue.value }
{/if}  
<input type='text' name='{$fields.queue.name}' 
    id='{$fields.queue.name}' size='30' 
     
    value='{$value}' title=''  tabindex='1'      >