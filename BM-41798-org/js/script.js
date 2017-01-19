$(document).ready(function(){
		$("#btn_log").click(function(){
			var username=$("#email").val();
			var password=$("#password").val();
			if(username==""){
				$("#user_error").text("FILL Username");
				}else{
					console.log(username);
					}
					if(password==""){
				$("#password_error").text("FILL Password");
				}else{
					console.log(password);
					}
					
		});
		$("#btn_create").click(function(){
				var firstname=$("#firstname1").val();
					if(firstname=="")
					{
						$("#firstname_error").text("Fill firstname");
						return false;
						}
						else
						    {
							$('label[id="firstname_error"]').hide();
	              if(!(/^[a-zA-Z]+$/.test(firstname))){
                  $("#firstname_char").text("Only character in firstname");
				  return false;
				  }
							}
							var lastname=$("#lastname1").val();
							if(lastname==""){
								$('label[id="firstname_error"]').hide();
								$('label[id="firstname_char"]').hide();
								$("#lastname_error").text("Fill Lastname");
								return false;
								}else{
									var email=$("#email_error").val();
									if(email==""){
										$("#email_error_1").text("Fill email");
										return false;
										}else{
											var email=$("#email_error").val();
								            var atpos = email.indexOf("@");
                                            var dotpos = email.lastIndexOf(".");
                                            if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
												$('label[id="email_error_1"]').hide();
                                            $("#email_error_12").text("Enter A valid Email");
											return false;
                                       }else{
										   var email2=$("#email_2").val();
										   if(email2==""){
											 $('label[id="email_error_12"]').hide();  
										    $("#email_error_2").text("fill Email");
										   }
										   }
										}
								}
								
											});
						
	});