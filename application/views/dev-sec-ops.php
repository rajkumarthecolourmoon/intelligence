<?php include 'includes/header.php' ;?>
 <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom">
          <?php foreach ($devsecops as $devsecop) { ?>
          <div class="container">
            <h1 class="breadcrumbs-custom-title"><?php echo $devsecop->name?> </h1>
            <!-- <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Home</a></li>
              <li class="active">DevSecOps</li>
            </ul> -->
          </div>
        
          <div class="box-position" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $devsecop->image ?>');"></div>
          <?php  } ?>
        </div>
      </section> 
    <section class="section section-sm section-first bg-default">
        <div class="container">
          <div class="row row-70">
            <div class="col-lg-8">
              <div class="single-service">
               <?php foreach ($devsecops_content as $dev_content) { ?> 
                <h3><span><img src="<?php echo base_url(); ?>assests/images/favicon.png" alt="" class="logo-icon"></span>DevSecOps</h3>
                <p class="text-spacing-100">The basic premise on which DevSecOps is implemented is to protect the applications from security risks and threats. Our team comprising of practice heads, architects come with deep expertise in DevSecOps implementation at enterprise level.</p>
                 <img src="<?php echo base_url(); ?>uploads/<?php echo $dev_content->image ?>" alt="" width="800" height="300"/>

              
                <div class="row row-40 align-items-xl-center">
                  <div class="col-md-12 col-xl-12">
                    <h5 class="text-spacing-100">How do we help our customers with DevSecOps?</h5>
                    <ul class="list-sm list-marked list-marked-sm list-marked-secondary text-spacing-100">
                      <li>Intelligence Systems has built robust systems and processes for the implementation of DevSecOps</li>
                      <li>Security is at the heart of all our applications development and implementations</li>
                      <li>Some advanced tools we use are threat modeler, contact security, Kibana and Grafana</li>
                      <li>A strong team is built with all the tools and processes to meet the growing application security demands</li>
                      <li>Change management protocols, version controlling, identifying the security gaps, and creating a new production environment to address any security threat and mitigate it.</li>
                      <li>Our team provides the ability, speed, and agility to accelerate time to market</li>
                    </ul>
                  </div>
                
                </div>
                <div class="row row-40 align-items-xl-center">
                  <div class="col-md-12 col-xl-12">
                    <h5 class="text-spacing-100">How does it benefit our customers?</h5>
                    <ul class="list-sm list-marked list-marked-sm list-marked-secondary text-spacing-100">
                      <li>Significant reduction in costs and time in detecting and eliminating security threats at the right time</li>
                      <li>Early identification of vulnerabilities and their elimination ensures speedy deployments</li>
                      <li>Enhanced collaboration and communication between team enables eliminating vulnerabilities on time and improving efficiency levels</li>
                      <li>Elimination of all security threats at the development stage propels productivity with no downtime</li>
                      <li>Business continuity ensured even in a pandemic situation</li>
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