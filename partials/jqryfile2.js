$(document).ready(function(){
    $('#selchk').hide();
    $('#bonamchk').hide();
    $('#deschk').hide();
    $('#isbnchk').hide();
    $('#authchk').hide();
    $('#ogpchk').hide();

    var sel_err = true;
    var bonm_err = true;
    var desc_err = true;
    var isbn_err = true;
    var auth_err= true;
    var ogp_err= true;

    //original_price start
    $('#orgprice').keyup(function() {
        ogp_check();
    });
    
    function ogp_check()
    {
        var ogp_val=$('#orgprice').val();
        if(isNaN(ogp_val))
        {
            $('#ogpchk').html("** NOT a valid Amount");
            $('#ogpchk').show();
            $('#ogpchk').focus();
            $('#ogpchk').css("color", "red");
            ogp_err = false;
            return false; 
        }
        if (ogp_val.length == '') {
            $('#ogpchk').show();
            $('#ogpchk').html("** YOU need to fill Original price");
            $('#ogpchk').focus();
            $('#ogpchk').css("color", "red");
            ogp_err = false;
            return false;
        }
        else
        {
            $('#ogpchk').hide();
        }
    } 
    //original_price start
    
    //auth start
    $('#auth').keyup(function() {
        auth_check();
    });

    function auth_check() 
    {
        var auth_val=$('#auth').val();
        if ((auth_val.length < 3) || (auth_val.length > 50)) 
        {
            $('#authchk').html("** NOT a valid Author name");
            $('#authchk').show();
            $('#authchk').focus();
            $('#authchk').css("color", "red");
            auth_err = false;
            return false;
        }
        else
        {
            $('#authchk').hide();
        }
    }
    //auth end


    //isbn start
    $('#isbn').keyup(function() {
        isbn_check();
    });

    function isbn_check() {
        var is_val = $('#isbn').val();
        if ((is_val.length < 10) || (is_val.length > 13)) {
            $('#isbnchk').html("** NOT a valid ISBN number");
            $('#isbnchk').show();
            $('#isbnchk').focus();
            $('#isbnchk').css("color", "red");
            isbn_err = false;
            return false;
        }
        if (isNaN(is_val)) {
            $('#isbnchk').html("** NOT a valid ISBN number");
            $('#isbnchk').show();
            $('#isbnchk').focus();
            $('#isbnchk').css("color", "red");
            isbn_err = false;
            return false;
        } else {
            $('#isbnchk').hide();
        }
    }
    //isbn end

    //start book name
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
        }
        if ((bonm_val.length < 3) || (bonm_val.length > 50)) 
        {
            $('#bonamchk').show();
            $('#bonamchk').html("** Book name must between 3-50 digits");
            $('#bonamchk').focus();
            $('#bonamchk').css("color", "red");
            bonm_err = false;
            return false;
        } 
        else 
        {
            $('#bonamchk').hide();
        }
    }
    //end

    //Description name start
    $('#tarea1').keyup(function() {
        desc_check();
    });

    function desc_check() {
        var desc_val = $('#tarea1').val();
        if (desc_val.length == '')
        {
            $('#deschk').show();
            $('#deschk').html("** YOU need to fill Description about book");
            $('#deschk').focus();
            $('#deschk').css("color", "red");
            desc_err = false;
            return false;
        }
        if ((desc_val.length < 3) || (desc_val.length > 200)) 
        {
            $('#deschk').show();
            $('#deschk').html("** Book description must between 3-200 digits");
            $('#deschk').focus();
            $('#deschk').css("color", "red");
            desc_err = false;
            return false;
        } else 
        {
            $('#deschk').hide();
        }
    }
    //Description name end

    //select button start
    function sel_chek()
     {
        var sel = $("#inputState1");
        if (sel.val()=="")
         {
            $('#selchk').show();
            $('#selchk').html("** YOU need to select something");
            $('#selchk').focus();
            $('#selchk').css("color", "red");
            sel_err = false;
            return false;
        } 
        else
        {
            $('#selchk').hide();
        }
    }
    //select button end
   
    $('#subtn').click(function(){
        sel_err=true;
        bonm_err = true;
        desc_err = true;
        isbn_err = true;
        auth_err= true;
        ogp_err= true;

        bonm_check();
        isbn_check();
        sel_chek();
        desc_check();
        auth_check();
        ogp_check();

        if((sel_err==true)&&(bonm_err==true)&&(desc_err==true)&&(isbn_err==true)&&(auth_err==true)&&(ogp_err==true))
        {
            return true;
        }
        else
        {
            return false;
        }
        
    });
});