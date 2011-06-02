<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" type="image/ico" href="/images/favicon.ico" />
        <title>Scrumtive</title>
        <link href="<?php echo base_url();?>styles.css" type="text/css" media="screen" rel="stylesheet" />
        
    </head>
    <body id="login">
        <div id="wrappertop"></div>
        <div id="wrapper">
            <div id="content">
                <div id="header">
                        <h1><a href=""><img src="<?php echo base_url();?>images/logo.png" alt="FreelanceSuite"></a></h1>
                </div>
                <div id="darkbanner" class="banner320">
                        <h2>Login</h2>
                </div>
                <div id="darkbannerwrap"> </div>

                <?php echo form_open('login/validarUsuario'); ?>

                     <fieldset class="form">

                        <p>
                            <label for="username">Username:</label>
                            <input name="username" id="user_name" type="text" value="<?php echo set_value('username'); ?>" size="50" />                   
                            <?php  echo form_error('username');?>
                        </p>
            
                        <p>
                            <label for="userpassword">Password:</label>
                            <input name="userpassword" id="user_password" type="password" value="<?php echo set_value('userpassword'); ?>" size="50" />
                            <?php  echo form_error('userpassword');?>
                        </p>

                        <button type="submit" class="positive" name="Submit"> <img src="<?php echo base_url();?>images/key.png" alt="Announcement"/>Login</button>
                        <ul id="forgottenpassword">
                            <li class="boldtext">|</li>
                            <li><a href="forgot.php">Olvidaste tu password?</a></li>
                        </ul>
                  
                     </fieldset>
                
                <?php echo form_close() ?>

            </div>
        </div>

        <div id="wrapperbottom_branding">
            <div id="wrapperbottom_branding_text">By
                <a href="http://www.freelancesuite.com" style='text-decoration:none'>Martin Contreras</a>.
            </div>
        </div>
    </body>
</html>