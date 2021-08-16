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

//Index
define('AM_AJAXTEST_STATISTICS', 'Ajaxtest statistics');
define('AM_AJAXTEST_THEREARE_EMPLOYEE', "There are <span class='bold'>%s</span> Employee in the database");
//Buttons
define('AM_AJAXTEST_ADD_EMPLOYEE', 'Add new Employee');
define('AM_AJAXTEST_EMPLOYEE_LIST', 'List of Employee');
//General
define('AM_AJAXTEST_FORMOK', 'Registered successfull');
define('AM_AJAXTEST_FORMDELOK', 'Deleted successfull');
define('AM_AJAXTEST_FORMSUREDEL', "Are you sure to Delete: <span class='bold red'>%s</span></b>");
define('AM_AJAXTEST_FORMSURERENEW', "Are you sure to Renew: <span class='bold red'>%s</span></b>");
define('AM_AJAXTEST_FORMUPLOAD', 'Upload');
define('AM_AJAXTEST_FORMIMAGE_PATH', 'File presents in %s');
define('AM_AJAXTEST_FORM_ACTION', 'Action');
define('AM_AJAXTEST_SELECT', 'Select action for selected item(s)');
define('AM_AJAXTEST_SELECTED_DELETE', 'Delete selected item(s)');
define('AM_AJAXTEST_SELECTED_ACTIVATE', 'Activate selected item(s)');
define('AM_AJAXTEST_SELECTED_DEACTIVATE', 'De-activate selected item(s)');
define('AM_AJAXTEST_SELECTED_ERROR', 'You selected nothing to delete');
define('AM_AJAXTEST_CLONED_OK', 'Record cloned successfully');
define('AM_AJAXTEST_CLONED_FAILED', 'Cloning of the record has failed');

// Employee
define('AM_AJAXTEST_EMPLOYEE_ADD', 'Add a employee');
define('AM_AJAXTEST_EMPLOYEE_EDIT', 'Edit employee');
define('AM_AJAXTEST_EMPLOYEE_DELETE', 'Delete employee');
define('AM_AJAXTEST_EMPLOYEE_ID', 'ID');
define('AM_AJAXTEST_EMPLOYEE_NAME', 'Name');
define('AM_AJAXTEST_EMPLOYEE_ADDRESS', 'Address');
define('AM_AJAXTEST_EMPLOYEE_GENDER', 'Gender');
define('AM_AJAXTEST_EMPLOYEE_DESIGNATION', 'Designation');
define('AM_AJAXTEST_EMPLOYEE_AGE', 'Age');
define('AM_AJAXTEST_EMPLOYEE_IMAGE', 'Image');
//Blocks.php
//Permissions
define('AM_AJAXTEST_PERMISSIONS_GLOBAL', 'Global permissions');
define('AM_AJAXTEST_PERMISSIONS_GLOBAL_DESC', 'Only users in the group that you select may global this');
define('AM_AJAXTEST_PERMISSIONS_GLOBAL_4', 'Rate from user');
define('AM_AJAXTEST_PERMISSIONS_GLOBAL_8', 'Submit from user side');
define('AM_AJAXTEST_PERMISSIONS_GLOBAL_16', 'Auto approve');
define('AM_AJAXTEST_PERMISSIONS_APPROVE', 'Permissions to approve');
define('AM_AJAXTEST_PERMISSIONS_APPROVE_DESC', 'Only users in the group that you select may approve this');
define('AM_AJAXTEST_PERMISSIONS_VIEW', 'Permissions to view');
define('AM_AJAXTEST_PERMISSIONS_VIEW_DESC', 'Only users in the group that you select may view this');
define('AM_AJAXTEST_PERMISSIONS_SUBMIT', 'Permissions to submit');
define('AM_AJAXTEST_PERMISSIONS_SUBMIT_DESC', 'Only users in the group that you select may submit this');
define('AM_AJAXTEST_PERMISSIONS_GPERMUPDATED', 'Permissions have been changed successfully');
define('AM_AJAXTEST_PERMISSIONS_NOPERMSSET', 'Permission cannot be set: No employee created yet! Please create a employee first.');

//Errors
define('AM_AJAXTEST_UPGRADEFAILED0', "Update failed - couldn't rename field '%s'");
define('AM_AJAXTEST_UPGRADEFAILED1', "Update failed - couldn't add new fields");
define('AM_AJAXTEST_UPGRADEFAILED2', "Update failed - couldn't rename table '%s'");
define('AM_AJAXTEST_ERROR_COLUMN', 'Could not create column in database : %s');
define('AM_AJAXTEST_ERROR_BAD_XOOPS', 'This module requires XOOPS %s+ (%s installed)');
define('AM_AJAXTEST_ERROR_BAD_PHP', 'This module requires PHP version %s+ (%s installed)');
define('AM_AJAXTEST_ERROR_TAG_REMOVAL', 'Could not remove tags from Tag Module');
//directories
define('AM_AJAXTEST_AVAILABLE', "<span style='color : #008000;'>Available. </span>");
define('AM_AJAXTEST_NOTAVAILABLE', "<span style='color : #ff0000;'>is not available. </span>");
define('AM_AJAXTEST_NOTWRITABLE', "<span style='color : #ff0000;'>" . ' should have permission ( %1$d ), but it has ( %2$d )' . '</span>');
define('AM_AJAXTEST_CREATETHEDIR', 'Create it');
define('AM_AJAXTEST_SETMPERM', 'Set the permission');
define('AM_AJAXTEST_DIRCREATED', 'The directory has been created');
define('AM_AJAXTEST_DIRNOTCREATED', 'The directory can not be created');
define('AM_AJAXTEST_PERMSET', 'The permission has been set');
define('AM_AJAXTEST_PERMNOTSET', 'The permission can not be set');
define('AM_AJAXTEST_VIDEO_EXPIREWARNING', 'The publishing date is after expiration date!!!');
//Sample Data
define('AM_AJAXTEST_ADD_SAMPLEDATA', 'Import Sample Data (will delete ALL current data)');
define('AM_AJAXTEST_SAMPLEDATA_SUCCESS', 'Sample Date uploaded successfully');

define('AM_AJAXTEST_MAINTAINEDBY', 'is maintained by the');
