$(function(){

    if ($('input#form_control_1').val() != "") {
         $('input#form_control_1').addClass('form-control edited');
    };

    $("#radio54").click(function(){
        $("#hideshow").hide(500);

    });
    $("#radio53").click(function(){
        $("#hideshow").show(500);

    });


//kemaskini : answer
    $('.answerUpdate').click(function(){
        $('#modal').modal('show')
        .find('#modalContent')
        .load($(this).attr('value'));

    });

    if($('#volunteerCreate').hasClass('volunteer/create')){
       $('li#volunteer').addClass('active');
    }

    if($('#volunteerUpdate').hasClass('volunteer/update')){
       $('li#volunteer').addClass('active');
    }
    if($('#volunteerView').hasClass('volunteer/view')){
       $('li#volunteer').addClass('active');
    }

//kemaskini : wife
    $('#wifeCreate').click(function(){
        $('#modal').modal('show')
        .find('#modalContent')
        .load($(this).attr('value'));

    });
    $('.wifeUpdate').click(function(){
        $('#modal').modal('show')
        .find('#modalContent')
        .load($(this).attr('value'));

    });

    if($('#peopleCreate').hasClass('people/create')){
       $('li#people').addClass('active');
    }

    if($('#peopleUpdate').hasClass('people/update')){
       $('li#people').addClass('active');
    }

    if($('#peopleView').hasClass('people/view')){
       $('li#people').addClass('active');
    }

//kemaskini : tanggungan
    $('#tanggunganCreate').click(function(){
        $('#modal').modal('show')
        .find('#modalContent')
        .load($(this).attr('value'));

    });
    $('.tanggunganUpdate').click(function(){
        $('#modal').modal('show')
        .find('#modalContent')
        .load($(this).attr('value'));

    });


    
//create :  wife
    $("#addmorewife").click(function(){
        var clone = $("#wife").clone();
        clone.find("input[type=text]").val("");
        clone.appendTo(".adddivwife");
        $('div#del').not(':first').show();
    });

    $(".adddivwife").on("click", "#remove", function(e) {
        e.preventDefault(); 
       $(this).closest("#wife").remove();  
    });
 /// create : tanggungan
    $("#addmoreson").click(function(){
        var clone = $("#son").clone();
        clone.find("input[type=text]").val("");
        clone.appendTo(".adddivson");
        $('.hrson').show();
        $('div#delson').not(':first').show();
        $(".date-picker").datepicker();
    });

    $(".adddivson").on("click", "#removeson", function(e) {
        e.preventDefault(); 
       $(this).closest("#son").remove();  
    });

// create : okutanggungan
    $("#addmoreoku").click(function(){
        var clone = $("#tanggugnan_oku").clone();
        clone.find("input[type=text]").val("");
        clone.appendTo(".adddivokutanggungan");
        $('.hroku').show();
        $('div#deltanggunganoku').not(':first').show();
    });

    $(".adddivokutanggungan").on("click", "#removetanggunganoku", function(e) {
        e.preventDefault(); 
       $(this).closest("#tanggugnan_oku").remove();  
    });


//kemaskini : tanggunganoku 
    $('#tanggunganokuCreate').click(function(){
        $('#modal').modal('show')
        .find('#modalContent')
        .load($(this).attr('value'));

    });
    $('.tanggunganokuUpdate').click(function(){
        $('#modal').modal('show')
        .find('#modalContent')
        .load($(this).attr('value'));

    });


// to show question
    $("#radio1").click(function(){
        $('.soalan').show(1000);
    });
    $("#radio2").click(function(){
        $('.soalan').hide(1000);
    });
    $("#radio3").click(function(){
        $('.soalan2').show(1000);
    });
    $("#radio4").click(function(){
        $('.soalan2').hide(1000);
    });

    $("#radio9").click(function(){
        $('.soalan3').show(1000);
    });
    $("#radio10").click(function(){
        $('.soalan3').hide(1000);
    });

    $("#radio11").click(function(){
        $('.adddivokutanggungan').show(1000);
    });
    $("#radio12").click(function(){
        $('.adddivokutanggungan').hide(1000);
    });


});