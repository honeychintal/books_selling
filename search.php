<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>ProjectX</title>
  </head>
  <body>

  <?php include'partials/header.php';
  include 'partials/dbconnect.php';?>
 
    <?php $noresult=true; 
   $sword =$_GET['search'];
  echo'   <h1>Searched results for "<i>'.$_GET['search'].'" </i></h1>
  <div class="container" style="min-height:650px">
<div class="row mx-2">';
$sql="SELECT * FROM `postbook` WHERE MATCH(`b_name`,`b_isbn`,`b_auth`,`descript`,`genr1`,`genr2`,`genr3`,`genr4`) against('$sword')";
$result = mysqli_query($conn,$sql);

  while($row=mysqli_fetch_assoc($result))
  {   
    $noresult=false;
    $bok_n=$row['b_name'];
    $pic=$row['pic1'];
    $p_id=$row['p_id'];
    $time=$row['dt_creation'];
    $auth_n=$row['b_auth'];
    $og_pr=$row['og_pr'];
    echo '
    <div class="result" style="padding:5px">
    <div class="card">
  <div class="card-body">
<div class="media">
<img src="project_x_copy/'.$pic.'" class="align-self-center mr-3" alt="..." height=100 width=100>
<div class="media-body">
  <h5 class="mt-0"><a href="post.php?pid='.$p_id.'" class="text-dark">'.$bok_n.'</a></h5>
  <p> Original price : '.$og_pr.'  &nbsp;&nbsp;&nbsp;&nbsp; Author name : '.$auth_n.'</p>
  <p class="mb-0">posted on : '.$time.'</p>
</div>
</div>
</div>
</div>
</div>';
}
if($noresult)
{
  echo"<div><h1>No result were found on your query</h1>
  <li>make sure your spellings are correct !!!
  </li></div>";
}

?>
</div>
</div>

  <?php include'partials/footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>