<!DOCTYPE html>
<html lang="en">

<?php
require 'conn.php';
    
$menu = 'senarai';
if (isset($_GET['menu'])) $menu = $_GET['menu'];
require "$menu.php";
?>