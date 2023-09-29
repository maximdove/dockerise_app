<?php
session_start();

$conn = mysqli_connect(
  'db',         // <-- This should be 'db' not 'localhost'
  'root',
  'password123',
  'php_mysql_crud'
) or die(mysqli_error($conn));  // <-- Fixed the typo here

?>
