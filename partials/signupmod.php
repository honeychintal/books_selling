
<!-- Button trigger modal 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signupmodal">
  Launch demo modal
</button>-->
 
<!--javascript files start -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--javascript files end -->

<!-- Modal -->

<div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="signupmodalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupmodalLabel">Signup</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="partials/signup_handl.php" method="post">
                    <div class="form-group">
                        <label for="signEmail1">Email address</label>
                        <input type="email" class="form-control" id="signEmail1" name="uemail" aria-describedby="emailHelp" maxlength = "30" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-row">
                        <div class="col md-6">
                            <!--form-group-->
                            <label for="exampleSelect1">State</label>
                            <select class="form-control" id="exampleSelect1" name="stt">
                                <option>Chhattisgarh</option>
                            </select>
                        </div>

                        <div class="col md-6">
                            <!--form-group-->
                            <label for="exampleSelect2">City</label>
                            <select class="form-control" id="exampleSelect2" name="cit">
                                <option>Raipur</option>
                                <option>Bhilai</option>
                                <option>Durg</option>
                                <option>Bilaspur</option>
                                <option>Kanker</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Password1">Password</label>
                        <input type="password" class="form-control" id="Password1" name="pas" maxlength = "8">
                        <h5 id="paschk"></h5>
                    </div>

                    <div class="form-group">
                        <label for="Password2">Confirm Password</label>
                        <input type="password" class="form-control" id="Password2" name="cpas" maxlength = "8">
                        <h5 id="cpwdchk"></h5>
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="submitbtn" >Sign Up</button>
            </div>
            <script type="text/javascript" src="partials/jqryfile3.js"></script>
            </form>
        </div>
    </div>
</div>