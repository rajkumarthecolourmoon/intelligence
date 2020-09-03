<div class="post-sidebar post-sidebar-inset">
  <div class="row row-lg row-60">
    <div class="col-sm-6 col-lg-12">
      <div class="post-sidebar-item">
        <h5>Our services</h5>
        <div class="post-sidebar-item-inset inset-right-20">
          <ul class="list list-categories">
          <?php foreach ($category as $categories) { ?>
            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="<?php echo base_url().'services/view/'. $categories->p_link?>"><?php echo $categories->service_category; ?></a></li>
          <?php } ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-12">
      <div class="post-sidebar-item">
      <?php  if ($this->session->flashdata('msg')) { ?>
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <strong><?php echo $this->session->flashdata('msg'); ?></strong>
            </div>
           <?php }elseif($this->session->flashdata('error')){?>
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <strong><?php echo $this->session->flashdata('error'); ?></strong>
            </div>
        <?php   } ?>
        <h5>Quick Enquiry</h5>
        <form class="rd-form rd-mailform"  data-form-output="form-output-global" data-form-type="contact" method="post" action="<?php echo  base_url();  ?>services/pm_enquiry" novalidate="novalidate">
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