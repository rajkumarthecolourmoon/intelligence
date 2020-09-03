<?php include 'includes/header.php'; ?>
<style>
    .error {
        color: red;
    }
    </style>
<div class="preloader">
  <div class="preloader-body">
    <div class="">
      <!-- <span></span><span></span><span></span><span></span> -->
      <img src="<?php echo base_url(); ?>assests/images/logo.png" alt="" width="180" height="" />
    </div>
  </div>
</div>

<section class="section swiper-container swiper-slider swiper-slider-classic" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-direction="vertical" data-nav="false">
  <div class="swiper-wrapper text-left">
    <?php
   

    foreach ($slider as $sliders) {
    
    ?>
    
      <div class="swiper-slide" data-slide-bg="<?php echo base_url(); ?>uploads/<?php echo $sliders->slider_image ?>">
        <div class="swiper-slide-caption section-md">
          <div class="container">
            <div class="row justify-content-end">
              <div class="col-lg-7 offset-lg-5 col-md-7 col-12">
                <h1 data-caption-animate="fadeInLeft" data-caption-delay="0"><?php echo $sliders->technology ?></h1>
                <p class="" data-caption-animate="fadeInRight" data-caption-delay="70"><?php echo $sliders->caption ?></p>
                <a class="button button-primary button-ujarak" href="<?php echo base_url(); ?>about" data-caption-animate="fadeInUp" data-caption-delay="200">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    <?php
    
  }
    ?>
  </div>
  <!-- Swiper Pagination-->
  <div class="swiper-pagination__module">
    <div class="swiper-pagination__fraction"><span class="swiper-pagination__fraction-index">00</span><span class="swiper-pagination__fraction-divider">/</span><span class="swiper-pagination__fraction-count">00</span></div>
    <div class="swiper-pagination__divider"></div>
    <div class="swiper-pagination"></div>
  </div>
</section>


<section class="section section-sm bg-default">
  <div class="container">
    <div class="row align-items-center">

  
      <?php if (!empty($list_images)) {
        $no = 1;

      ?>
        <?php foreach ($list_images as $aboutintelligence) { ?>
          <div class="col-md-4 col-lg-6 col-xl-6 text-center">
            <img src="<?php echo base_url(); ?>uploads/<?php echo $aboutintelligence->image ?>">
          </div>
          <div class="col-md-8 col-12 col-lg-6 col-xl-6 text-left">
            <div class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
              <h3 class="title-decoration-lines-left">About Intelligence</h3>
              <p class="text-gray-500"><?php echo $aboutintelligence->description ?></p>
              <a class="button button-secondary button-pipaluk" href="<?php echo base_url(); ?>about" target="_blank">Read More</a>
            </div>
          </div>
        <?php $no++;
        }
      } else {  ?>
        <tr id="row">
          <h3 colspan="6" align="center">NO Records</h3>   

        <?php
      }

        ?>
    </div>
  </div>
</section>

