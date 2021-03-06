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
// @see http://www.php-fig.org/psr/psr-4/examples/

spl_autoload_register(static function ($class) {
    // project-specific namespace prefix
    $prefix = 'XoopsModules\\' . ucfirst(basename(dirname(__DIR__)));

    // base directory for the namespace prefix
    $baseDir = \dirname(__DIR__) . '/class/';

    // does the class use the namespace prefix?
    $len = strlen($prefix);

    if (0 !== strncmp($prefix, $class, $len)) {
        return;
    }

    // get the relative class name
    $relativeClass = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require_once $file;
    }
});
