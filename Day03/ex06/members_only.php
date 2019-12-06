<?php
  if (($_SERVER["PHP_AUTH_USER"] != "zaz") || ($_SERVER["PHP_AUTH_PW"] != "Ilovemylittleponey")){
    header("HTTP/1.0 401 Unauthorized");
    header("WWW-Authenticate: Basic realm=\''Member area''");
    echo "<html><body>That area is accessible for members only</body></html>" . PHP_EOL;
  }
  else {
  	$file = file_get_contents("../img/42.png");
  	echo "<html><body>" . PHP_EOL . "Hello Zaz<br />" . PHP_EOL . "<img src='data:image/png;base64," . base64_encode($file) . "'>" . PHP_EOL . "</body></html>" . PHP_EOL;
  }
?>