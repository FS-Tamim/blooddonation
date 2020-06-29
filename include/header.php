<!DOCTYPE html>

    
  <head>
    <title>Donate The Blood</title>


<meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Blood Donation Website">
        <meta name="author" content="Exceptional Programmers">

        <link rel="stylesheet" href="css/styles.css">
  <!--       <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">  -->

        <!-- Custom Link CSS Files -->
        <link rel="stylesheet" href="css/custom.css">

        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

<!--         <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 -->
     
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      </head>


<?php 
       
            include 'config.php';

            session_start();
            if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

              include'usernav.php';
            }
            else{
            include 'navigation.php';
          }
?>