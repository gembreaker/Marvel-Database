<?include "NavBar.php";
include "conninfo.php";

$tvid=$_POST["tvid"];

$query="SELECT * FROM tvshows WHERE tvid=$tvid";
$result=mysqli_query($link,$query);

$r=mysqli_fetch_array($result);

?>
<html>
<head>
<title>Edit TV Show</title>
</head>

<body>
<div class="container">
<h1>Edit TV Show - <?echo $r["title"];?></h1>
<form action="commitedittvshow.php" method="post" enctype="multipart/form-data">

Title: <input type="text" name="title" value="<?echo $r["title"];?>"><br>
Description: <input type="text" name="desc" value="<?echo $r["description"];?>"><br>
First Episode Date: <input type="text" name="fepdate" value="<?echo $r["firstepisodedate"];?>"><br>
No of Episodes: <input type="text" name="noofeps" value="<?echo $r["noofepisodes"];?>"><br>
Genre: <input type="text" name="genre" value="<?echo $r["genre"];?>"><br>
Video: <input type="text" name="video" value="<?echo $r["video"];?>"><br>
Poster: <br><img src="<?echo $r["poster"];?>" style="width="20px" height="200px";">
<input type="file" name="imgfile"> <br>
<input type="hidden" name="tvid" value="<?echo $tvid;?>">
<br><br>
<input type="submit" value="Commit Edit">
</form>
</div>
</body>
</html>