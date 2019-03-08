<?php /* Smarty version 2.6.31, created on 2019-01-28 05:05:23
         compiled from /var/www/vhosts.local/digiboost.com/portal/modules/Users/authentication/SugarAuthenticate/FactorAuthEmailCode.tpl */ ?>



<!-- !!!1
<form method="post" action="">
    Email Code: <input type="text" name="factor_token"> <input type="submit" value="Send">
</form>
<a href="index.php?module=Users&action=Logout">logout</a>
-->
<!DOCTYPE html>
<html>
<head>
    <link rel="SHORTCUT ICON" href="<?php echo $this->_tpl_vars['favicon']; ?>
">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <!-- Bootstrap -->
    <link href="<?php echo $this->_tpl_vars['cssPath']; ?>
/normalize.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $this->_tpl_vars['cssPath']; ?>
/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $this->_tpl_vars['cssPath']; ?>
/fonts.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $this->_tpl_vars['cssPath']; ?>
/grid.css" rel="stylesheet" type="text/css">
    <link href="t<?php echo $this->_tpl_vars['cssPath']; ?>
/footable.core.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" media="all" href="modules/Users/login.css">
    <title>SuiteCRM</title>

    <?php echo $this->_tpl_vars['css']; ?>

</head>
<body>
    <div class="p_login">
        <div class="p_login_top">
            <a title="SuiteCRM" href="http://www.suitecrm.com">SuiteCRM</a>
        </div>

    <div class="p_login_middle">
        <div id="loginform">
            <div class="error message"><?php echo $this->_tpl_vars['factor_message']; ?>
</div>
            <form method="post" action="index.php?module=Users&action=index">
                <?php echo $this->_tpl_vars['APP']['LBL_EMAIL_CODE']; ?>
 <input type="text" name="factor_token">
                <input type="submit" value="<?php echo $this->_tpl_vars['APP']['LBL_VERIFY']; ?>
">
            </form>
            <a href="index.php?module=Users&action=Logout"><?php echo $this->_tpl_vars['APP']['LBL_CANCEL']; ?>
</a>&nbsp;&nbsp;&nbsp;
            <a href="index.php?module=Users&action=Resend"><?php echo $this->_tpl_vars['APP']['LBL_RESEND']; ?>
</a>
        </div>

        <div class="p_login_bottom">
            <a id="admin_options">© Supercharged by SuiteCRM</a>
            <a id="powered_by">© Powered By SugarCRM</a>
        </div>
    </div>
</body>
</html>



