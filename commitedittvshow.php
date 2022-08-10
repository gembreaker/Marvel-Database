<?include("NavBar.php");
include "conninfo.php";
$title=$_POST["title"];
$desc=$_POST["desc"];
$fepdate=$_POST["fepdate"];
$noep=$_POST["noofeps"];
$genre=$_POST["genre"];
$video=$_POST["video"];
$tvid=$_POST["tvid"];

$path="Media/";
$now=time();
$path = $path.$now."-".basename($_FILES['imgfile']['name']);?>

<html>
<head>
<title>Edit TV Show</title>
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

$query="UPDATE tvshows SET title='$title',description='$desc',
firstepisodedate='$fepdate',noofepisodes='$noep',genre='$genre',video='$video',poster='$path'
WHERE tvid=$tvid LIMIT 1";
$result=mysqli_query($link,$query);?>

Details have been updated for the TV show: <?echo $title?>
<br><br>
<a href="showall.php">Back to admin page.</a>