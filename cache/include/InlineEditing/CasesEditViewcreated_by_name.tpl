
{if strlen($fields.created_by_name.value) <= 0}
{assign var="value" value=$fields.created_by_name.default_value }
{else}
{assign var="value" value=$fields.created_by_name.value }
{/if}  
<input type='text' name='{$fields.created_by_name.name}' 
    id='{$fields.created_by_name.name}' size='30' 
     
    value='{$value}' title=''  tabindex='1'      >