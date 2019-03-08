
<script>
    {literal}
    $(function () {
        var $dialog = $('<div></div>')
                .html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
                .dialog({
                    autoOpen: false,
                    title: SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TITLE'),
                    width: 700
                });

        $('.help-search').click(function () {
            $dialog.dialog('open');
            // prevent the default action, e.g., following a link
        });

    });
    {/literal}
</script>
<div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='name_advanced'>{sugar_translate label='LBL_NAME' module='RLS_Scheduling_Reports'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.name_advanced.value) <= 0}
{assign var="value" value=$fields.name_advanced.default_value }
{else}
{assign var="value" value=$fields.name_advanced.value }
{/if}  
<input type='text' name='{$fields.name_advanced.name}' 
    id='{$fields.name_advanced.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='-1'      accesskey='9'  >
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='last_run_advanced'>{sugar_translate label='LBL_LAST_RUN' module='RLS_Scheduling_Reports'}</label>
                            </div>
            <div class="form-item">
                                
<table border="0" cellpadding="0" cellspacing="0">
<tr valign="middle">
<td nowrap>
<input autocomplete="off" type="text" id="{$fields.last_run_advanced.name}_date" value="{$fields[$fields.last_run_advanced.name].value}" size="11" maxlength="10" title=''   onblur="combo_{$fields.last_run_advanced.name}.update(); ">
{capture assign="other_attributes"}alt="{$APP.LBL_ENTER_DATE}" style="position:relative; top:6px" border="0" id="{$fields.last_run_advanced.name}_trigger"{/capture}
	<button id="{$fields.last_run_advanced.name}_trigger" class="btn btn-danger"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</td>
