<?include("NavBar.php");
include("conninfo.php");
$title=$_POST["title"];
$desc=$_POST["desc"];
$fepdate=$_POST["fepdate"];
$noep=$_POST["noep"];
$genre=$_POST["genre"];
$video=$_POST["video"];

$path="Media/";
$now=time();
$path = $path.$now."-".basename($_FILES['imgfile']['name']);?>

<html>
<head>
<title>Insert TV Show</title>
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
echo "The image file has been uploaded.";
}
else
{
echo "There was an error uploading the image file, please try again!";?><br>
<a href="addtvshow.php">Back to add TV show page</a>
<?
}

$query="INSERT INTO tvshows(title,description,firstepisodedate,noofepisodes,genre,video,poster) 
VALUES('$title','$desc','$fepdate','$noep','$genre','$video','$path')";
$result=mysqli_query($link,$query) or die("Couldn't execute query");
?>

TV Show details have been edited. <br>
<a href="showall.php">Back to admin page</a>
</div>
</body>
</html>