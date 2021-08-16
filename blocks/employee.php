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
use XoopsModules\Ajaxtest\Helper;

/**
 * @param $options
 *
 * @return array
 */
function showAjaxtestEmployee($options)
{
    // require \dirname(__DIR__) . '/class/employee.php';
    ///  $moduleDirName = basename(dirname(__DIR__));
    //$myts = \MyTextSanitizer::getInstance();

    $block         = [];
    $blockType     = $options[0];
    $employeeCount = $options[1];
    //$titleLenght = $options[2];

    /** @var Helper $helper */
    if (!class_exists(Helper::class)) {
        return false;
    }

    $helper = Helper::getInstance();

    /** @var \XoopsPersistableObjectHandler $employeeHandler */
    $employeeHandler = $helper->getHandler('Employee');
    $criteria        = new \CriteriaCompo();
    array_shift($options);
    array_shift($options);
    array_shift($options);
    if ($blockType) {
        $criteria->add(new \Criteria('id', 0, '!='));
        $criteria->setSort('id');
        $criteria->setOrder('ASC');
    }

    $criteria->setLimit($employeeCount);
    $employeeArray = $employeeHandler->getAll($criteria);
    foreach (array_keys($employeeArray) as $i) {
        $block[$i]['name']    = $employeeArray[$i]->getVar('name');
        $block[$i]['address'] = $employeeArray[$i]->getVar('address');
    }

    return $block;
}

/**
 * @param $options
 *
 * @return string
 */
function editAjaxtestEmployee($options)
{
    //require \dirname(__DIR__) . '/class/employee.php';
    // $moduleDirName = basename(dirname(__DIR__));

    $form = MB_AJAXTEST_DISPLAY;
    $form .= "<input type='hidden' name='options[0]' value='" . $options[0] . "' >";
    $form .= "<input name='options[1]' size='5' maxlength='255' value='" . $options[1] . "' type='text' >&nbsp;<br>";
    $form .= MB_AJAXTEST_TITLELENGTH . " : <input name='options[2]' size='5' maxlength='255' value='" . $options[2] . "' type='text' ><br><br>";

    /** @var \XoopsModules\Ajaxtest\Helper $helper */
    $helper = \XoopsModules\Ajaxtest\Helper::getInstance();

    /** @var \XoopsPersistableObjectHandler $employeeHandler */
    $employeeHandler = $helper->getHandler('Employee');

    $criteria = new \CriteriaCompo();
    array_shift($options);
    array_shift($options);
    array_shift($options);
    $criteria->add(new \Criteria('id', 0, '!='));
    $criteria->setSort('id');
    $criteria->setOrder('ASC');
    $employeeArray = $employeeHandler->getAll($criteria);
    $form          .= MB_AJAXTEST_CATTODISPLAY . "<br><select name='options[]' multiple='multiple' size='5'>";
    $form          .= "<option value='0' " . (false === in_array(0, $options) ? '' : "selected='selected'") . '>' . MB_AJAXTEST_ALLCAT . '</option>';
    foreach (array_keys($employeeArray) as $i) {
        $id   = $employeeArray[$i]->getVar('id');
        $form .= "<option value='" . $id . "' " . (false === in_array($id, $options) ? '' : "selected='selected'") . '>' . $employeeArray[$i]->getVar('name') . '</option>';
    }
    $form .= '</select>';

    return $form;
}
