<{include file="db:ajaxtest_header.tpl"}>
<div class="panel panel-info">
    <div class="panel-heading"><h2 class="panel-title"><strong>Employee</strong></h2></div>

    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th><{$smarty.const.MD_AJAXTEST_EMPLOYEE_ID}></th>
            <th><{$smarty.const.MD_AJAXTEST_EMPLOYEE_NAME}></th>
            <th><{$smarty.const.MD_AJAXTEST_EMPLOYEE_ADDRESS}></th>
            <th><{$smarty.const.MD_AJAXTEST_EMPLOYEE_GENDER}></th>
            <th><{$smarty.const.MD_AJAXTEST_EMPLOYEE_DESIGNATION}></th>
            <th><{$smarty.const.MD_AJAXTEST_EMPLOYEE_AGE}></th>
            <th><{$smarty.const.MD_AJAXTEST_EMPLOYEE_IMAGE}></th>
            <th width="80"><{$smarty.const.MD_AJAXTEST_ACTION}></th>
        </tr>
        </thead>
        <{foreach item=employee from=$employee}>
            <tbody>
            <tr>

                <td><{$employee.id}></td>
                <td><{$employee.name}></td>
                <td><{$employee.address}></td>
                <td><{$employee.gender}></td>
                <td><{$employee.designation}></td>
                <td><{$employee.age}></td>
                <td><img src="<{$xoops_url}>/uploads/ajaxtest/employee/<{$employee.image}>" style="max-width:100px" alt="employee"></td>
                <td>
                    <a href="employee.php?op=view&id=<{$employee.id}>" title="<{$smarty.const._PREVIEW}>"><img src="<{xoModuleIcons16 search.png}>" alt="<{$smarty.const._PREVIEW}>" title="<{$smarty.const._PREVIEW}>"</a>
                    <{if $xoops_isadmin == true}>
                        <a href="employee.php?op=edit&id=<{$employee.id}>" title="<{$smarty.const._EDIT}>"><img src="<{xoModuleIcons16 edit.png}>" alt="<{$smarty.const._EDIT}>" title="<{$smarty.const._EDIT}>"></a>
                        <a href="admin/employee.php?op=delete&id=<{$employee.id}>" title="<{$smarty.const._DELETE}>"><img src="<{xoModuleIcons16 delete.png}>" alt="<{$smarty.const._DELETE}>" title="<{$smarty.const._DELETE}>"</a>
                    <{/if}>
                </td>
            </tr>
            </tbody>
        <{/foreach}>
    </table>
</div>
<{$pagenav|default:""}>
<{$commentsnav|default:"" }> <{$lang_notice|default:"" }>
<{if $comment_mode|default:""  == "flat"}> <{include file="db:system_comments_flat.tpl"}> <{elseif $comment_mode|default:""  == "thread"}> <{include file="db:system_comments_thread.tpl"}> <{elseif $comment_mode|default:""  == "nest"}> <{include file="db:system_comments_nest.tpl"}> <{/if}>
<{include file="db:ajaxtest_footer.tpl"}>
