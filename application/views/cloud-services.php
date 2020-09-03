<?php include 'includes/header.php' ;?>
 <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom">
        <?php foreach ($cloudservices as $cloudservice) { ?>
          <div class="container">
            <h1 class="breadcrumbs-custom-title"><?php echo $cloudservice->name ?></h1>
          </div>
          <div class="box-position" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $cloudservice->image ?>');"></div>
        <?php } ?>
        </div>
      </section> 
    <section class="section section-sm section-first bg-default">
        <div class="container">
          <div class="row row-70">
            <div class="col-lg-8">
              <div class="single-service">
              <?php foreach ($cloud as $services) { ?> 
                <h3><span><img src="<?php echo base_url(); ?>assests/images/favicon.png" alt="" class="logo-icon"></span>Cloud Services</h3>
                <p class="text-spacing-100">We are living in uncertain times and this is being called the new normal. Businesses all over the world are trying to adjust to it by automating the processes to ensure business continuity and Cloud Transformation is at the top of the list.Cloud Transformation is at the core of the overall Digital Transformation ecosystem. And as a part of our Digital Transformation practice, we make sure the entire process – Ideate, Plan, Architect, Migrate, Manage – is executed by deep domain experts with proven track record of successful implementations</p>
                 <img src="<?php echo base_url(); ?>uploads/<?php echo $services->image ?>" alt="" width="800" height="300"/>

              
                <div class="row row-40 align-items-xl-center">
                  <div class="col-md-12 col-xl-12">
                    <h5 class="text-spacing-100">How do we help our customers with Cloud Services?</h5>
                    <ul class="list-sm list-marked list-marked-sm list-marked-secondary text-spacing-100">
                      <li>We help our customers with end to end cloud migration and transformation</li>
                      <li>We excel in on-premise to cloud for Azure, AWS, and Salesforce</li>
                      <li>Formulate Analytics of Alternates (AoA) for cloud migration detailing specific requirements, efficiency, and cost-savings</li>
                      <li>We go methodically by establishing goals, formulating the security strategy, data migration planning, switch production and business continuity</li>
                      <li>We help with across all applications such as IaaS, PaaS, SaaS</li>
                      <li>Single or multi-cloud environment options are explored based on specific customer requirements</li>
                    </ul>
                  </div>
                
                </div>
                <div class="row row-40 align-items-xl-center">
                  <div class="col-md-12 col-xl-12">
                    <h5 class="text-spacing-100">How does it benefit our customers?</h5>
                    <ul class="list-sm list-marked list-marked-sm list-marked-secondary text-spacing-100">
                      <li>Enhanced operational efficiency</li>
                      <li>Fewer infrastructure requirements reduced operational costs</li>
                      <li>Enhanced data security, auto data backups with log metrics</li>
                      <li>Applications run at greater speed enriching customers’ digital experience</li>
                      <li>Speed, scale, and agility in customer services with less downtime</li>
                      <li>Greater collaboration among employees and all stakeholders</li>
                      <li>Significant increase in efficiency and productivity</li>
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