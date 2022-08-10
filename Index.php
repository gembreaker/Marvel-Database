<? session_start();
include "NavBar.php";?>
<head>
<title>Home Page</title>
</head>
<body>
<img src="Media/HomePage.jpg" style="width: 100%;">
<?include("conninfo.php");?>
<div class="container" style="margin-top: -20px;">
	<!--row 1-->
		<div class="row">
			<div class="col-12 col-md-6">
				<h1>Explore the full list of Marvel films</h1>
				<p>
					Click <a href="Films.php">here</a> to learn more about each film released in the current marvel universe.
				</p>
			</div>
			<div class="col-12 col-md-6">
				<?
					$query=("SELECT * from films limit 5");  
					$result = mysqli_query($link,$query) or die("Couldn't execute query");
					while($r=mysqli_fetch_array($result)){?>
					<img src="<?echo $r["poster"];?>" width='19%' height='150px'>
					<?
					}
					?>
			</div>
		</div><br />
	<!--row 2-->
		<div class="row">
			<div class="col-12 col-md-6 order-md-2">
				<h1>Discover the broad range of marvel TV shows</h1>
				<p><a href="TVShows.php">Click here</a> for more information on marvel TV shows.</p>
			</div>
			<div class="col-12 col-md-6">
				<?
					$query=("SELECT * from tvshows limit 5");  
					$result = mysqli_query($link,$query) or die("Couldn't execute query");
					while($r=mysqli_fetch_array($result)){?>
					<img src="<?echo $r["poster"];?>" width='19%' height='150px'>
					<?
					}
					?>
			</div>
		</div><br />
	<!--row 3-->
		<div class="row">
			<div class="col" style="text-align: center;">
				<h1>Sign up to contribute to our database by adding new Marvel films and TV shows</h1>
				<p>Click <a href="search.php"> here</a>.</p>
				<img src="Media/Marvel.jpg" style="width: 70%; align-content: center;">
			</div>
		</div><br />
	</div>
	<br>
</body>