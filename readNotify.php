<?php

include("config/connection.php");

$sql = "UPDATE notifications SET status='Inactive' where client_type='Patient'";
$res = mysqli_query($connection, $sql);
if ($res) {
  echo "Success";
} else {
  echo "Failed";
}
?>
