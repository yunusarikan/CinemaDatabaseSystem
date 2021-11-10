
<body>
  <a  href="Admin.php">

    <img  src="https://s3.cloud.ngn.com.tr/clu2-static/loginlogo/7D82EE5893743F81692B356B39F174CB.png" style="width:50px;height:50px; float: left;" > </a>


 <ul class="ul" style="float: left;">
    <li class="li"><a class="lia" href="Admin.php">ATÜ CINEMA</a></li>
</ul>

 <ul class="ul">
    <li class="li" ><a class="lia" href="Admin.php">Home</a></li>
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
require_once("connection.php");
if(count($_POST)>0)
{
	
	$id=$_POST['id'];
	$sql="DELETE FROM seans WHERE s_id='".$id."'";
	if($results=mysqli_query($link,$sql))
	{
		echo "Show deleted";
		mysqli_close($link);
		header( "refresh:4;url=Show.php" );
	}else
	{
		echo "Sometingh went wrong";
		mysqli_close($link);
		header( "refresh:4;url=Show.php" );
		
	}
	
}else
{
$sql="SELECT * from seans WHERE s_id='".$_GET['id']."'";
if($results=mysqli_query($link,$sql))
{
	if(mysqli_num_rows($results)>0)
	{
	$row=mysqli_fetch_array($results);
	echo 'Are you sure you want to delete the show?';
	echo "<form action='' method='POST'>"; 
	echo '<input type="hidden" name="id" value='.$row['s_id'].'>';
	echo "<input class=ss type='submit' value='Delete'>";
	echo "<form/>";
	}
}
}


?>
<head>
<title>Page Title</title>
<style>
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
	float: right;
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
  float: left;
}

</style>
</head>