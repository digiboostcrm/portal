
{if strlen($fields.account_number_c.value) <= 0}
{assign var="value" value=$fields.account_number_c.default_value }
{else}
{assign var="value" value=$fields.account_number_c.value }
{/if}  
<input type='text' name='{$fields.account_number_c.name}' 
    id='{$fields.account_number_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='Customer Account Number'  tabindex='1'      >