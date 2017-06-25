<?php

$url_action = "https://www.inforge.net/xi/login/login";
$login = "USERNAME";
$password = "PASSWORD";

?>

<html>
    <body>
        <form action="<?php echo $url_action ?>" method="post">
	

	<label>Nome Utente o e-mail:</label>
	<input type="text" name="login" value="<?php echo $login ?>"/>


	
	<input type="radio" name="register" value="0" checked="checked"/>
	<input type="password" name="password" value="<?php echo $password ?>"/>

	

	<input type="submit" value="Entra"/>
        <input type="checkbox" name="remember" value="1"/> Resta collegato al forum

        <!--<input type="hidden" name="cookie_check" value="1" />
	<input type="hidden" name="_xfToken" value="" />
	<input type="hidden" name="redirect" value="https://www.inforge.net/xi/" />
        -->
        
    </form>
   </body>
</html>

