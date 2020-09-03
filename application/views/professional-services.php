<?php include 'includes/header.php'; ?>
<section class="breadcrumbs-custom-inset">
  <div class="breadcrumbs-custom">
    <div class="container">
      <h1 class="breadcrumbs-custom-title">Management And Technology</h1>
      <!-- <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Home</a></li>
              <li class="active">Management And Technology</li>
            </ul> -->
    </div>
    <div class="box-position" style="background-image: url('<?php echo base_url(); ?>assests/images/professional-services-banner.png');"></div>
  </div>
</section>
<section class="section section-sm section-first bg-default">
  <div class="container">
    <div class="row row-70">
      <div class="col-lg-8">
        <div class="single-service">
          <?php  ?>
          <h3> <?php echo $view->title;  ?></h3>
          <p class="text-spacing-100"> <?php echo $view->first_title;  ?>
          </p>
          <img src="<?= base_url() ?>uploads/<?= $view->images ?>" alt="" width="800" height="300" />


          <div class="row row-40 align-items-xl-center">
            <div class="col-md-12 col-xl-12">
              <h5 class="text-spacing-100">How do we help our customers with?

              </h5>
              <ul class="list-sm list-marked list-marked-sm list-marked-secondary text-spacing-100">
                <li>We possess deep expertise in offering management and technology solutions in niche sectors such as Banking, Healthcare, and Telecom</li>
                <li>On the management front, we help with -- Strategic planning, Business line management, federal program management, and Process improvement and Business Systems Planning (BSP)</li>
                <li>And technologically we help with – Process engineering, Enterprise architecture, Cloud transformation, Cybersecurity, IV&V, and Change & Configuration management</li>
                <li>And technologically we help with – Process engineering, Enterprise architecture, Cloud transformation, Cybersecurity, IV&V, and Change & Configuration management</li>
                <li>The demonstrated and proven track record coupled with deep domain expertise enables us to deliver robust solutions within time and budget</li>
              </ul>
            </div>

          </div>
          <div class="row row-40 align-items-xl-center">
            <div class="col-md-12 col-xl-12">
              <h5 class="text-spacing-100">How does it benefit our customers?
              </h5>
              <ul class="list-sm list-marked list-marked-sm list-marked-secondary text-spacing-100">
                <li>Increased Return on Investment (ROI) on management and technology solutions</li>
                <li>Process improvement practice significantly increase productivity levels</li>
                <li>Strategic planning and management help in achieving short and long term goals
                </li>
                <li>Cybersecurity protection, cloud transformation enhances user experience</li>
                <li>Business systems planning (BSP) makes enterprise future-ready, while fueling growth</li>
              </ul>
            </div>

          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <!-- Post Sidebar-->
        <div class="post-sidebar post-sidebar-inset">
          <div class="row row-lg row-60">
            <div class="col-sm-6 col-lg-12">
              <div class="post-sidebar-item">
                <h5>Our services</h5>
                <div class="post-sidebar-item-inset inset-right-20">
                  <ul class="list list-categories">
                    <?php foreach ($category as $categories) { ?>
                      <li class="rd-dropdown-item">
                        <a class="rd-dropdown-link" href="<?php echo base_url() . 'services/view/' . $categories->p_link ?>"><?php echo $categories->service_category; ?></a>
                      </li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-12">
              <div class="post-sidebar-item">
                <?php if ($this->session->flashdata('message')) { ?>
                  <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Success!</strong> <?php echo $this->session->flashdata('message'); ?>
                  </div>
                <?php } ?>
                <h5>Quick Enquiry</h5>
                <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="<?php echo base_url(); ?>professionalservices/enquiry" novalidate="novalidate">
                  <div class="form-wrap has-error">
                    <input class="form-input form-control-has-validation" id="contact-name-6" type="text" name="name" data-constraints="@Required"><span class="form-validation">The text field is required.</span>
                    <label class="form-label rd-input-label" for="contact-name-6">Name</label>
                  </div>
                  <div class="form-wrap">
                    <input class="form-input form-control-has-validation" id="contact-email-6" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
                    <label class="form-label rd-input-label" for="contact-email-6">E-mail</label>
                  </div>
                  <div class="form-wrap">
                    <label class="form-label rd-input-label" for="contact-message-6">Message</label>
                    <textarea class="form-input form-control-has-validation form-control-last-child" id="contact-message-6" name="message" data-constraints="@Required"></textarea><span class="form-validation"></span>
                  </div>
                  <button class="button button-block button-primary" type="submit">Send Message</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'includes/footer.php'; ?>