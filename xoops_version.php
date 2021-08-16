<?php

declare(strict_types=1);

/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 * Module: Ajaxtest
 *
 * @category        Module
 * @author          XOOPS Development Team <https://xoops.org>
 * @copyright       {@link https://xoops.org/ XOOPS Project}
 * @license         GNU GPL 2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 */
$moduleDirName      = basename(__DIR__);
$moduleDirNameUpper = mb_strtoupper($moduleDirName);

$modversion = [
    'version'             => 1.0,
    'module_status'       => 'Beta 1',
    'release_date'        => '2021/08/15',
    'name'                => MI_AJAXTEST_NAME,
    'description'         => MI_AJAXTEST_DESC,
    'release'             => '2017/12/13',
    'author'              => 'XOOPS Development Team',
    'author_mail'         => 'mamba@xoops.org',
    'author_website_url'  => 'https://xoops.org',
    'author_website_name' => 'XOOPS Project',
    'credits'             => 'XOOPS Development Team',
    //    'license' => 'GNU GPL 2 or later (https://www.gnu.org/licenses/gpl-2.0.html)',
    'license'             => 'GPL 2.0 or later',
    'license_url'         => 'www.gnu.org/licenses/gpl-2.0.html',

    'release_info' => 'release_info',
    'release_file' => XOOPS_URL . "/modules/{$moduleDirName}/docs/release_info file",

    'manual'              => 'Installation.txt',
    'manual_file'         => XOOPS_URL . "/modules/{$moduleDirName}/docs/link to manual file",
    'min_php'             => '7.2',
    'min_xoops'           => '2.5.10',
    'min_admin'           => '1.2',
    'min_db'              => ['mysql' => '5.5'],
    'image'               => 'assets/images/logoModule.png',
    'dirname'             => $moduleDirName,
    'modicons16'          => 'assets/images/icons/16',
    'modicons32'          => 'assets/images/icons/32',
    //About
    'demo_site_url'       => 'https://xoops.org',
    'demo_site_name'      => 'XOOPS Demo Site',
    'support_url'         => 'https://xoops.org/modules/newbb',
    'support_name'        => 'Support Forum',
    'module_website_url'  => 'www.xoops.org',
    'module_website_name' => 'XOOPS Project',
    // Admin system menu
    'system_menu'         => 1,
    // Admin things
    'hasAdmin'            => 1,
    'adminindex'          => 'admin/index.php',
    'adminmenu'           => 'admin/menu.php',
    // Menu
    'hasMain'             => 1,
    // Scripts to run upon installation or update
    'onInstall'           => 'include/oninstall.php',
    'onUpdate'            => 'include/onupdate.php',
    'onUninstall'         => 'include/onuninstall.php',
    // ------------------- Mysql -----------------------------
    'sqlfile'             => ['mysql' => 'sql/mysql.sql'],
    // ------------------- Tables ----------------------------
    'tables'              => [
        $moduleDirName . '_' . 'employee',
    ],
];
// ------------------- Search -----------------------------//
$modversion['hasSearch']      = 1;
$modversion['search']['file'] = 'include/search.inc.php';
$modversion['search']['func'] = 'ajaxtest_search';
//  ------------------- Comments -----------------------------//
$modversion['hasComments']          = 1;
$modversion['comments']['itemName'] = 'com_id';
$modversion['comments']['pageName'] = 'comments.php';
// Comment callback functions
$modversion['comments']['callbackFile']        = 'include/comment_functions.php';
$modversion['comments']['callback']['approve'] = 'ajaxtestCommentsApprove';
$modversion['comments']['callback']['update']  = 'ajaxtestCommentsUpdate';
//  ------------------- Templates -----------------------------//
$modversion['templates'][] = ['file' => 'ajaxtest_header.tpl', 'description' => ''];
$modversion['templates'][] = ['file' => 'ajaxtest_index.tpl', 'description' => ''];
$modversion['templates'][] = ['file' => 'ajaxtest_employee.tpl', 'description' => ''];

$modversion['templates'][] = ['file' => 'ajaxtest_employee_list0.tpl', 'description' => ''];
$modversion['templates'][] = ['file' => 'ajaxtest_footer.tpl', 'description' => ''];

$modversion['templates'][] = ['file' => 'admin/ajaxtest_admin_about.tpl', 'description' => ''];
$modversion['templates'][] = ['file' => 'admin/ajaxtest_admin_help.tpl', 'description' => ''];
$modversion['templates'][] = ['file' => 'admin/ajaxtest_admin_employee.tpl', 'description' => ''];
// ----------------- AJAX ---------------------------
$modversion['templates'][] = ['file' => 'ajaxtest_ajax_fetch.tpl', 'description' => ''];
$modversion['templates'][] = ['file' => 'ajaxtest_ajax_insert.tpl', 'description' => ''];
$modversion['templates'][] = ['file' => 'ajaxtest_ajax_select.tpl', 'description' => ''];
$modversion['templates'][] = ['file' => 'ajaxtest_ajax_modal.tpl', 'description' => ''];

// ------------------- Help files ------------------- //
$modversion['help']        = 'page=help';
$modversion['helpsection'] = [
    ['name' => MI_AJAXTEST_OVERVIEW, 'link' => 'page=help'],
    ['name' => MI_AJAXTEST_DISCLAIMER, 'link' => 'page=disclaimer'],
    ['name' => MI_AJAXTEST_LICENSE, 'link' => 'page=license'],
    ['name' => MI_AJAXTEST_SUPPORT, 'link' => 'page=support'],

    //    ['name' => MI_AJAXTEST_HELP1, 'link' => 'page=help1'],
    //    ['name' => MI_AJAXTEST_HELP2, 'link' => 'page=help2']
    //    ['name' => MI_AJAXTEST_HELP3, 'link' => 'page=help3'],
    //    ['name' => MI_AJAXTEST_HELP4, 'link' => 'page=help4'],
    //    ['name' => MI_AJAXTEST_HOWTO, 'link' => 'page=__howto'],
    //    ['name' => MI_AJAXTEST_REQUIREMENTS, 'link' => 'page=__requirements'],
    //    ['name' => MI_AJAXTEST_CREDITS, 'link' => 'page=__credits'],

];

// ------------------- Blocks -----------------------------//
$modversion['blocks'][] = [
    'file'        => 'employee.php',
    'name'        => MI_AJAXTEST_EMPLOYEE_BLOCK,
    'description' => '',
    'show_func'   => 'showAjaxtestEmployee',
    'edit_func'   => 'editAjaxtestEmployee',
    'options'     => '|5|25|0',
    'template'    => 'ajaxtest_employee_block.tpl',
];

// ------------------- Config Options -----------------------------//
xoops_load('xoopseditorhandler');
$editorHandler          = \XoopsEditorHandler::getInstance();
$modversion['config'][] = [
    'name'        => 'ajaxtestEditorAdmin',
    'title'       => 'MI_AJAXTEST_EDITOR_ADMIN',
    'description' => 'MI_AJAXTEST_EDITOR_DESC_ADMIN',
    'formtype'    => 'select',
    'valuetype'   => 'text',
    'options'     => array_flip($editorHandler->getList()),
    'default'     => 'tinymce',
];

$modversion['config'][] = [
    'name'        => 'ajaxtestEditorUser',
    'title'       => 'MI_AJAXTEST_EDITOR_USER',
    'description' => 'MI_AJAXTEST_EDITOR_DESC_USER',
    'formtype'    => 'select',
    'valuetype'   => 'text',
    'options'     => array_flip($editorHandler->getList()),
    'default'     => 'dhtmltextarea',
];

// -------------- Get groups --------------
/** @var \XoopsMemberHandler $memberHandler */
$memberHandler = xoops_getHandler('member');
$xoopsGroups   = $memberHandler->getGroupList();
foreach ($xoopsGroups as $key => $group) {
    $groups[$group] = $key;
}
$modversion['config'][] = [
    'name'        => 'groups',
    'title'       => 'MI_AJAXTEST_GROUPS',
    'description' => 'MI_AJAXTEST_GROUPS_DESC',
    'formtype'    => 'select_multi',
    'valuetype'   => 'array',
    'options'     => $groups,
    'default'     => $groups,
];

// -------------- Get Admin groups --------------
$criteria = new \CriteriaCompo ();
$criteria->add(new \Criteria ('group_type', 'Admin'));
/** @var \XoopsMemberHandler $memberHandler */
$memberHandler    = xoops_getHandler('member');
$adminXoopsGroups = $memberHandler->getGroupList($criteria);
foreach ($adminXoopsGroups as $key => $adminGroup) {
    $admin_groups[$adminGroup] = $key;
}
$modversion['config'][] = [
    'name'        => 'admin_groups',
    'title'       => 'MI_AJAXTEST_ADMINGROUPS',
    'description' => 'MI_AJAXTEST_ADMINGROUPS_DESC',
    'formtype'    => 'select_multi',
    'valuetype'   => 'array',
    'options'     => $admin_groups,
    'default'     => $admin_groups,
];

$modversion['config'][] = [
    'name'        => 'keywords',
    'title'       => 'MI_AJAXTEST_KEYWORDS',
    'description' => 'MI_AJAXTEST_KEYWORDS_DESC',
    'formtype'    => 'textbox',
    'valuetype'   => 'text',
    'default'     => 'ajaxtest,employee',
];

// --------------Uploads : maxsize of image --------------
$modversion['config'][] = [
    'name'        => 'maxsize',
    'title'       => 'MI_AJAXTEST_MAXSIZE',
    'description' => 'MI_AJAXTEST_MAXSIZE_DESC',
    'formtype'    => 'textbox',
    'valuetype'   => 'int',
    'default'     => 5000000,
];

// --------------Uploads : mimetypes of image --------------
$modversion['config'][] = [
    'name'        => 'mimetypes',
    'title'       => 'MI_AJAXTEST_MIMETYPES',
    'description' => 'MI_AJAXTEST_MIMETYPES_DESC',
    'formtype'    => 'select_multi',
    'valuetype'   => 'array',
    'default'     => ['image/gif', 'image/jpeg', 'image/jpg', 'image/png'],
    'options'     => [
        'bmp'   => 'image/bmp',
        'gif'   => 'image/gif',
        'pjpeg' => 'image/pjpeg',
        'jpeg'  => 'image/jpeg',
        'jpg'   => 'image/jpg',
        'jpe'   => 'image/jpe',
        'png'   => 'image/png',
    ],
];

$modversion['config'][] = [
    'name'        => 'adminpager',
    'title'       => 'MI_AJAXTEST_ADMINPAGER',
    'description' => 'MI_AJAXTEST_ADMINPAGER_DESC',
    'formtype'    => 'textbox',
    'valuetype'   => 'int',
    'default'     => 10,
];

$modversion['config'][] = [
    'name'        => 'userpager',
    'title'       => 'MI_AJAXTEST_USERPAGER',
    'description' => 'MI_AJAXTEST_USERPAGER_DESC',
    'formtype'    => 'textbox',
    'valuetype'   => 'int',
    'default'     => 10,
];

$modversion['config'][] = [
    'name'        => 'advertise',
    'title'       => 'MI_AJAXTEST_ADVERTISE',
    'description' => 'MI_AJAXTEST_ADVERTISE_DESC',
    'formtype'    => 'textarea',
    'valuetype'   => 'text',
    'default'     => '',
];

$modversion['config'][] = [
    'name'        => 'bookmarks',
    'title'       => 'MI_AJAXTEST_BOOKMARKS',
    'description' => 'MI_AJAXTEST_BOOKMARKS_DESC',
    'formtype'    => 'yesno',
    'valuetype'   => 'int',
    'default'     => 0,
];

$modversion['config'][] = [
    'name'        => 'fbcomments',
    'title'       => 'MI_AJAXTEST_FBCOMMENTS',
    'description' => 'MI_AJAXTEST_FBCOMMENTS_DESC',
    'formtype'    => 'yesno',
    'valuetype'   => 'int',
    'default'     => 0,
];

// Truncate Max. length 
$modversion['config'][] = [
    'name'        => 'truncatelength',
    'title'       => 'CO_' . $moduleDirNameUpper . '_' . 'TRUNCATE_LENGTH',
    'description' => 'CO_' . $moduleDirNameUpper . '_' . 'TRUNCATE_LENGTH_DESC',
    'formtype'    => 'textbox',
    'valuetype'   => 'int',
    'default'     => 100,
];

/**
 * Make Sample button visible?
 */
$modversion['config'][] = [
    'name'        => 'displaySampleButton',
    'title'       => 'CO_' . $moduleDirNameUpper . '_' . 'SHOW_SAMPLE_BUTTON',
    'description' => 'CO_' . $moduleDirNameUpper . '_' . 'SHOW_SAMPLE_BUTTON_DESC',
    'formtype'    => 'yesno',
    'valuetype'   => 'int',
    'default'     => 1,
];

/**
 * Show Developer Tools?
 */
$modversion['config'][] = [
    'name'        => 'displayDeveloperTools',
    'title'       => 'CO_' . $moduleDirNameUpper . '_' . 'SHOW_DEV_TOOLS',
    'description' => 'CO_' . $moduleDirNameUpper . '_' . 'SHOW_DEV_TOOLS_DESC',
    'formtype'    => 'yesno',
    'valuetype'   => 'int',
    'default'     => 0,
];

// -------------- Notifications ajaxtest --------------
$modversion['hasNotification']             = 1;
$modversion['notification']['lookup_file'] = 'include/notification.inc.php';
$modversion['notification']['lookup_func'] = 'ajaxtest_notify_iteminfo';

$modversion['notification']['category'][] = [
    'name'           => 'global',
    'title'          => MI_AJAXTEST_GLOBAL_NOTIFY,
    'description'    => MI_AJAXTEST_GLOBAL_NOTIFY_DESC,
    'subscribe_from' => ['index.php', 'viewcat.php', 'singlefile.php'],
];

$modversion['notification']['category'][] = [
    'name'           => 'category',
    'title'          => MI_AJAXTEST_CATEGORY_NOTIFY,
    'description'    => MI_AJAXTEST_CATEGORY_NOTIFY_DESC,
    'subscribe_from' => ['viewcat.php', 'singlefile.php'],
    'item_name'      => 'cid',
    'allow_bookmark' => 1,
];

$modversion['notification']['category'][] = [
    'name'           => 'file',
    'title'          => MI_AJAXTEST_FILE_NOTIFY,
    'description'    => MI_AJAXTEST_FILE_NOTIFY_DESC,
    'subscribe_from' => 'singlefile.php',
    'item_name'      => 'lid',
    'allow_bookmark' => 1,
];

$modversion['notification']['event'][] = [
    'name'          => 'new_category',
    'category'      => 'global',
    'title'         => MI_AJAXTEST_GLOBAL_NEWCATEGORY_NOTIFY,
    'caption'       => MI_AJAXTEST_GLOBAL_NEWCATEGORY_NOTIFY_CAPTION,
    'description'   => MI_AJAXTEST_GLOBAL_NEWCATEGORY_NOTIFY_DESC,
    'mail_template' => 'global_newcategory_notify',
    'mail_subject'  => MI_AJAXTEST_GLOBAL_NEWCATEGORY_NOTIFY_SUBJECT,
];

$modversion['notification']['event'][] = [
    'name'          => 'file_modify',
    'category'      => 'global',
    'admin_only'    => 1,
    'title'         => MI_AJAXTEST_GLOBAL_FILEMODIFY_NOTIFY,
    'caption'       => MI_AJAXTEST_GLOBAL_FILEMODIFY_NOTIFY_CAPTION,
    'description'   => MI_AJAXTEST_GLOBAL_FILEMODIFY_NOTIFY_DESC,
    'mail_template' => 'global_filemodify_notify',
    'mail_subject'  => MI_AJAXTEST_GLOBAL_FILEMODIFY_NOTIFY_SUBJECT,
];

$modversion['notification']['event'][] = [
    'name'          => 'file_broken',
    'category'      => 'global',
    'admin_only'    => 1,
    'title'         => MI_AJAXTEST_GLOBAL_FILEBROKEN_NOTIFY,
    'caption'       => MI_AJAXTEST_GLOBAL_FILEBROKEN_NOTIFY_CAPTION,
    'description'   => MI_AJAXTEST_GLOBAL_FILEBROKEN_NOTIFY_DESC,
    'mail_template' => 'global_filebroken_notify',
    'mail_subject'  => MI_AJAXTEST_GLOBAL_FILEBROKEN_NOTIFY_SUBJECT,
];

$modversion['notification']['event'][] = [
    'name'          => 'file_submit',
    'category'      => 'global',
    'admin_only'    => 1,
    'title'         => MI_AJAXTEST_GLOBAL_FILESUBMIT_NOTIFY,
    'caption'       => MI_AJAXTEST_GLOBAL_FILESUBMIT_NOTIFY_CAPTION,
    'description'   => MI_AJAXTEST_GLOBAL_FILESUBMIT_NOTIFY_DESC,
    'mail_template' => 'global_filesubmit_notify',
    'mail_subject'  => MI_AJAXTEST_GLOBAL_FILESUBMIT_NOTIFY_SUBJECT,
];

$modversion['notification']['event'][] = [
    'name'          => 'new_file',
    'category'      => 'global',
    'title'         => MI_AJAXTEST_GLOBAL_NEWFILE_NOTIFY,
    'caption'       => MI_AJAXTEST_GLOBAL_NEWFILE_NOTIFY_CAPTION,
    'description'   => MI_AJAXTEST_GLOBAL_NEWFILE_NOTIFY_DESC,
    'mail_template' => 'global_newfile_notify',
    'mail_subject'  => MI_AJAXTEST_GLOBAL_NEWFILE_NOTIFY_SUBJECT,
];

$modversion['notification']['event'][] = [
    'name'          => 'file_submit',
    'category'      => 'category',
    'admin_only'    => 1,
    'title'         => MI_AJAXTEST_CATEGORY_FILESUBMIT_NOTIFY,
    'caption'       => MI_AJAXTEST_CATEGORY_FILESUBMIT_NOTIFY_CAPTION,
    'description'   => MI_AJAXTEST_CATEGORY_FILESUBMIT_NOTIFY_DESC,
    'mail_template' => 'category_filesubmit_notify',
    'mail_subject'  => MI_AJAXTEST_CATEGORY_FILESUBMIT_NOTIFY_SUBJECT,
];

$modversion['notification']['event'][] = [
    'name'          => 'new_file',
    'category'      => 'category',
    'title'         => MI_AJAXTEST_CATEGORY_NEWFILE_NOTIFY,
    'caption'       => MI_AJAXTEST_CATEGORY_NEWFILE_NOTIFY_CAPTION,
    'description'   => MI_AJAXTEST_CATEGORY_NEWFILE_NOTIFY_DESC,
    'mail_template' => 'category_newfile_notify',
    'mail_subject'  => MI_AJAXTEST_CATEGORY_NEWFILE_NOTIFY_SUBJECT,
];

$modversion['notification']['event'][] = [
    'name'          => 'approve',
    'category'      => 'file',
    'admin_only'    => 1,
    'title'         => MI_AJAXTEST_FILE_APPROVE_NOTIFY,
    'caption'       => MI_AJAXTEST_FILE_APPROVE_NOTIFY_CAPTION,
    'description'   => MI_AJAXTEST_FILE_APPROVE_NOTIFY_DESC,
    'mail_template' => 'file_approve_notify',
    'mail_subject'  => MI_AJAXTEST_FILE_APPROVE_NOTIFY_SUBJECT,
];
