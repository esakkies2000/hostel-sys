<?php
$DB_host = "remotemysql.com";
$DB_user = "8tORhkIRdT";
$DB_pass = "BFuG1RXoBm";
$DB_name = "8tORhkIRdT";
try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}
?>
