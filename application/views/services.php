<?php include 'includes/header.php' ;?>
<section class="breadcrumbs-custom-inset">
  <div class="breadcrumbs-custom">
    <div class="container">
      <h1 class="breadcrumbs-custom-title">Services</h1>
      <!-- <ul class="breadcrumbs-custom-path">
        <li><a href="index.php">Home</a></li>
        <li class="active">Services</li>
      </ul> -->
    </div>   

    <?php //foreach ($services as $service) { ?>
    <div class="box-position" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $services->image ?>');"></div>
    <?php  //} ?>
  </div>
</section>
<section class="section section-sm section-first services all-services">
        <div class="container">
          <div class="row row-30 align-items-center">
          
          <?php foreach ($category as $categories) { ?>
                <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                 
                  <article class="box-icon-modern box-icon-modern-2">
                    <div class="box-icon-modern-icon linearicons-cog"></div>
                    <h5 class="box-icon-modern-title"><a href="<?php echo base_url().'services/view/'. $categories->p_link?>"><?php echo $categories->service_category; ?></a></h5>
                    <div class="box-icon-modern-decor"></div>
                    <p class="box-icon-modern-text"><?php echo $categories->short_description	?></p>
                    <a class="know" href="<?php echo base_url().'services/view/'. $categories->p_link?>">Know More</a>
                  </article>
              
                </div>
                <?php } ?>
               
              </div>
        </div>
      </section>


<?php include 'includes/footer.php' ;?>