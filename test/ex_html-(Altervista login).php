<?php

$html = <<<HTML

<!DOCTYPE html>
<html>
<head>
<title>AlterVista Sign-in</title>
<link rel="stylesheet" href="/login.css" content="text/css"/>
<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
</head>
<body class="altervista">

<div id="login">
	<div class="login-header">
		<h1><img src="images/altervista.png" alt="altervista"></h1>
	</div>
	<div id="links"></div>

<div class="login-app panel clear"><span class="login-icon"><img src="images/login-panel.png" width="18" height="18" alt="panel"/></span> <span class="app-title">Accedi con il tuo account Altervista</span></div>	<div class="login-content">
		<form method="post" action="/index.php">
			<input type="hidden" name="response" value="auth"/>

			
			<label>
				Nome utente				<input type="text" name="username" autocapitalize="off" required autofocus/>
			</label>
			<label>
				Password				<input type="password" name="password" autocapitalize="off" required/>
			</label>

			<p id="auth">
				<button type="submit">Accedi</button>
			</p>

			<div id="links">
				<span>
					<label>
						<input type="checkbox" name="remember" value="1" checked/>
						Resta connesso					</label>
				</span>
				<span>
					<a id="forgotten" href="/password-recovery.php">Password dimenticata?</a>
				</span>
			</div>
			
		</form>
		<div id="facebook">
			<p class="facebook-connect"><span>accedi con</span></p>
			<p><a href="https://www.facebook.com/v2.7/dialog/oauth?client_id=124855394234339&state=44a61a61713bd8d25d927be32c60a69c&response_type=code&sdk=php-sdk-5.0.0&redirect_uri=https%3A%2F%2Faa.altervista.org%2F%3Fresponse%3Dfacebook&scope=email">Facebook</a></p>
		</div>
	</div><!-- .login-content -->
	<div class="login-footer">
		<p id="deny">
			<a href="?response=deny&group=altervista">&larr; Annulla</a>
		</p>
	</div><!-- .login-footer -->

</div><!-- #login -->

<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-1240215-1']);
_gaq.push(['_setDomainName', 'altervista.org']);
_gaq.push(['_gat._anonymizeIp']);
_gaq.push(['_trackPageview']);

(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>

</body>
</html>
        
HTML;
 