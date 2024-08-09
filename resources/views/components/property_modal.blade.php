<div class="modal fade" id="propertyModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header sec-title">
                    <h2 class="modal-title text-center" id="propertyModalLabel" style="font-size: 20px;"> Free Download Twin tower</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <div class="modal-body">

                	<section class="contact-page-section" style="padding: unset;">
				        <div class="auto-container">
				            <div class="row clearfix">
				                

				                <!-- Form Column -->
				                <div class="form-column col-lg-12 col-md-12 col-sm-12">
				                    <div class="inner-column">
				                        <div class="contact-form">
				                            <input type="hidden" id="propertyTitle" name="title" value="8">
                                        	<input type="hidden" id="propertyDocument" name="document" value="10">
				                            
				                                <div class="row clearfix">
				                                	
				                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
				                                        <!-- <input type="text" name="username" placeholder="Name" required=""> -->
				                                        <select class="people_type" id="personModal" name="person">
						                                    <option value="none"> You are:</option>
						                                    <option value="Buyer"> Buyer</option>
						                                    <option value="Agent"> Agent</option>
						                                    <option value="Investor"> Investor</option>
						                                </select>
				                                    </div>
				                                    
				                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
				                                        <!-- <input type="text" name="phone" placeholder="Phone" required=""> -->
				                                        <input type="text" name="name" id="nameModal" placeholder="Your Name*" required>
				                                    </div>

				                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
				                                        <!-- <input type="email" name="email" placeholder="Email" required=""> -->
				                                        <input type="text" name="phone" id="phoneModal" placeholder="050 123 4567" required>
				                                    </div>

				                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
				                                        <!-- <input type="text" name="subject" placeholder="Subject" required=""> -->
				                                        <input type="email" name="email" id="email" placeholder="Your Email*" required>
				                                    </div>
				                                    
				                                    
				                                    
				                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
				                                        <button class="theme-btn btn-style-one" type="button" name="submit-form" onclick="submitEnquiry()" style="width: -webkit-fill-available;"><span class="btn-title">Submit</span></button>
				                                    </div>

				                                    
				                                </div>
				                            
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </section>
                    
                </div>
                <div class="modal-footer text-center">
                	<div class="col-md-12 " style="text-align: center;display: none;" id="error_msg">
														<h5 style="color:red;font-size: 20px;font-weight: 700;" id="error_data">Your Name,Email and phone is Mandatory</h5>
													</div> <!-- /.col- -->
                </div>
            </div>
        </div>
    </div>

    


    
	<script>
	  const inputModal = document.querySelector("#phoneModal");
	  window.intlTelInput(inputModal, {
	    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@21.2.7/build/js/utils.js",
	    initialCountry: "AE",
	  });
	</script>

    <script>
    	
    	var modal = document.getElementById("propertyModal");

        function brochureEnquiry(title){

            $('#propertyModalLabel').html('Free Brochure Download '+title);
            $('#propertyTitle').val(title);
            $('#propertyDocument').val("Brochure");
            $('#propertyModal').modal('show');

        }

        function floorPlanEnquiry(title){
             $('#propertyModalLabel').html('Free Floor Plan Download '+title);
             $('#propertyTitle').val(title);
             $('#propertyDocument').val("Floor Plan");
             $('#propertyModal').modal('show');
        }


        function submitEnquiry(){

			var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
			var phoneRegex = /^[0-9\+]{1,}[0-9\-]{3,15}$/;

			if($('#nameModal').val() == '' && $('#phoneModal').val() == '' && $('#email').val() == ''){
				$('#error_data').html('Your Name,Email and phone is Mandatory');
				$('#error_msg').show();
			} else if($('#personModal').val() == "none"){
                $('#error_data').html('Please specify whether you are a Buyer,an Agent or an Investor!!! ');
                $('#error_msg').show();
            }  else if(!emailRegex.test($('#email').val()) && $('#email').val()!=''){
				$('#error_data').html('Please check email format!!');
				$('#error_msg').show();
			} else if($('#nameModal').val() == ''){
				$('#error_data').html('Your Name is Mandatory');
				$('#error_msg').show();
			} else if($('#email').val() == ''){
				$('#error_data').html('Your Email is Mandatory');
				$('#error_msg').show();
			} else if($('#phoneModal').val() == ''){
				$('#error_data').html('Your Phone is Mandatory');
				$('#error_msg').show();
			} else {
				$('#error_msg').hide();
				$('#error_msg').hide();

				$.ajax({
		        url: "send_enquiry/slug_null",
		        type: 'GET',
		        data: {
		        		"type":$('#propertyDocument').val(),
		        		"person": $('#personModal').val(),
		        		"enquiry_data":$('#propertyTitle').val(),
		        		"title":$('#propertyTitle').val(),
		                "name":$('#nameModal').val(),
		                "phone":$('.iti__selected-country').attr('title')+" "+$('#phoneModal').val(),
		                "email":$('#email').val(),
		                "message":$('#propertyModalLabel').html(),
		                "page": window.location.href,
		        },
		        success: function(response){
		            console.log(response);

		            modal.style.display = 'none';
		            $('.modal-backdrop').removeClass('show');
		            
		            if(response['type'] == 'Floor Plan'){
			            if(response['floor_plan_link'] != ''){
			            	var homeURL = window.location.origin;
			            	var downloadFolder = "<?php echo asset('images/floorplan_pdfs')?>";
			            	var openPDF =  downloadFolder +"/"+ response['floor_plan_link'];
			            	window.open(openPDF, '_blank');
			            }
			        }

			        if(response['type'] == 'Brochure'){

			            if(response['brochure_link'] != ''){
			            	var homeURL = window.location.origin;
			            	var downloadFolder = "<?php echo asset('images/brochure_pdfs')?>";
			            	var openPDF =  downloadFolder +"/"+ response['brochure_link'];
			            	window.open(openPDF, '_blank');
			            }
			        }

		            Swal.fire({
		                title: "Thank you!.Your Enquiry was Successful. We shall contact you shortly!!!.",
		                icon: 'success',
		                showCloseButton: true
		            });
		            $('#nameModal').val('');
		            $('#phoneModal').val('');
		            $('#email').val('');
		            $('#message').val('');
		            $('#personModal').val('none');
		            
		        },
		        beforeSend: function(){
			    	//$('#loader_ajax').show();
			    	$(".gen-btn").prop("disabled",true);
			    	$(".gen-btn").html("<i class='fa fa-refresh fa-spin' style='font-size:24px'></i>&nbsp;&nbsp;Submitting");
			    	
			    },
			    complete: function(){
			        //$('#loader_ajax').hide();
			    	$(".gen-btn").prop("disabled",false);
			    	$(".gen-btn").html("Submit");
			    }    
		    });
			}
		}


    </script>


