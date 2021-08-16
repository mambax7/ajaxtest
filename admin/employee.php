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

use Xmf\Request;

require __DIR__ . '/admin_header.php';
xoops_cp_header();
//It recovered the value of argument op in URL$
$op    = \Xmf\Request::getString('op', 'list');
$order = \Xmf\Request::getString('order', 'desc');
$sort  = \Xmf\Request::getString('sort', '');

$moduleDirName = \basename(\dirname(__DIR__));

$adminObject->displayNavigation(basename(__FILE__));
/** @var \Xmf\Module\Helper\Permission $permHelper */
$permHelper = new \Xmf\Module\Helper\Permission();
$uploadDir  = XOOPS_UPLOAD_PATH . "/$moduleDirName/employee/";
$uploadUrl  = XOOPS_UPLOAD_URL . "/$moduleDirName/employee/";

switch ($op) {
    case 'new':
        $adminObject->addItemButton(AM_AJAXTEST_EMPLOYEE_LIST, 'employee.php', 'list');
        $adminObject->displayButton('left');

        $employeeObject = $employeeHandler->create();
        $form           = $employeeObject->getForm();
        $form->display();
        break;

    case 'save':
        if (!$GLOBALS['xoopsSecurity']->check()) {
            redirect_header('employee.php', 3, implode(',', $GLOBALS['xoopsSecurity']->getErrors()));
        }
        if (0 !== \Xmf\Request::getInt('id', 0)) {
            $employeeObject = $employeeHandler->get(Request::getInt('id', 0));
        } else {
            $employeeObject = $employeeHandler->create();
        }
        // Form save fields
        $employeeObject->setVar('name', Request::getVar('name', ''));
        $employeeObject->setVar('address', Request::getText('address', ''));
        $employeeObject->setVar('gender', Request::getVar('gender', ''));
        $employeeObject->setVar('designation', Request::getVar('designation', ''));
        $employeeObject->setVar('age', Request::getVar('age', ''));

        require_once XOOPS_ROOT_PATH . '/class/uploader.php';
        $uploadDir = XOOPS_UPLOAD_PATH . '/ajaxtest/employee/';
        $uploader  = new \XoopsMediaUploader(
            $uploadDir, $helper->getConfig('mimetypes'), $helper->getConfig('maxsize'), null, null
        );
        if ($uploader->fetchMedia(Request::getArray('xoops_upload_file', '', 'POST')[0])) {
            //$extension = preg_replace( '/^.+\.([^.]+)$/sU' , '' , $_FILES['attachedfile']['name']);
            //$imgName = str_replace(' ', '', $_POST['image']).'.'.$extension;

            $uploader->setPrefix('image_');
            $uploader->fetchMedia(Request::getArray('xoops_upload_file', '', 'POST')[0]);
            if (!$uploader->upload()) {
                $errors = $uploader->getErrors();
                redirect_header('javascript:history.go(-1)', 3, $errors);
            } else {
                $employeeObject->setVar('image', $uploader->getSavedFileName());
            }
        } else {
            $employeeObject->setVar('image', Request::getVar('image', ''));
        }

        if ($employeeHandler->insert($employeeObject)) {
            redirect_header('employee.php?op=list', 2, AM_AJAXTEST_FORMOK);
        }

        echo $employeeObject->getHtmlErrors();
        $form = $employeeObject->getForm();
        $form->display();
        break;

    case 'edit':
        $adminObject->addItemButton(AM_AJAXTEST_ADD_EMPLOYEE, 'employee.php?op=new', 'add');
        $adminObject->addItemButton(AM_AJAXTEST_EMPLOYEE_LIST, 'employee.php', 'list');
        $adminObject->displayButton('left');
        $employeeObject = $employeeHandler->get(Request::getString('id', ''));
        $form           = $employeeObject->getForm();
        $form->display();
        break;

    case 'delete':
        $employeeObject = $employeeHandler->get(Request::getString('id', ''));
        if (1 == \Xmf\Request::getInt('ok', 0)) {
            if (!$GLOBALS['xoopsSecurity']->check()) {
                redirect_header('employee.php', 3, implode(', ', $GLOBALS['xoopsSecurity']->getErrors()));
            }
            if ($employeeHandler->delete($employeeObject)) {
                redirect_header('employee.php', 3, AM_AJAXTEST_FORMDELOK);
            } else {
                echo $employeeObject->getHtmlErrors();
            }
        } else {
            xoops_confirm(['ok' => 1, 'id' => Request::getString('id', ''), 'op' => 'delete',], Request::getUrl('REQUEST_URI', '', 'SERVER'), sprintf(AM_AJAXTEST_FORMSUREDEL, $employeeObject->getVar('name')));
        }
        break;

    case 'clone':

        $id_field = \Xmf\Request::getString('id', '');

        if ($utility::cloneRecord('ajaxtest_employee', 'id', $id_field)) {
            redirect_header('employee.php', 3, AM_AJAXTEST_CLONED_OK);
        } else {
            redirect_header('employee.php', 3, AM_AJAXTEST_CLONED_FAILED);
        }

        break;
    case 'list':
    default:
        $adminObject->addItemButton(AM_AJAXTEST_ADD_EMPLOYEE, 'employee.php?op=new', 'add');
        $adminObject->displayButton('left');
        $start                   = \Xmf\Request::getInt('start', 0);
        $employeePaginationLimit = $helper->getConfig('userpager');

        $criteria = new \CriteriaCompo();
        $criteria->setSort('id ASC, name');
        $criteria->setOrder('ASC');
        $criteria->setLimit($employeePaginationLimit);
        $criteria->setStart($start);
        $employeeTempRows  = $employeeHandler->getCount();
        $employeeTempArray = $employeeHandler->getAll($criteria);
        /*
        //
        //
                            <th class='center width5'>".AM_AJAXTEST_FORM_ACTION."</th>
        //                    </tr>";
        //            $class = "odd";
        */

        // Display Page Navigation
        if ($employeeTempRows > $employeePaginationLimit) {
            xoops_load('XoopsPageNav');

            $pagenav = new \XoopsPageNav(
                $employeeTempRows, $employeePaginationLimit, $start, 'start', 'op=list' . '&sort=' . $sort . '&order=' . $order . ''
            );
            $GLOBALS['xoopsTpl']->assign('pagenav', null === $pagenav ? $pagenav->renderNav() : '');
        }

        $GLOBALS['xoopsTpl']->assign('employeeRows', $employeeTempRows);
        $employeeArray = [];

        //    $fields = explode('|', id:int:11::NOT NULL:::ID:0|name:varchar:50::NOT NULL:::Name:1|address:text:::NOT NULL:::Address:2|gender:varchar:10::NOT NULL:::Gender:3|designation:varchar:100::NOT NULL:::Designation:4|age:int:11::NOT NULL:::Age:5|image:varchar:100::NOT NULL:::Image:6);
        //    $fieldsCount    = count($fields);

        $criteria = new \CriteriaCompo();

        //$criteria->setOrder('DESC');
        $criteria->setSort($sort);
        $criteria->setOrder($order);
        $criteria->setLimit($employeePaginationLimit);
        $criteria->setStart($start);

        $employeeCount     = $employeeHandler->getCount($criteria);
        $employeeTempArray = $employeeHandler->getAll($criteria);

        //    for ($i = 0; $i < $fieldsCount; ++$i) {
        if ($employeeCount > 0) {
            foreach (array_keys($employeeTempArray) as $i) {
                //        $field = explode(':', $fields[$i]);

                $GLOBALS['xoopsTpl']->assign('selectorid', AM_AJAXTEST_EMPLOYEE_ID);
                $employeeArray['id'] = $employeeTempArray[$i]->getVar('id');

                $GLOBALS['xoopsTpl']->assign('selectorname', AM_AJAXTEST_EMPLOYEE_NAME);
                $employeeArray['name'] = $employeeTempArray[$i]->getVar('name');

                $GLOBALS['xoopsTpl']->assign('selectoraddress', AM_AJAXTEST_EMPLOYEE_ADDRESS);
                $employeeArray['address'] = $employeeTempArray[$i]->getVar('address');

                $GLOBALS['xoopsTpl']->assign('selectorgender', AM_AJAXTEST_EMPLOYEE_GENDER);
                $employeeArray['gender'] = $employeeTempArray[$i]->getVar('gender');

                $GLOBALS['xoopsTpl']->assign('selectordesignation', AM_AJAXTEST_EMPLOYEE_DESIGNATION);
                $employeeArray['designation'] = $employeeTempArray[$i]->getVar('designation');

                $GLOBALS['xoopsTpl']->assign('selectorage', AM_AJAXTEST_EMPLOYEE_AGE);
                $employeeArray['age'] = $employeeTempArray[$i]->getVar('age');

                $GLOBALS['xoopsTpl']->assign('selectorimage', AM_AJAXTEST_EMPLOYEE_IMAGE);
                $employeeArray['image']       = "<img src='" . $uploadUrl . $employeeTempArray[$i]->getVar('image') . "' name='" . 'name' . "' id=" . 'id' . " alt='' style='max-width:100px'>";
                $employeeArray['edit_delete'] = "<a href='employee.php?op=edit&id=" . $i . "'><img src=" . $pathIcon16 . "/edit.png alt='" . _EDIT . "' title='" . _EDIT . "'></a>
               <a href='employee.php?op=delete&id=" . $i . "'><img src=" . $pathIcon16 . "/delete.png alt='" . _DELETE . "' title='" . _DELETE . "'></a>
               <a href='employee.php?op=clone&id=" . $i . "'><img src=" . $pathIcon16 . "/editcopy.png alt='" . _CLONE . "' title='" . _CLONE . "'></a>";

                $GLOBALS['xoopsTpl']->append_by_ref('employeeArrays', $employeeArray);
                unset($employeeArray);
            }
            unset($employeeTempArray);
            // Display Navigation
            if ($employeeCount > $employeePaginationLimit) {
                xoops_load('XoopsPageNav');
                $pagenav = new \XoopsPageNav(
                    $employeeCount, $employeePaginationLimit, $start, 'start', 'op=list' . '&sort=' . $sort . '&order=' . $order . ''
                );
                $GLOBALS['xoopsTpl']->assign('pagenav', $pagenav->renderNav(4));
            }

            //                     echo "<td class='center width5'>

            //                    <a href='employee.php?op=edit&id=".$i."'><img src=".$pathIcon16."/edit.png alt='"._EDIT."' title='"._EDIT."'></a>
            //                    <a href='employee.php?op=delete&id=".$i."'><img src=".$pathIcon16."/delete.png alt='"._DELETE."' title='"._DELETE."'></a>
            //                    </td>";

            //                echo "</tr>";

            //            }

            //            echo "</table><br><br>";

            //        } else {

            //            echo "<table width='100%' cellspacing='1' class='outer'>

            //                    <tr>

            //                     <th class='center width5'>".AM_AJAXTEST_FORM_ACTION."XXX</th>
            //                    </tr><tr><td class='errorMsg' colspan='8'>There are noXXX employee</td></tr>";
            //            echo "</table><br><br>";

            //-------------------------------------------

            echo $GLOBALS['xoopsTpl']->fetch(
                XOOPS_ROOT_PATH . '/modules/' . $GLOBALS['xoopsModule']->getVar('dirname') . '/templates/admin/ajaxtest_admin_employee.tpl'
            );
        }

        break;
}
require __DIR__ . '/admin_footer.php';
