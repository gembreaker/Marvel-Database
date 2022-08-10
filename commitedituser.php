<?session_start();
include("NavBar.php");
include "conninfo.php";
$fname=$_POST["fname"];
$lname=$_POST["sname"];
$username=$_POST["uname"];
$password=$_POST["pword"];
$dob=$_POST["dob"];
$email=$_POST["email"];
$userid=$_POST["userid"];

$path="Media/";
$now=time();
$path = $path.$now."-".basename($_FILES['imgfile']['name']);?>

<html>
<head>
<title>Edit Profile</title>
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="CSS/index.css">
<meta charset="utf-8">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> 
</head>

<body>
<div class="container">
<?
if(move_uploaded_file($_FILES['imgfile']['tmp_name'],$path))
{
echo "The image file has been successfully updated."?><br><?;
}
else
{
echo "There was an error uploading the image file, please try again!";?><br>
<a href="addtvshow.php">Back to add TV show page</a>
<?
}

$query="UPDATE users SET firstname='$fname',lastname='$lname',
username='$username',password='$password',dob='$dob',email='$email',profilepic='$path'
WHERE userid=$userid LIMIT 1";
$result=mysqli_query($link,$query);

	$_SESSION["firstname"]=$fname;
	$_SESSION["lastname"]=$lname;
	$_SESSION["username"]=$username;
	$_SESSION["password"]=$password;
	$_SESSION["dob"]=$dob;
	$_SESSION["email"]=$email;
	$_SESSION["profilepic"]=$path;
	?>
Profile edited
<br><br>
<a href="Login.php">Back to home</a>