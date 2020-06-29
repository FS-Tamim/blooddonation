 <?php
  include('include/header.php');

?>

<style type="text/css">
	.size{
		padding: 80px 0px;
	}
	.loader{
		display: none;
		width: 69px;
		height: 89px;
		position: absolute;
		top: 25%;
	    left: 50%;
	    padding: 2px;
	    z-index: 1;
	}
	h2{
		text-align: center;
	}
	.white-bar{
		background-color: white;
		width: 250px;
		height: 5px;
		text-orientation: center;
	}
	.loader .fa{
		color: red;
		font-size: 52px !important;
	}
	h1{
		color: white;
	}
	h3{
		color: red;
		text-align: center;
	}
	span{
		display: block;
	}
	.name{
		color: red;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		
		border-radius: 5px;
		margin:20px 5px 0px 5px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
	
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px;
	}
	/*	.container{
			margin-left: 25%
		}
		*/
</style>


<div class="container-fluid bg-danger size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h2 style="color: white;">Doners</h2>
			<hr class="white-bar">
		</div>
		
	</div>
</div>
<br>

<!-- <div class="alert alert-danger alert-dissmissible fade show" role="alert">
	<strong>Are you delete this record?</strong>
    <button type="button" class="close" data-dissmiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<form target="" method="post">
		<br>
	  <input type="hidden" name="delId" value="">
	  <button type="submit" name="delete" class="btn btn-danger">Yes</button>

	  <button type="button" class="btn btn-info " data-dismiss="true">opp! No</button>
	</form>
</div>
<br>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Message</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
 -->
<div class="container " style="padding: 60px 0;">
	<div class="row  data">
    <?php 
     
    $sql="SELECT * FROM donor";

    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){

    	while($row=mysqli_fetch_assoc($result)){
    		if($row['save_life_date']=='0'){

    			echo '

    			    <div class="col-md-3 col-sm-12 col-lg-3 donors_data">
    			    <span class="name">'.$row['name'].'</span>
    			    <span>'.$row['city'].'</span>
    			    <span>'.$row['blood_group'].'</span>
    			    <span>'.$row['gender'].'</span>
    			    <span>'.$row['email'].'</span>
    			    <span>'.$row['contact_no'].'</span>
    			    <h4 class="name text-center" style="color:green; text-align:left;">Available</h4>
    			    </div>

    			';

    		}else{
    			  $date=$row['save_life_date'];
		          $start=date_create("$date");
                  $end=date_create();
                   $diff=date_diff($start,$end);
                  $diffMonth=$diff->m;
                   if($diffMonth>=3){

                                 		echo '

    			    <div class="col-md-3 col-sm-12 col-lg-3  donors_data">
    			    <span class="name">'.$row['name'].'</span>
    			    <span>'.$row['city'].'</span>
    			    <span>'.$row['blood_group'].'</span>
    			    <span>'.$row['gender'].'</span>
    			    <span>'.$row['email'].'</span>
    			    <span>'.$row['contact_no'].'</span>
    			    <h4 class="name text-center" style="color:green; text-align:left;">Available</h4>
    			    </div>

    			';

                                 }
                                 else{
                                 	echo '

    			    <div class="col-md-3 col-sm-12 col-lg-3   donors_data">
    			    <span class="name">'.$row['name'].'</span>
    			    <span>'.$row['city'].'</span>
    			    <span>'.$row['blood_group'].'</span>
    			    <span>'.$row['gender'].'</span>
    			    <h4 class="name text-center">Donated</h4>
    			    </div>

    			';

                                 }

    			


    		}

    	}

    }else{
    	echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Message</strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
             </button>
             </div>';
    }

     ?>
     
	</div>
</div>

<?php
  include('include/footer.php')
?>

