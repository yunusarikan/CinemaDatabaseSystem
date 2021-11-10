
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
$sql="SELECT * from seans WHERE m_id='".$_GET['id']."'";
$results=mysqli_query($link,$sql);
    if(mysqli_num_rows($results)>0)
    {
        echo "<form action='Reservation.php' method='POST'>"; 
        echo "Select a show:";
        echo"<br/><br/>";
        echo '<select name="show">';
        while($row=mysqli_fetch_array($results))
        {
        echo '<option value="'.$row['s_id'].'"> show date:'.$row['s_date'].'/show hours: '.$row['s_startTime'].' -'.$row['s_endTime'].' </option>';
        }
        echo '</select>';
    echo"<br/><br/>";
    echo "<input type='hidden' name='submited' value='1'/>";
    echo "<input class=ss type='submit' value='Save'>";
    echo"<br/><br/>";
    echo "<form/>";

    }
else
{
    echo "There is no any show for choosen movie";
}


?>
	<style >
	select {
    color: white;
   font-family: Sans-serif;
  width: 50%;
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: #cb2a21;
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
  float: right;
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