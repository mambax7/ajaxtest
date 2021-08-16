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
// Admin
define('MI_AJAXTEST_NAME', 'Ajaxtest');
define('MI_AJAXTEST_DESC', 'This module is for testing AJAX in XOOPS environment ');
//Menu
define('MI_AJAXTEST_ADMENU1', 'Home');
define('MI_AJAXTEST_ADMENU2', 'Employee');
define('MI_AJAXTEST_ADMENU3', 'Feedback');
define('MI_AJAXTEST_ADMENU4', 'Migrate');
define('MI_AJAXTEST_ADMENU5', 'About');
//Blocks
define('MI_AJAXTEST_EMPLOYEE_BLOCK', 'Employee block');
//Config
define('MI_AJAXTEST_EDITOR_ADMIN', 'Editor: Admin');
define('MI_AJAXTEST_EDITOR_ADMIN_DESC', 'Select the Editor to use by the Admin');
define('MI_AJAXTEST_EDITOR_USER', 'Editor: User');
define('MI_AJAXTEST_EDITOR_USER_DESC', 'Select the Editor to use by the User');
define('MI_AJAXTEST_KEYWORDS', 'Keywords');
define('MI_AJAXTEST_KEYWORDS_DESC', 'Insert here the keywords (separate by comma)');
define('MI_AJAXTEST_ADMINPAGER', 'Admin: records / page');
define('MI_AJAXTEST_ADMINPAGER_DESC', 'Admin: # of records shown per page');
define('MI_AJAXTEST_USERPAGER', 'User: records / page');
define('MI_AJAXTEST_USERPAGER_DESC', 'User: # of records shown per page');
define('MI_AJAXTEST_MAXSIZE', 'Max size');
define('MI_AJAXTEST_MAXSIZE_DESC', 'Set a number of max size uploads file in byte');
define('MI_AJAXTEST_MIMETYPES', 'Mime Types');
define('MI_AJAXTEST_MIMETYPES_DESC', 'Set the mime types selected');
define('MI_AJAXTEST_IDPAYPAL', 'Paypal ID');
define('MI_AJAXTEST_IDPAYPAL_DESC', 'Insert here your PayPal ID for donactions.');
define('MI_AJAXTEST_ADVERTISE', 'Advertisement Code');
define('MI_AJAXTEST_ADVERTISE_DESC', 'Insert here the advertisement code');
define('MI_AJAXTEST_BOOKMARKS', 'Social Bookmarks');
define('MI_AJAXTEST_BOOKMARKS_DESC', 'Show Social Bookmarks in the form');
define('MI_AJAXTEST_FBCOMMENTS', 'Facebook comments');
define('MI_AJAXTEST_FBCOMMENTS_DESC', 'Allow Facebook comments in the form');
// Notifications
define('MI_AJAXTEST_GLOBAL_NOTIFY', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_GLOBAL_NOTIFY_DESC', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_CATEGORY_NOTIFY', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_CATEGORY_NOTIFY_DESC', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_FILE_NOTIFY', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_FILE_NOTIFY_DESC', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_GLOBAL_NEWCATEGORY_NOTIFY', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_GLOBAL_NEWCATEGORY_NOTIFY_CAPTION', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_GLOBAL_NEWCATEGORY_NOTIFY_DESC', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_GLOBAL_NEWCATEGORY_NOTIFY_SUBJECT', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_GLOBAL_FILEMODIFY_NOTIFY', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_GLOBAL_FILEMODIFY_NOTIFY_CAPTION', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_GLOBAL_FILEMODIFY_NOTIFY_DESC', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_GLOBAL_FILEMODIFY_NOTIFY_SUBJECT', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_GLOBAL_FILEBROKEN_NOTIFY', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_GLOBAL_FILEBROKEN_NOTIFY_CAPTION', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_GLOBAL_FILEBROKEN_NOTIFY_DESC', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_GLOBAL_FILEBROKEN_NOTIFY_SUBJECT', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_GLOBAL_FILESUBMIT_NOTIFY', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_GLOBAL_FILESUBMIT_NOTIFY_CAPTION', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_GLOBAL_FILESUBMIT_NOTIFY_DESC', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_GLOBAL_FILESUBMIT_NOTIFY_SUBJECT', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_GLOBAL_NEWFILE_NOTIFY', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_GLOBAL_NEWFILE_NOTIFY_CAPTION', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_GLOBAL_NEWFILE_NOTIFY_DESC', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_GLOBAL_NEWFILE_NOTIFY_SUBJECT', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_CATEGORY_FILESUBMIT_NOTIFY', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_CATEGORY_FILESUBMIT_NOTIFY_CAPTION', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_CATEGORY_FILESUBMIT_NOTIFY_DESC', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_CATEGORY_FILESUBMIT_NOTIFY_SUBJECT', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_CATEGORY_NEWFILE_NOTIFY', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_CATEGORY_NEWFILE_NOTIFY_CAPTION', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_CATEGORY_NEWFILE_NOTIFY_DESC', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_CATEGORY_NEWFILE_NOTIFY_SUBJECT', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_FILE_APPROVE_NOTIFY', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_FILE_APPROVE_NOTIFY_CAPTION', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_FILE_APPROVE_NOTIFY_DESC', 'Allow Facebook comments in the form');
define('MI_AJAXTEST_FILE_APPROVE_NOTIFY_SUBJECT', 'Allow Facebook comments in the form');

// Help
define('MI_AJAXTEST_DIRNAME', basename(dirname(__DIR__, 2)));
define('MI_AJAXTEST_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
define('MI_AJAXTEST_BACK_2_ADMIN', 'Back to Administration of ');
define('MI_AJAXTEST_OVERVIEW', 'Overview');
// The name of this module
//define('MI_AJAXTEST_NAME', 'YYYYY Module Name');

//define('MI_AJAXTEST_HELP_DIR', __DIR__);

//help multi-page
define('MI_AJAXTEST_DISCLAIMER', 'Disclaimer');
define('MI_AJAXTEST_LICENSE', 'License');
define('MI_AJAXTEST_SUPPORT', 'Support');
//define('MI_AJAXTEST_REQUIREMENTS', 'Requirements');
//define('MI_AJAXTEST_CREDITS', 'Credits');
//define('MI_AJAXTEST_HOWTO', 'How To');
//define('MI_AJAXTEST_UPDATE', 'Update');
//define('MI_AJAXTEST_INSTALL', 'Install');
//define('MI_AJAXTEST_HISTORY', 'History');
//define('MI_AJAXTEST_HELP1', 'YYYYY');
//define('MI_AJAXTEST_HELP2', 'YYYYY');
//define('MI_AJAXTEST_HELP3', 'YYYYY');
//define('MI_AJAXTEST_HELP4', 'YYYYY');
//define('MI_AJAXTEST_HELP5', 'YYYYY');
//define('MI_AJAXTEST_HELP6', 'YYYYY');

// Permissions Groups
define('MI_AJAXTEST_GROUPS', 'Groups access');
define('MI_AJAXTEST_GROUPS_DESC', 'Select general access permission for groups.');
define('MI_AJAXTEST_ADMINGROUPS', 'Admin Group Permissions');
define('MI_AJAXTEST_ADMINGROUPS_DESC', 'Which groups have access to tools and permissions page');

//define('MI_AJAXTEST_SHOW_SAMPLE_BUTTON', 'Import Sample Button?');
//define('MI_AJAXTEST_SHOW_SAMPLE_BUTTON_DESC', 'If yes, the "Add Sample Data" button will be visible to the Admin. It is Yes as a default for first installation.');

