<{include file="db:ajaxtest_header.tpl"}>
<div class="panel panel-info">
    <div class="panel-heading"><h2 class="panel-title">Employee </h2></div>

    <table class="table table-striped">
        <thead>
        <tr>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><{$smarty.const.MD_AJAXTEST_EMPLOYEE_ID}></td>
            <td><{$employee.id}></td>
        </tr>
        <tr>
            <td><{$smarty.const.MD_AJAXTEST_EMPLOYEE_NAME}></td>
            <td><{$employee.name}></td>
        </tr>
        <tr>
            <td><{$smarty.const.MD_AJAXTEST_EMPLOYEE_ADDRESS}></td>
            <td><{$employee.address}></td>
        </tr>
        <tr>
            <td><{$smarty.const.MD_AJAXTEST_EMPLOYEE_GENDER}></td>
            <td><{$employee.gender}></td>
        </tr>
        <tr>
            <td><{$smarty.const.MD_AJAXTEST_EMPLOYEE_DESIGNATION}></td>
            <td><{$employee.designation}></td>
        </tr>
        <tr>
            <td><{$smarty.const.MD_AJAXTEST_EMPLOYEE_AGE}></td>
            <td><{$employee.age}></td>
        </tr>
        <tr>
            <td><{$smarty.const.MD_AJAXTEST_EMPLOYEE_IMAGE}></td>
            <td><img src="<{$xoops_url}>/uploads/ajaxtest/employee/<{$employee.image}>" alt="employee" class="img-responsive"></td>
        </tr>
        <tr>
            <td><{$smarty.const.MD_AJAXTEST_ACTION}></td>
            <td>
                <!--<a href="employee.php?op=view&id=<{$employee.id}>" title="<{$smarty.const._PREVIEW}>"><img src="<{xoModuleIcons16 search.png}>" alt="<{$smarty.const._PREVIEW}>" title="<{$smarty.const._PREVIEW}>"</a>&nbsp;-->
                <{if $xoops_isadmin == true}>
                    <a href="employee.php?op=edit&id=<{$employee.id}>" title="<{$smarty.const._EDIT}>"><img src="<{xoModuleIcons16 edit.png}>" alt="<{$smarty.const._EDIT}>" title="<{$smarty.const._EDIT}>"></a>
                    <a href="admin/employee.php?op=delete&id=<{$employee.id}>" title="<{$smarty.const._DELETE}>"><img src="<{xoModuleIcons16 delete.png}>" alt="<{$smarty.const._DELETE}>" title="<{$smarty.const._DELETE}>"</a>
                <{/if}>
            </td>
        </tr>
        </tbody>

    </table>
</div>
<div id="pagenav"><{$pagenav}></div>
<{$commentsnav|default:"" }> <{$lang_notice|default:"" }>
<{if $comment_mode|default:"" == "flat"}>
    <{include file="db:system_comments_flat.tpl"}>
<{elseif $comment_mode|default:""  == "thread"}>
    <{include file="db:system_comments_thread.tpl"}>
<{elseif $comment_mode|default:""  == "nest"}>
    <{include file="db:system_comments_nest.tpl"}> <{/if}>
<{include file="db:ajaxtest_footer.tpl"}>
