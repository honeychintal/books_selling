<?php
session_start();

    echo'  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!--<a class="navbar-brand" href="#">Navbar</a>-->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
crossorigin="anonymous"></script>

<!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>


<style type="text/css">
/* ============ desktop view ============ */
@media all and (min-width: 992px) {
	.navbar .nav-item .dropdown-menu{ display: none; }
	.navbar .nav-item:hover .nav-link{ color: #fff;  }
	.navbar .nav-item:hover .dropdown-menu{ display: block; }
	.navbar .nav-item .dropdown-menu{ margin-top:0; }
}	
/* ============ desktop view .end// ============ */


</style>
    
    <a class="navbar-brand" href="index.php">
    <img src="img/drawing2.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    OURbookshelf
  </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>';
        if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) {
          echo'<li class="nav-item">
          <a class="nav-link" href="mypost.php">My posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="makepost.php">New post</a>
        </li>';
      } include 'partials/dbconnect.php'; 
        $sqlq="SELECT * FROM `categ`";
        $result = mysqli_query($conn,$sqlq);
      echo'
      <li class="nav-item dropdown">
      <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  Categories  </a> 
      <ul class="dropdown-menu"> ';
      while($row=mysqli_fetch_assoc($result))
      {
      $cat_n=$row['category'];
          echo'<li><a class="dropdown-item" href="categories.php?cat='.$cat_n.'"> '.$cat_n.'</a></li>';
      }
      echo' </ul> 
      </li>';
      
      if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) 
      {
        echo '<li class="nav-item">
          <a class="nav-link " href="request.php">Requests</a>
        </li>';
      }
        
      echo'</ul>
      <div class="row mx-2">';

      if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) 
      {
       echo' <form class="form-inline my-2 my-lg-0" method="get" action="search.php">
       <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
       <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
       <p class="text-light my-0 mx-2"> Welcome '.$_SESSION['useremail'].'</p>
       <a href="partials/logout_hndl.php" class="btn btn-outline-success ml-2" >Logout</a>
     </form>'; 
      } 
else{
  echo'<form class="form-inline my-2 my-lg-0"  method="get" action="search.php">
  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
  <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
</form>
  <button class="btn btn-outline-success ml-2" data-toggle="modal" data-target="#loginmodal">Login</button>
  <button class="btn btn-outline-success mx-2 "data-toggle="modal" data-target="#signupmodal">Signup</button>';
}
      
 echo'</div>
 </div>
  </nav> ';
  
  include "dropdown.php";
  include "signupmod.php";
  include "loginmodal.php";
  if(isset($_GET['loginsuccess'])&& $_GET['loginsuccess']=="false"){
    $errmsg=$_GET['perror'];
    echo'<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
    <strong>'.$errmsg.' or email cannot Login !!!</strong> Try another Email
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  if(isset($_GET['signupsuccess'])&& $_GET['signupsuccess']=="true"){
    echo'<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
    <strong>Sign up Successful !!!</strong> You can browse now
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  if(isset($_GET['signupsuccess'])&& $_GET['signupsuccess']=="false"){
    $errmsg=$_GET['error'];
    echo'<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
    <strong>'.$errmsg.' cannot signup !!!</strong> Try another Email
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  if(isset($_GET['postsucess'])&& $_GET['postsucess']=="false"){
    $errmsg=$_GET['poerror'];
    echo'<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
    <strong>'.$errmsg.' cannot upload your post !!!</strong> Check your uploaded content!!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
?>