

<body>
	<a  href="Customer.php">

    <img  src="https://s3.cloud.ngn.com.tr/clu2-static/loginlogo/7D82EE5893743F81692B356B39F174CB.png" style="width:50px;height:50px; float: left;" > </a>


 <ul class="ul" style="float: left;">
    <li class="li"><a class="lia" href="Customer.php">ATÜ CINEMA</a></li>
</ul>

 <ul class="ul">
    <li class="li" ><a class="lia" href="Customer.php">Home</a></li>
    <li class="li"><a class="lia" href='CustomerBooking.php'>Movies & Booking</a></li>
	<li class="li"><a class="lia" href='Index.php'>Signout</a></li>
  </ul>
<br>
<br>
<br>
</body>



<?php 
require_once("connection.php");
$sql="SELECT * from hall";
if($result=mysqli_query($link,$sql))
{
	if(mysqli_num_rows($result)>0)
	{
		echo "<table><tr><th>Saloon No</th><th>Capacity</th><th>Islemler</th></tr>";
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr><td>".$row['h_id']."</td><td>".$row['h_capacity']."</td>";
            echo '<td><a href="Saloon'.$row['h_id'].'.php?id='.$row['h_id'].'">See</a></td></tr>';
		}
		echo "<tr><td></td><td></td><td>";
		echo "</table>";
	}else
	{
		echo "Başarısız işlem";
	}
	
}
mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
	<style >
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
	}
table {
  border-collapse: collapse;
  width: auto;
  margin-left:auto; 
    margin-right:auto;
}
td a{
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

}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #cb2a21;
  color: white;
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

</style>



</body>



</html>