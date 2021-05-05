<?php

    include 'dbconnect.php';
    $reid=$_GET['re_id'];
    $sql="DELETE FROM `requests` WHERE `re_id`=$reid";
    $result = mysqli_query($conn,$sql);
    //if($result)
    //{
        header("Location: ../request.php");
      //          exit();
    //}
  

?>