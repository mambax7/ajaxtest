<link rel="stylesheet" href='<{$mod_url}>/assets/css/style.css' type="text/css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<{*<script src="<{$mod_url}>/assets/js/crud.js"></script>*}>


<div class="header">
    <span class="left"><b><{$smarty.const.MD_AJAXTEST_TITLE}></b>&#58;&#160;</span>
    <span class="left"><{$smarty.const.MD_AJAXTEST_DESC}></span><br>
</div>
<div class="head">
    <{if $adv != ''}>
        <div class="center"><{$adv}></div>
    <{/if}>
</div>
<br>
<ul class="nav nav-pills">
    <li class="active"><a href="<{$ajaxtest_url}>"><{$smarty.const.MD_AJAXTEST_INDEX}></a></li>
    <li><a href="<{$ajaxtest_url}>/employee.php"><{$smarty.const.MD_AJAXTEST_EMPLOYEE}></a></li>
    <li><a href="<{$ajaxtest_url}>/ajax_modal.php"><{$smarty.const.MD_AJAXTEST_MODAL}></a></li>
</ul>

<br>
