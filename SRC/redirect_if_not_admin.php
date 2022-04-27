<?php
if($_SESSION['trainerName'] != 'admin@criticalfitness.com'){
    header("location:home.php");
    exit;} ?>