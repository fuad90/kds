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

    if($('#volunteerCreate').hasClass('volunteer/create')){
       $('li#volunteer').addClass('active');
    }

    if($('#volunteerUpdate').hasClass('volunteer/update')){
       $('li#volunteer').addClass('active');
    }


    $('.modalVolunteerView').on("click",function(){
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

    
// wife
    $("#addmorewife").click(function(){
        $("#wife").clone().appendTo(".adddivwife");
        $('div#del').not(':first').show();
    });

    $(".adddivwife").on("click", "#remove", function(e) {
        e.preventDefault(); 
       $(this).closest("#wife").remove();  
    });
 /// tanggungan
    $("#addmoreson").click(function(){
        $("#son").clone().appendTo(".adddivson");
        $('#hrdiv').show();
        $('div#delson').not(':first').show();
    });

    $(".adddivson").on("click", "#removeson", function(e) {
        e.preventDefault(); 
       $(this).closest("#son").remove();  
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
        $('#tanggugnan_oku').show(1000);
    });
    $("#radio12").click(function(){
        $('#tanggugnan_oku').hide(1000);
    });






});