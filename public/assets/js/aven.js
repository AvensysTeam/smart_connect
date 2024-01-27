$(document).ready(function(){

   // Use the CSRF token in the headers of your Ajax request
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });

    $.ajax({
        url: 'https://api.avensys-srl.com/api/rispondi?topic=polling&address=a0001',
        method: 'GET',
        // data: postData,
        success: function (data) {
            console.log(data);

        },
        error: function (error) {
            console.error('Error getting Customers request:', error);
        }
    }); 
    
//============================ for topfan ========================================
    var num1 = 50;
    if(num1 == 0){
        $('.dot-fan-one').css('background-color','red');
        $('.tfan').attr('src', stopImagePathleft);
        $('.m3h').text(" "+num1);
    }else if(num1 < 300){
        $('.dot-fan-one').css('background-color','yellow');
        $('.tfan').attr('src', startImagePathleft);
        $('.m3h').text(" "+num1);
    }else if(num1 > 300){
        $('.dot-fan-one').css('background-color','green');
        $('.tfan').attr('src', startImagePathleft);
        $('.m3h').text(" "+num1);
    }

//============================ for bottomfan ========================================
    var num2 = 0;
    
    if(num2 == 0){
        $('.dot-fan-two').css('background-color','red');
        $('.bottomfan').attr('src', stopImagePathright);
        $('.m3h2').text(" "+num2);
    }else if(num2 < 501){
        $('.dot-fan-two').css('background-color','yellow');
        $('.bottomfan').attr('src', startImagePathright);
        $('.m3h2').text(" "+num2);
    }else if(num2 > 500){
        $('.dot-fan-two').css('background-color','green');
        $('.bottomfan').attr('src', startImagePathright);
        $('.m3h2').text(" "+num2);
    }
//============================ for firstdot ========================================

    var firstdot = 70
    if(firstdot == 0){
        $('.first-dot').css('background-color','red');
        $('.pr1').text(firstdot+"%");
    }else if(firstdot < 71){
        $('.first-dot').css('background-color','yellow');
        $('.pr1').text(firstdot+"%");
    }else if(firstdot > 70){
        $('.first-dot').css('background-color','green'); 
        $('.pr1').text(firstdot+"%");
    }
//============================ for seconddot ========================================
    var seconddot = 60
    if(seconddot == 0){
        $('.second-dot').css('background-color','red');
        $('.pr2').text(seconddot+"%");
    }else if(seconddot < 61){
        $('.second-dot').css('background-color','yellow');
        $('.pr2').text(seconddot+"%");
    }else if(seconddot > 60){
        $('.second-dot').css('background-color','green'); 
        $('.pr2').text(seconddot+"%");
    }
//============================ for thirddot ========================================
    var thirddot = 500
    if(thirddot == 0){
        $('.third-dot').css('background-color','red');
        $('.pco1').text(thirddot);
    }else if(thirddot < 201){
        $('.third-dot').css('background-color','yellow');
        $('.pco1').text(thirddot);
    }else if(thirddot > 200){
        $('.third-dot').css('background-color','green'); 
        $('.pco1').text(thirddot);
    }
//============================ for forthdot ========================================        
    var forthdot = 250
    if(forthdot == 0){
        $('.forth-dot').css('background-color','red');
        $('.pco2').text(forthdot);
    }else if(forthdot < 201){
        $('.forth-dot').css('background-color','yellow');
        $('.pco2').text(forthdot);
    }else if(forthdot > 200){
        $('.forth-dot').css('background-color','green'); 
        $('.pco2').text(forthdot);
    }
