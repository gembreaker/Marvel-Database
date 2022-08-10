<?session_start();
include"NavBar.php";?>
<html>
<head>
<title>Add TV Show</title>
</head>
<body><br>
<div class="container">
<h2>Add a TV Show</h2>
Please enter a new TV show:<br><br>

<form action="inserttvshow.php" method="post" enctype="multipart/form-data">

Title: <input type="text" name="title"><br>
Description: <input type="text" name="desc"><br>
First Episode Date: <input type="text" name="fepdate"><br>
Number of Episodes: <input type="text" name="noep"><br>
Genre: <input type="text" name="genre"><br>
Video: <input type="text" name="video"><br>
Upload image: <input type="file" name="imgfile"><br><br>
<input type="submit" value="Submit">
</form>
<br>
</div>
<br>
</body>
</html>