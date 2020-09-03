<?php include 'includes/header.php' ;?>
<section class="breadcrumbs-custom-inset">
  <div class="breadcrumbs-custom">
    <div class="container">
      <h1 class="breadcrumbs-custom-title"><?php echo $title; ?></h1>
      <ul class="breadcrumbs-custom-path">
        <li><a href="<?php echo base_url(); ?>home">Home</a></li>
        <li class="active">Privacy Policy</li>
      </ul>
    </div>
    <div class="box-position" style="background-image: url(<?php echo base_url(); ?>assests/images/sub.png);"></div>
  </div>
</section>
<section class="section section-sm  bg-default text-md-left privacy-policy">
  <div class="container">
    <div class="row row-50 justify-content-center align-items-xl-center">
      <div class="col-md-12 col-lg-12 col-xl-12">

        <p>Intelligence Systems Corporation (Hereafter called “Intelligence Systems”, Company, We, Our, Us) has a comprehensive Data Protection and Privacy Policy plan. Our Privacy Policy published on our website (Domain name – <a href="">www.intelligencesystems.com</a> (Website)) clearly explains how we collect, process and use users’ data (Website Users) provided to us using contact forms on the website or offline at events.</p>

        <h4>Users’ Personal Data on Website</h4>

        <p>We have provided the enquiry, and Jobs forms on different pages of the website and the users will provide us the information such as: Name, Title, Company, Email Id</p>

        <h4>Scope and How Data Used</h4>

        <p>The website users contact us through the email id’s we listed on the website such as contact@intelligencesystems.com and provide the following data to us for various reasons such as:</p>

        <ul class="list-sm list-marked list-marked-sm list-marked-secondary text-spacing-100">
          <li>Requesting additional information on our services and solutions</li>
        </ul>

        <h4>How we process and use the data</h4>
        
        <ul class="list-sm list-marked list-marked-sm list-marked-secondary text-spacing-100">
          <li>All the users’ data we receive through the website is stored on the cloud in a safe and secure environment</li>
          <li>We may use the data to send you newsletters, promotional campaigns, our new offerings, or events information that we participate.</li>
          <li>We will not share your personal information with any public, private organization or institution for commercial purposes</li>
        </ul>

        <h4>3rd Party and Social Media website Links</h4>

        <ul class="list-sm list-marked list-marked-sm list-marked-secondary text-spacing-100">
          <li>Our website may contain links to external websites such as 3rd party website external websites, and social media websites and they are outside the purview of our privacy policy and statement. </li>
        </ul>

        <h4>GDPR Compliance</h4>
        <p>Intelligence Systems complies by all data privacy regulations and guidelines of GDPR (General Data Protection Regulation) with regard:</p>

        <ul class="list-sm list-marked list-marked-sm list-marked-secondary text-spacing-100">
          <li>Collection of users’ personal information </li>
          <li>Safety and security of the users’ personal information</li>
          <li>Storing, retrieving, and using personal information</li>
        </ul>

        <p>If you, the users’ have any concern regarding your personal data and information, please direct your questions to <a href="mailto:info@intelsysinc.com"><?php echo $address->email; ?></a>. We will respond immediately and address your concerns.</p>

        <h4>Grievance Redressal</h4>
        <p>You can reach us at <a href="mailto:info@intelsysinc.com"><?php echo $address->email; ?></a>.</p>

        <h4>Address</h4>
        <div class="footer-about">
          <div class="f-contact-info">
            <div class="single-f-contact-info">
                <i class="fa fa-home"></i>
                <span><?php echo $address->company; ?>,<?php echo $address->address; ?> <?php echo $address->state; ?>, VA  <?php echo $address->pin_code; ?></span>
            </div>
            <div class="single-f-contact-info">
              <i class="fa fa-envelope-o"></i>
                <span>
                  <a href="#" style="text-decoration-color: black;-webkit-text-fill-color: black;">
                       <?php echo $address->email; ?>
                  </a>
                </span>
                                </div>
            <div class="single-f-contact-info">
                <i class="fa fa-phone"></i>
                <span> <?php echo $address->mobile_number; ?></span>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</section>


<?php include 'includes/footer.php' ;?>