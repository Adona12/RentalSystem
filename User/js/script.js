
$(document).ready(function(){

        $('.sidenav').sidenav();
        console.log("sdfasd");
        $('.carousel').carousel({
            indicators: true,
            fullWidth: true
        });

        setInterval(function(){
            $('.carousel').carousel('next');

        },4000)
        var cl=$(".col");


        $(".box-office").append(cl);
        $(".box-office").append(cl);
        $(".box-office").append(cl);
       
        
        })


        $(document).ready(function(){
            $('.timepicker').timepicker();
            $('select').formSelect();
          });

          $(document).ready(function(){
            $('.datepicker').datepicker();

          });
 $('.datepicker').pickadate({

        format: 'dd/mm/yyyy'    
    });

          $(document).ready(function(){
            $('select').formSelect();
          });
         
          $("#password").on("focusout", function (e) {
            if ($(this).val() != $("#confirm-password").val()) {
                $("#confirm-password").removeClass("valid").addClass("invalid");
            } else {
                $("#confirm-password").removeClass("invalid").addClass("valid");
            }
        });
        
        $("#confirm-password").on("keyup", function (e) {
            if ($("#password").val() != $(this).val()) {
                $(this).removeClass("valid").addClass("invalid");
            } else {
                $(this).removeClass("invalid").addClass("valid");
            }});