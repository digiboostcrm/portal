<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/


// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => 'Please make sure Ioncube Loader Installed on your system',
  'key' => 'qbs',
  'author' => 'Smackcoders',
  'description' => 'Suite QuickBooks Integration',
  'icon' => 'icons/default/images/logo.png',
  'is_uninstallable' => true,
  'name' => 'qbs_QBSugar',
  'published_date' => '2014-09-04 04:29:59',
  'type' => 'module',
  'version' => '1.0',
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'qbs_QBSugar',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'qbs_QBLog',
      'class' => 'qbs_QBLog',
      'path' => 'modules/qbs_QBLog/qbs_QBLog.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'qbs_QBQueue',
      'class' => 'qbs_QBQueue',
      'path' => 'modules/qbs_QBQueue/qbs_QBQueue.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'qbs_QBSugar',
      'class' => 'qbs_QBSugar',
      'path' => 'modules/qbs_QBSugar/qbs_QBSugar.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/qbs_QBLog',
      'to' => 'modules/qbs_QBLog',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/qbs_QBQueue',
      'to' => 'modules/qbs_QBQueue',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/qbs_QBSugar',
      'to' => 'modules/qbs_QBSugar',
    ),
    3 =>
    array (
      'from' => '<basepath>/vardefs/qbs_QBSugar_Contacts.php',
      'to'   => 'custom/Extension/modules/Contacts/Ext/Vardefs/qbs_QBSugar_Contacts.php',
    ),
    4 =>
    array (
      'from' => '<basepath>/vardefs/qbs_QBSugar_Products.php',
      'to'   => 'custom/Extension/modules/AOS_Products/Ext/Vardefs/qbs_QBSugar_Products.php',
    ),
    5 =>
    array (
      'from' => '<basepath>/vardefs/qbs_QBSugar_Invoices.php',
      'to'   => 'custom/Extension/modules/AOS_Invoices/Ext/Vardefs/qbs_QBSugar_Invoices.php',
    ),
    6 =>
    array (
      'from' => '<basepath>/vardefs/qbs_QBSugar_Quotes.php',
      'to'   => 'custom/Extension/modules/AOS_Quotes/Ext/Vardefs/qbs_QBSugar_Quotes.php',
    ),
    7 =>
    array (
      'from' => '<basepath>/Language/en_us.qbs_QBSugar_Contacts.php',
      'to'   => 'custom/Extension/modules/Contacts/Ext/Language/en_us.qbs_QBSugar_Contacts.php',
    ),
    8 =>
    array (
      'from' => '<basepath>/Language/en_us.qbs_QBSugar_Products.php',
      'to'   => 'custom/Extension/modules/AOS_Products/Ext/Language/en_us.qbs_QBSugar_Products.php',
    ),
    9 =>
    array (
      'from' => '<basepath>/Language/en_us.qbs_QBSugar_Invoices.php',
      'to'   => 'custom/Extension/modules/AOS_Invoices/Ext/Language/en_us.qbs_QBSugar_Invoices.php',
    ),
    10 =>
    array (
      'from' => '<basepath>/Language/en_us.qbs_QBSugar_Quotes.php',
      'to'   => 'custom/Extension/modules/AOS_Quotes/Ext/Language/en_us.qbs_QBSugar_Quotes.php',
    ),
    11 =>
    array(
       'from' => '<basepath>/scripts/getQBAccounts_qbs_QBSugar.php',
       'to' => 'custom/Extension/application/Ext/Utils/getQBAccounts_qbs_QBSugar.php',
    ),
    12 => 
    array(
        'from' => '<basepath>/license',
        'to' => 'modules/qbs_QBSugar', 
    ),
    13 => 
    array(
        'from' => '<basepath>/scripts/qbs_qbsugar.php',
        'to' => 'custom/Extension/modules/Schedulers/Ext/ScheduledTasks/qbs_qbsugar.php', 
    ),
    14 => 
    array(
        'from' => '<basepath>/scripts/en_us.qbs_qbsugar.php',
        'to' => 'custom/Extension/modules/Schedulers/Ext/Language/en_us.qbs_qbsugar.php',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    1 => 
    array(
        'from'=> '<basepath>/license_admin/language/en_us.qbs_QBSugar.php',
        'to_module'=> 'Administration',
        'language'=>'en_us'
    ),
    ),
  'administration' =>
    array(
          array(
              'from'=>'<basepath>/license_admin/menu/qbs_QBSugar_admin.php', 
              'to' => 'modules/Administration/qbs_QBSugar_admin.php', 
              ),
       ),
  'action_view_map' =>
    array (
          array(
              'from'=> '<basepath>/license_admin/actionviewmap/qbs_QBSugar_actionviewmap.php', 
              'to_module'=> 'qbs_QBSugar', 
              ),
        ),
  'pre_execute' => array(0 => '<basepath>/pre_execute.php',),
);