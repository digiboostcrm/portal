<?php
$module_name = 'AOK_Knowledge_Base_Categories';
$viewdefs [$module_name] = 
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 'description',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'aok_knowle2760ries_1_name',
          ),
          1 => 
          array (
            'name' => 'aok_knowle2760ries_1_name',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'aok_knowledgebase_aok_knowledge_base_categories_1_name',
          ),
        ),
      ),
    ),
  ),
);
$viewdefs['AOK_Knowledge_Base_Categories']['EditView']['templateMeta'] = array (
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
    'DEFAULT' => 
    array (
      'newTab' => false,
      'panelDefault' => 'expanded',
    ),
  ),
  'syncDetailEditViews' => true,
);
?>
