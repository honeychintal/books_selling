
$(document).ready(function() {
    $('#usrchk').hide();
    $('#bonamchk').hide();
    $('#paschk').hide();
    $('#cpwdchk').hide();
    $('#emchk').hide();
    $('#phchk').hide();
    $('#deschk').hide();

    var bonm_err = true;
    var desc_err = true;
    var em_err = true;
    var pass_err = true;
    var cpass_err = true;
    var emchk_err = true;
    var ph_err = true;
    var sel_err = true;
    
    //book name start
    $('#bookname').keyup(function() {
        bonm_check();
    });

    function bonm_check() {
        var bonm_val = $('#bookname').val();
        if (bonm_val.length == '') {
            $('#bonamchk').show();
            $('#bonamchk').html("** YOU need to fill Bookname");
            $('#bonamchk').focus();
            $('#bonamchk').css("color", "red");
            bonm_err = false;
            return false;
        } else {
            $('#bonamchk').hide();
        }
        if ((bonm_val.length < 3) || (bonm_val.length > 10)) {
            $('#bonamchk').show();
            $('#bonamchk').html("** Book name must between 3-10 digits");
            $('#bonamchk').focus();
            $('#bonamchk').css("color", "red");
            bonm_err = false;
            return false;
        } else {
            $('#bonamchk').hide();
        }
    }
    //book name end

    //Description name start
    $('#tarea1').keyup(function() {
        desc_check();
    });

    function desc_check() {
        var desc_val = $('#tarea1').val();
        if (desc_val.length == '') {
            $('#deschk').show();
            $('#deschk').html("** YOU need to fill Description about book");
            $('#deschk').focus();
            $('#deschk').css("color", "red");
            desc_err = false;
            return false;
        } else {
            $('#deschk').hide();
        }
        if ((desc_val.length < 3) || (desc_val.length > 10)) {
            $('#deschk').show();
            $('#deschk').html("** Book description must between 3-10 digits");
            $('#deschk').focus();
            $('#deschk').css("color", "red");
            desc_err = false;
            return false;
        } else {
            $('#deschk').hide();
        }
    }
    //Description name end
    
    //username validation -start
    $('#uname').keyup(function() {
        email_check();
    });

    function email_check() {
        var user_val = $('#uname').val();
        if (user_val.length == '') {
            $('#usrchk').show();
            $('#usrchk').html("** YOU need to fill something");
            $('#usrchk').focus();
            $('#usrchk').css("color", "red");
            em_err = false;
            return false;
        } else {
            $('#usrchk').hide();
        }
        if ((user_val.length < 3) || (user_val.length > 10)) {
            $('#usrchk').show();
            $('#usrchk').html("** username must between 3-10 digits");
            $('#usrchk').focus();
            $('#usrchk').css("color", "red");
            em_err = false;
            return false;
        } else {
            $('#usrchk').hide();
        }
    }
    //username validation -end

    //password validation -start
    $('#paswd').keyup(function() {
        pass_check();
    });

    function pass_check() {
        var pas_val = $('#paswd').val();
        if (pas_val.length == '') {
            $('#paschk').html("** YOU need to fill something");
            $('#paschk').show();
            $('#paschk').focus();
            $('#paschk').css("color", "red");
            pass_err = false;
            return false;
        } else {
            $('#paschk').hide();
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
    //password validation -end

    //confirm password validation -start
    $('#cpwd').keyup(function() {
        cpass_check();
    });

    function cpass_check() {
        var cpas_val = $('#cpwd').val();
        var pas_val = $('#paswd').val();
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
    //confirm password validation -end

    //email validation -start
    $('#emal').keyup(function() {
        emal_chek();
    });

    function emal_chek() {
        var emal_val = $('#emal').val();
        var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
        if (reg.test(emal_val) != true) {
            $('#emchk').html("** NOT a valid email");
            $('#emchk').show();
            $('#emchk').focus();
            $('#emchk').css("color", "red");
            emchk_err = false;
            return false;
        } else {
            $('#emchk').hide();
        }
    }
    //email validation -end

    //phone no validation -start
    $('#phno').keyup(function() {
        ph_chek();
    });

    function ph_chek() {
        var ph_val = $('#phno').val();
        if (ph_val.length != 10) {
            $('#phchk').html("** NOT a valid Phone number");
            $('#phchk').show();
            $('#phchk').focus();
            $('#phchk').css("color", "red");
            ph_err = false;
            return false;
        }
        if (isNaN(ph_val)) {
            $('#phchk').html("** NOT a valid Phone number");
            $('#phchk').show();
            $('#phchk').focus();
            $('#phchk').css("color", "red");
            ph_err = false;
            return false;
        } else {
            $('#phchk').hide();
        }
    }
    //phone no validation -end
    
    //start select validation
    function sel_chek() {
        var sel = $("#inputState1");
        if (sel.val() == "") {
            $('#selchk').show();
            $('#selchk').html("** YOU need to select something");
            $('#selchk').focus();
            $('#selchk').css("color", "red");
            sel_err = false;
            return false;
        } else {
            $('#selchk').hide();
        }
    }
    //end select validation 

    $('#subtn').click(function(){
        em_err = true;
        pass_err = true;
        cpass_err = true;
        emchk_err = true;
        ph_err = true;
        sel_err = true;
        bonm_err = true;

        sel_chek();
       // cpass_check();
        //pass_check();
        //email_check();
        //emal_chek();
        //ph_chek();
       // if ((em_err == true) && (pass_err == true) && (cpass_err == true) && (emchk_err == true) && (
         //       ph_err == true) && (sel_err == true)) {
           // return true;
       // }
       // if (bonm_err == true)
       // { return true; } 
    //else{ return false; }
    return false;
});

});