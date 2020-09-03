<footer class="footer-area text-left">
    <div class="footer-top bg-img default-overlay pt-50">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>About Intelligence</h4>
                            <div class="footer-about">
                                <p><?php echo $profile->description ?></p>
                                <ul class="list-inline list-inline-sm footer-social-list">
                                    <li><a class="icon fa fa-facebook" target="_blank" href="<?=$social_media_links->facebook_links;?>"></a></li>
                                    <li><a class="icon fa fa-twitter" target="_blank" href="<?=$social_media_links->twitter_links;?>"></a></li>
                                    <li><a class="icon fa fa-linkedin" target="_blank" href="<?=$social_media_links->linkden_links;?>"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-about">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>QUICK LINK</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="<?php echo base_url(); ?>about"><i class="fa fa-long-arrow-right"></i> About Us</a></li>
                                <li><a href="<?php echo base_url(); ?>services"><i class="fa fa-long-arrow-right"></i> Services</a></li>
                                <li><a href="<?php echo base_url(); ?>joinus"><i class="fa fa-long-arrow-right"></i> Join Us</a></li>
                                <li><a href="<?php echo base_url(); ?>contact"><i class="fa fa-long-arrow-right"></i> Contact Us</a></li>
                                <li><a href="<?php echo base_url(); ?>privacypolicy"><i class="fa fa-long-arrow-right"></i> Privacy</a></li>
                                <!-- <li><a href="#"><i class="fa fa-long-arrow-right"></i> Terms</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>GET IN TOUCH</h4>
                        </div>
                        <div class="footer-about">
                            <div class="f-contact-info">
                                <div class="single-f-contact-info">
                                    <i class="fa fa-home"></i>
                                    <span><?php echo $address->company; ?>,<br> <?php echo $address->address; ?> <?php echo $address->state; ?>, VA  <?php echo $address->pin_code; ?></span>
                                </div>
                                <div class="single-f-contact-info">
                                    <i class="fa fa-envelope-o"></i>
                                    <span><a href="#"><?php echo $address->email; ?></a></span>
                                </div>
                                <div class="single-f-contact-info">
                                    <i class="fa fa-phone"></i>
                                    <span><?php echo $address->mobile_number; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>Our Office</h4>
                        </div>

                        <img src="<?php echo base_url(); ?>uploads/<?php echo $address->image ?>" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container footer-bottom-panel wow fadeInUp text-center">
        <!-- Rights-->
        <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span> <span>Intelligence Systems</span>. All rights reserved. | Designed by <a href="http://thecolourmoon.com/" target="_blank">ColourMoon Technologies</a>
    </p>
</div>
</footer>
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<div class="mobile-btn">
<div class="container">
<div class="row">
    <div class="col-6">
        <a href="tel:(703) 801-5334" class="ph-btn ph-btn2"><i class="fa fa-phone"></i> Call us</a>
    </div>
    <div class="col-6">
        <a href="mailto:info@intelsysinc.com" class="ph-btn ph-btn"><i class="fa fa-envelope-o"></i> Email</a>
    </div>
</div>
</div>
</div>
<nav id="menu">
<ul>
<li><a href="<?php echo base_url(); ?>home">Home</a></li>
<li><a href="<?php echo base_url(); ?>about">About Us</a></li>
<li><span>Services</span>
<ul>
    <li><a href="<?php echo base_url(); ?>services/program_management">Program Management</a></li>
    <li><a href="<?php echo base_url(); ?>services/devsecops">DevSecOps</a></li>
    <li><a href="<?php echo base_url(); ?>services/cybersecurity">Cyber Security</a></li>
    <li><a href="<?php echo base_url(); ?>services/cloudservices">Cloud Services</a></li>
    <li><a href="<?php echo base_url(); ?>services/ivandv">IV&V</a></li>
</ul>
</li>
<li><a href="<?php echo base_url(); ?>professionalservices">Professional Services</a></li>
<li><a href="<?php echo base_url(); ?>joinus">Join Us</a></li>
<li><a href="<?php echo base_url(); ?>contact">Contact Us</a></li>
</ul>
</nav>
<script src="<?php echo base_url(); ?>assests/js/core.min.js"></script>
<script src="<?php echo base_url(); ?>assests/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assests/js/jquery.mmenu.js"></script>
<script>
$('nav#menu').mmenu();
</script>
</body>
</html>