//============================ for fifthdot ========================================        
    var fifthdot = 250
    if(fifthdot == 0){
        $('.fifth-dot').css('background-color','red');
        $('.pco3').text(fifthdot);
    }else if(fifthdot < 201){
        $('.fifth-dot').css('background-color','yellow');
        $('.pco3').text(fifthdot);
    }else if(fifthdot > 200){
        $('.fifth-dot').css('background-color','green'); 
        $('.pco3').text(fifthdot);
    }

   var firstco2 = 1
    if(firstco2==0){
      $('.first-co2').hide();
      $('.pco1').hide();
      $('.third-dot').hide();
    }else{
        $('.first-co2').show();
        $('.pco1').show();
        $('.third-dot').show();
    }

    var secondco2 = 1
    if(secondco2==0){
      $('.second-co2').hide();
      $('.pco2').hide();
      $('.forth-dot').hide();
    }else{
        $('.second-co2').show();
        $('.pco2').show();
        $('.forth-dot').show();
    }
     
    var thirdco2 = 1
    if(thirdco2==0){
      $('.third-co2').hide();
      $('.pco3').hide();
      $('.fifth-dot').hide();
    }else{
        $('.third-co2').show();
        $('.pco3').show();
        $('.fifth-dot').show();
    }

    var cir1 = 50;
    
    if(cir1 == 0){
        $('.cirtst').css('background-color','red');
        $('.htext').text(cir1);
    }else if(cir1 < 200){
        $('.cirtst').css('background-color','yellow');
        $('.htext').text(cir1);
    }else if(cir1 > 199){
        $('.cirtst').css('background-color','green'); 
        $('.htext').text(cir1);
    }

    var cir2 = 200;
    
    if(cir2 == 0){
        $('.cirtfd').css('background-color','red');
        $('.dxtext').text(cir2);
    }else if(cir2 < 200){
        $('.cirtfd').css('background-color','yellow');
        $('.dxtext').text(cir2);
    }else if(cir2 > 199){
        $('.cirtfd').css('background-color','green'); 
        $('.dxtext').text(cir2);
    }

    var cir3 = 200;
    
    if(cir3 == 0){
        $('.cirtfl').css('background-color','red');
        $('.ehtext').text(cir3);
    }else if(cir3 < 200){
        $('.cirtfl').css('background-color','yellow');
        $('.ehtext').text(cir3);
    }else if(cir3 > 199){
        $('.cirtfl').css('background-color','green'); 
        $('.ehtext').text(cir3);
    }

    var cir4 = 200;
    
    if(cir4 == 0){
        $('.cirteh').css('background-color','red');
        $('.htextt').text(cir4);;
    }else if(cir4 < 200){
        $('.cirteh').css('background-color','yellow');
        $('.htextt').text(cir4);
    }else if(cir4 > 199){
        $('.cirteh').css('background-color','green'); 
        $('.htextt').text(cir4);
    }

    var cir5 = 200;
    
    if(cir5 == 0){
        $('.cirted').css('background-color','red');
        $('.dxtextt').text(cir5);
    }else if(cir5 < 200){
        $('.cirted').css('background-color','yellow');
        $('.dxtextt').text(cir5);
    }else if(cir5 > 199){
        $('.cirted').css('background-color','green'); 
        $('.dxtextt').text(cir5);
    }

    var cir6 = 200;
    
    if(cir6 == 0){
        $('.cirtel').css('background-color','red');
        $('.ehtextt').text(cir6);
    }else if(cir6 < 200){
        $('.cirtel').css('background-color','yellow');
        $('.ehtextt').text(cir6);
    }else if(cir6 > 199){
        $('.cirtel').css('background-color','green'); 
        $('.ehtextt').text(cir6);
    }

    var cir7 = 200;
    
    if(cir7 == 0){
        $('.cirtfh').css('background-color','red');
        $('.htextth').text(cir7);
    }else if(cir7 < 200){
        $('.cirtfh').css('background-color','yellow');
        $('.htextth').text(cir7);
    }else if(cir7 > 199){
        $('.cirtfh').css('background-color','green'); 
        $('.htextth').text(cir7);
    }

    var cir8 = 200;
    
    if(cir8 == 0){
        $('.cirtsh').css('background-color','red');
        $('.dxtextth').text(cir8);
    }else if(cir8 < 200){
        $('.cirtsh').css('background-color','yellow');
        $('.dxtextth').text(cir8);
    }else if(cir8 > 199){
        $('.cirtsh').css('background-color','green'); 
        $('.dxtextth').text(cir8);
    }

    var cir9 = 200;
    
    if(cir9 == 0){
        $('.cirtsd').css('background-color','red');
        $('.ehtextth').text(cir9);
    }else if(cir9 < 200){
        $('.cirtsd').css('background-color','yellow');
        $('.ehtextth').text(cir9);
    }else if(cir9 > 199){
        $('.cirtsd').css('background-color','green'); 
        $('.ehtextth').text(cir9);
    }

    var cir10 = 200;
    
    if(cir10 == 0){
        $('.cirtsl').css('background-color','red');
        $('.trefotext').text(cir10);
    }else if(cir10 < 200){
        $('.cirtsl').css('background-color','yellow');
        $('.trefotext').text(cir10);
    }else if(cir10 > 199){
        $('.cirtsl').css('background-color','green'); 
        $('.trefotext').text(cir10);
    }

    var cir11 = 200;
    
    if(cir11 == 0){
        $('.cirtre-a').css('background-color','red');
        $('.trefttext').text(cir11);
    }else if(cir11 < 200){
        $('.cirtre-a').css('background-color','yellow');
        $('.trefttext').text(cir11);
    }else if(cir11 > 199){
        $('.cirtre-a').css('background-color','green'); 
        $('.trefttext').text(cir11);
    }

    var cir12 = 200;
    
    if(cir12 == 0){
        $('.cirtre-b').css('background-color','red');
        $('.trefthtext').text(cir12);
    }else if(cir12 < 200){
        $('.cirtre-b').css('background-color','yellow');
        $('.trefthtext').text(cir12);
    }else if(cir12 > 199){
        $('.cirtre-b').css('background-color','green'); 
        $('.trefthtext').text(cir12);
    }

    var cir13 = 200;
    
    if(cir13 == 0){
        $('.cirtre-c').css('background-color','red');
        $('.trefftext').text(cir13);
    }else if(cir13 < 200){
        $('.cirtre-c').css('background-color','yellow');
        $('.trefftext').text(cir13);
    }else if(cir13 > 199){
        $('.cirtre-c').css('background-color','green'); 
        $('.trefftext').text(cir13);
    }


})