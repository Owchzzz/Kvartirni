
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <title><?php echo lang('title'); ?></title>
        <link href="/new/media/css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
        <!--	<script type="text/javascript" src="http://kvartirni.ru/js/jquery.js"></script> -->
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="/new/media/js/jquery-ui.js"></script>
    </head><body>
        <div class="main">
            <div class="header">

                <div class="div_login">
                    <form action="users/login.html" method="post" class="form_login">
                        <input type="text" name="username" placeholder="<?php echo lang('username'); ?>" />
                        <input type="password" name="password" placeholder="<?php echo lang('password'); ?>" />
                        <input type="submit" value="<?php echo lang('login'); ?>" /><a href="users/registration.html"><?php echo lang('registration'); ?></a> <a href="#"><?php echo lang('password_restore'); ?></a>

                    </form>
                    <?php
                    if (isset($auth_error)) {
                        echo "<font color=red>";
                        echo lang('auth_error');
                        echo "</font>";
                    }
                    ?>
                </div> 