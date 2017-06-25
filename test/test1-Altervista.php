<?php

?>

<form method="post" action="https://aa.altervista.org/index.php">
			<input type="hidden" name="response" value="auth"/>

			
			<label>
				Nome utente				<input type="text" name="username" autocapitalize="off" value="USERNAME" required autofocus/>
			</label>
			<label>
				Password				<input type="password" name="password" value="PASSWORD" autocapitalize="off" required/>
			</label>

			<p id="auth">
				<button type="submit">Accedi</button>
			</p>

			<div id="links">
				<span>
					<label>
						<input type="checkbox" name="remember" value="0" checked/>
						Resta connesso					</label>
				</span>
				<span>
					<a id="forgotten" href="/password-recovery.php">Password dimenticata?</a>
				</span>
			</div>
			
		</form>

