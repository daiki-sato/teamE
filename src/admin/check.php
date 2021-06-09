<?php
session_start();
require('../dbconnect.php');
if (isset($_SESSION['user_id']) && $_SESSION['time'] + 60 * 60 * 24 > time()) {
    $_SESSION['time'] = time();
} else {
  header('Location: http://' . $_SERVER['HTTP_HOST'] . '/admin/login.php');
  exit();
}
?>