<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'dbconnect.php';
    $username = $_POST["uemail"];
    $password = $_POST["pas"];
    $city = $_POST["cit"];
    $state = $_POST["stt"];
    
    $sql1 ="SELECT * FROM user where email='$username'";
    $result1= mysqli_query($conn,$sql1);
    $num= mysqli_num_rows($result1);
    if($num>0){
        $showerr="Email already in use";
    }
    else{
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql2 ="INSERT INTO `user` (`email`, `state`, `city`, `password`) VALUES ('$username', '$state', '$city', '$hash')";
        $result2 = mysqli_query($conn,$sql2);
        if($result2){
            header("Location: ../index.php?signupsuccess=true");
            exit();
        } 
    }
    header("Location: ../index.php?signupsuccess=false&error=$showerr");
}
?>