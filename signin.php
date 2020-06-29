<?php
  include('include/header.php');

  if(isset($_POST['signIn'])){

  	if(isset($_POST['email'])&&!empty($_POST['email'])){
  		$email=$_POST['email'];
  			
  	}else{
  		$emailError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>Please enter email</strong> 
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>';

  	}


  	if(isset($_POST['password'])&&!empty($_POST['password'])){
  		$password=$_POST['password'];

  		$password=md5($password);
  			
  	}else{
  		$passwordError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>Password is incorrent</strong> 
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>';

  	}

  	if(isset($email) && isset($password)){
  		$sql="SELECT * FROM donor WHERE password='$password' AND email='$email'";
  		$result=mysqli_query($conn,$sql);

  		if(mysqli_num_rows($result)>0){
  			while($row=mysqli_fetch_assoc($result)){
                $_SESSION['user_id']=$row['id'];
  			    $_SESSION['name']=$row['name'];
  			    $_SESSION['save_life_date']=$row['save_life_date'];
  				
                
                header('Location:user/index.php');
  			}

  		}else{
  				$submitError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>Sorry no record found.Please enter valid email or password.</strong> 
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>';


  		}
  	}

  }
?>
<style type="text/css">
	.size{
		padding: 80px 0px;

	}
	.white-bar{
		background-color: white;
		width: 250px;
		height: 5px;
	}
	.red-bar{
		background-color: red;
		width: 250px;
		height: 3px;
	}
	h1{
		text-align: center;
		color: white;
	}
	h3{
		text-align: center;
		color: red;
	}
	.form-container{
		background-color: white;
		text-align: left;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		/*-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);*/
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
	}
	
</style>
<div class="container-fluid bg-danger size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1>SignIn</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>

<div class="contianer size ">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
			<h3>
				SignIn
			</h3>
			<hr class="red-bar">



            <?php if(isset($submitError))	echo $submitError; ?>


     


			<form action="" method="post">
				<div class="form-group" style="text-align: left;">
					<label for="email" >Email</label>
					<input type="text" name="email" class="form-control" placeholder="Email" >
                       <?php if(isset($emailError))	echo $emailError; ?>

				</div>

				<div class="form-group" style="text-align: left;">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password">
						 <?php if(isset($passwordError))	echo $passwordError; ?>
				</div>

				<div class="form-group text-center">
				   <button class="btn btn-danger btn-lg center-alignes " type="submit" name="signIn">SignIn</button>	

				</div>
			</form>
			
		</div>
		
	</div>
	
</div>

<?php 

	//include footer file
	include ('include/footer.php');

?>	