<?php

declare(strict_types=1);

namespace XoopsModules\Ajaxtest\Form;

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
use XoopsModules\Ajaxtest;

require_once \dirname(dirname(__DIR__)) . '/include/common.php';

$moduleDirName = basename(dirname(__DIR__, 2));
//$helper = Ajaxtest\Helper::getInstance();
$permHelper = new \Xmf\Module\Helper\Permission();

xoops_load('XoopsFormLoader');

/**
 * Class EmployeeForm
 */
class EmployeeForm extends \XoopsThemeForm
{
    public $targetObject;
    public $helper;

    /**
     * Constructor
     *
     * @param $target
     */
    public function __construct($target)
    {
        $this->helper       = $target->helper;
        $this->targetObject = $target;

        $title = $this->targetObject->isNew() ? sprintf(AM_AJAXTEST_EMPLOYEE_ADD) : sprintf(AM_AJAXTEST_EMPLOYEE_EDIT);
        parent::__construct($title, 'form', xoops_getenv('SCRIPT_NAME'), 'post', true);
        $this->setExtra('enctype="multipart/form-data"');

        //include ID field, it's needed so the module knows if it is a new form or an edited form

        $hidden = new \XoopsFormHidden('id', $this->targetObject->getVar('id'));
        $this->addElement($hidden);
        unset($hidden);

        // Id
        $this->addElement(new \XoopsFormLabel(AM_AJAXTEST_EMPLOYEE_ID, $this->targetObject->getVar('id'), 'id'));
        // Name
        $this->addElement(new \XoopsFormText(AM_AJAXTEST_EMPLOYEE_NAME, 'name', 50, 255, $this->targetObject->getVar('name')), false);
        // Address
        if (class_exists('XoopsFormEditor')) {
            $editorOptions           = [];
            $editorOptions['name']   = 'address';
            $editorOptions['value']  = $this->targetObject->getVar('address', 'e');
            $editorOptions['rows']   = 5;
            $editorOptions['cols']   = 40;
            $editorOptions['width']  = '100%';
            $editorOptions['height'] = '400px';
            //$editorOptions['editor'] = xoops_getModuleOption('ajaxtest_editor', 'ajaxtest');
            //$this->addElement( new \XoopsFormEditor(AM_AJAXTEST_EMPLOYEE_ADDRESS, 'address', $editorOptions), false  );
            if ($this->helper->isUserAdmin()) {
                $descEditor = new \XoopsFormEditor(AM_AJAXTEST_EMPLOYEE_ADDRESS, $this->helper->getConfig('ajaxtestEditorAdmin'), $editorOptions, $nohtml = false, $onfailure = 'textarea');
            } else {
                $descEditor = new \XoopsFormEditor(AM_AJAXTEST_EMPLOYEE_ADDRESS, $this->helper->getConfig('ajaxtestEditorUser'), $editorOptions, $nohtml = false, $onfailure = 'textarea');
            }
        } else {
            $descEditor = new \XoopsFormDhtmlTextArea(AM_AJAXTEST_EMPLOYEE_ADDRESS, 'description', $this->targetObject->getVar('description', 'e'), 5, 50);
        }
        $this->addElement($descEditor);
        // Gender
        $this->addElement(new \XoopsFormText(AM_AJAXTEST_EMPLOYEE_GENDER, 'gender', 50, 255, $this->targetObject->getVar('gender')), false);
        // Designation
        $this->addElement(new \XoopsFormText(AM_AJAXTEST_EMPLOYEE_DESIGNATION, 'designation', 50, 255, $this->targetObject->getVar('designation')), false);
        // Age
        $this->addElement(new \XoopsFormText(AM_AJAXTEST_EMPLOYEE_AGE, 'age', 50, 255, $this->targetObject->getVar('age')), false);
        // Image
        $image = $this->targetObject->getVar('image') ?: 'blank.png';

        $uploadDir   = '/uploads/ajaxtest/employee/';
        $imgtray     = new \XoopsFormElementTray(AM_AJAXTEST_EMPLOYEE_IMAGE, '<br>');
        $imgpath     = sprintf(AM_AJAXTEST_FORMIMAGE_PATH, $uploadDir);
        $imageselect = new \XoopsFormSelect($imgpath, 'image', $image);
        $imageArray  = \XoopsLists::getImgListAsArray(XOOPS_ROOT_PATH . $uploadDir);
        foreach ($imageArray as $image) {
            $imageselect->addOption((string)$image, $image);
        }
        $imageselect->setExtra("onchange='showImgSelected(\"image_image\", \"image\", \"" . $uploadDir . '", "", "' . XOOPS_URL . "\")'");
        $imgtray->addElement($imageselect);
        $imgtray->addElement(new \XoopsFormLabel('', "<br><img src='" . XOOPS_URL . '/' . $uploadDir . '/' . $image . "' name='image_image' id='image_image' alt='' style='max-width:300px' >"));
        $fileseltray = new \XoopsFormElementTray('', '<br>');
        $fileseltray->addElement(new \XoopsFormFile(AM_AJAXTEST_FORMUPLOAD, 'image', $this->helper->getConfig('maxsize')));
        $fileseltray->addElement(new \XoopsFormLabel(''));
        $imgtray->addElement($fileseltray);
        $this->addElement($imgtray);

        $this->addElement(new \XoopsFormHidden('op', 'save'));
        $this->addElement(new \XoopsFormButton('', 'submit', _SUBMIT, 'submit'));
    }
}
