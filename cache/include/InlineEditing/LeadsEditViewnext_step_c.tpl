
{if strlen($fields.next_step_c.value) <= 0}
{assign var="value" value=$fields.next_step_c.default_value }
{else}
{assign var="value" value=$fields.next_step_c.value }
{/if}  
<input type='text' name='{$fields.next_step_c.name}' 
    id='{$fields.next_step_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='Enter the next steps for this lead'  tabindex='1'      >