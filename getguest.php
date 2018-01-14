<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];
//echo $q;

$con = mysqli_connect('guestbook','alpha','AlphaTest1','test');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
else {
  mysqli_select_db($con,"test");
  $sql="SELECT * FROM guestbook WHERE name LIKE '".$q."%'";
  $result = mysqli_query($con,$sql);

  echo "<table>
  <tr>
  <th>Name</th>
  <th>Address</th>
  <th>Email</th>
  <th>Message</th>
  <th>Time Added</th>
  <th>OS</th>
  <th>Browser</th>
  <th>IP</th>
  </tr>";
  while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['address'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['message'] . "</td>";
      echo "<td>" . $row['datetime'] . "</td>";
      echo "<td>" . $row['os'] . "</td>";
      echo "<td>" . $row['browser'] . "</td>";
      echo "<td>" . $row['ip'] . "</td>";
      echo "</tr>";
  }
  echo "</table>";
  mysqli_close($con);
}
?>
</body>
</html>
