<?php
$DB_host = "";
$DB_user = "admin";
$DB_pass = "lab-password";
$DB_name = "schoolmanagement";
try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name};port=3306",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}
?>