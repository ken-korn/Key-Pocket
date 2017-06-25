<!DOCTYPE html>
<?php

$url_action = "https://www.iprogrammatori.it/forum-programmazione/ucp.php?mode=login";
$login = "USERNAME";
$password = "PASSWORD";

?>



<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="<?php echo $url_action; ?>" method="post" id="Form_login">
            <!-- L'attributo "name" di ciascun tag "input" deve avere lo stesso valore di quello della pagina $url_action -->
            <label></label>
            <dl>
                <dd><label for="log_">Username o E-mail</label></dd>
                <dt><input type="text" name="username" value="<?php echo $login; ?>" id="log_" tabindex="1" required></dt>
            </dl>
            
            <dl>
                <dd><label for="pass_">Password</label></dd>
                <dt><input  type="password" name="password" value="<?php echo $password; ?>" id="pass_" tabindex="2" required></dt>
            </dl>
            
            <dl>
                <dd><dd>
                <dt><input type="submit" value="Login"></dt>
            </dl>
                
            <!-- Si consiglia di inserire tutti i campi Input, in special modo quelli con tipo hidden presenti nell'html della pagina in cui si vuole fare il login -->
                
                
            <!-- Auto-submit del form
            <script>document.getElementById("Form_login").submit();</script> -->
            
        </form>
    </body>
</html>