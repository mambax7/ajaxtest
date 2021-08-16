<?php

if (!defined('XOOPS_MAINFILE_INCLUDED')) {
    include_once dirname(__DIR__, 3) . '/mainfile.php';
}

global $xoopsDB;
$xoopsLogger->activated = false;

if (isset($_POST['employee_id'])) {
    $sql = "SELECT * FROM " . $xoopsDB->prefix('ajaxtest_employee') . " WHERE id = '" . $_POST['employee_id'] . "'";
    if (!$result = $xoopsDB->queryF($sql)) {
        return false;
    }

    $row      = $xoopsDB->fetchArray($result);
    $jencoded = json_encode($row);
    echo $jencoded;
}

