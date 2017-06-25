<?php

$url_action = "https://www.iprogrammatori.it/forum-programmazione/ucp.php?mode=login";
//$url_action = "https://www.iprogrammatori.it/forum-programmazione/ucp.php?mode=login&amp;sid=9b15d3f618b39409ce68fbf1ed77e23f";
$login = "USERNAME";
$password = "PASSWORD";

?>

<html>
    <body>
        <form action="<?php echo $url_action ?>" method="post">
            <input type="text" name="username" value="<?php echo $login ?>"/>
            <input type="password" name="password" value="<?php echo $password?>"/>
            <input type="hidden" name="redirect" value="<?php echo $url_action ?>" />
            
            
            
            <!--
            <input type="hidden" name="sid" value="9b15d3f618b39409ce68fbf1ed77e23f" />
            <input type="hidden" name="redirect" value="index.php" />
            -->
            <input type="submit" name="login" value="Login"/>

        </form>
    </body>
</html>

