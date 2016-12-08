        <!--
       #contact
       ========================== -->
        <section id="contact">
            <div class="container">
                <div class="row">

                    <div class="section-title text-center wow fadeInDown">
                        <h2>Контакти</h2>
                    </div>

                    <div class="col-md-8 col-sm-9 wow fadeInLeft">
                        <div class="contact-form clearfix" style="padding-bottom: 20px" >
                            <form action="index.html" method="post">
                                <div class="input-field">
                                    <input type="text" class="form-control" name="name" placeholder="Введіть, будь ласка, Ваше ім'я" required="">
                                </div>
                                <div class="input-field">
                                    <input type="email" class="form-control" name="email" placeholder="Ваш електронний адрес" required="">
                                </div>
                                <div class="input-field message">
                                    <textarea name="message" class="form-control" placeholder="Ваш запит або повідомлення" required=""></textarea>
                                </div>
                                <input type="submit" class="btn btn-blue pull-right" value="Здійснити запит" id="msg-submit">
                            </form>
                        </div> <!-- end .contact-form -->
                    </div> <!-- .col-md-8 -->

                    <div class="col-md-4 col-sm-3 wow fadeInRight">
                        <div class="contact-details">
                            <span>Інформація для зв'язку :</span>
                            <a class="phone-no" >
                                <span class="top-icon"><i class="fa fa-phone-square"></i></span>
                                +38 067 000 000
                            </a>
                            <br><br>
                            <a class="phone-no" >
                                <span class="top-icon"><i class="fa fa-phone-square "></i></span>
                                +38 067 777 000
                            </a>
                            <br><br>
                            <a class="phone-no" >
                                <span class="top-icon"><i class="fa fa-envelope-o" aria-hidden="true"></i> </i></span>
                                totalgaz@i.ua
                            </a>



                            </li>
                        </div> <!-- end .contact-details -->

                        <div class="contact-details">
                            <span>Наша адреса :</span>
                            <a><p>76018 <br> <br> Україна, <br> <br> м.Івано-Франківськ, <br> <br>вул. Гетьмана Мазепи 72, <br> <br> офіс 2  </p></a>
                        </div> <!-- end .contact-details -->
                    </div> <!-- .col-md-4 -->
                </div>
                <!-- GOOGLE MAP===============-->

                <div>

                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:1150px;'><div id='gmap_canvas' style='height:440px;width:1150px;'></div><div><small><a href="http://embedgooglemaps.com">embed google maps</a></small></div><div><small><a href="https://termsandcondiitionssample.com">terms and conditions sample</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(48.9173579,24.700791600000002),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(48.9173579,24.700791600000002)});infowindow = new google.maps.InfoWindow({content:'<strong>Totalgaz Industrie Ukraine</strong><br>Ukraine, Ivano-Frankivsk, 72 Het`mana Mazepy Street<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                </div>


            </div>
        </section>
        <!--
        End #contact
        ========================== -->