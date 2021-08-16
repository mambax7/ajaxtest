<?php

declare(strict_types=1);

namespace XoopsModules\Ajaxtest\Common;

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

//require_once \dirname(dirname(__DIR__)) . '/include/common.php';

/**
 * Class Configurator
 */
class Configurator
{
    public $name;
    public $paths           = [];
    public $uploadFolders   = [];
    public $copyBlankFiles  = [];
    public $copyTestFolders = [];
    public $templateFolders = [];
    public $oldFiles        = [];
    public $oldFolders      = [];
    public $renameTables    = [];
    public $moduleStats     = [];
    public $modCopyright;
    public $icons;

    /**
     * Configurator constructor.
     */
    public function __construct()
    {
        // $moduleDirName = basename(dirname(__DIR__, 2));

        $config = include \dirname(dirname(__DIR__)) . '/config/config.php';

        $this->name            = $config->name;
        $this->paths           = $config->paths;
        $this->uploadFolders   = $config->uploadFolders;
        $this->copyBlankFiles  = $config->copyBlankFiles;
        $this->copyTestFolders = $config->copyTestFolders;
        $this->templateFolders = $config->templateFolders;
        $this->oldFiles        = $config->oldFiles;
        $this->oldFolders      = $config->oldFolders;
        $this->renameTables    = $config->renameTables;
        $this->moduleStats     = $config->moduleStats;
        $this->modCopyright    = $config->modCopyright;

        $this->icons = include \dirname(dirname(__DIR__)) . '/config/icons.php';
        $this->paths = include \dirname(dirname(__DIR__)) . '/config/paths.php';
    }
}
