<?include "NavBar.php";
include "conninfo.php"; ?>

<html>
<head>
<title>Film</title>
</head>
<body>
<div class="container">
<?
$filmid=$_POST["requiredid"];

$query="SELECT * FROM films, genre WHERE filmid=$filmid AND films.genre=genre.GenreID";

$result=mysqli_query($link,$query);

?>
<?
while($r=mysqli_fetch_array($result))
{?>
<h1><?echo $r["title"];?></h1>
<iframe width="500" height="300" src="<?echo $r["video"]?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br>
<?echo $r["description"];?><br>
<b>Release Date:</b> <?$rd= $r["releasedate"]; echo date('d M Y', $rd);?><br>
<b>Age Rating:</b> <?echo $r["agerating"];?><br>
<b>Genre:</b> <?echo $r["genrename"];?><br>
<b>Length</b> <?echo $r["length"];?><br>
<?
}
?>

</div><br>
</body>
</html>