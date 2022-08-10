<?session_start();
include "NavBar.php";
include("conninfo.php"); 
$idtodelete=$_POST["requiredid"];

$query = "DELETE FROM films WHERE filmid='$idtodelete'";
$result=mysqli_query($link,$query);

?>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="CSS/index.css">
<meta charset="utf-8">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> 
</head>

<body>
<br>
<div class="container">
Your record has been deleted.<br>
<a href="showall.php"> Return to admin page. </a>