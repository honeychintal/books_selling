//this document used in buyreq.php buying request page
$(document).ready(function(){

    $('#cont1chk').hide();
    $('#monychk').hide();

    var cont1_err = true;
    var money_err = true;

    //request_price start
    $('#requestmoney').keyup(function() {
        money_check();
    });
    
    function money_check()
    {
        var mon_val=$('#requestmoney').val();
        if(isNaN(mon_val))
        {
            $('#monychk').html("** NOT a valid Amount");
            $('#monychk').show();
            $('#monychk').focus();
            $('#monychk').css("color", "red");
            money_err = false;
            return false; 
        }
        if (mon_val.length == '') {
            $('#monychk').show();
            $('#monychk').html("** YOU need to fill price");
            $('#monychk').focus();
            $('#monychk').css("color", "red");
            money_err = false;
            return false;
        }
        else
        {
            $('#monychk').hide();
        }
    } 
    //request_price start


    //contact1 start
    $('#requestcontact1').keyup(function() {
        cont1_check();
    });

    function cont1_check() {
        var c1_val = $('#requestcontact1').val();
        if (c1_val.length != 10) {
            $('#cont1chk').html("** NOT a valid contact number");
            $('#cont1chk').show();
            $('#cont1chk').focus();
            $('#cont1chk').css("color", "red");
            cont1_err = false;
            return false;
        }
        if (isNaN(c1_val)) {
            $('#cont1chk').html("** NOT a valid contact number");
            $('#cont1chk').show();
            $('#cont1chk').focus();
            $('#cont1chk').css("color", "red");
            cont1_err = false;
            return false;
        } else {
            $('#cont1chk').hide();
        }
    }
    //contact1 end


   
    $('#reqsubmit').click(function(){
        cont1_err = true;
        money_err = true;

        cont1_check();
        money_check();

        if((cont1_err==true)&&(money_err==true))
        {
            return true;
        }
        else
        {
            return false;
        }
        
    });
});