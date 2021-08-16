<?php

use XoopsModules\Ajaxtest\{
    Helper
};

if (!defined('XOOPS_MAINFILE_INCLUDED')) {
    include_once dirname(__DIR__, 3) . '/mainfile.php';
}

$helper = Helper::getInstance();

global $xoopsDB, $xoopsModule;
$xoopsLogger->activated = false;

if (isset($_POST['employee_id'])) {
    $output = '';
    $sql    = "SELECT * FROM " . $xoopsDB->prefix('ajaxtest_employee') . " WHERE id = '" . $_POST['employee_id'] . "'";
    //$result = mysqli_query($connect, $query);
    if (!$result = $xoopsDB->queryF($sql)) {
        return false;
    }

    $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while (false !== $row = $xoopsDB->fetchArray($result)) {
        $output .= '  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">' . $row['name'] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">' . $row['address'] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Gender</label></td>  
                     <td width="70%">' . $row['gender'] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Designation</label></td>  
                     <td width="70%">' . $row['designation'] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Age</label></td>  
                     <td width="70%">' . $row['age'] . ' Years</td>  
                </tr>  
                 <tr>  
                     <td width="30%"><label>Picture</label></td>  
                     <td width="70%">' . '<img src="'. XOOPS_URL . '/uploads/' . $helper->dirname() .'/employee/' . $row['image'] . '" style="max-width:100px" alt="employee">' . ' </td>  
                </tr>  
           ';
    }
    $output .= '  
           </table>  
      </div>  
      ';
    echo $output;
}

