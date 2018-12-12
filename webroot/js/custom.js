//validate registration email
$(function(){
    $('#email').keyup(function(){
        var email = $(this).val();
		
        $.ajax({
                  method:'POST',
                  url: '/../establishment-accounts/email-check/',
				  data: {email},
                  
                  success: function(data)
                  {                    
					
					if(data==1){					
                       $('.invalid-feedback').css("display", "block");
					}else{
						$('.invalid-feedback').css("display", "none");
					}

                  }
        });
    })
});

//validate TIN No
$(function(){
    $('#tin').keyup(function(){
        var tin = $(this).val();
		
        $.ajax({
                  method:'POST',
                  url: '/accreditation_user/establishment-accounts/tin-check/',
				  data: {tin},
                  
                  success: function(data)
                  {                    
					
					if(data==1){					
                       $('.invalid-tin').css("display", "block");
					}else{
						$('.invalid-tin').css("display", "none");
					}

                  }
        });
    })
});