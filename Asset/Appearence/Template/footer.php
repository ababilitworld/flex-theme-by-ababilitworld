
            <div class="container-footer">
                <div class="footer-header">

                </div>
                <div class="footer-body">
                    
                    <div class="topic-info">
                        <div class="header">
                            <div class="header3-wrap">
                                <h3>About Us</h3>
                            </div>
                        </div>
                        <div class="info-body">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti unde voluptas sequi illum accusamus ipsam, esse at reprehenderit! Minima atque eos et itaque iusto veniam perferendis eum, numquam repellat ad?</p>
                        </div>
                        <div class="info-footer">
                        </div>
                    </div>
                    <div class="topic-info">
                        <div class="header">
                            <div class="header3-wrap">
                                <h3>Contact Info</h3>
                            </div>
                        </div>
                        <div class="info-body">
                            <div class="container-info">
                                <!-- Column 1 (Custom Logo spanning two rows) -->
                                <div class="info-item-1">
                                <!-- <span class="info-item-icon"><i class="fa fa-address-card-o"></i></span> -->
                                
                                </div>
                                
                                <div class="info-item-2">
                                    <span class="info-item-icon"><i class="fa fa-phone"></i></span>
                                    <?php echo esc_html(get_theme_mod('contact_number', '+8801770000099')); ?>
                                    
                                </div>
                                
                                <div class="info-item-3">
                                    <span class="info-item-icon"><i class="fa fa-envelope-o"></i></span>
                                    <?php echo esc_html(get_theme_mod('email_address', 'ababilithub@gmail.com')); ?>              
                                </div>
                                <div class="info-item-4">
                                <span class="info-item-icon"><i class="fa fa-map-marker"></i></span>
                                <span class="address-line1"><?php echo esc_html( get_theme_mod( 'address_line_1', 'Newtown - 5, Dinajpur - 5200' ) ); ?></span>
                                <span class="country"><?php echo esc_html( get_theme_mod( 'country', 'Bangladesh' ) ); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="Info-footer">

                        </div>
                    </div>
                    <div class="topic-info">
                        <div class="header">
                            <div class="header3-wrap">
                                <h3>Important Links</h3>
                            </div>
                        </div>
                        <div class="info-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d196520.42359386233!2d90.28148423171284!3d23.761029282508698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8a48e9b8c7b%3A0x54a24c66a987303c!2sECOSURV%20Real%20Estate%20Limited!5e0!3m2!1sen!2sbd!4v1725848680303!5m2!1sen!2sbd" width="350" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="info-footer">
                        </div>
                    </div>
                </div>
                <div class="footer-footer">
                    <P>Copyright © <?php echo esc_html(date('Y'));?> . All rights reserved. </P>
                    <p>Developed by : Ababil IT World</p>
                </div>
            </div>

        </div>
        <?php wp_footer(); ?>
    </body>
</html>
