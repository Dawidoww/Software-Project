<?php
/**
 * Configuration for database connection
 *
 */

$host = "localhost";
$username = "root";
$password = "Spajdermen18";
$dbname = "Critical_Fitness";
$dsn = "mysql:host=$host;dbname=$dbname";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);