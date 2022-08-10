<?session_start();
include "NavBar.php";
include "conninfo.php";?>
<html>
<head>
<title>Edit Film</title>
</head>
<body>
<br>
<div class="container">
<?
$filmid=$_POST["filmid"];

$query="SELECT * FROM films, genre WHERE filmid=$filmid AND films.genre=genre.GenreID";
$result=mysqli_query($link,$query);

$r=mysqli_fetch_array($result);

?>
<h1>Edit Film - <?echo $r["title"];?></h1>
<form action="commiteditfilm.php" method="post" enctype="multipart/form-data">

Title: <input type="text" name="title" value="<?echo $r["title"];?>"><br>
Description: <input type="text" name="desc" value="<?echo $r["description"];?>"><br>
Release Date: <input type="text" name="rd" value="<?echo $r["releasedate"];?>"><br>
Age Rating: <input type="text" name="ar" value="<?echo $r["agerating"];?>"><br>
Genre: <input type="text" name="genre" value="<?echo $r["genre"];?>"><br>
Length: <input type="text" name="length" value="<?echo $r["length"];?>"><br>
Video: <input type="text" name="video" value="<?echo $r["video"];?>"><br>
Poster: <br><img src="<?echo $r["poster"];?>" style="width="20px" height="200px";">
<input type="file" name="imgfile"> <br>
<input type="hidden" name="filmid" value="<?echo $filmid;?>">
<br><br>
<input type="submit" value="Commit Edit">
</form>
</div>
</body>
</html>