<section class="register-section">

        <div class="auto-container">

            <div class="anim-icons full-width">

                <span class="icon icon-circle-3 wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;"></span>

            </div>

            <div class="outer-box">

                <div class="row no-gutters">

                    <div class="title-column col-lg-4 col-md-6 col-sm-12">

                        <div class="inner">

                            <div class="sec-title light">

                                
                                <img src="https://damac-riverside.ae/assets/uaelogo1.png" width="50%">

                                <h2>Contact Us</h2>

                                <div class="text">Want to know more details about off-plan properties? Contact Us</div>

                            </div>

                        </div>

                    </div>

                    <!--Register Form-->

                    <div class="register-form col-lg-8 col-md-6 col-sm-12">

                        <div class="form-inner">

                            <form >
                                <div class="col-md-12 " style="text-align: center;display: none;" id="error_msg_contact">
                                    <h5 style="color:red;font-size: 25px;font-weight: 700;" id="error_data_contact">Your Name,Email and phone is Mandatory</h5>
                                </div> <!-- /.col- --> 

                                <div class="form-group">

                                    <span class="icon fa fa-user"></span>

                                    <input type="text" name="name" id="namebottom" placeholder="Your Name*" required>

                                </div>

                                <div class="form-group">

                                    

                                    <select name="person" id="personbottom" class="people_type_bottom">
                                        <option value="none"> You are:</option>
                                        <option value="Buyer"> Buyer</option>
                                        <option value="Agent"> Agent</option>
                                        <option value="Investor"> Investor</option>
                                    </select>

                                </div>



                                <div class="form-group">

                                    <span class="icon fa fa-envelope"></span>

                                    <input type="email" name="email" id="emailbottom" placeholder="Your Email*" required>

                                </div>



                                <div class="form-group">

                                    

                                    <input type="text" name="phone" id="phonebottom" required>
                                    

                                </div>



                                <div class="form-group">

                                    <span class="icon fa fa-edit"></span>

                                    <textarea name="message" id="messagebottom" placeholder="Your Message"></textarea>

                                </div>



                                <div class="form-group text-right">

                                    <button type="button" class="theme-btn btn-style-four gen-btn" onclick="submitEnquiryContact()"><span class="btn-title">Submit</span></button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


        <script>
          const inputphoneBottom = document.querySelector("#phonebottom");
          window.intlTelInput(inputphoneBottom, {
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@21.2.7/build/js/utils.js",
            initialCountry: "AE",
          });
        </script>
  
        <script>
        

            function submitEnquiryContact(){

                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                var phoneRegex = /^[0-9\+]{1,}[0-9\-]{3,15}$/;


                if($('#namebottom').val() == '' && $('#emailbottom').val() == '' && $('#phonebottom').val() == '' && $('#messagebottom').val() == ''){
                    $('#error_data_contact').html('Your Name,Email and phone is Mandatory');
                    $('#error_msg_contact').show();
                } else if($('#personbottom').val() == "none"){
                    $('#error_data_contact').html('Please specify whether you are a Buyer,an Agent or an Investor!!! ');
                    $('#error_msg_contact').show();
                } else if(!emailRegex.test($('#emailbottom').val()) && $('#emailbottom').val()!=''){
                    $('#error_data_contact').html('Please check email format!!');
                    $('#error_msg_contact').show();
                } else if($('#namebottom').val() == ''){
                    $('#error_data_contact').html('Your Name is Mandatory');
                    $('#error_msg_contact').show();
                } else if($('#emailbottom').val() == ''){
                    $('#error_data_contact').html('Your Email is Mandatory');
                    $('#error_msg_contact').show();
                } else if($('#phonebottom').val() == ''){
                    $('#error_data_contact').html('Your Phone is Mandatory');
                    $('#error_msg_contact').show();
                } else {

                    $('#error_msg_contact').hide();
                            $.ajax({
                                url: "/send_bottom_enquiry/slug_null",
                                type: 'GET',
                                data: {
                                        "type":"Bottom Form Lead",
                                        "person": $('#personbottom').val(),
                                        "name":$('#namebottom').val(),
                                        "email":$('#emailbottom').val(),
                                        "phone":$('#phonebottom').val(),
                                        "message":$('#messagebottom').val(),
                                        "page": window.location.href,
                                },
                                success: function(response){
                                    console.log(response);

                                    

                                    Swal.fire({
                                        title: "Thank you!.Your Enquiry was Successful. We shall contact you shortly!!!.",
                                        icon: 'success',
                                        showCloseButton: true
                                    });
                                    $('#namebottom').val('');
                                    $('#phonebottom').val('');
                                    $('#emailbottom').val('');
                                    $('#messagebottom').val('');
                                    $('#personbottom').val('none');
                                    
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

