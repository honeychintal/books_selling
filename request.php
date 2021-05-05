<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
<?php include'partials/header.php';?>
    <center><h1>Look at the request of buyers !!</h1><center>

    <div class="container" style="min-height:600px">
        <?php $i=0;
        include 'partials/dbconnect.php';
        $noresult=true;
        $e_id = $_SESSION['uid'];
        $sql=" SELECT * FROM `requests` WHERE owner_id=$e_id";
        $result = mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result))
        {
        $contact1 = $row['contact1'];
        $contact2=$row['contact2'];
        $email=$row['email'];
        $price=$row['price'];
        $posid=$row['pos_id'];
        //<!--start of  card-->
        $sql1="SELECT `b_name` FROM `postbook` WHERE usenam=$e_id And p_id=$posid ";
        $result1 = mysqli_query($conn,$sql1);
        while($row1=mysqli_fetch_assoc($result1))
        {
            $noresult=false;
            $buknm=$row1['b_name'];
            $req_id=$row['re_id'];
        echo '<div class="card text-white bg-info mb-3">
            <div class="card-body">
                <div>
                    <div class="form-row">
                        <div class="form-group col-sm">
                            <label for="inputEmail4">Email</label>
                            <input type="text" class="form-control form-control-sm" id="input001" value="'.$email.'" disabled>
                        </div>
                        <div class="form-group col-sm">
                            <label for="inputPassword4">Contact 1</label>
                            <input type="text" class="form-control form-control-sm" id="input002" value="'.$contact1.'" disabled>
                        </div>

                        <div class="form-group col-sm">
                            <label for="inputEmail4">Contact 2</label>
                            <input type="text" class="form-control form-control-sm" id="input003" value="'.$contact2.'" disabled>
                        </div>
                        <div class="form-group col-sm">
                            <label for="inputPassword4">Offering price </label>
                            <input type="text" class="form-control form-control-sm" id="input004" value="'.$price.'" disabled>
                        </div>
                    </div>
                </div>
                <h4 style="float: left;">'.$buknm.' </h4>
                <a href="partials/delreq.php?re_id='.$req_id.'" class="btn btn-warning" style="float: right;" onclick="return checkdelet()">Delete request</a>
            </div>
        </div>';
        //<!--end of card-->
    }
}
if($noresult){
    echo"<div><h1><i>No Buyers request yet !!</i></h1>
  <li>check some days after for new updates !!!
  </li></div>";
}
    ?>
       <p></p> 
    </div>
    <?php include'partials/footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>
<script>
function checkdelet()
{
    return confirm('Are you sure you want to DELETE current record');
}
</script>
</html>
