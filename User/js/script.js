
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
          });

          $(document).ready(function(){
            $('.datepicker').datepicker();
          })


          $(document).ready(function(){
            $('select').formSelect();
          });