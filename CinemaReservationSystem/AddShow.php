
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
require_once("connection.php");
$q="SELECT * from hall";
$qe="SELECT * from movies";
$res=mysqli_query($link,$q);
$rs=mysqli_query($link,$qe);
if(isset($_POST['submited']))
{
	$date=$_POST['date'];
	$starttime=$_POST['starttime'];
	$endtime=$_POST['endtime'];
	$m_id=$_POST['movie'];
	$h_id=$_POST['hall'];
	$date=date("Y-m-d",strtotime($date));
	$starttime=date('H:i:s',strtotime($starttime));
	$endtime=date('H:i:s',strtotime($endtime));
	$comp="SELECT * from seans WHERE h_id='".$h_id."'";
	$dt=mysqli_query($link,$comp);
	$flag=0;
	while($rw=mysqli_fetch_array($dt)){
		if($date==$rw['s_date']){
			if(($starttime==$rw['s_startTime'] && $rw['s_endTime']==$endtime)||($starttime<$rw['s_startTime'] && $rw['s_endTime']>$endtime)||
			($starttime<$rw['s_startTime'] && $rw['s_endTime']<$endtime)||
			($starttime>$rw['s_startTime'] && $rw['s_endTime']<$endtime)||
			($starttime>$rw['s_startTime'] &&$starttime<$rw['s_endTime']&& $rw['s_endTime']<$endtime)){
				$flag=1;
			}
		}
	}
	if($flag==1){
		echo "Time intervals coincided";
		mysqli_close($link);
		header( "refresh:4;url=AddShow.php" );
	}else{
	$sql="INSERT INTO seans (s_id,s_date,s_startTime,s_endTime,m_id,h_id) VALUES ('','$date','$starttime','$endtime','$m_id','$h_id')";
	if($results=mysqli_query($link,$sql))
	{
		echo "<h2>Show added</h2>";
		header("refresh=2;url=AllMovies.php");
		mysqli_close($link);
	}else{
		echo "Someting went wrong";
	}
	}
}else{
echo "Add a new show";
echo "<form action='AddShow.php' method='POST'>"; 
echo"<br/><br/>";;
echo "Date: <input type='date' name='date'>";
echo"<br/><br/>";
echo "Start Time: <input type='time' name='starttime'>";
echo"<br/><br/>";;
echo "End Time: <input type='time' name='endtime'>";
echo"<br/><br/>";
echo "Selec a Movie:";
echo"<br/><br/>";
echo '<select name="movie">';
if($rs){
while($row=mysqli_fetch_array($rs))
	{
		echo '<option value="'.$row['m_id'].'">'.$row['m_name'].'</option>';
	}
}
echo '</select>';
echo"<br/><br/>";
echo "Selec a hall:";
echo"<br/><br/>";
echo '<select name="hall">';
if($res){
while($row=mysqli_fetch_array($res))
	{
		echo '<option value="'.$row['h_id'].'">'.$row['h_id'].'</option>';
	}
}
echo '</select>';
echo"<br/><br/>";
echo "<input type='hidden' name='submited' value='1'/>";
echo "<input class=ss type='submit' value='Add'>";
echo "<form/>";
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
  margin-left: 120;
}

</style>
</head>