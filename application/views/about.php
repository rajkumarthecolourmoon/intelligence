<?php include 'includes/header.php' ;?>
<section class="breadcrumbs-custom-inset">
  <div class="breadcrumbs-custom">
    <div class="container">
      <h1 class="breadcrumbs-custom-title">About Us</h1>
      <!-- <ul class="breadcrumbs-custom-path">
        <li><a href="index.php">Home</a></li>
        <li class="active">About Us</li>
      </ul> -->
    </div>
    <div class="box-position" style="background-image: url('<?php echo base_url(); ?>assests/images/sub.png');"></div>
  </div>
</section>
<section class="section section-sm  bg-default text-md-left">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-5 col-xl-10 text-center offset-xl-1">
    
        <h2 class="text-spacing-25 font-weight-normal">Welcome to Intelligence Systems</h2>
        <p>Intelligence Systems as the very name define – we’ve been consistently ideating, conceptualizing, planning, building, and implementing cutting-edge, emerging technologies driven solutions for US Federal Government and Fortune 500 companies.
        </p>
      </div>
    </div>
    <div class="row row-50 justify-content-center align-items-xl-center about-items">
  

      <div class="col-md-10 col-lg-9">
        <h5 class="text-center mb-3">In a nutshell, we offer the following services:</h5>
          
        <?php 

        if (!empty($about_services)) {
                $no = 1;

            ?>
      <?php foreach ($about_services as $aboutservices) { ?>
      <?php 
        if($no%2==0)
        {
          ?>
        <div class="row mt-3 align-items-center">
        <div class="col-lg-4 col-md-5">
              <img src="<?php echo base_url(); ?>uploads/<?php echo $aboutservices->image ?>" alt="" class="w-100">
            </div>
            <div class="col-lg-8 col-md-7">
              <p><?php echo $aboutservices->description ?></p>
            </div>

        </div>
          <?php
        }else{
       ?>
       
 <div class="row mt-3 align-items-center">
            <div class="col-lg-8 col-md-7">
              <p><?php echo $aboutservices->description ?></p>
            </div>
            <div class="col-lg-4 col-md-5">
              <img src="<?php echo base_url(); ?>uploads/<?php echo $aboutservices->image ?>" alt="" class="w-100">
            </div>
           
          </div>
       <?php
        }
        ?>
       
        <?php
                    $no++;
                }
            } else { ?>
             <tr id="row"> 
                     <td colspan="6" align="center">NO Records</td>

                <?php
           }  ?>

      
          <div class="row mt-3 align-items-center">
            <div class="col-lg-4">
              <ul class="mt-3">
                <li><strong>Corporation Information</strong></li>
                <li><strong>DUNS:</strong> 117557788</li>
                <li><strong>CAGE:</strong> 8MSF8</li>
              </ul>
            </div>
          </div>
      </div>
     


    </div>

  </div>
</section>
<section class="section section-sm section-first bg-default text-md-left ">
  <div class="container">
    <div class="row row-50 justify-content-center align-items-xl-center">
      <div class="col-md-12 col-lg-12 col-xl-12">
        <!-- Bootstrap tabs-->
        <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
          <!-- Nav tabs-->
          <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">Leadership</a></li>
            <li class="nav-item"><a class="nav-link" href="#tabs-4-2" data-toggle="tab">Core Competencies</a></li>
            <li class="nav-item"><a class="nav-link" href="#tabs-4-3" data-toggle="tab">Key Differentiators</a></li>
          </ul>
          <!-- Tab panes-->
          <div class="tab-content">
          <div class="tab-pane fade show active" id="tabs-4-1">
          <?php if (!empty($leadership)) {
                $no = 1;

            ?>
             <?php foreach ($leadership as $leaderships) { ?>

              <div class="row">
                <div class="col-lg-5">
                  <img src="<?php echo base_url(); ?>uploads/<?php echo $leaderships->image ?>" class="">
                </div>
                <div class="col-lg-7">
                  <p><?php echo $leaderships->description_one ?> </p>
                 
                  
                </div>
                
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <p><?php echo $leaderships->description ?></p>
                </div>
              </div>
              
              <?php
                    $no++;
                }
            } else { ?>
                <tr id="row">
                    <td colspan="6" align="center">NO Records</td>

                <?php
            }  ?>

              
            </div>
            <div class="tab-pane fade" id="tabs-4-2">
            <?php if (!empty($core_competencies)) {
                $no = 1;

            ?>
             <?php foreach ($core_competencies as $corecompetencies) { ?>

              <p><?php echo $corecompetencies->text_line ?></p>
              <div class="row">
                <div class="col-lg-5 order-lg-1 order-md-1">
                <img src="<?php echo base_url(); ?>uploads/<?php echo $corecompetencies->image ?>" class="">
                </div> 
                <div class="col-lg-7 order-lg-0 order-md-0">
                  <div class="text-center text-sm-left offset-top-30">
                    <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                      <li><?php echo $corecompetencies->description ?></li>
                     
                    </ul>
                  </div>
                </div>
                
              </div>
              <?php
                    $no++;
                }
            } else { ?>
                <tr id="row">
                    <td colspan="6" align="center">NO Records</td>

                <?php
            }  ?>

            </div>
            
            <div class="tab-pane fade" id="tabs-4-3">
              <?php if (!empty($getAll)) {
                  $no = 1;

              ?>
              <?php foreach ($getAll as $key_differentiators) { ?>
              <p><?php echo $key_differentiators->text_line ?></p>
              <div class="row">
                <div class="col-lg-5">
                <img src="<?php echo base_url(); ?>uploads/<?php echo $key_differentiators->image ?>" class="">
                </div>
                <div class="col-lg-7">
                  <div class="text-center text-sm-left offset-top-30">
                    <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                    <li><?php echo $key_differentiators->description ?></li>

                    </ul>
                    
                  </div>
                </div>
              </div>
              <?php
                    $no++;
                }
            } else { ?>
                <tr id="row">
                    <td colspan="6" align="center">NO Records</td>

                <?php
            }  ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section section-xl bg-default clients">
  <div class="container">
    <h2>Our clients</h2>
    <div class="row row-30 row-sm">
      <?php foreach ($client as $clients) { ?>
      <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInDown" data-wow-delay=".3s">
        <a class="clients-classic" href="#">
          <img src="<?php echo base_url(); ?>uploads/<?php echo $clients->client_images ?>" alt="" width="250" height="125"/>
        </a>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<?php include 'includes/footer.php' ;?>