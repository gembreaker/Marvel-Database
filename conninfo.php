<?php
$strServer="localhost";   
$strDatabase="marvel_database";   // CHANGE TO YOUR DATABASE NAME HERE
$strUser="root";    
$strPwd="";    // Leave blank for WAMPServer

$link=mysqli_connect($strServer,$strUser,$strPwd,$strDatabase)or die("Could not open database");
?>