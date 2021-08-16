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

use XoopsModules\Ajaxtest;
use Xmf\Request;

require __DIR__ . '/header.php';

$op = \Xmf\Request::getCmd('op', 'list');

$GLOBALS['xoopsOption']['template_main'] = 'ajaxtest_ajax_modal.tpl';

require_once XOOPS_ROOT_PATH . '/header.php';

global $xoTheme, $xoopsDB;

$moduleDirName = basename(__DIR__);

//$connect = mysqli_connect("localhost", "root", "", "testing");
$sql = 'SELECT * FROM ' . $xoopsDB->prefix('ajaxtest_employee') . ' ORDER BY id DESC';
//$result = mysqli_query($connect, $query);
if (!$result = $xoopsDB->queryF($sql)) {
    return false;
}

while (false !== ($row = $xoopsDB->fetchBoth($result))) {
    $employees[] = $row;
}

$GLOBALS['xoopsTpl']->assign('employees', $employees);
$GLOBALS['xoopsTpl']->assign('mod_url', XOOPS_URL . '/modules/' . $moduleDirName);
$GLOBALS['xoopsTpl']->assign('ajaxtest_url', AJAXTEST_URL);



require XOOPS_ROOT_PATH . '/footer.php';
