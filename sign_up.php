
<?php
$registered=0;
$userexists=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
  
  include 'server.php';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
  

  
  $sql="SELECT * FROM climate WHERE name='$name'";
  $result=mysqli_query($con,$sql);
   $num=mysqli_num_rows($result);
   
    if($num>0){
      //echo "User already exist";
      $userexists=1;
    }
    else{
      $sql="INSERT INTO climate (name,email,mobile,password)
      VALUES ('$name','$email','$mobile','$password')";
      $result=mysqli_query($con,$sql);
      if($result){
      //echo "Registered successfully";
      $registered=1;
    }
    else{
      die(mysqli_error($con));
    }
  }
    
  }

?>