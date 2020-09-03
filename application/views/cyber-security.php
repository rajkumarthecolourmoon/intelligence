<?php include 'includes/header.php' ;?>
 <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom">
        <?php foreach ($cybersecurity as $security) { ?>
          <div class="container">
            <h1 class="breadcrumbs-custom-title"><?php echo $security->name ?></h1>
            <!-- <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Home</a></li>
              <li class="active">Cyber Security</li>
            </ul> -->
          </div>
          <div class="box-position" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $security->image ?>');"></div>
        <?php } ?>
        </div>
      </section> 
    <section class="section section-sm section-first bg-default">
        <div class="container">
          <div class="row row-70">
            <div class="col-lg-8">
              <div class="single-service">
                <?php foreach ($cysty as $cystys) { ?> 
                <h3><span><img src="<?php echo base_url(); ?>assests/images/favicon.png" alt="" class="logo-icon"></span>Cyber Security</h3>
                <p class="text-spacing-100">Cyber security has never been so prevalent as it is today. Recent stats show that 60% of businesses are forced to suspend operations after a cyber-attack. Enterprise of all sizes are ramping up the security for all their digital assets to protect their IT infrastructure to ensure business continuity.</p>
                 <img src="<?php echo base_url(); ?>uploads/<?php echo $cystys->image ?>" alt="" width="800" height="300"/>

              
                <div class="row row-40 align-items-xl-center">
                  <div class="col-md-12 col-xl-12">
                    <h5 class="text-spacing-100">How do we help our customers with Cyber Security?</h5>
                    <ul class="list-sm list-marked list-marked-sm list-marked-secondary text-spacing-100">
                      <li>Intelligence Systems, over time has built robust cybersecurity capabilities</li>
                      <li>We possess deep expertise in data breach, phishing and ransomware detections and preventions</li>
                      <li>A methodical approach and meticulous planning are adopted to keep our customers business safe</li>
                      <li>Internal and external vulnerabilities are analyzed threadbare</li>
                      <li>We create a comprehensive audit of internal and external vulnerabilities an analyze them threadbare</li>
                      <li>Our proactive strategy of threat detection, prevention and response and continuous monitoring keeps our customers’ business safe</li>
                    </ul>
                  </div>
                
                </div>
                <div class="row row-40 align-items-xl-center">
                  <div class="col-md-12 col-xl-12">
                    <h5 class="text-spacing-100">How does it benefit our customers?</h5>
                    <ul class="list-sm list-marked list-marked-sm list-marked-secondary text-spacing-100">
                      <li>We help with protection of networks and data from unauthorized access enabling data security </li>
                      <li>Business continuity with no downtime ensures all processes running smoothly enhances productivity</li>
                      <li>Strong and robust security protocols in place enhanced organization’s credibility in the market</li>
                      <li>Enhances reputation and corporate governance</li>
                      <li>Significantly reduced operational costs, risks fueling growth</li>
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