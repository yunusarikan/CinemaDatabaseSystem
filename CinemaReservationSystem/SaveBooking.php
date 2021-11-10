<body>

    <img  src="https://s3.cloud.ngn.com.tr/clu2-static/loginlogo/7D82EE5893743F81692B356B39F174CB.png" style="width:50px;height:50px; float: left;" > 


 <ul class="ul" style="float: left;">
    <li class="li"><a class="lia" href="Admin.php">ATÜ CINEMA</a></li>
</ul>
<br>
<br>
<br>
</body>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/odometer.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/main.css">

  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">


</head>
<body >

<?php     
require_once("connection.php");
$movieName;
$movieDate;
$showTime;
$hallNumber;
$seatİnforow;
$seatİnfocolumn;
$price;
if(isset($_POST['submited']))
{
    $s_id=$_POST['show_id'];
    $c_id=$_POST['seat'];
    $t_id=$_POST['type'];
    $ss_id=0;
    $save="INSERT INTO show_seat (ss_id,s_id,c_id) VALUES ('','$s_id','$c_id')";
    if($ss=mysqli_query($link,$save)){
        $g="SELECT * from show_seat WHERE s_id='".$s_id."' and c_id='".$c_id."' ";
        if($s=mysqli_query($link,$g)){
            if(mysqli_num_rows($s)){
            }
        $ar=mysqli_fetch_assoc ($s);
        $ss_id=$ar['ss_id'];
        }else{
            echo "Someting went wrong";
            mysqli_close($link);
            header( "refresh:4;url=AllMovies.php" );
        }
    }
    if($ss_id!=0){
    $sql="INSERT INTO booking (b_id,s_id,ss_id,Id) VALUES ('','$s_id','$ss_id','$t_id')";
    if($results=mysqli_query($link,$sql))
    {
        $minformation= "SELECT * from movies WHERE m_id IN(SELECT m_id from seans WHERE s_id='".$s_id."' )";
        $sinformation= "SELECT * from seans WHERE s_id='".$s_id."'";
        $cinformation= "SELECT * from cinema_seat WHERE c_id='".$c_id."'";
        $tinformation= "SELECT * from type WHERE Id='".$t_id."'";
        $a=mysqli_query($link,$sinformation);
        $b=mysqli_query($link,$cinformation);
        $c=mysqli_query($link,$tinformation);
        $m=mysqli_query($link,$minformation);
        $rowone=mysqli_fetch_array($a);
        $rowtwo=mysqli_fetch_array($b);
        $rowthree=mysqli_fetch_array($c);
        $rowfour=mysqli_fetch_array($m);
        $movieName=$rowfour['m_name'];
		$movieDate=$rowone['s_date'];
		$showTime=$rowone['s_startTime']. '-'.$rowone['s_endTime'];
		$hallNumber=$rowone['h_id'];
		$seatİnforow=$rowtwo['c_row'];
		$seatİnfocolumn=$rowtwo['c_column'];
		$price=$rowthree['Price'];
        mysqli_close($link);
        
    }else{
        echo "Someting went wrong";
        mysqli_close($link);
        
    }
    }
}

$degisken= "sss";

 echo <<<deneme
<body>

<div style="background-color:white ; margin-left:600px;" red class="col-lg-3">
  <div style="background-color:red ;" class="booking-summery bg-one">
      <h4 style="background-color:red ;"class="title">booking summery</h4>
      <ul>
          <li>
              <h6 style="color: red;" class="subtitle">$movieName</h6>
              <span class="info"></span>
          </li>
          <li>
              <h6 class="subtitle"><span>Show Date:</span><span>$movieDate</span></h6>
              <div style="color: white;" class="info"><span>Show Hours: </span> <span>$showTime</span></div>
          </li>
          <li>
              <h6 class="subtitle mb-0"><span>Tickets Price</span><span>$price</span></h6>
          </li>
      </ul>
      <ul  style="color: white;" class="side-shape">
          <li>
              
              <span style="color: white;" class="info"><span>Hall Number: </span>$hallNumber</span>
          </li>
          <li>
              <h6 class="subtitle"><span>Seat:</span>$seatİnforow-$seatİnfocolumn</h6>
          </li>
      </ul>
      
  </div>
  <div style="background-color:red ;"class="proceed-area  text-center">
      <h6 class="subtitle"><span>Amount Payable</span><span>$price</span></h6>    
  </div>
</div>
</div>
</div>
</div>
</div>
</body>
deneme;
?>
</body>
</html>
    <style >
    body{
        background-color: white;
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

</style>
