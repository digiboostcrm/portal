<?php
$viewdefs ['Cases'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'include/javascript/bindWithDelay.js',
        ),
        1 => 
        array (
          'file' => 'modules/AOK_KnowledgeBase/AOK_KnowledgeBase_SuggestionBox.js',
        ),
        2 => 
        array (
          'file' => 'include/javascript/qtip/jquery.qtip.min.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CASE_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_case_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'case_number',
            'type' => 'readonly',
          ),
          1 => 'priority',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'state',
            'comment' => 'The state of the case (i.e. open/closed)',
            'label' => 'LBL_STATE',
          ),
          1 => 'status',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'queue',
            'customCode' => '<select name="queue" id="queue">{$options_queue}</select>',
          ),
          1 => 'account_name',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'start_date',
            'studio' => true,
            'label' => 'LBL_START_DATE',
          ),
          1 => 
          array (
            'name' => 'end_date',
            'studio' => true,
            'label' => 'LBL_DUE_DATE',
          ),
        ),
        8 => 
        array (
			0 => 
			  array (
				'name' => 'spent_hours',
			  ),
			1 => 
			  array (
				
			  ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'chat_description_c',
            'studio' => 'visible',
            'label' => 'LBL_CHAT_DESCRIPTION_C',
          ),
          1 => 
          array (
            'name' => 'subject',
            'displayParams' => 
            array (
            ),
          ),
        ),
        6 => 
        array (
          0 => 'created_by_name',
          1 => 
          array (
            'name' => 'created_from_c',
            'studio' => 'visible',
            'label' => 'LBL_CREATED_FROM',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'custom_attachment_c',
            'label' => 'LBL_CUSTOM_ATTACHMENT',
          ),

        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'resolution',
            'nl2br' => true,
          ),
          1 => 
          array (
            'name' => 'category',
            'label' => 'LBL_CATEGORY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'internal',
            'studio' => 'visible',
            'label' => 'LBL_INTERNAL',
          ),
          1 => 
          array (
            'name' => 'update_attachment_c',
            'label' => 'LBL_UPDATE_ATTACHMENT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'update_text',
            'studio' => 'visible',
            'label' => 'LBL_UPDATE_TEXT',
          ),
        ),
        3 => 
        array (
          0 => 'assigned_user_name',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'aop_case_updates_threaded',
            'studio' => 'visible',
            'label' => 'LBL_AOP_CASE_UPDATES_THREADED',
          ),
          1 => 
          array (
            'name' => 'case_attachments_display',
            'studio' => 'visible',
            'label' => 'LBL_CASE_ATTACHMENTS_DISPLAY',
          ),
        ),
      ),
    ),
  ),
);
;
?>
