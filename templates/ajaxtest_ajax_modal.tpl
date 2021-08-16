<{include file="db:ajaxtest_header.tpl"}>

<script src="<{$mod_url}>/assets/js/crud.js"></script>

<div class="container" style="width:700px;">
    <h3 align="center">PHP Ajax Update MySQL Data Through Bootstrap Modal</h3>
    <br/>
    <div class="table-responsive">
        <div align="right">
            <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Add</button>
        </div>
        <br/>
        <div id="employee_table">
            <table class="table  table-hover table-bordered">
                <tr>
                    <th width="70%">Employee Name</th>
                    <th width="15%">Edit</th>
                    <th width="15%">View</th>
                </tr>

                <{foreach item=employee from=$employees}>
                    <tr>
                        <td> <{$employee.name}></td>
                        <td><input type="button" name="edit" value="Edit" id="<{$employee.id}>" class="btn btn-info btn-xs edit_data"/></td>
                        <td><input type="button" name="view" value="View" id="<{$employee.id}>" class="btn btn-info btn-xs view_data"/></td>
                    </tr>
                <{/foreach}>

            </table>
        </div>
    </div>
</div>


<div id="dataModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Employee Details</h4>
            </div>
            <div class="modal-body" id="employee_detail">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div id="add_data_Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">PHP Ajax Update MySQL Data Through Bootstrap Modal</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="insert_form">
                    <label>Enter Employee Name</label>
                    <input type="text" name="name" id="name" class="form-control"/>
                    <br>
                    <label>Enter Employee Address</label>
                    <textarea name="address" id="address" class="form-control"></textarea>
                    <br>
                    <label>Select Gender</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <br>
                    <label>Enter Designation</label>
                    <input type="text" name="designation" id="designation" class="form-control"/>
                    <br>
                    <label>Enter Age</label>
                    <input type="text" name="age" id="age" class="form-control"/>
                    <br>
                    <input type="hidden" name="employee_id" id="employee_id"/>
                    <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success"/>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="pagenav"><{$pagenav}></div>

<{*<{$commentsnav|default:"" }> <{$lang_notice|default:"" }>*}>
<{*<{if $comment_mode|default:"" == "flat"}>*}>
<{*    <{include file="db:system_comments_flat.tpl"}>*}>
<{*<{elseif $comment_mode|default:""  == "thread"}>*}>
<{*    <{include file="db:system_comments_thread.tpl"}>*}>
<{*<{elseif $comment_mode|default:""  == "nest"}>*}>
<{*    <{include file="db:system_comments_nest.tpl"}> <{/if}>*}>
<{*<{include file="db:ajaxtest_footer.tpl"}>*}>


<{include file="db:ajaxtest_footer.tpl"}>
