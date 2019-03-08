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
      ),
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
      ),
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
           0 => array(
			'name' => 'queue',
			'customCode' => '<select name="queue" id="queue">{$options_queue}</select>',
		  ),
          1 => 'account_name',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'subject',
            'displayParams' => 
            array (
            ),
          ),
          1 => 
          array (
            'name' => 'suggestion_box',
            'label' => 'LBL_SUGGESTION_BOX',
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
        6 => 
        array (
          0 => 
          array (
            'name' => 'update_text',
            'studio' => 'visible',
            'label' => 'LBL_UPDATE_TEXT',
          ),
        ),
        7 => 
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
        8 => 
        array (
          0 => '',
          1 => '',
        ),
        9 => 
        array (
          0 => 'assigned_user_name',
		  1 => 'created_by_name'
        ),
      ),
    ),
  ),
);
$viewdefs['Cases']['EditView']['templateMeta'] = array (
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
  ),
  'form' => 
  array (
    'enctype' => 'multipart/form-data',
  ),
);
?>
