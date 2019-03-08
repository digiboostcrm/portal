
{if strlen($fields.total_contract_value.value) <= 0}
{assign var="value" value=$fields.total_contract_value.default_value }
{else}
{assign var="value" value=$fields.total_contract_value.value }
{/if}  
<input type='text' name='{$fields.total_contract_value.name}' 
id='{$fields.total_contract_value.name}' size='30' maxlength='26,6' value='{sugar_number_format var=$value}' title='' tabindex='1'
 >