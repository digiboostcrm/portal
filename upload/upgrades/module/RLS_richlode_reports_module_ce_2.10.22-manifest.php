<?php
/*   IMPORTANT!
*   READ CAREFULLY:
*
*   This file is part of Software produced by Richlode Solutions LLC. The Software is protected by proprietary license.
*   This Software and the accompanying written materials are copyrighted and protected by copyright laws and international copyright treaties, as well as other intellectual property and trade-secret laws and treaties. Unauthorized
*   copying of the Software, including Software that has been modified, merged, or included with other Software, or of the written materials, is expressly forbidden. You may be held legally responsible for any copyright infringement
*   that is caused or encouraged by your failure to abide by the terms of this license.
*
*   For more details, please contact Manufacturer.
*
*   Manufacturer is Richlode Solutions LLC.

*   Contact:
*   http://richlodesolutions.com
*   info@richlodesolutions.com
*   t.US: +1 310 3621732
*   t.UK: +44 2030 513638
*/

$manifest = array (
  'acceptable_sugar_versions' =>
  array (
  ),

  'acceptable_sugar_flavors' =>
  array (
    'CE'
  ),
  'readme'=>'',
  'key'=>'rls',
  'author' => 'RLS',
  'description' => 'Reports modules for Community Edition by Richlode Solutions',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Reports Module',
  'published_date' => '2016-06-15 16:50:14',
  'type' => 'module',
  'version' => '2.10.22',
  'remove_tables' => 'prompt',
);