<section class="section section-sm section-first services light-blue-bg ">
  <div class="container-fluid">

    <div class="row row-30 justify-content-center align-items-center">
      <div class="col-md-12 col-lg-5 text-lg-left wow fadeInUp align-items-xl-center hide-tab" style="visibility: visible; animation-name: fadeInUp;"><img src="<?php echo base_url(); ?>assests/images/service.png" alt="" width="" height="">
      </div>
      <div class="col-lg-7 col-md-12">
        <div class="">
          <h2 class="wow fadeInLeft text-white">Our Services</h2>
          <p class="text-white">Path-breaking, Cutting-edge Technology Services</p>
        </div>
        <div class="row row-30">
          <?php if (!empty($home_categories)) {
            $no = 1;

          ?>
            <?php foreach ($home_categories as $categories) { ?>
              <div class="col-lg-6 col-md-6 wow fadeInRight" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                <article class="box-icon-modern box-icon-modern-2">
                  <div class="box-icon-modern-icon linearicons-cog"></div>
                  <h5 class="box-icon-modern-title"><a href="<?php echo base_url() . 'services/view/' . $categories->p_link ?>"><?php echo $categories->service_category; ?></a></h5>
                  <div class="box-icon-modern-decor"></div>
                  <p class="box-icon-modern-text"><?php echo $categories->short_description  ?></p>
                  <a class="know" href="<?php echo base_url() . 'services/view/' . $categories->p_link ?>">Know More</a>
                </article>
              </div>
            <?php $no++;
            }
          } else {  ?>
            <tr id="row">
              <!-- <h3 colspan="6" align="center">NO Records</h3>   -->
            <?php
          }
            ?>
            <a class="white-btn" href="<?php echo base_url(); ?>services">View All Services</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section section-sm  bg-default text-md-left">
  <div class="container">
    <div class="row row-30 justify-content-center">
      <div class="col-md-6 col-lg-6 col-xl-6">
        <div class="box-pricing box-pricing-popular">
          <div class="">
            <img src="<?php echo base_url(); ?>assests/images/eye.png" alt="" width="90">
            <h3 class="text-spacing-25 font-weight-normal">Our Vision</h3>
            <p>We envision becoming a global technology company driven by values, trusted by customers for delivering value-driven services and valued for being an equal opportunity employer.</p>

          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-xl-6">
        <div class="box-pricing box-pricing-popular">
          <div class="">
            <img src="<?php echo base_url(); ?>assests/images/target.png" alt="" width="90">
            <h3 class="text-spacing-25 font-weight-normal">Our Mission</h3>
            <p>To collaborate with customers and empower them with technology-driven capabilities to improve
              efficiency, increase productivity, and grow manifold levels.</p>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section section-sm section-fluid bg-default">
  <div class="container-fluid">
    <h2>Meet The Team</h2>

    <div class="row row-sm row-30 justify-content-center">
      <?php if (!empty($team)) {
        $no = 1;

      ?>
        <?php foreach ($team as $teams) { ?>
          <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight">
            <!-- Team Classic-->
            <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#">
                <img src="<?php echo base_url(); ?>uploads/<?php echo $teams->image ?>" alt="" width="420" height="424" />
              </a>
              <div class="team-classic-caption">
                <h4 class="team-classic-name"><a href="#"><?php echo ucfirst($teams->fullname); ?></a></h4>
                <p class="team-classic-status"><?php echo ucfirst($teams->designation); ?></p>
              </div>
            </article>
          </div>
        <?php $no++;
        }
      } else {  ?>
        <tr id="row">
          <!-- <h3 colspan="6" align="center">NO Records</h3>   -->
        <?php
      }
        ?>
    </div>

  </div>
</section>



<section class="section section-sm section-last text-left getintouch light-blue-bg">
  <div class="containefluid">
    <div class="row">
      <div class="col-lg-5">
        <div class="left-img"><img src="<?php echo base_url(); ?>assests/images/get-in-touch.png"></div>
      </div>
      <div class="col-lg-7 contactform">
        <article class="title-classic">
          <div class="title-classic-title">
            <h3>Get in touch</h3>
              
          <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <strong><?php echo $this->session->flashdata('success'); ?></strong>
            </div>
        <?php }?>
          

        </article>
        <form id="form" class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="<?php echo base_url(); ?>home/send" novalidate="novalidate">
          <div class="row row-14 gutters-14">
            <div class="col-md-4">
              <div class="form-wrap">
                <input class="form-input form-control-has-validation" id="contact-your-name-2" type="text" name="name" data-constraints="@Required"><span class="form-validation"></span>
                <label class="form-label rd-input-label" for="contact-your-name-2">Your Name</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-wrap">
                <input class="form-input form-control-has-validation" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
                <label class="form-label rd-input-label" for="contact-email-2">E-mail</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-wrap">
                <input class="form-input form-control-has-validation" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric"><span class="form-validation"></span>
                <label class="form-label rd-input-label" for="contact-phone-2">Phone</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-wrap">
                <label class="form-label rd-input-label" for="contact-message-2">Message</label>
                <textarea class="form-input textarea-lg form-control-has-validation form-control-last-child" id="contact-message-2" name="message" data-constraints="@Required"></textarea><span class="form-validation"></span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-wrap">
                <label for="captcha">Captcha *</label>
                <input type="text" id="captcha" name="captcha" class="form-control" placeholder="">
                <div class="help-block with-errors"> </div>
              </div>
            </div>
            <div class="col-12">
              <div class="form-wrap">
              <div class="form-wrap">
                <?php echo $cap['image']; ?>   
                 <div class="help-block with-errors"> </div>
         </div>
              </div>
            </div>
          </div>
          <button class="white-btn mt-4" type="submit">Send Message</button>
        </form>
      </div>
    </div>


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
