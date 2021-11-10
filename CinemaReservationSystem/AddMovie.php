<body>
  <a  href="Admin.php">

    <img  src="https://s3.cloud.ngn.com.tr/clu2-static/loginlogo/7D82EE5893743F81692B356B39F174CB.png" style="width:50px;height:50px; float: left;" > </a>


 <ul class="ul" style="float: left;">
    <li class="li"><a class="lia" href="Admin.php">ATÜ CINEMA</a></li>
</ul>

 <ul class="ul">
    <li class="li" ><a class="lia" href="Index.php">Home</a></li>
    <li class="li"><a class="lia" href='AllMovies.php'>Movies & Booking</a></li>
    <li class="li"><a class="lia" href='Hall.php'>View Halls</a></li>
    <li class="li"><a class="lia" href='Show.php'>Shows & Show Operations</a></li>
	<li class="li"><a class="lia" href='Index.php'>Signout</a></li>
  </ul>
<br>
<br>
<br>
</body>
<?php 
if(isset($_POST['submited']))
{
	require_once("connection.php");
	$name=$_POST['movie_name'];
	$director=$_POST['director'];
	$subject=$_POST['subject'];
	$description=$_POST['description'];
	$genre=$_POST['genre'];
	$length=$_POST['length'];
	$visiondate=$_POST['visiondate'];
	$date=date("Y-m-d",strtotime($visiondate));
	$sql="INSERT INTO movies (m_id,m_name,m_director,m_subject,m_description,m_genre,m_length,m_visionDate) VALUES ('','$name','$director','$subject','$description','$genre','$length','$date')";
	if($results=mysqli_query($link,$sql))
	{
		echo "<h2>Movie added</h2>";
		header( "refresh:4;url=AllMovies.php" );
		mysqli_close($link);
	}else{
		echo "Someting went wrong";
	}
}else{
echo "Add a new movie";
echo "<form action='AddMovie.php' method='POST'>"; 
echo"<br/>";
echo "Movie name: <br/> <input type='text' name='movie_name'>";
echo"<br/>";
echo "Director name:<br/><input type='text' name='director'>";
echo"<br/>";
echo "Subject:<br/> <input type='text' name='subject'>";
echo"<br/>";
echo "Description: <br/><input type='text' name='description'>";
echo"<br/>";
echo "Genre:<br/> <input type='text' name='genre'>";
echo"<br/>";
echo "Length: <br/><input type='text' name='length'>";
echo '<br/>';
echo "Vision Date:<br/> <input type='date' name='visiondate'>";
echo '<br/>';
echo "<input type='hidden' name='submited' value='1'/>";
echo "<input class=ss type='submit' value='Add'>";
echo "<form/>";
}
?>
<head>
<title>Page Title</title>
<style>
input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #cb2a21;
  border-radius: 4px;
}
.ul{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #cb2a21;
  float: right;
}

.li{
  float: left;
}

.lia {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


#orta{
 
 position:absolute;
 left: 40%;
 top: 30%;

 }
 .ss{
  
   padding: 4px 8px;
  text-align: center; 
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  background-color: white; 
  color: black; 
  border: 2px solid #cb2a21;
  margin-left: 180;
}

</style>
</head>