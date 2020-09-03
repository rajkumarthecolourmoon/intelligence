<?php include 'includes/header.php' ;?>
 <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom">
          <div class="container">
            <h1 class="breadcrumbs-custom-title"><?=$services_category->service_category?></h1>
            <!-- <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Home</a></li>
              <li class="active">Program Management</li>
            </ul> -->
          </div>
          <div class="box-position" style="background-image: url(<?=base_url()?>uploads/<?=$services_category->image?>);"></div>
        </div>
      </section> 
    <section class="section section-sm section-first bg-default">
        <div class="container">
          <div class="row row-70">
            <div class="col-lg-8">
            <?php if (!empty($services)) {
                        $no = 1;   
                ?>
                <?php foreach($services as $item){?>
            <div class="single-service">
                <h3><?=$item->tittle?></h3>
                <p class="text-spacing-100"><?=$item->first_title?></p>
                 <img src="<?=base_url()?>uploads/<?=$item->image?>" alt="" width="800" height="300"/>
                <div class="row row-40 align-items-xl-center list-sm list-marked list-marked-sm list-marked-secondary text-spacing-100">
                  <div class="col-md-12 col-xl-12 ">
                  <ul class="list-sm list-marked list-marked-sm list-marked-secondary text-spacing-100">
                      <li ><?=$item->description?></li>
                     
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
            <div class="col-lg-4">
              <!-- Post Sidebar-->
              <?php include 'includes/right-services.php' ;?>
            </div>
          </div>
        </div>
      </section>
<?php include 'includes/footer.php' ;?>