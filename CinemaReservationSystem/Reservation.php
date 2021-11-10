<body>

    <img  src="https://s3.cloud.ngn.com.tr/clu2-static/loginlogo/7D82EE5893743F81692B356B39F174CB.png" style="width:50px;height:50px; float: left;" > 


 <ul class="ul" style="float: left;">
    <li class="li"><a class="lia" href="">ATÜ CINEMA</a></li>
</ul>
<br>
<br>
<br>
</body>
<?php 
require_once("connection.php");
$sql="SELECT * from cinema_seat WHERE h_id IN (SELECT h_id from seans WHERE s_id=".$_POST['show']." )";;
if($results=mysqli_query($link,$sql))
{
	echo "<form action='SaveBooking.php' method='POST'>"; 
	if(mysqli_num_rows($results)>0)
	{
		echo '<input type="hidden" name="show_id" value='.$_POST['show'].'>';
		echo "Select a seat:";
		echo"<br/><br/>";
		echo '<select name="seat">';
		while($row=mysqli_fetch_array($results)){
			$qry="SELECT * from show_seat WHERE s_id=".$_POST['show']." and c_id='".$row['c_id']."'";
			$rs=mysqli_query($link,$qry);
			if(mysqli_num_rows($rs)!=0){
				echo '<option disabled="disabled">'.$row['c_row'].'-'.$row['c_column'].' -reserved</option>';
			}else{
				echo '<option value="'.$row['c_id'].'">'.$row['c_row'].'-'.$row['c_column'].'</option>';
			}
		}
		echo '</select>';
		echo"<br/><br/>";
	}
		$tp="SELECT * from type";
		$t=mysqli_query($link,$tp);
		echo "Select a customer type:";
		echo"<br/><br/>";
		echo '<select name="type">';
		while($r=mysqli_fetch_array($t)){
			echo '<option value="'.$r['Id'].'">'.$r['Type'].'-'.$r['Price'].'</option>';
		}
		echo '</select>';
		echo"<br/><br/>";
		echo"<br/><br/>";
		echo "<input type='hidden' name='submited' value='1'/>";
		echo "<input class=ss type='submit' value='Save'>";
		echo"<br/>";
		echo "<form/>";
}
?>
<body>
<img  src="saloon.png" style="margin-left:200px;"; >
</body>
	<style >
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


.ul{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #cb2a21;
  float: right;
}
select {
    color: white;
   font-family: Sans-serif;
  width: 50%;
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: #cb2a21;
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