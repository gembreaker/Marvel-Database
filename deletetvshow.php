<?include"NavBar.php";
include("conninfo.php");?>
<html>
<head>
<title>Add TV Show</title>
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="CSS/index.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body><br>
<div class="container">
<?
$idtodelete=$_POST["requiredid"];

$query = "DELETE FROM tvshows WHERE tvid='$idtodelete'";
$result=mysqli_query($link,$query) or die("Couldn't execute query".?><br><a href="showall.php">Back to admin page.</a><?);;

?>

Your record has been deleted.
<a href="showall.php">Back to admin page</a>
</body>
</html>