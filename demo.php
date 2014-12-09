<html>
<head>
  <title>Dem PHP</title>
</head>

<body>

<h3>
<?php 

echo "Webapp Hostname: " . gethostname() . "<br />";

$servername =  getenv('MYSQL_SERVICE_HOST') . ":" . getenv('MYSQL_SERVICE_PORT');
$username = 'root';
$password = '';

echo "MYSQL Server: " . $servername . "<br />";

// Create connection
$conn = mysql_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed to MYSQL failed");
}

echo "Connected to MYSQL!<br />";

$query = "select @@hostname";
$result = mysql_query($query);

echo "Query executed!<br />";

$num = mysql_numrows($result);
while ($i < $num) {
  $host = mysql_result($result,$i,"@@hostname");
  $i++;
  echo "MYSQL: " . $host;
}

mysql_close($conn);
?>
</h3>

</body>

</html>