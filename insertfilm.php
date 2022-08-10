<?include ("NavBar.php");
include("conninfo.php");
$title=$_POST["title"];
$desc=$_POST["desc"];
$rd=$_POST["rd"];
$ar=$_POST["ar"];
$genre=$_POST["genre"];
$length=$_POST["length"];
$video=$_POST["video"];

$path="Media/";
$now=time();
$path = $path.$now."-".basename($_FILES['imgfile']['name']);?>

<html>
<head>
<title>Insert Film</title>
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
echo "The file has been uploaded";
}
else
{
echo "There was an error uploading the file, please try again!";?><br>
<a href="addfilm.php">Back to Add Film page</a>
<?
}

$query="INSERT INTO films(title,description,releasedate,agerating,genre,length,video,poster) 
VALUES('$title','$desc','$rd','$ar','$genre','$length','$video','$path')";
$result=mysqli_query($link,$query);
?>
</div>
</body>
</html>