<td nowrap>
<div id="{$fields.last_run_advanced.name}_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" id="{$fields.last_run_advanced.name}" name="{$fields.last_run_advanced.name}" value="{$fields[$fields.last_run_advanced.name].value}">
<script type="text/javascript" src="{sugar_getjspath file='include/SugarFields/Fields/Datetimecombo/Datetimecombo.js'}"></script>
<script type="text/javascript">
var combo_{$fields.last_run_advanced.name} = new Datetimecombo("{$fields[$fields.last_run_advanced.name].value}", "{$fields.last_run_advanced.name}", "{$TIME_FORMAT}", "", '', '{$fields[$fields.last_run_advanced.name_flag].value}', true);
//Render the remaining widget fields
text = combo_{$fields.last_run_advanced.name}.html('');
document.getElementById('{$fields.last_run_advanced.name}_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_{$fields.last_run_advanced.name}.jsscript(''));
</script>

<script type="text/javascript">
function update_{$fields.last_run_advanced.name}_available() {ldelim}
      YAHOO.util.Event.onAvailable("{$fields.last_run_advanced.name}_date", this.handleOnAvailable, this);
{rdelim}

update_{$fields.last_run_advanced.name}_available.prototype.handleOnAvailable = function(me) {ldelim}
	Calendar.setup ({ldelim}
	onClose : update_{$fields.last_run_advanced.name},
	inputField : "{$fields.last_run_advanced.name}_date",
	ifFormat : "{$CALENDAR_FORMAT}",
	daFormat : "{$CALENDAR_FORMAT}",
	button : "{$fields.last_run_advanced.name}_trigger",
	singleClick : true,
	step : 1,
        startWeekday: {$CALENDAR_FDOW|default:'0'},
	weekNumbers:false
	{rdelim});

	//Call update for first time to round hours and minute values
	combo_{$fields.last_run_advanced.name}.update(false);
{rdelim}

var obj_{$fields.last_run_advanced.name} = new update_{$fields.last_run_advanced.name}_available();
</script>
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='next_run_advanced'>{sugar_translate label='LBL_NEXT_RUN' module='RLS_Scheduling_Reports'}</label>
                            </div>
            <div class="form-item">
                                
<table border="0" cellpadding="0" cellspacing="0">
<tr valign="middle">
<td nowrap>
<input autocomplete="off" type="text" id="{$fields.next_run_advanced.name}_date" value="{$fields[$fields.next_run_advanced.name].value}" size="11" maxlength="10" title=''   onblur="combo_{$fields.next_run_advanced.name}.update(); ">
{capture assign="other_attributes"}alt="{$APP.LBL_ENTER_DATE}" style="position:relative; top:6px" border="0" id="{$fields.next_run_advanced.name}_trigger"{/capture}
	<button id="{$fields.next_run_advanced.name}_trigger" class="btn btn-danger"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</td>
<td nowrap>
<div id="{$fields.next_run_advanced.name}_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" id="{$fields.next_run_advanced.name}" name="{$fields.next_run_advanced.name}" value="{$fields[$fields.next_run_advanced.name].value}">
<script type="text/javascript" src="{sugar_getjspath file='include/SugarFields/Fields/Datetimecombo/Datetimecombo.js'}"></script>
<script type="text/javascript">
var combo_{$fields.next_run_advanced.name} = new Datetimecombo("{$fields[$fields.next_run_advanced.name].value}", "{$fields.next_run_advanced.name}", "{$TIME_FORMAT}", "", '', '{$fields[$fields.next_run_advanced.name_flag].value}', true);
//Render the remaining widget fields
text = combo_{$fields.next_run_advanced.name}.html('');
document.getElementById('{$fields.next_run_advanced.name}_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_{$fields.next_run_advanced.name}.jsscript(''));
</script>

<script type="text/javascript">
function update_{$fields.next_run_advanced.name}_available() {ldelim}
      YAHOO.util.Event.onAvailable("{$fields.next_run_advanced.name}_date", this.handleOnAvailable, this);
{rdelim}

update_{$fields.next_run_advanced.name}_available.prototype.handleOnAvailable = function(me) {ldelim}
	Calendar.setup ({ldelim}
	onClose : update_{$fields.next_run_advanced.name},
	inputField : "{$fields.next_run_advanced.name}_date",
	ifFormat : "{$CALENDAR_FORMAT}",
	daFormat : "{$CALENDAR_FORMAT}",
	button : "{$fields.next_run_advanced.name}_trigger",
	singleClick : true,
	step : 1,
        startWeekday: {$CALENDAR_FDOW|default:'0'},
	weekNumbers:false
	{rdelim});

	//Call update for first time to round hours and minute values
	combo_{$fields.next_run_advanced.name}.update(false);
{rdelim}

var obj_{$fields.next_run_advanced.name} = new update_{$fields.next_run_advanced.name}_available();
</script>
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='subscribe_active_advanced'>{sugar_translate label='LBL_SUBSCRIBE_ACTIVE' module='RLS_Scheduling_Reports'}</label>
                            </div>
            <div class="form-item">
                                
{assign var="yes" value=""}
{assign var="no" value=""}
{assign var="default" value=""}

{if strval($fields.subscribe_active_advanced.value) == "1"}
	{assign var="yes" value="SELECTED"}
{elseif strval($fields.subscribe_active_advanced.value) == "0"}
	{assign var="no" value="SELECTED"}
{else}
	{assign var="default" value="SELECTED"}
{/if}

<select id="{$fields.subscribe_active_advanced.name}" name="{$fields.subscribe_active_advanced.name}"   >
 <option value="" {$default}></option>
 <option value = "0" {$no}> {$APP.LBL_SEARCH_DROPDOWN_NO}</option>
 <option value = "1" {$yes}> {$APP.LBL_SEARCH_DROPDOWN_YES}</option>
</select>

                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='single_launch_advanced'>{sugar_translate label='LBL_SINGLE_LAUNCH' module='RLS_Scheduling_Reports'}</label>
                            </div>
            <div class="form-item">
                                
{assign var="yes" value=""}
{assign var="no" value=""}
{assign var="default" value=""}

{if strval($fields.single_launch_advanced.value) == "1"}
	{assign var="yes" value="SELECTED"}
{elseif strval($fields.single_launch_advanced.value) == "0"}
	{assign var="no" value="SELECTED"}
{else}
	{assign var="default" value="SELECTED"}
{/if}

<select id="{$fields.single_launch_advanced.name}" name="{$fields.single_launch_advanced.name}"   >
 <option value="" {$default}></option>
 <option value = "0" {$no}> {$APP.LBL_SEARCH_DROPDOWN_NO}</option>
 <option value = "1" {$yes}> {$APP.LBL_SEARCH_DROPDOWN_YES}</option>
</select>

                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='periodicity_advanced'>{sugar_translate label='LBL_PERIODICITY' module='RLS_Scheduling_Reports'}</label>
                            </div>
            <div class="form-item">
                                
{html_options id='periodicity_advanced' name='periodicity_advanced[]' options=$fields.periodicity_advanced.options size="6" class="templateGroupChooser" multiple="1" selected=$fields.periodicity_advanced.value}
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='assigned_user_id_advanced'>{sugar_translate label='LBL_ASSIGNED_TO' module='RLS_Scheduling_Reports'}</label>
                            </div>
            <div class="form-item">
                                
{html_options id='assigned_user_id_advanced' name='assigned_user_id_advanced[]' options=$fields.assigned_user_id_advanced.options size="6" class="templateGroupChooser" multiple="1" selected=$fields.assigned_user_id_advanced.value}
                            </div>
        </div>
    </div>
    
    <div>
        <div>
            &nbsp;
        </div>
    </div>

    {if $DISPLAY_SAVED_SEARCH}
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
            {if !$searchFormInPopup}
                <div>
                    <a class='tabFormAdvLink' onhover href='javascript:toggleInlineSearch()'>
                        {capture assign="alt_show_hide"}{sugar_translate label='LBL_ALT_SHOW_OPTIONS'}{/capture}
                        {sugar_getimage alt=$alt_show_hide name="advanced_search" ext=".gif" other_attributes='border="0" id="up_down_img" '}
                        &nbsp;{$APP.LNK_SAVED_VIEWS}
                    </a><br>
                    <input type='hidden' id='showSSDIV' name='showSSDIV' value='{$SHOWSSDIV}'>
                    <p>
                </div>
            {/if}
            <div class="" scope='row' width='10%' nowrap="nowrap">
                <div class="col-xs-12">
                    <label>{sugar_translate label='LBL_SAVE_SEARCH_AS' module='SavedSearch'}:</label>
                </div>
                <div class="form-item" width='30%' nowrap>
                    <input type='text' name='saved_search_name'>
                    <input type='hidden' name='search_module' value=''>
                    <input type='hidden' name='saved_search_action' value=''>
                    <input title='{$APP.LBL_SAVE_BUTTON_LABEL}' value='{$APP.LBL_SAVE_BUTTON_LABEL}' class='button'
                           type='button' name='saved_search_submit'
                           onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("save");'>
                </div>
            </div>
            <div class="hideUnusedSavedSearchElements" scope='row' width='10%'
                 nowrap="nowrap"{if !$savedSearchData.selected} style="display: none;"{/if}>
                <label>{sugar_translate label='LBL_MODIFY_CURRENT_FILTER' module='SavedSearch'}: <span
                            id='curr_search_name'>"{$savedSearchData.options[$savedSearchData.selected]}"</span></label>
            </div>
            <div class="hideUnusedSavedSearchElements" width='30%'
                 nowrap{if !$savedSearchData.selected} style="display: none;"{/if}>
                <input class='button'
                       onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("update")'
                       value='{$APP.LBL_UPDATE}' title='{$APP.LBL_UPDATE}' name='ss_update' id='ss_update'
                       type='button'>
                <input class='button'
                       onclick='return SUGAR.savedViews.saved_search_action("delete", "{sugar_translate label='LBL_DELETE_CONFIRM' module='SavedSearch'}")'
                       value='{$APP.LBL_DELETE}' title='{$APP.LBL_DELETE}' name='ss_delete' id='ss_delete'
                       type='button'>
            </div>
        </div>
        <div>
            <div colspan='6'>
                <div{if !$searchFormInPopup} style='{$DISPLAYSS}'{/if} id='inlineSavedSearch'>
                    {$SAVED_SEARCH}
                </div>
            </div>
        </div>
    {/if}

    {if $displayType != 'popupView'}
        <div>
            <div class="submitButtonsAdvanced">
                <input tabindex='2' title='{$APP.LBL_SEARCH_BUTTON_TITLE}' onclick='SUGAR.savedViews.setChooser()'
                       class='button' type='submit' name='button' value='{$APP.LBL_SEARCH_BUTTON_LABEL}'
                       id='search_form_submit_advanced'/>&nbsp;
                <input tabindex='2' title='{$APP.LBL_CLEAR_BUTTON_TITLE}'
                       onclick='SUGAR.searchForm.clear_form(this.form); if(document.getElementById("saved_search_select")){ldelim}document.getElementById("saved_search_select").options[0].selected=true;{rdelim} return false;'
                       class='button' type='button' name='clear' id='search_form_clear_advanced'
                       value='{$APP.LBL_CLEAR_BUTTON_LABEL}'/>
                {if $DOCUMENTS_MODULE}
                    &nbsp;
                    <input title="{$APP.LBL_BROWSE_DOCUMENTS_BUTTON_TITLE}" type="button" class="button"
                           value="{$APP.LBL_BROWSE_DOCUMENTS_BUTTON_LABEL}"
                           onclick='open_popup("Documents", 600, 400, "&caller=Documents", true, false, "");'/>
                {/if}
                {if $searchFormInPopup}
                <div>
                    {/if}
                    <a id="basic_search_link" href="javascript:void(0)"
                       accesskey="{$APP.LBL_ADV_SEARCH_LNK_KEY}">{$APP.LNK_BASIC_FILTER}</a>
        <span class='white-space'>
            &nbsp;&nbsp;&nbsp;{if $SAVED_SEARCHES_OPTIONS}|&nbsp;&nbsp;&nbsp;<b>{$APP.LBL_SAVED_FILTER_SHORTCUT}</b>&nbsp;
            {$SAVED_SEARCHES_OPTIONS} {/if}
            <span id='go_btn_span' style='display:none'><input tabindex='2' title='go_select' id='go_select'
                                                               onclick='SUGAR.searchForm.clear_form(this.form);'
                                                               class='button' type='button' name='go_select'
                                                               value=' {$APP.LBL_GO_BUTTON_LABEL} '/></span>
        </span>
                    {if $searchFormInPopup}
                </div>
                {/if}
            </div>
            <div class="help">
                {if $DISPLAY_SEARCH_HELP}
                    <img border='0' src='{sugar_getimagepath file="help-dashlet.gif"}' class="help-search">
                {/if}
            </div>
        </div>
    {/if}
</div>

<script>
    {literal}
    if (typeof(loadSSL_Scripts) == 'function') {
        loadSSL_Scripts();
    }
    {/literal}
</script>
<script>
    {literal}
    $(document).ready(function () {
        $('#basic_search_link').one("click", function () {
            //alert( "This will be displayed only once." );
            SUGAR.searchForm.searchFormSelect('{/literal}{$module}{literal}|basic_search', '{/literal}{$module}{literal}|advanced_search');
        });
    });
    {/literal}
</script>{literal}<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['search_form_modified_by_name_advanced']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_advanced","modified_user_id_advanced"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['search_form_created_by_name_advanced']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_advanced","created_by_advanced"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['search_form_assigned_user_name_advanced']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_advanced","assigned_user_id_advanced"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>{/literal}