<?php include 'includes/header.php' ;?>
 <section class="breadcrumbs-custom-inset">
   
 <?php foreach ($pm_images as $pm) { ?>   
        <div class="breadcrumbs-custom">
          <div class="container">
            <h1 class="breadcrumbs-custom-title">Program Management</h1>
            <!-- <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Home</a></li>
              <li class="active">Program Management</li>
            </ul> -->
          </div>
               
          <div class="box-position" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $pm->image ?>');"></div>      
      
          </div>
          <?php  } ?>
      </section> 
    <section class="section section-sm section-first bg-default">
        <div class="container">
          <div class="row row-70">
            <div class="col-lg-8">
              <div class="single-service">
               <?php foreach ($pm_content as $pm_c) { ?>   
                <h3><span><img src="<?php echo base_url(); ?>assests/images/favicon.png" alt="" class="logo-icon"></span>Program Management</h3>
                <p class="text-spacing-100">Intelligence Systems program management is complete, comprehensive that addresses the challenges of large enterprises.</p>
                 <img src="<?php echo base_url(); ?>uploads/<?php echo $pm_c->image ?>" alt="" width="800" height="300"/>

                <div class="row row-40 align-items-xl-center">
                  <div class="col-md-12 col-xl-12">
                    <h5 class="text-spacing-100">How do we help our customers with program management?</h5>
                    <ul class="list-sm list-marked list-marked-sm list-marked-secondary text-spacing-100">
                      <li>The program management covers the entire gamut of the organization</li>
                      <li>Project plan covers analysis, scope cost, schedule, quality, resourcing, risk identification and mitigating</li>
                      <li>Design and development of software test plans (STP), test procedures (TPROC) and software test reports (STR) and test evaluation programs</li>
                      <li>Deploy agile methodologies for sprint planning, build transparency, increase stakeholder’s engagement, and create a coherent approach</li>
                      <li>We ensure the processes are streamlined and the resources are aligned to achieve organizational goals and objectives</li>
                    </ul>
                  </div>
                
                </div>
                <div class="row row-40 align-items-xl-center">
                  <div class="col-md-12 col-xl-12">
                    <h5 class="text-spacing-100">How does it benefit our customers?</h5>
                    <ul class="list-sm list-marked list-marked-sm list-marked-secondary text-spacing-100">
                      <li>Ensures all applications running coherently and consistently</li>
                      <li>Improved user experience enabling operational efficiency</li>
                      <li>Minimizes costs, risks, maximize productivity</li>
                      <li>Enhanced speed, scale, agility that empowers accelerate time to market</li>
                      <li>Achieve intended business goals and objectives</li>
                    </ul>
                  </div>
                
                </div>
                <?php } ?>
              </div>
            </div>
            <div class="col-lg-4">
              <!-- Post Sidebar-->
              <?php include 'includes/right-services.php' ;?>
            </div>
          </div>
        </div>
      </section>
<?php include 'includes/footer.php' ;?>