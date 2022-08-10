<?include "NavBar.php";
include "conninfo.php"; ?>

<html>
<head>
<title>TV Shows</title>
</head>
<body>
<div class="container">
<?
$tvid=$_POST["requiredid"];

$query="SELECT * FROM tvshows, genre WHERE tvid=$tvid AND tvshows.genre=genre.GenreID";

$result=mysqli_query($link,$query);

?>
<?
while($r=mysqli_fetch_array($result))
{?>
<h1><?echo $r["title"];?></h1>
<iframe width="500" height="300" src="<?echo $r["video"];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br>
<?echo $r["description"];?><br>
<b>First Episode Date:</b> <?$rd= $r["firstepisodedate"];
echo date('d M Y', $rd);?><br>
<b>Number of Episodes:</b> <?echo $r["noofepisodes"];?><br>
<b>Genre:</b> <?echo $r["genrename"];?>
<?
}
?>

</div><br><br>
</body>
</html>