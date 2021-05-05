<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'dbconnect.php';
    echo $email = $_POST["emreq"];
    echo $cont1 = $_POST["con1req"];
    echo $cont2 = $_POST["con2req"];
    echo $reqmony = $_POST["monyreq"];
    $poid=$_GET['pid'];
    $usrid=$_GET['owid'];
    $sql="INSERT INTO `requests` (`email`, `contact1`, `contact2`, `price`, `pos_id`, `owner_id`) VALUES ('$email', '$cont1', '$cont2', '$reqmony', '$poid',  '$usrid')";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        header("Location: ../index.php?postrequest=true");
                exit();
    }
    else
    {
        header("Location: ../index.php?postrequest=false");
    }
}
?>