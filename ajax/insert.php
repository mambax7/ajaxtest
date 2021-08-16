<?php
if (!defined('XOOPS_MAINFILE_INCLUDED')) {
    include_once dirname(__DIR__, 3) . '/mainfile.php';
}

global $xoopsDB;

if (!empty($_POST)) {
    $output      = '';
    $message     = '';
    $name        = \Xmf\Request::getString('name', '', 'POST');
    $address     = \Xmf\Request::getString('address', '', 'POST');
    $gender      = \Xmf\Request::getString('gender', '', 'POST');
    $designation = \Xmf\Request::getString('designation', '', 'POST');
    $age         = \Xmf\Request::getInt('age', 0, 'POST');
    if ($_POST['employee_id'] != '') {
        $sql     = "  
           UPDATE " . $xoopsDB->prefix('ajaxtest_employee') . "   
           SET name='$name',   
           address='$address',   
           gender='$gender',   
           designation = '$designation',   
           age = '$age'   
           WHERE id='" . $_POST['employee_id'] . "'";
        $message = 'Data Updated';
    } else {
        $sql     = "INSERT INTO " . $xoopsDB->prefix('ajaxtest_employee') . " (name, address, gender, designation, age) VALUES ('$name', '$address', '$gender', '$designation', '$age')";
        $message = 'Data Inserted';
    }
    if ($xoopsDB->queryF($sql)) {
        $output       .= '<label class="text-success">' . $message . '</label>';
        $select_query = 'SELECT * FROM ' . $xoopsDB->prefix('ajaxtest_employee') . ' ORDER BY id DESC';
        $result       = $xoopsDB->queryF($select_query);
        $output       .= '  
                <table class="table table-bordered">  
                     <tr>  
                          <th width="70%">Employee Name</th>  
                          <th width="15%">Edit</th>  
                          <th width="15%">View</th>  
                     </tr>  
           ';
        while ($row = $xoopsDB->fetchArray($result)) {
            $output .= '  
                     <tr>  
                          <td>' . $row['name'] . '</td>  
                          <td><input type="button" name="edit" value="Edit" id="' . $row['id'] . '" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="View" id="' . $row['id'] . '" class="btn btn-info btn-xs view_data" /></td>  
                     </tr>  
                ';
        }
        $output .= '</table>';
    }
    echo $output;
}
?>
