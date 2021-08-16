<table class="outer">
    <tr class="head">
        <th><{$smarty.const.MB_AJAXTEST_ID}></th>
        <th><{$smarty.const.MB_AJAXTEST_NAME}></th>
        <th><{$smarty.const.MB_AJAXTEST_ADDRESS}></th>
        <th><{$smarty.const.MB_AJAXTEST_GENDER}></th>
        <th><{$smarty.const.MB_AJAXTEST_DESIGNATION}></th>
        <th><{$smarty.const.MB_AJAXTEST_AGE}></th>
        <th><{$smarty.const.MB_AJAXTEST_IMAGE}></th>
    </tr>
    <{foreach item=employee from=$block}>
        <tr class="<{cycle values = 'even,odd'}>">
            <td>
                <{$employee.id}>
                <{$employee.name}>
                <{$employee.address}>
                <{$employee.gender}>
                <{$employee.designation}>
                <{$employee.age}>
                <{$employee.image}>
            </td>
        </tr>
    <{/foreach}>
</table>
