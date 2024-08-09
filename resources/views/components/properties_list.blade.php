<section class="news-section">

        <div class="anim-icons">

            <span class="icon icon-circle-blue wow fadeIn animated" style="visibility: visible; animation-name: fa-spin;"></span>

            <span class="icon twist-line-1 wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;"></span>

            <span class="icon twist-line-2 wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;"></span>

            <span class="icon twist-line-3 wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;"></span>

        </div>

        <div class="auto-container">

            <div class="sec-title text-center" style="padding: 12px;">


                <h2>Direct Yourself To Developer's Page For More Details</h2>
                <hr style="width:50%;margin-left:25%;">

            </div>
            <div class="row">

                <div class="owl-carousel owl-theme">
                    <?php
                        
                        for($i=0; $i<count($allProperties); $i=$i+2){
                            
                            $path = 'images/thumbnail_images/'.$allProperties[$i]["thumbnail_image"]; 
                            $altpropertyImage = $allProperties[$i]["title"]." Properties ";
                            $path_developer = 'images/developer_images/'.$allProperties[$i]["developer_image"];  
                            $altpropertydeveloperImage = $allProperties[$i]["developer_title"]." Developers ";
                    ?>


                    <!-- News Block Three -->


                    <div class="item">
                        <!-- Even item -->
                        <div class="news-block col-lg-12 col-md-12 col-sm-12 wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">

                            <div class="inner-box">

                                <div class="image-box ">
                                   
                                    

                                    
                                    

                                    <figure class="image box">
                                        <div class="ribbon ribbon-top-left"><span>10% Booking</span></div>
                                        <a>
                                            <img src="{{ $path }}" alt="{{$altpropertyImage}}">
                                        </a>
                                        <div class="developer-logo-div">
                                        
                                                <img src="{{$path_developer}}" alt="{{$altpropertydeveloperImage}}" class="developer-img">
                                        
                                        </div>
                                        <div class="whatsapp-div">
                                           <a href="https://api.whatsapp.com/send?phone={{$whatsapp_input}}&amp;text=Hi%20there,Thank%20You%20for%20showing%20Interest%20in%20this%20Off-Plan%20Property%20-%20{{$allProperties[$i]['title']}}" target="_blank" style="color:unset;">
                                                <img src="https://samanaproperties.ae/website/images/whatsapp.png" alt="whatsapp_{{$allProperties[$i]['title']}}">
                                            </a>
                                        </div>
                                        <div class="phone-div">
                                            <a href="tel:+971522405511" target="_blank" style="color:unset;">
                                                <img src="https://samanaproperties.ae/website/images/CALL.png" alt="call_{{$allProperties[$i]['title']}}">
                                            </a>
                                        </div>
                                    </figure>

                                </div>

                                <div class="lower-content property-div-btm">

                                    
                                    <h4><a>{{ $allProperties[$i]['developer_title']." ".$allProperties[$i]['title'] }}</a></h4>
                                    <div class="row">
                                        <div class="about-block col-lg-5 col-md-5 col-sm-12 w-mob-50">
                                            <div class="inner-box">
                                                <h4 class="price-fa-h4"><span class="icon fa fa-bed"></span> {{ $allProperties[$i]['no_of_beds'] }}</h4>
                                                
                                            </div>
                                        </div>
                                        <div class="about-block col-lg-7 col-md-7 col-sm-12 w-mob-50">
                                            <div class="inner-box">
                                                <h4 class="price-fa-h4"><span class="icon fa fa-thumbs-up"></span> {{ $allProperties[$i]['price'] }}</h4>
                                                
                                            </div>
                                        </div>
                                    </div>  

                                    

                                    <p style="text-align:justify;">{{ $allProperties[$i]['short_description'] }}</p>
                                    
                                                                    
                                    <div class="row button_div">
                                        <div class="col-lg-8 col-md-8 col-sm-12 w-mob-80">
                                            <div class="btn-box"><a href="{{ $allProperties[$i]['link'] }}" class="read-more text-uppercase" target="_blank">Developer Page</a></div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 w-mob-20 pos_left_neg_50">
                                             <div class="btn-box"><a onclick="brochureEnquiry('{{$allProperties[$i]["title"]}}')" class="read-more text-uppercase brochure-btn-pos"> Brochure</a></div>
                                        </div>
                                       
                                    </div>
                                    

                                </div>

                            </div>

                        </div>

                        <?php 
                        if( $i+1 < count($allProperties)) {
                            $path = 'images/thumbnail_images/'.$allProperties[$i+1]["thumbnail_image"]; 
                            $altpropertyImage = $allProperties[$i+1]["title"]." Properties ";
                            $path_developer = 'images/developer_images/'.$allProperties[$i+1]["developer_image"];  
                            $altpropertydeveloperImage = $allProperties[$i+1]["developer_title"]." Developers ";
                        ?>
                        <!-- Odd item -->
                        <div class="news-block col-lg-12 col-md-12 col-sm-12 wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">

                            <div class="inner-box">

                                <div class="image-box ">
                                   
                                    

                                    

                                    <figure class="image box">
                                        <div class="ribbon ribbon-top-left"><span>10% Booking</span></div>
                                        <a>
                                            <img src="{{ $path }}" alt="{{$altpropertyImage}}">
                                        </a>
                                        <div class="developer-logo-div">
                                        
                                                <img src="{{$path_developer}}" alt="{{$altpropertydeveloperImage}}" class="developer-img">
                                        
                                        </div>
                                        <div class="whatsapp-div">
                                            <a href="https://api.whatsapp.com/send?phone={{$whatsapp_input}}&amp;text=Hi%20there,Thank%20You%20for%20showing%20Interest%20in%20this%20Off-Plan%20Property%20-%20{{$allProperties[$i+1]['title']}}" target="_blank" style="color:unset;">
                                                <img src="https://samanaproperties.ae/website/images/whatsapp.png" alt="whatsapp_{{$allProperties[$i+1]['title']}}">
                                            </a>
                                        </div>
                                        <div class="phone-div">
                                            <a href="tel:+971522405511" target="_blank" style="color:unset;">
                                                <img src="https://samanaproperties.ae/website/images/CALL.png" alt="call_{{$allProperties[$i+1]['title']}}">
                                            </a>
                                        </div>
                                    </figure>

                                </div>

                                <div class="lower-content property-div-btm">

                                    <h4><a>{{$allProperties[$i+1]['developer_title']." ".$allProperties[$i+1]['title'] }}</a></h4>

                                    <div class="row">
                                        <div class="about-block col-lg-5 col-md-5 col-sm-12 w-mob-50">
                                            <div class="inner-box">
                                                <h4 class="price-fa-h4"><span class="icon fa fa-bed"></span> {{ $allProperties[$i+1]['no_of_beds'] }}</h4>
                                                
                                            </div>
                                        </div>
                                        <div class="about-block col-lg-7 col-md-7 col-sm-12 w-mob-50">
                                            <div class="inner-box">
                                                <h4 class="price-fa-h4"><span class="icon fa fa-thumbs-up"></span> {{ $allProperties[$i+1]['price'] }}</h4>
                                                
                                            </div>
                                        </div>
                                    </div>  

                                    

                                    <p style="text-align:justify;">{{ $allProperties[$i+1]['short_description'] }}</p>
                                    
                                                                    
                                    <div class="row button_div">
                                        <div class="col-lg-8 col-md-8 col-sm-12 w-mob-80">
                                            <div class="btn-box"><a href="{{ $allProperties[$i+1]['link'] }}" class="read-more text-uppercase" target="_blank">Developer page</a></div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 w-mob-20 pos_left_neg_50">
                                            <div class="btn-box"><a onclick="brochureEnquiry('{{$allProperties[$i+1]["title"]}}')" class="read-more text-uppercase brochure-btn-pos">Brochure </a></div>
                                        </div>
                                        
                                    </div>
                                    

                                </div>

                            </div>

                        </div>
                        <?php }?>


                    </div>

                    


                    <?php

                        }
        
                    ?>
                    
                    
                    
                    
                </div>






            </div>

        </div>

    </section>