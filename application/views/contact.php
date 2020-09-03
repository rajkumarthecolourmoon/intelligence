<?php include 'includes/header.php' ;?>
<style>
    .error {
        color: red;
    }
    </style>
 <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom">
          <div class="container">
            <h1 class="breadcrumbs-custom-title">Contact Us</h1>
            <!-- <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Home</a></li>
              <li class="active">Contact Us</li>
            </ul> -->
          </div>
          <div class="box-position" style="background-image: url('<?php echo base_url(); ?>assests/images/contact-banner.png');"></div>
        </div>
      </section>     

      <section class="section section-sm section-first bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="tel:#"><?php echo $address->mobile_number; ?></a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"> <?php echo $address->company; ?>,<br> <?php echo $address->address; ?> <?php echo $address->state; ?>, VA <?php echo $address->pin_code; ?></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="mailto:#info@intelsysinc.com"><?php echo $address->email; ?></a></p>
                </div>
              </article>
            </div>
          </div>

          <div class="row row-30 text-left">
            <div class="col-sm-8 col-md-6 col-lg-4">
              <ul class="mt-3">
                <li><strong>Corporation Information</strong></li>
                <li><strong>DUNS:</strong> 117557788</li>
                <li><strong>CAGE:</strong> 8MSF8</li>
              </ul>
            </div>
          </div>

          
        </div>
      </section>

      <!-- Contact Form-->
      <section class="section contact section-sm section-last bg-default text-left">
        <div class="container">
          <article class="title-classic">
            <div class="title-classic-title">
              <h3>Get in touch</h3>
               <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <strong><?php echo $this->session->flashdata('success'); ?></strong>
            </div>
        <?php }?>
            </div>
            <div class="title-classic-text">
              <p>If you have any questions, just fill in the contact form, and we will answer you shortly.</p>
            </div>
          </article>
          <form id="contact" class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="<?php echo base_url();?>contact/mailsending">
            <div class="row row-14 gutters-14">
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">Your Name</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email-2">E-mail</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric">
                  <label class="form-label" for="contact-phone-2">Phone</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap">
                  <label class="form-label" for="contact-message-2">Message</label>
                  <textarea class="form-input textarea-lg" id="contact-message-2" name="message" data-constraints="@Required"></textarea>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                <label for="captcha">Captcha *</label>
                            <input type="text" id="captcha" name="captcha" class="form-control" placeholder="">
                            <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-12">
              <div class="form-wrap">
                      <?php echo $cap['image']; ?>   
                      <div class="help-block with-errors"> </div>
              </div>
            </div>

            </div>
            <button class="button button-primary button-pipaluk" type="submit">Send Message</button>
          </form>
        </div>
      </section>
<?php include 'includes/footer.php' ;?>
<script>
    $(document).ready(function() {
    //  alert('Please Enter captcha ');
        $("#captcha").blur(function() {
            if ($("#captcha").val() == '<?php echo  $cap['image'];?>') {
                alert('Captcha match');
            } else {
                alert('Please enter same word like captcha image.');
            }
        });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script type="text/javascript">
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
</script>