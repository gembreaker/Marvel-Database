<? session_start();
include("NavBar.php");
include("conninfo.php");
?>
<html>
<head>
<title>TV Shows</title>
</head>
<body>
<section class="jumbotron-tv">
	<h1 class="jumbotext">TV Shows</h1>
</section>
<div class="container" style="margin-top: -20px;">
<form action="dosearchtvshow.php" method="post">
Search:
<input type="text" name="thesearch">

<div class="btn-group">
<input type="submit" class="button">
</div>
</form>
<?
$query=("SELECT * from tvshows");  

$result = mysqli_query($link,$query) or die("Couldn't execute query");?>

<div class="row">
<?
while($r=mysqli_fetch_array($result))  
{?>
	<div class="col-md-4">
		<div class="thumbnail">
			<img src="<?echo $r["poster"];?>" width='130px'>
			<form action="tv-expand.php" method="post" style="text-align: center;">
				<input type="hidden" value="<?echo $r["tvid"];?>" name="requiredid">
				<input type="submit" value="<?echo $r["title"];?>" class="titles">
			</form>
			<?echo $r["description"];?><br><br><?
			if(@$_SESSION["admintype"]==1)
			{?>
			<div class="btn-group">
			<form action="edittvshow.php" method="post">
				<input type="hidden" name="tvid" value="<?echo $r["tvid"];?>">
				<input type="submit" value="Edit" class="button">
			</form><br>
			<form action="deletetvshow.php" method="post">
				<input type="hidden" value="<?echo $r["tvid"];?>" name="requiredid">
				<input type="submit" value="Delete" class="button">
			</form>
			</div>
			<?}
			?>
		</div>
	</div>
	<?
}
?>
</div>
</div>
<br>
</body>
</html>