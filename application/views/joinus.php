<?php include 'includes/header.php'; ?>
<style>
  .error {
    color: red;
  }
  
</style>
<style>
    .error {
        color: red;
    }
    </style>
<section class="breadcrumbs-custom-inset">
  <div class="breadcrumbs-custom">
    <div class="container">
      <h1 class="breadcrumbs-custom-title">Join Us</h1>
      <!-- <ul class="breadcrumbs-custom-path">
                <li><a href="index.php">Home</a></li>
                <li class="active">Join Us</li>
            </ul> -->
    </div>
    <div class="box-position" style="background-image: url('<?php echo base_url(); ?>assests/images/joinus-banner.png');"></div>
  </div>
</section>
<section class="section section-sm section-first bg-default jobs-list">
  <div class="container">
    <div class="row row-50 justify-content-center">
      <div class="col-md-7 col-lg-7 col-12">
        <div class="single-service">
          <!-- <h3><i class="fa fa-user-o"></i> Job Position</h3> -->
          <p>Intelligence Systems Corporation believes that our employees are the ultimate reason for the success of our organization. We stand by our principles to provide a healthy and productive working environment with competitive compensation package. Our commitment to hiring the best of the breed talent in the industry gives us an edge over others. </p>
          <h5>Our current Opportunities:</h5>
          <ul>
            <li><a href="mailto:info@intelsysinc.com">Full Stack Java Developers</a></li>
            <li><a href="mailto:info@intelsysinc.com">Oracle DBA and Oracle IAM</a></li>
            <li><a href="mailto:info@intelsysinc.com">Test Engineers – Automaton and Manual</a></li>
            <li><a href="mailto:info@intelsysinc.com">Develops Engineers</a></li>
            <li><a href="mailto:info@intelsysinc.com">Configuration Managers</a></li>
            <li><a href="mailto:info@intelsysinc.com">Program and Project Managers</a></li>
            <li><a href="mailto:info@intelsysinc.com">Cyber Security and Information Assurance Engineers</a></li>
          </ul>
        </div>

      </div>
      <div class="col-md-5 col-lg-5 col-12">
        <img src="<?php echo base_url(); ?>assests/images/career.png" alt="" class="w-100">
      </div>
    </div>
  </div>
</section>
<section class="section contact section-sm section-last bg-default text-center">
  <div class="container">
    <h3 class="mb-3">Apply Now</h3>
    <?php if ($this->session->flashdata('success')) { ?>
      <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong><?php echo $this->session->flashdata('success'); ?></strong>
      </div>
    <?php } elseif ($this->session->flashdata('error')) { ?>
      <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong><?php echo $this->session->flashdata('error'); ?></strong>
      </div>
    <?php } ?>
    <div class="">
      <?php if ($this->session->flashdata('file_check')) { ?>
        <div class="alert alert-danger">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
          <strong><?php echo $this->session->flashdata('file_check'); ?></strong>
        </div>
      <?php } elseif ($this->session->flashdata('file_check1')) { ?>
        <div class="alert alert-primary">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
          <strong><?php echo $this->session->flashdata('file_check1'); ?></strong>
        </div>
      <?php } ?>
    </div>
    <form id="form" class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="joinus" method="post" action="<?php echo base_url(); ?>joinus/apply">
      <div class="row row-14 gutters-14">
        <div class="col-md-6">
          <div class="form-wrap">
            <input class="form-input form-control-has-validation" id="contact-your-name-2" type="text" name="name" data-constraints="@Required"><span class="form-validation"></span>
            <label class="form-label rd-input-label" for="contact-your-name-2">Your Name</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-wrap">
            <input class="form-input form-control-has-validation" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
            <label class="form-label rd-input-label" for="contact-email-2">E-mail</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-wrap">
            <input class="form-input form-control-has-validation" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric"><span class="form-validation"></span>
            <label class="form-label rd-input-label" for="contact-phone-2">Phone</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-wrap">
            <input class="form-input form-control-has-validation" id="contact-phone-2" type="file" name="image"><span class="form-validation"></span>

            <label class="form-label rd-input-label" for="contact-phone-2"></label>
          </div>
        </div>

        <div class="col-12">
          <div class="form-wrap">
            <label class="form-label rd-input-label" for="contact-message-2">Message</label>
            <textarea class="form-input textarea-lg form-control-has-validation form-control-last-child" id="contact-message-2" name="message" data-constraints="@Required"></textarea><span class="form-validation"></span>
          </div>
        </div>
        <div class="col-md-6">
         <div class="form-wrap">
          <label for="captcha">Captcha *</label>
          <input type="text" id="captcha" name="captcha" class="form-control" placeholder="">
          <div class="help-block with-errors"> </div>
         </div>
       </div>
       <div class="col-12">
         <div class="form-wrap">
                <?php echo $cap['image']; ?>   
                 <div class="help-block with-errors"> </div>
         </div>
       </div>
      </div>
      <button class="button button-secondary button-pipaluk" type="submit">Submit</button>
    </form>
  </div>
</section>
<?php include 'includes/footer.php'; ?>
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    jQuery.validator.setDefaults({
      debug: true,
      success: "valid"
    });
    $('#form').validate({ // initialize the plugin
      rules: {
        phone: {
          required: true,
          number: true,
          minlength: 10,
          maxlength: 10
        },
        email: {
          required: true,

        },
        name: {
          required: true,

        },
        message: {
          required: true,

        },
        captcha: {
                required: true,
            },
      },
      // Specify the validation error messages
      messages: {
        district: "*Please enter login deatils",
      },
      messages: {
            captcha: "*Please enter captcha",
        },
    });

  });
</script>
<script>
    $(document).ready(function() {
     // alert('Please Enter captcha ');
        $("#captcha").blur(function() {
            if ($("#captcha").val() == '<?php echo  $cap['image'];?>') {
                alert('Captcha match');
            } else {
                alert('Please enter same word like captcha image.');
            }
        });
    });
    </script>

<!-- <script type="text/javascript">
$(document).ready(function() {
    $('#contact').validate({ // initialize the plugin
        rules: {
           
            captcha: {
                required: true,
            }
        },
        // Specify the validation error messages
        messages: {
            captcha: "*Please enter captcha",
        },
    });

});
</script> -->