<?php 
require_once("connection.php");
if(count($_POST)>0)
{
	$password=$_POST['password'];
	$name=$_POST['name'];
	$sql="SELECT * from employees_customers WHERE name='".$name."' AND authpass='".$password."'";
	if($results=mysqli_query($link,$sql))
	{
		if(mysqli_num_rows($results)>0){
		$row=mysqli_fetch_array($results);
		if($row['type']=="admin"){
		mysqli_close($link);
		header( "refresh:0;url=Admin.php" );
		}else{
		mysqli_close($link);
		header( "refresh:0;url=Customer.php" );
		}
		}
		else
	{
		echo "No Records Found";
		mysqli_close($link);
		header( "refresh:0;url=Signup.php" );
	}
	}else
	{
		echo "No Records Found";
		mysqli_close($link);
		header( "refresh:0;url=Signup.php" );
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
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h1>Login</h1>
						 </div>
					</div>
                   <form action="Signin.php" method="POST" name="login">
				            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" name="name"  class="form-control" id="name"placeholder="Name">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           </div>
                           <div class="col-md-12 text-center ">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                           </div>
                           <div class="form-group">
                              <p class="text-center">Don't have account? <a href="Signup.php" id="signup">Sign up here</a></p>
                           </div>
                        </form>
                 
				</div>
			</div>
		</div>
      </div>   
         
</body>