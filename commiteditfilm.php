<?session_start();
include ("NavBar.php");
include "conninfo.php";
$title=$_POST["title"];
$desc=$_POST["desc"];
$rd=$_POST["rd"];
$ar=$_POST["ar"];
$genre=$_POST["genre"];
$length=$_POST["length"];
$video=$_POST["video"];
$filmid=$_POST["filmid"];

$path="Media/";
$now=time();
$path = $path.$now."-".basename($_FILES['imgfile']['name']);?>

<html>
<head>
<title>Edit Film</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> 
</head>

<body>
<div class="container">
<?
if(move_uploaded_file($_FILES['imgfile']['tmp_name'],$path))
{
echo "The file has been uploaded";
<a href="showall.php">Back to admin page</a>
}
else
{
echo "There was an error uploading the file, please try again!";?><br>
<a href="addfilm.php">Back to edit film page</a>
<?
}
$query="UPDATE films SET title='$title',description='$desc',
releasedate='$rd',agerating='$ar',genre='$genre',length='$length',video='$video',poster='$path'
WHERE filmid=$filmid LIMIT 1";
$result=mysqli_query($link,$query) or die("Couldn't execute query");?>
</div>
</body>
</html>