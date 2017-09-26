<?php
    // Template Name: Contact Template
    get_header();
    global $vlog;
    $lat            = $vlog['contact-map-lat'];
    $lon            = $vlog['contact-map-lon'];
    $map_marker     = $vlog['map-marker-logo']['thumbnail'];
    if(empty($map_marker)){
        $map_marker     = get_template_directory_uri().'/img/map-marker.png';
    }

?>


<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="article-list">

            <div class="entry-content">
                <div class="entry-title text-center">
                    <p>want to know more?</p>
                    <h2>Contact with me</h2>
                </div>

                <div id="map-canvas"></div>                                        
                <!-- Google Maps API -->
                <script src="https://maps.googleapis.com/maps/api/js"></script>
                <script>
                    function initialize() {
                      var mapOptions = {
                        zoom: 17,
                        scrollwheel: false,
                        center: new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $lon; ?>)
                      };

                      var map = new google.maps.Map(document.getElementById('map-canvas'),
                          mapOptions);


                      var marker = new google.maps.Marker({
                        position: map.getCenter(),
                        icon: '<?php echo $map_marker; ?>',
                        map: map
                      });

                    }

                    google.maps.event.addDomListener(window, 'load', initialize);
                </script>                                         

                 <div class="contact-form shadow-z-1">
                    <h2 class="contact-title">Get in touch</h2>
                    
                    <form action="" method="post" id="main-contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-control-wrapper">
                                    <input required="1" type="text" class="form-control empty" name="name">
                                    <div class="floating-label">Your Name</div>
                                    <span class="material-input"></span>
                                </div>                                                     
                            </div>
                            <div class="col-md-6">
                                <div class="form-control-wrapper">
                                    <input required="1" type="email" class="form-control empty" name="email">
                                    <div class="floating-label">Your email</div>
                                    <span class="material-input"></span>
                                </div>                                                     
                            </div>
                        </div>

                        <div class="form-control-wrapper">
                            <input required="1" type="text" class="form-control empty" name="address">
                            <div class="floating-label">Your Address</div>
                            <span class="material-input"></span>
                        </div>

                        <div class="form-control-wrapper">
                            <textarea required="1" name="message" id="message" class="form-control empty" cols="30" rows="10"></textarea>
                            <div class="floating-label">Message</div>
                            <span class="material-input"></span>
                        </div>

                        <p><button type="submit" class="btn btn-danger" name="send">Send message</button></p>
                    </form>
                </div>
            </div>

      
<?php
if (isset($_POST['send'])) {
    $name           = $_POST['name'];
    $email          = $_POST['email'];
    $address        = $_POST['address'];
    $message        = $_POST['message'];
    if(!empty($name) && !empty($email) && !empty($address) && !empty($message) ){
        
        $to = $vlog['admin-email'];

        $admin_subject = "Message From ".get_option( 'blogname' );
        $admin_message = $name."\n\n".$email."\n\n".$address."\n\n".$message;

        $user_back_subject = "Thanks From ".get_option( 'blogname' );
        $user_back_message = "I Got Your Feedback Thanks. I will replay Back to you if i fell necessary.";

        if (wp_mail($to, $admin_subject, $admin_message)) {
            wp_mail($email, $user_back_subject, $user_back_message);
            echo '<div class="archive-title shadow-z-1"><h2><strong>Your massage has been send.</strong></h2></div>';
        } else {
            echo '<div class="archive-title shadow-z-1"><h2><strong>Sorry Please Try Again.</strong></h2></div>';
        }
    } else {
        echo '<div class="archive-title shadow-z-1"><h2><strong>Please fill all the input fields.</strong></h2></div>';
    }
}

?>
        </div>                                    
    </div>
</div>

<?php get_footer(); ?>