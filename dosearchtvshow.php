<?include "NavBar.php";
include "conninfo.php";
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="CSS/index.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
$mysearch=$_POST["thesearch"];

$query="SELECT * FROM tvshows WHERE title like '$mysearch'";
$result=mysqli_query($link,$query);

$nr=mysqli_num_rows($result);
echo $nr." rows found";
?><br><br><?
while($r=mysqli_fetch_array($result))  
{?>
	<div class="col-md-4">
		<div class="thumbnail">
			<img src="<?echo $r["poster"];?>" width='100px'>
			<form action="tv-expand.php" method="post" style="text-align: center;">
				<input type="hidden" value="<?echo $r["tvid"];?>" name="requiredid">
				<input type="submit" value="<?echo $r["title"];?>" class="titles">
			</form>
			<?echo $r["description"];?>
		</div>
	</div>
	<?
}
?>