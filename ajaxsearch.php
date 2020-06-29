<?php
        include('include/config.php');


          if((isset($_POST['city']) && !empty($_POST['city'])) &&(isset($_POST['blood_group']) && !empty($_POST['blood_group']))){
$city=$_POST['city'];
$blood_group=$_POST['blood_group'];


$sql="SELECT * FROM donor WHERE city='$city' AND blood_group='$blood_group'";
$result=mysqli_query($conn,$sql);
if(@mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
  if($row['save_life_date']=='0'){

    echo'
           <div class="col-md-3 col-sm-12 col-lg-3 donors_data">
           <span class="name">'.$row['name'].'</span>
           <span>'.$row['city'].'</span>
           <span>'.$row['blood_group'].'</span>
           <span>'.$row['gender'].'</span>
           <span>'.$row['email'].'</span>
           <span>'.$row['contact_no'].'</span>
          
           </div>

    ';

  }else{
    echo'
           <div class="col-md-3 col-sm-12 col-lg-3 donors_data">
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

else{
  echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Data Not found</strong>

  <span type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </span>
</div>';
}

          }


            ?>