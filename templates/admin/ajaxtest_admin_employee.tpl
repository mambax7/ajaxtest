<{if $employeeRows > 0}>
    <div class="outer">
        <form name="select" action="employee.php?op=" method="POST"
              onsubmit="if(window.document.select.op.value =='') {return false;} else if (window.document.select.op.value =='delete') {return deleteSubmitValid('employeeId[]');} else if (isOneChecked('employeeId[]')) {return true;} else {alert('<{$smarty.const.AM_AJAXTEST_SELECTED_ERROR}>'); return false;}">
            <input type="hidden" name="confirm" value="1">
            <div class="floatleft">
                <select name="op">
                    <option value=""><{$smarty.const.AM_AJAXTEST_SELECT}></option>
                    <option value="delete"><{$smarty.const.AM_AJAXTEST_SELECTED_DELETE}></option>
                </select>
                <input id="submitUp" class="formButton" type="submit" name="submitselect" value="<{$smarty.const._SUBMIT}>" title="<{$smarty.const._SUBMIT}>">
            </div>
            <div class="floatcenter0">
                <div id="pagenav"><{$pagenav|default:''}></div>
            </div>


            <table class="$employee" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <th align="center" width="5%"><input name="allbox" title="allbox" id="allbox" onclick="xoopsCheckAll('select', 'allbox');" type="checkbox" title="Check All" value="Check All"></th>
                    <th class="left"><{$selectorid}></th>
                    <th class="left"><{$selectorname}></th>
                    <th class="left"><{$selectoraddress}></th>
                    <th class="left"><{$selectorgender}></th>
                    <th class="left"><{$selectordesignation}></th>
                    <th class="left"><{$selectorage}></th>
                    <th class="left"><{$selectorimage}></th>

                    <th class="center width5"><{$smarty.const.AM_AJAXTEST_FORM_ACTION}></th>
                </tr>
                <{foreach item=employeeArray from=$employeeArrays}>
                    <tr class="<{cycle values="odd,even"}>">

                        <td align="center" style="vertical-align:middle;"><input type="checkbox" name="employee_id[]" title="employee_id[]" id="employee_id[]" value="<{$employeeArray.employee_id|default:''}>"></td>
                        <td class='left'><{$employeeArray.id}></td>
                        <td class='left'><{$employeeArray.name}></td>
                        <td class='left'><{$employeeArray.address}></td>
                        <td class='left'><{$employeeArray.gender}></td>
                        <td class='left'><{$employeeArray.designation}></td>
                        <td class='left'><{$employeeArray.age}></td>
                        <td class='left'><{$employeeArray.image}></td>


                        <td class="center width5"><{$employeeArray.edit_delete}></td>
                    </tr>
                <{/foreach}>
            </table>
            <br>
            <br>
            <{else}>
            <table width="100%" cellspacing="1" class="outer">
                <tr>

                    <th align="center" width="5%"><input name="allbox" title="allbox" id="allbox" onclick="xoopsCheckAll('select', 'allbox');" type="checkbox" title="Check All" value="Check All"></th>
                    <th class="left"><{$selectorid}></th>
                    <th class="left"><{$selectorname}></th>
                    <th class="left"><{$selectoraddress}></th>
                    <th class="left"><{$selectorgender}></th>
                    <th class="left"><{$selectordesignation}></th>
                    <th class="left"><{$selectorage}></th>
                    <th class="left"><{$selectorimage}></th>

                    <th class="center width5"><{$smarty.const.AM_AJAXTEST_FORM_ACTION}></th>
                </tr>
                <tr>
                    <td class="errorMsg" colspan="11">There are no $employee</td>
                </tr>
            </table>
    </div>
    <br>
    <br>
<{/if}>
