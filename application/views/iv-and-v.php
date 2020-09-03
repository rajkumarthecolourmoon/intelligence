<?php include 'includes/header.php' ;?>
 <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom">
          <?php foreach ($ivandv as $ivandvs) { ?> 
          <div class="container">
            <h1 class="breadcrumbs-custom-title"><?php echo $ivandvs->name ?></h1>
            <!-- <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Home</a></li>
              <li class="active">Independent Verification and Validation (IV&V)</li>
            </ul> -->
          </div>
          <div class="box-position" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $ivandvs->image ?>');"></div>
          <?php } ?>
        </div>
      </section> 
    <section class="section section-sm section-first bg-default">
        <div class="container">
          <div class="row row-70">
            <div class="col-lg-8">
              <div class="single-service">
              <?php foreach ($iv_v as $iv_vs) { ?> 
                <h3><span><img src="<?php echo base_url(); ?>assests/images/favicon.png" alt="" class="logo-icon"></span>Independent Verification and Validation (IV&V)</h3>
                <p class="text-spacing-100">The challenges of having integrated systems for interoperability bring IV&V and test automation to the forefront. There is a high demand within Federal programs to deliver high quality software solutions to End Users and the business customers. At Intelligence Systems, we integrate the test automation with DevSecOps leveraging all IV&V procedures for quicker turnaround of the software to production. We offer a tailored approach to implement the IV&V Processes for any size project with their unique framework to verify, validate and develop the reports for decision making.</p>
                 <img src="<?php echo base_url(); ?>uploads/<?php echo $iv_vs->image ?>" alt="" width="800" height="300"/>

              
                <div class="row row-40 align-items-xl-center">
                  <div class="col-md-12 col-xl-12">
                    <h5 class="text-spacing-100">How do we help our customers with IV&V?</h5>
                    <ul class="list-sm list-marked list-marked-sm list-marked-secondary text-spacing-100">
                      <li>We possess deep experience in reviewing, verifying, and validating a web application, software product or mobile apps</li>
                      <li>We leverage state-of-the-art tools, technologies, and frameworks in ensuring the verification is done in consonance with global standards</li>
                      <li>The systematic process such as unit testing, integration testing, functional testing, UI, UX testing, and system testing is carried out in line with the specifications</li>
                      <li>The entire process is segregated in phases with planning, reviewing, assessing, and reporting for greater transparency and flexibility</li>
                   
                    </ul>
                  </div>
                
                </div>
                <div class="row row-40 align-items-xl-center">
                  <div class="col-md-12 col-xl-12">
                    <h5 class="text-spacing-100">How does it benefit our customers?</h5>
                    <ul class="list-sm list-marked list-marked-sm list-marked-secondary text-spacing-100">
                      <li>The application IV&V comes with zero defects hence performs at peak level</li>
                      <li>Ensures 24/7 uptime, meaning increased productivity levels</li>
                      <li>Reduced managed services results in minimizing costs and maximizing revenue</li>
                      <li>Faster time to market enables market competitive edge</li>
                      <li>Significant improvement in employee engagement and collaboration</li>
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