//this is for signupmod.php or signup modal
$(document).ready(function(){
    $('#paschk').hide();
    $('#cpwdchk').hide();

    var pass_err = true;
    var cpass_err = true;

    $('#Password1').keyup(function() {
        pas_check();
    });
    function pas_check() {
        var pas_val = $('#Password1').val();
        if (pas_val.length == '') {
            $('#paschk').html("** YOU need to fill something");
            $('#paschk').show();
            $('#paschk').focus();
            $('#paschk').css("color", "red");
            pass_err = false;
            return false;
        } 
        if ((pas_val.length < 3) || (pas_val.length > 10)) {
            $('#paschk').show();
            $('#paschk').html("**password must between 3-10 digits");
            $('#paschk').focus();
            $('#paschk').css("color", "red");
            pass_err = false;
            return false;
        } else {
            $('#paschk').hide();
        }
    }

    $('#Password2').keyup(function() {
        cpass_check();
    });

    function cpass_check() {
        var cpas_val = $('#Password2').val();
        var pas_val = $('#Password1').val();
        if (cpas_val != pas_val) {
            $('#cpwdchk').html("** YOU need to confirm above password");
            $('#cpwdchk').show();
            $('#cpwdchk').focus();
            $('#cpwdchk').css("color", "red");
            cpass_err = false;
            return false;
        } else {
            $('#cpwdchk').hide();
        }
    }

    $('#submitbtn').click(function() {
        pass_err = true;
        cpass_err = true;

        cpass_check();
        pas_check();
        if ((pass_err == true) && (cpass_err == true)) {
            return true;
        } else {
            return false;
        }

    });

});