<?php
session_start();
if($_SESSION['Active'] == false){
    header("location:login.php");
    exit;} ?>