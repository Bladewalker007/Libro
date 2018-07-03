<?php
include('session.php');

$loged_in_user_id=$_SESSION['user_id'];

$sql = "DELETE FROM shelf WHERE user_id='$loged_in_user_id'";

$result=mysqli_query($db,$sql);

if(!$result){
      $error_fetch = mysqli_real_escape_string($db,mysqli_error($db));
    echo $error_fetch ;
    }else{
  
  echo("<script>location.href = 'welcome.php';</script>");
       }

?>
