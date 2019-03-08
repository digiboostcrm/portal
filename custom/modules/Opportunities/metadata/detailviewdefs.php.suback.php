<?php
$viewdefs ['Opportunities'] = 
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'account_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'contract_date_c',
            'label' => 'LBL_CONTRACT_DATE',
          ),
          1 => 'opportunity_type',
        ),
        2 => 
        array (
          0 => 'date_closed',
          1 => 
          array (
            'name' => 'online_date_c',
            'label' => 'LBL_ONLINE_DATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'free_time_c',
            'label' => 'LBL_FREE_TIME',
          ),
          1 => 
          array (
            'name' => 'contract_term_c',
            'studio' => 'visible',
            'label' => 'LBL_CONTRACT_TERM',
          ),
        ),
        4 => 
        array (
          0 => 'sales_stage',
          1 => 'lead_source',
        ),
        5 => 
        array (
          0 => 'probability',
          1 => 'campaign_name',
        ),
        6 => 
        array (
          0 => 'next_step',
          1 => 
          array (
            'name' => 'contact_lead_c',
            'studio' => 'visible',
            'label' => 'LBL_CONTACT_LEAD',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'industry_c',
            'studio' => 'visible',
            'label' => 'LBL_INDUSTRY',
          ),
          1 => 
          array (
            'name' => 'project_status',
            'studio' => true,
            'label' => 'LBL_PROJECT_STATUS',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'sdr',
            'studio' => true,
            'label' => 'LBL_SDR',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'custom_lead_id',
            'studio' => true,
            'label' => 'LBL_LEAD_ID',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'social_engagement_c',
            'label' => 'LBL_SOCIAL_ENGAGEMENT',
          ),
          1 => 
          array (
            'name' => 'logo_design',
            'label' => 'Logo Design',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'website_design_amount_c',
            'label' => 'LBL_WEBSITE_DESIGN_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'email_mrr_c',
            'label' => 'LBL_EMAIL_MRR',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'hosting_mrr_c',
            'label' => 'LBL_HOSTING_MRR',
          ),
          1 => 
          array (
            'name' => 'amount',
            'label' => '{$MOD.LBL_AMOUNT} ({$CURRENCY})',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'setup_fee_c',
            'label' => 'LBL_SETUP_FEE',
          ),
          1 => 
          array (
            'name' => 'payment_notes_c',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENT_NOTES',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'nl2br' => true,
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'website_design_description_c',
            'studio' => 'visible',
            'label' => 'LBL_WEBSITE_DESIGN_DESCRIPTION_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'totalCountRow12',
            'customCode' => '<input type="hidden" name="editRowsCount" id="editRowsCount" value="{$rowCountEdit}">
								<input type="hidden" name="editViewData" id="editViewData" value="{$dataRowEdit}">
								<input type="hidden" name="totalCountRow" id="totalCountRow" value="{$rowCountEdit}">
								<input type="hidden" name="outSourceDom" id="outSourceDom" value="{$outSourceDom}">
								<input type="hidden" name="detailView" id="detailView" value="{$detailView}">
								<input type="hidden" name="rowData" id="rowData" value="{$dataRowEdit}">',
          ),
        ),
      ),
      'lbl_detailview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'totalCountRow',
            'studio' => true,
            'label' => 'LBL_ROW_COUNT',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'account_manager_c',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNT_MANAGER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'churned_c',
            'label' => 'LBL_CHURNED',
          ),
          1 => 
          array (
            'name' => 'on_boarding_incomplete_c',
            'label' => 'LBL_ON_BOARDING_INCOMPLETE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'on_boarding_incomplete_notes_c',
            'label' => 'LBL_ON_BOARDING_INCOMPLETE_NOTES',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
    ),
  ),
);
$viewdefs['Opportunities']['DetailView']['templateMeta'] = array (
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
  'useTabs' => true,
  'tabDefs' => 
  array (
    'DEFAULT' => 
    array (
      'newTab' => true,
      'panelDefault' => 'expanded',
    ),
    'LBL_PANEL_ASSIGNMENT' => 
    array (
      'newTab' => true,
      'panelDefault' => 'expanded',
    ),
  ),
);
?>
