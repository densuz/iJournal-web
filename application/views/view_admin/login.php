<!DOCTYPE html>
<html lang="en">
    
<head>
        <title><?= $title; ?></title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?= base_url()?>admin-matrix/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?= base_url()?>admin-matrix/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="<?= base_url()?>admin-matrix/css/matrix-login.css" />
        <link rel="stylesheet" href="<?= base_url()?>admin-matrix/font-awesome/css/font-awesome.css"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="<?= base_url()?>ijournal/favicon.ico"/>
        <link rel="apple-touch-icon" href="<?= base_url()?>ijournal/apple-touch-icon.png">

    </head>
    <body>
        <div id="loginbox">
            <form action="<?= site_url('adminlogin/auth'); ?>" method="POST" id="loginform" class="form-vertical">
                <div class="control-group normal_text"> <h3><img src="<?= base_url()?>admin-matrix/img/logo.png" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" placeholder="ID. User" name="id_user"  autofocus required  />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock" ></i></span><input type="password" placeholder="Password" name="password" data-placement="after" required>
                        </div>
                    </div>
                </div>
                <div class="controls">
                    <?= $error ?>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
                    <span class="pull-right"><input type="submit" value="Login" class="btn btn-success" /></span>
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
                <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
                </div>
            </form>
        </div>
        
        <script src="<?= base_url()?>admin-matrix/js/jquery.min.js"></script>  
        <script src="<?= base_url()?>admin-matrix/js/matrix.login.js"></script>
    </body>

</html>
