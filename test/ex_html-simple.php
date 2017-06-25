<?php

$html = <<< HTML
<!DOCTYPE html>
<html>
<body>

<form action="/action_page.php" autocomplete="on">
  First name:<input type="text" name="fname" value="marco"><br>
  Last name: <input type="text" name="lname"><br>
  E-mail: <input type="email" name="email" autocomplete="off"><br>
  <input type="submit">
</form>

<p>Fill in and submit the form, then reload the page to see how autocomplete works.</p>
<p>Notice that autocomplete is "on" for the form, but "off" for the e-mail field.</p>

</body>
</html>
HTML;
