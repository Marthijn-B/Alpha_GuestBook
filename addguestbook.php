<?php
$host="guestbook"; // Host name
$username="alpha"; // Mysql username
$password="AlphaTest1"; // Mysql password
$db_name="test"; // Database name
$tbl_name="guestbook"; // Table name

// retrieve form data
$name = $_POST["name"];
$address = $_POST["address"];
$email = $_POST["email"];
$message = $_POST["message"];

echo '<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td><h2>Alpha Group Guestbook </h2></td>
  </tr>
</table>';

$conn = mysqli_connect($host, $username, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo "FAILED";
}
if (!$name || !$address) {
    echo "Name, address and Email is required";
}

else {
  //echo "Connected successfully....";

  // create DateTime Stamp
  $datetime=date("y-m-d h:i:s"); //date time
  //echo $datetime."<br>";

  // retrieve client IP address
  $ip = getenv('HTTP_CLIENT_IP')?:
  getenv('HTTP_X_FORWARDED_FOR')?:
  getenv('HTTP_X_FORWARDED')?:
  getenv('HTTP_FORWARDED_FOR')?:
  getenv('HTTP_FORWARDED')?:
  getenv('REMOTE_ADDR');
  //echo $ip."<br>";

  //echo $_SERVER['HTTP_USER_AGENT']."<br>";

  $browser = 'unknown';
  $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
  if (preg_match('~(?:msie ?|trident.+?; ?rv: ?)(\d+)~', $ua, $matches)) $browser = 'ie ie'.$matches[1];
  elseif (preg_match('~(safari|chrome|firefox)~', $ua, $matches)) $browser = $matches[1];
  //echo $browser."<br>";

  $sql = "INSERT INTO guestbook (name, address, email, message, datetime, browser, ip)
  VALUES ('$name', '$address','$email', '$message', '$datetime', '$browser', '$ip')";


  if ($conn->query($sql) === TRUE) {
      echo "New entry created successfully for <b>".$name."</b><br><br>"."
      <td><strong><a href='guestbook.php'>Add another Contact</a> </strong></td>
      <td><strong><a href='viewguestbook.php'>View Guestbook</a> </strong></td>";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
