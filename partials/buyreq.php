<!-- Button trigger modal 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buyrequestmodal">
    Launch demo modal
</button>-->

<!-- Modal -->
<div class="modal fade" id="buyrequestmodal" tabindex="-1" role="dialog" aria-labelledby="buyrequestmodalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Buy request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--modal body div-->
            <div class="modal-body">
                <form action="partials/submit_req.php?pid=<?php echo $p_id;?>&owid=<?php echo $usrid;?>" method="post">
                    <div class="form-group">
                        <label for="Emailreq">Email address</label>
                        <input type="email" class="form-control" id="Emailreq" aria-describedby="emailHelp" name="emreq" required>
                        <h5 id="mailchk"></h5>
                    </div>
                    <div class="form-group">
                        <label for="requestcontact1">Contact number 1</label>
                        <input type="text" class="form-control" id="requestcontact1" placeholder="contact 1" name="con1req">
                        <h5 id="cont1chk"></h5>
                        <br>
                        <label for="requestcontact1">Contact number 2</label>
                        <input type="text" class="form-control" id="requestcontact2" placeholder="contact 2" name="con2req" style="/* display: none; */">
                        <h5 id="cont2chk"></h5>
                    </div>
                    <div class="form-inline">
                        <label class="my-1 mr-2" for="requestmoney">Your offering price</label>
                        <input type="text" class="form-control" id="requestmoney" placeholder="in Rupees" name="monyreq">
                        <h5 id="monychk"></h5>
                    </div>
            </div>
            <!--modal body div end-->
            <button type="submit" class="btn btn-primary" id="reqsubmit">Submit request</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        <script type="text/javascript" src="partials/jqryfile4.js"></script>
        </form>
       <!-- <div class="modal-footer">
        </div>-->
    </div>
</div>
<!--</div>-->