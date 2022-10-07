<?php

include("config/connection.php");

$sql = "UPDATE notifications SET active='0'";
$res = mysqli_query($connection, $sql);
if ($res) {
  echo "Success";
} else {
  echo "Failed";
}
?>
