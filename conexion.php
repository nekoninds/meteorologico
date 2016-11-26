<?php
  $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
echo $url;
echo getenv("SENDGRID_API_KEY");
  $server = $url["host"];
  $username = $url["user"];
  $password = $url["pass"];
  $db = substr($url["path"], 1);

  $con = new mysqli($server, $username, $password, $db);

  // Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
