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

if ('edit' !== $op) {
    if ('view' === $op) {
        $GLOBALS['xoopsOption']['template_main'] = 'ajaxtest_employee.tpl';
    } else {
        $GLOBALS['xoopsOption']['template_main'] = 'ajaxtest_employee_list0.tpl';
    }
}
require_once XOOPS_ROOT_PATH . '/header.php';

global $xoTheme;

$start = \Xmf\Request::getInt('start', 0);
// Define Stylesheet
/** @var xos_opal_Theme $xoTheme */
$xoTheme->addStylesheet($stylesheet);

$db = \XoopsDatabaseFactory::getDatabaseConnection();

// Get Handler
/** @var \XoopsPersistableObjectHandler $employeeHandler */
$employeeHandler = $helper->getHandler('Employee');

$employeePaginationLimit = $helper->getConfig('userpager');

$criteria = new \CriteriaCompo();

$criteria->setOrder('DESC');
$criteria->setLimit($employeePaginationLimit);
$criteria->setStart($start);

$employeeCount = $employeeHandler->getCount($criteria);
$employeeArray = $employeeHandler->getAll($criteria);

$id = \Xmf\Request::getInt('id', 0, 'GET');

switch ($op) {
    case 'edit':
        $employeeObject = $employeeHandler->get(Request::getString('id', ''));
        $form           = $employeeObject->getForm();
        $form->display();
        break;

    case 'view':
        //        viewItem();
        $employeePaginationLimit = 1;
        $myid                    = $id;
        //id
        $employeeObject = $employeeHandler->get($myid);

        $criteria = new \CriteriaCompo();
        $criteria->setSort('id');
        $criteria->setOrder('DESC');
        $criteria->setLimit($employeePaginationLimit);
        $criteria->setStart($start);
        $employee['id']          = $employeeObject->getVar('id');
        $employee['name']        = $employeeObject->getVar('name');
        $employee['address']     = $employeeObject->getVar('address');
        $employee['gender']      = $employeeObject->getVar('gender');
        $employee['designation'] = $employeeObject->getVar('designation');
        $employee['age']         = $employeeObject->getVar('age');
        $employee['image']       = $employeeObject->getVar('image');

        //       $GLOBALS['xoopsTpl']->append('employee', $employee);
        $keywords[] = $employeeObject->getVar('name');

        $GLOBALS['xoopsTpl']->assign('employee', $employee);
        $start = $id;

        // Display Navigation
        if ($employeeCount > $employeePaginationLimit) {
            $GLOBALS['xoopsTpl']->assign('xoops_mpageurl', AJAXTEST_URL . '/employee.php');
            xoops_load('XoopsPageNav');
            $pagenav = new \XoopsPageNav($employeeCount, $employeePaginationLimit, $start, 'op=view&id');
            $GLOBALS['xoopsTpl']->assign('pagenav', $pagenav->renderNav(4));
        }

        break;
    case 'list':
    default:
        //        viewall();

        if ($employeeCount > 0) {
            $GLOBALS['xoopsTpl']->assign('employee', []);
            foreach (array_keys($employeeArray) as $i) {
                $employee['id']          = $employeeArray[$i]->getVar('id');
                $employee['name']        = $employeeArray[$i]->getVar('name');
                $employee['address']     = $employeeArray[$i]->getVar('address');
                $employee['gender']      = $employeeArray[$i]->getVar('gender');
                $employee['designation'] = $employeeArray[$i]->getVar('designation');
                $employee['age']         = $employeeArray[$i]->getVar('age');
                $employee['image']       = $employeeArray[$i]->getVar('image');
                $GLOBALS['xoopsTpl']->append('employee', $employee);
                $keywords[] = $employeeArray[$i]->getVar('name');
                unset($employee);
            }
            // Display Navigation
            if ($employeeCount > $employeePaginationLimit) {
                $GLOBALS['xoopsTpl']->assign('xoops_mpageurl', AJAXTEST_URL . '/employee.php');
                xoops_load('XoopsPageNav');
                $pagenav = new \XoopsPageNav($employeeCount, $employeePaginationLimit, $start, 'start');
                $GLOBALS['xoopsTpl']->assign('pagenav', $pagenav->renderNav(4));
            }
        }
}

//keywords
if (isset($keywords)) {
    $utility::metaKeywords($helper->getConfig('keywords') . ', ' . implode(', ', $keywords));
}
//description
$utility::metaDescription(MD_AJAXTEST_EMPLOYEE_DESC);

$GLOBALS['xoopsTpl']->assign('xoops_mpageurl', AJAXTEST_URL . '/employee.php');
$GLOBALS['xoopsTpl']->assign('ajaxtest_url', AJAXTEST_URL);
$GLOBALS['xoopsTpl']->assign('adv', $helper->getConfig('advertise'));

$GLOBALS['xoopsTpl']->assign('bookmarks', $helper->getConfig('bookmarks'));
$GLOBALS['xoopsTpl']->assign('fbcomments', $helper->getConfig('fbcomments'));

$GLOBALS['xoopsTpl']->assign('admin', AJAXTEST_ADMIN);
$GLOBALS['xoopsTpl']->assign('copyright', $copyright);

require XOOPS_ROOT_PATH . '/footer.php';
