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
            0 => 
            array (
            ),
          ),
          1 => 'account_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'subject',
          ),
          1 => 'priority',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'category',
            'label' => 'LBL_CATEGORY',
          ),
          1 => 'status',
        ),
        3 => 
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
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
        ),
        5 => 
        array (
          /*
		  0 => 
          array (
            'name' => 'case_attachment',
            'label' => 'LBL_CUSTOM_ATTACHMENT',
            'customCode' => '<a href="index.php?entryPoint=customDownload&id={$fields.id.value}&type={$fields.case_attachment.value}&des=caseAttachment">{$fields.case_attachment.value}</a>',
          ),
		  */
		  0 => 
          array (
            'name' => 'custom_attachment_c',
            'label' => 'LBL_CUSTOM_ATTACHMENT',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'spent_hours',
          ),
          1 => 
          array (
            'name' => 'total_spent_minuts',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'time_category',
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
          /*
		  0 => 
          array (
            'name' => 'update_attachment',
            'label' => 'LBL_UPDATE_ATTACHMENT',
            'customCode' => '<a href="index.php?entryPoint=customDownload&id={$fields.id.value}&type={$fields.update_attachment.value}&des=updateAttachment">{$fields.update_attachment.value}</a>',
          ),
		  */
		  0 =>
		  array (
            'name' => 'update_attachment_c',
            'label' => 'LBL_UPDATE_ATTACHMENT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'aop_case_updates_threaded',
            'studio' => 'visible',
            'label' => 'LBL_AOP_CASE_UPDATES_THREADED',
          ),
        ),
      ),
    ),
  ),
);
;
?>
