 $( document ).ready(function() {
 	//alert("S");
    $("#PolicyBirthdate").datepicker({
                dateFormat: 'yy-mm-dd',
               
        });
    $("#PolicyDepartureDate").datepicker({
                dateFormat: 'yy-mm-dd',
               
        });
       
    /*$('#PolicyEmail').on('input', function() {
		var input=$(this);
		var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		var is_email=re.test(input.val());
		if(is_email){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
    });*/
  

   
  });
  