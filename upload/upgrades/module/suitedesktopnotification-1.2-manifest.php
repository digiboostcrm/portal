<?php

global $sugar_version, $sugar_flavor;

$manifest = array(
    'acceptable_sugar_flavors' => array('CE', 'PRO'),
    'acceptable_sugar_versions' => array(
        'regex_matches' => array(
            0 => "6.2.*",
            1 => "6.3.*",
            2 => "6.4.*",
            3 => "6.5.*",
        ),
    ),
    'author' => 'Biztech Consultancy',
    'description' => 'Enables Desktop notification for record assignment on selected modules',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'SugarCRM Desktop Notification',
    'published_date' => '2015-04-05 00:00:00',
    'type' => 'module',
    'version' => '1.1.1',
    'remove_tables' => 'prompt',
);
$installdefs = array(
    'id' => 'bc_DesktopNotification',
    'pre_execute' => array(
        0 => '<basepath>/scripts/pre_execute.php',
    ),
    'post_install' => array(
        0 => '<basepath>/scripts/post_install.php',
    ),
    'post_uninstall' => array(
        0 => '<basepath>/scripts/post_uninstall.php',
    ),
    'beans' =>
        array (
            0 =>
                array (
                    'module' => 'bc_Notification',
                    'class' => 'bc_Notification',
                    'path' => 'modules/bc_Notification/bc_Notification.php',
                    'tab' => true,
                ),
        ),
    'image_dir' => '<basepath>/icons',
    'copy' => array(
        0 => array(
            'from' => '<basepath>/Files/custom/modules/setupCNLogic.php',
            'to' => 'custom/modules/setupCNLogic.php',
        ),
        1 => array(
            'from' => '<basepath>/Files/custom/modules/logic_hooks.php',
            'to' => 'custom/modules/logic_hooks.php',
        ),
        5 => array(
            'from' => '<basepath>/Files/custom/Extension/modules/Users/Ext/Language/',
            'to' => 'custom/Extension/modules/Users/Ext/Language/',
        ),
        6 => array(
            'from' => '<basepath>/Files/custom/include/modules/bc_notification/js/notification.js',
            'to' => 'custom/include/modules/bc_notification/js/notification.js',
        ),
        7 => array(
            'from' => '<basepath>/Files/custom/include/modules/bc_notification/js/unserialize.js',
            'to' => 'custom/include/modules/bc_notification/js/unserialize.js',
        ),
        8 => array(
            'from' => '<basepath>/Files/custom/modules/Users/customUserlogic.php',
            'to' => 'custom/modules/Users/customUserlogic.php',
        ),
        9 => array(
            'from' => '<basepath>/Files/custom/Extension/modules/Administration/Ext/Administration/notification_setting.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Administration/notification_setting.php',
        ),
        10 => array(
            'from' => '<basepath>/Files/custom/Extension/modules/Administration/Ext/Language/en_us.notification.lang.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.notification.lang.php',
        ),
        11 => array(
            'from' => '<basepath>/Files/custom/include/modules/bc_notification/js/jquery-1.11.0.min.js',
            'to' => 'custom/include/modules/bc_notification/js/jquery-1.11.0.min.js',
        ),
        12 => array(
            'from' => '<basepath>/Files/custom/include/custom_notification_functions.php',
            'to' => 'custom/include/custom_notification_functions.php',
        ),
        13 =>
            array (
                'from' => '<basepath>/SugarModules/modules/bc_Notification',
                'to' => 'modules/bc_Notification',
            ),
        14 => array(
          'from' => '<basepath>/Files/custom/modules/bc_Notification/',
          'to' => 'custom/modules/bc_Notification/',
        ),
        15 => array(
          'from' => '<basepath>/Files/custom/Extension/application/Ext/JSGroupings/includeDesktopJS.php',
            'to' => 'custom/Extension/application/Ext/JSGroupings/includeDesktopJS.php'
        ),
        16 => array(
            'from' => '<basepath>/Files/custom/include/modules/bc_notification/js/includejs.js',
            'to' => 'custom/include/modules/bc_notification/js/includejs.js'
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
        ),
    'logic_hooks' => array(
        array(
            'module' => 'Users',
            'hook' => 'after_save',
            'order' => 10,
            'description' => 'Set Notification Module Setting',
            'file' => 'custom/modules/Users/customUserlogic.php',
            'class' => 'customUserlogic',
            'function' => 'setNotificationModules',
        ),
        array(
            'module' => 'bc_Notification',
            'hook' => 'process_record',
            'order' => 10,
            'description' => 'Make name link that redirect to Account',
            'file' => 'custom/modules/bc_Notification/custom_notification.php',
            'class' => 'custom_notification',
            'function' => 'makeAccountNamelink',
        ),
    ),
);

$re_sugar62 = '/(6\.2\.[0-9])/';
$re_sugar63 = '/(6\.3\.[0-9])/';
$re_sugarpro = '/(6\.5\.[0-9])/';

if (preg_match($re_sugar62, $sugar_version) || preg_match($re_sugar63, $sugar_version)) {
    if (preg_match($re_sugar62, $sugar_version)) {
        array_push($installdefs['copy'], array(
            'from' => '<basepath>/SugarVersion_6.2/Files/modules/Users/DetailView.php',
            'to' => 'modules/Users/DetailView.php',
        ));
    } else {
        array_push($installdefs['copy'], array(
            'from' => '<basepath>/SugarVersion_6.3/Files/modules/Users/DetailView.php',
            'to' => 'modules/Users/DetailView.php',
        ));
    }
    array_push($installdefs['copy'], array(
        'from' => '<basepath>/SugarVersion_6.3/Files/modules/Users/DetailView.tpl',
        'to' => 'modules/Users/DetailView.tpl',
    ));
    array_push($installdefs['copy'], array(
        'from' => '<basepath>/SugarVersion_6.3/Files/modules/Users/EditView.php',
        'to' => 'modules/Users/EditView.php',
    ));
    array_push($installdefs['copy'], array(
        'from' => '<basepath>/SugarVersion_6.3/Files/modules/Users/EditView.tpl',
        'to' => 'modules/Users/EditView.tpl',
    ));
} else if ($sugar_flavor == 'PRO' && preg_match($re_sugarpro, $sugar_version)) {
    array_push($installdefs['copy'], array(
        'from' => '<basepath>/SugarProfessional/Files/custom/modules/Users/views/view.detail.php',
        'to' => 'custom/modules/Users/views/view.detail.php',
    ));
    array_push($installdefs['copy'], array(
        'from' => '<basepath>/SugarProfessional/Files/custom/modules/Users/views/view.edit.php',
        'to' => 'custom/modules/Users/views/view.edit.php',
    ));
    array_push($installdefs['copy'], array(
        'from' => '<basepath>/SugarProfessional/Files/custom/modules/Users/metadata/editviewdefs.php',
        'to' => 'custom/modules/Users/metadata/editviewdefs.php',
    ));
    array_push($installdefs['copy'], array(
        'from' => '<basepath>/SugarProfessional/Files/custom/modules/Users/metadata/detailviewdefs.php',
        'to' => 'custom/modules/Users/metadata/detailviewdefs.php',
    ));
} else {
    array_push($installdefs['copy'], array(
        'from' => '<basepath>/SugarVersion_6.4_6.5/Files/custom/modules/Users/views/view.detail.php',
        'to' => 'custom/modules/Users/views/view.detail.php',
    ));
    array_push($installdefs['copy'], array(
        'from' => '<basepath>/SugarVersion_6.4_6.5/Files/custom/modules/Users/views/view.edit.php',
        'to' => 'custom/modules/Users/views/view.edit.php',
    ));
    array_push($installdefs['copy'], array(
        'from' => '<basepath>/SugarVersion_6.4_6.5/Files/custom/modules/Users/metadata/editviewdefs.php',
        'to' => 'custom/modules/Users/metadata/editviewdefs.php',
    ));
    array_push($installdefs['copy'], array(
        'from' => '<basepath>/SugarVersion_6.4_6.5/Files/custom/modules/Users/metadata/detailviewdefs.php',
        'to' => 'custom/modules/Users/metadata/detailviewdefs.php',
    ));
}

?>
