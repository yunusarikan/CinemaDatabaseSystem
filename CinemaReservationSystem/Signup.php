<?php 
require_once("connection.php");
if(count($_POST)>0)
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$name=$_POST['name'];
	$sql="INSERT INTO employees_customers (Id,name,e_mail,authpass,type) VALUES('','$name','$email','$password','customer')";
	if($results=mysqli_query($link,$sql))
	{
		echo "Registration Successful";
		mysqli_close($link);
		header( "refresh:4;url=Index.php" );
	}else
	{
		echo "Something went wrong";
		mysqli_close($link);
		header( "refresh:4;url=Signup.php" );
	}
	
}

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<body>
    <div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			  <div id="second">
			      <div class="myform form ">
                        <div class="logo mb-3">
                           <div class="col-md-12 text-center">
                              <h1 >Signup</h1>
                           </div>
                        </div>
                        <form action="Signup.php" method="POST" name="registration">
                           <div class="form-group">
                              <label for="name">First Name</label>
                              <input type="text"  name="name" class="form-control" id="name" placeholder="Enter Name">
                           </div>
                           <div class="form-group">
                              <label for="email">Email address</label>
                              <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                           </div>
                           <div class="form-group">
                              <label for="password">Password</label>
                              <input type="password" name="password" id="password"  class="form-control" placeholder="Enter Password">
                           </div>
                           <div class="col-md-12 text-center mb-3">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Get Started For Free</button>
                           </div>
                            </div>
                        </form>
                     </div>
			</div>
		</div>
      </div>   
         
</body>