$installdefs = array (
  'id' => 'Reports',
  'beans' =>
  array (
    array (
      'module' => 'rls_Reports',
      'class' => 'rls_Reports',
      'path' => 'modules/rls_Reports/rls_Reports.php',
      'tab' => true,
    ),
    array (
      'module' => 'rls_Dashboards',
      'class' => 'rls_Reports',
      'path' => 'modules/rls_Reports/rls_Reports.php',
      'tab' => true,
    ),
    array (
      'module' => 'RLS_Scheduling_Reports',
      'class' => 'RLS_Scheduling_Reports',
      'path' => 'modules/RLS_Scheduling_Reports/RLS_Scheduling_Reports.php',
      'tab' => true,
    ),
  ),

  'logic_hooks' =>
  array (
    array (
      'module' => 'RLS_Scheduling_Reports',
      'hook' => 'before_save',
      'order' => 100010,
      'description' => 'Set next runtime',
      'file' => 'modules/RLS_Scheduling_Reports/hooks/SchedulingReportsHooks.php',
      'class' => 'SchedulingReportsHooks',
      'function' => 'set_next_runtime',
    ),
  ),

  'layoutdefs' =>
  array (
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/rls_scheduling_reports_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/rls_scheduling_reports_contacts_RLS_Scheduling_Reports.php',
      'to_module' => 'RLS_Scheduling_Reports',
    ),
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/rls_scheduling_reports_users_Users.php',
      'to_module' => 'Users',
    ),
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/rls_scheduling_reports_users_RLS_Scheduling_Reports.php',
      'to_module' => 'RLS_Scheduling_Reports',
    ),
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/rls_scheduling_reports_rls_reports_rls_Reports.php',
      'to_module' => 'rls_Reports',
    ),
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/rls_scheduling_reports_rls_reports_RLS_Scheduling_Reports.php',
      'to_module' => 'RLS_Scheduling_Reports',
    ),
  ),

  'relationships' =>
  array (
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/rls_scheduling_reports_contactsMetaData.php',
    ),
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/rls_scheduling_reports_usersMetaData.php',
    ),
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/rls_scheduling_reports_rls_reportsMetaData.php',
    ),
  ),

  'image_dir' => '<basepath>/icons',
  'copy' =>
  array (
    array (
      'from' => '<basepath>/copy/Extension/modules/Schedulers/Ext/Language/en_us.SendReports.php',
      'to' => 'custom/Extension/modules/Schedulers/Ext/Language/en_us.SendReports.php',
    ),
    array (
      'from' => '<basepath>/copy/Extension/modules/Schedulers/Ext/ScheduledTasks/SendReports.php',
      'to' => 'custom/Extension/modules/Schedulers/Ext/ScheduledTasks/SendReports.php',
    ),

    array (
      'from' => '<basepath>/copy/include/tcpdf/fonts/helvetica.php',
      'to' => 'include/tcpdf/fonts/helvetica.php',
    ),
    array (
      'from' => '<basepath>/copy/include/tcpdf/fonts/verdanai.php',
      'to' => 'include/tcpdf/fonts/verdanai.php',
    ),
    array (
      'from' => '<basepath>/copy/include/tcpdf/fonts/verdanai.ctg.z',
      'to' => 'include/tcpdf/fonts/verdanai.ctg.z',
    ),
    array (
      'from' => '<basepath>/copy/include/tcpdf/fonts/verdanai.z',
      'to' => 'include/tcpdf/fonts/verdanai.z',
    ),
//    array (
//      'from' => '<basepath>/copy/include/tabConfig.php',
//      'to' => 'custom/include/tabConfig.php',
//    ),
    array (
      'from' => '<basepath>/copy/Extension/application/Ext/Language/en_us.lang.php',
      'to' => 'custom/Extension/application/Ext/Language/en_us.lang.php',
    ),
    array (
      'from' => '<basepath>/copy/Extension/application/Ext/Language/ru_ru.lang.php',
      'to' => 'custom/Extension/application/Ext/Language/ru_ru.lang.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/modules',
      'to' => 'modules',
    ),
    array (
      'from' => '<basepath>/copy/include/SugarCharts/SugarChart.php',
      'to' => 'include/SugarCharts/SugarChart.php',
    ),

    array (
      'from' => '<basepath>/copy/custom',
      'to' => 'custom',
    ),
  ),

  'language' =>
  array (
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    array (
      'from' => '<basepath>/SugarModules/language/application/ru_ru.lang.php',
      'to_module' => 'application',
      'language' => 'ru_ru',
    ),
    array (
      'from' => '<basepath>/copy/license_admin/language/en_us.rls_Reports.php',
      'to_module' => 'Administration',
      'language' => 'en_us',
    ),
    array (
      'from' => '<basepath>/copy/Extension/modules/Home/Ext/Language/en_us.lang.php',
      'to_module' => 'Home',
      'language' => 'en_us',
    ),

    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'en_us',
    ),
    array (
      'from' => '<basepath>/SugarModules/relationships/language/RLS_Scheduling_Reports.php',
      'to_module' => 'RLS_Scheduling_Reports',
      'language' => 'en_us',
    ),
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'en_us',
    ),
    array (
      'from' => '<basepath>/SugarModules/relationships/language/RLS_Scheduling_Reports.php',
      'to_module' => 'RLS_Scheduling_Reports',
      'language' => 'en_us',
    ),
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rls_Reports.php',
      'to_module' => 'rls_Reports',
      'language' => 'en_us',
    ),
    array (
      'from' => '<basepath>/SugarModules/relationships/language/RLS_Scheduling_Reports.php',
      'to_module' => 'RLS_Scheduling_Reports',
      'language' => 'en_us',
    ),
  ),

  'vardefs' =>
  array (
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/rls_scheduling_reports_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/rls_scheduling_reports_contacts_RLS_Scheduling_Reports.php',
      'to_module' => 'RLS_Scheduling_Reports',
    ),
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/rls_scheduling_reports_users_Users.php',
      'to_module' => 'Users',
    ),
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/rls_scheduling_reports_users_RLS_Scheduling_Reports.php',
      'to_module' => 'RLS_Scheduling_Reports',
    ),
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/rls_scheduling_reports_rls_reports_rls_Reports.php',
      'to_module' => 'rls_Reports',
    ),
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/rls_scheduling_reports_rls_reports_RLS_Scheduling_Reports.php',
      'to_module' => 'RLS_Scheduling_Reports',
    ),
  ),

  'administration' =>
  array (
    array (
      'from' => '<basepath>/copy/license_admin/menu/rls_Reports_admin.php',
      'to' => 'modules/Administration/rls_Reports_admin.php',
    ),
  ),

  'action_view_map' =>
  array (
    array (
      'from'=> '<basepath>/copy/license_admin/actionviewmap/rls_Reports_actionviewmap.php',
      'to_module'=> 'rls_Reports',
    ),
   ),

  'post_execute' => array (
     0 => '<basepath>/install/post_execute.php',
   ),
);
