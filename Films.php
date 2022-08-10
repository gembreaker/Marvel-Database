<? session_start();
include("NavBar.php");
include("conninfo.php");?>
<html>
<head>
<title>Films</title>
</head>
<body>
<!-- Jumbotron image -->
<section class="jumbotron-fluid">
	<h1 class="jumbotext">FILMS</h1>
</section>
<div class="container" style="margin-top: -20px;">

<!-- Search bar -->
<form action="dosearch.php" method="post">
Search:
<input type="text" name="thesearch">

<div class="btn-group">
<input type="submit" class="button">
</div>
</form>

<?

$limit=6;  			//how many results on a page
@$s = $_GET['s'] ; 		//current page

$query="SELECT * FROM films ORDER BY releasedate";
$result = mysqli_query($link,$query) or die("Couldn't execute query"); 
$numrows=mysqli_num_rows($result);//find number of rows

//---------show the results?>


<?if ($numrows>0)
{

            // determine if s has been passed to script, if not use 0 
            if (empty($s)) 
            { 
            $s=0; 
            } 

            $query="SELECT * FROM films ORDER BY releasedate";
            $query .= " LIMIT $s,$limit";  //get next set of results
            $result = mysqli_query($link,$query) or die("Couldn't execute query"); 
            
          
            $count = 1 + $s ; ?>
           
<!-- Display films -->		   
<div class="row">
<?
while($r=mysqli_fetch_array($result))  
{?>
    <div class="col-md-4">
      <div class="thumbnail">
		<img src="<?echo $r["poster"];?>" width='130px'>
		<form action="film-expand.php" method="post" style="text-align: center;">
			<input type="hidden" value="<?echo $r["filmid"];?>" name="requiredid">
			<input type="submit" value="<?echo $r["title"];?>" class="titles">
		</form>
			<?echo $r["description"];?><br><br><?
			if(@$_SESSION["admintype"]==1)
			{?>
			<div class="btn-group">
			<form action="editfilm.php" method="post">
				<input type="hidden" name="filmid" value="<?echo $r["filmid"];?>">
				<input type="submit" value="Edit" class="button">
			</form><br>
			<form action="deletefilm.php" method="post">
				<input type="hidden" value="<?echo $r["filmid"];?>" name="requiredid">
				<input type="submit" value="Delete" class="button">
			</form>
			</div>
			<?}
			?>
		</div>
	</div>
	<?
}

////////////////////// Pagination ////////////////////////
$currPage = (($s/$limit) + 1); 
            
            
            echo "<br />"; 

            //link to other results
            
if ($s>=1) 	// bypass “previous” link if s is 0			
{ 
            $prevs=($s-$limit); 
           
echo "&nbsp;<a href=\"Films.php?s=$prevs\">&lt;&lt;Prev
Page</a>&nbsp;&nbsp;"; 
 	 } 
            
            // calculate number of pages needing links 
            $pages=intval($numrows/$limit); 
            
            
            if ($numrows%$limit) 
{ 
            $pages++; 

            } 

//----start page links
$currentpage=($s/$limit+1);
if($pages>2)
{
 for ($t=1;$t<$pages+1;$t++)
 {
 echo(" ");
if($t!=$currentpage)
     {
 $news=($t*$limit)-$limit;
     echo("<a href=\"Films.php?s=$news\">");
      }
 echo($t);
  if($t!=$currentpage)
     {
     echo("</a>");
     }
echo(" ");

 }
}
//----end page links

            
            
// check to see if last page 
if (!((($s+$limit)/$limit)==$pages) && $pages!=1)  // not last page so 
	// give ”next” link 
{ 
$news=$s+$limit; 
echo "&nbsp;<a href=\"Films.php?s=$news\">Next page&gt;&gt;</a>"; 
} 
            
$a = $s + ($limit) ; 
            if ($a > $numrows) { $a = $numrows ; } 
            $b = $s + 1 ; 
            echo "<p><b>Showing results $b to $a of $numrows</b></p>"; 
            }

?>
</div>
</div>
</body>
<br>
</html>