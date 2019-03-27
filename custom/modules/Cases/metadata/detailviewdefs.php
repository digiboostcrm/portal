<?php
$viewdefs ['Cases'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CASE_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
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
            'name' => 'subject',
            'studio' => true,
            'label' => 'LBL_SUBJECT',
          ),
          1 => 'priority',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'case_number',
            'label' => 'LBL_CASE_NUMBER',
          ),
          1 => 'account_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'state',
            'comment' => 'The state of the case (i.e. open/closed)',
            'label' => 'LBL_STATE',
          ),
          1 => 'status',
        ),
        3 => 
        array (
          0 => 'description',
        ),
        4 => 
        array (
          0 => 'queue',
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'studio' => true,
            'label' => 'LBL_CREATED_BY_NAME',
          ),
          1 => 
          array (
            'name' => 'created_from_c',
            'studio' => 'visible',
            'label' => 'LBL_CREATED_FROM',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'category',
            'studio' => true,
            'label' => 'LBL_CATEGORY',
          ),
          1 => 
          array (
            'name' => 'custom_attachment_c',
            'label' => 'LBL_CUSTOM_ATTACHMENT',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
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
        1 => 
        array (
          0 => 
          array (
            'name' => 'update_text',
            'studio' => 'visible',
            'label' => 'LBL_UPDATE_TEXT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'aop_case_updates_threaded',
            'studio' => 'visible',
            'label' => 'LBL_AOP_CASE_UPDATES_THREADED',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 'resolution',
        ),
        1 => 
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
        2 => 
        array (
          0 => 
          array (
            'name' => 'spent_hours',
            'studio' => true,
            'label' => 'LBL_SPENT_HOURS',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'chat_description_c',
            'label' => 'LBL_CHAT_DESCRIPTION_C',
            'readonly' => true,
            'inline_edit' => false,
          ),
        ),
      ),
    ),
  ),
);
;
?>
