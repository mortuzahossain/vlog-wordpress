<?php
global $vlog;
$coppyright_tect = $vlog['copyright-text'];
$mailchimp       = $vlog['subscribe_link'];
?>
                   
                </div>
            </div>
        </div>
    </div>
</section>




       
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-lg-offset-1">
                        <div class="footer-wid">

<?php if ( is_active_sidebar( 'bottom-1' ) ) { ?>
    <div id="widget-area" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'bottom-1' ); ?>
    </div><!-- .widget-area -->
<?php }else{
?>
                            <h2 class="wid-title">A<span>vengers</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis 
                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan,</p>
<?php
} ?>
                            
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="footer-wid">
                            <h2 class="wid-title">Newsletter</h2>
                            <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            
                            <div class="newsletter-form">
                                <form id="mc-form" method="post" action="<?php echo $mailchimp; ?>">
                                    <input id="mc-email"  class="shadow-z-1" type="email" placeholder="Your Email address">
                                    <button type="submit" class="btn btn-material-red">Subscribe Now!</button>
                                    <label for="mc-email" class="mc-label"></label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-bottom">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="copyright-text">
                                        <p><?php if(!empty($coppyright_tect)){echo $coppyright_tect;} ?></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="social-links footer-social-links">
<?php if(isset($vlog['contact_social']) && !empty($vlog['contact_social'][0]['title'])){ ?>
    <?php foreach ($vlog['contact_social'] as $key) { ?>
                            <a class="btn social-link" target="_blank" href="<?php echo $key['url']; ?>"><i class="fa <?php echo $key['title']; ?>"></i> <div class="ripple-wrapper"></div></a>
<?php } } else { ?>
                            <a class="btn social-link" href="javascript:void(0)"><i class="fa fa-facebook"></i> <div class="ripple-wrapper"></div></a>
                            <a class="btn social-link" href="javascript:void(0)"><i class="fa fa-twitter"></i> <div class="ripple-wrapper"></div></a>
                            <a class="btn social-link" href="javascript:void(0)"><i class="fa fa-google-plus"></i> <div class="ripple-wrapper"></div></a>
                            <a class="btn social-link" href="javascript:void(0)"><i class="fa fa-youtube"></i> <div class="ripple-wrapper"></div></a>
                            <a class="btn social-link" href="javascript:void(0)"><i class="fa fa-linkedin"></i> <div class="ripple-wrapper"></div></a>
<?php } ?>
                                    </div>                        
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    
        <?php wp_footer(); ?>
        
    </body>
</html>