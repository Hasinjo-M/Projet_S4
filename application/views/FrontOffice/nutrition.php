<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  $this->load->view('FrontOffice/linkheader');  ?> 
    <title>Document</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo site_url("asset/img/favicon/favicon.ico"); ?>" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?php echo site_url("asset/vendor/fonts/boxicons.css"); ?>"/>

    <!-- Core CSS -->
    <!-- <link rel="stylesheet" href="<?php echo site_url("asset/vendor/css/core.css"); ?>" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo site_url("asset/vendor/css/theme-default.css"); ?>" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo site_url("asset/css/demo.css"); ?>" /> -->

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo site_url("asset/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"); ?>" />
</head>
<body>
<?php  $this->load->view('FrontOffice/header');  ?>
<section>
        <div class="bg-holder bg-size" style="background-image:url(../assets/img/gallery/dot-bg.png);background-position:top left;background-size:auto;">
        </div>
        <!--/.bg-holder-->

        <h2 style="margin-left: 12%;">Nutrition</h2><br>
        <div style="margin-left: 12%;">
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <li class="page-item first">
                <a class="page-link" href="javascript:void(0);">
                  Semaine
                </a>
              </li>
              <li class="page-item first">
                <a class="page-link" href="javascript:void(0);">
                  <i class="tf-icon bx bx-chevrons-left"></i></a>
              </li>
              <li class="page-item prev">
                <a class="page-link" href="javascript:void(0);"
                  ><i class="tf-icon bx bx-chevron-left"></i
                ></a>
              </li>
              <?php for($i = 0; $i < 5; $i++) { ?>
              <li class="page-item <?php if($semaine == ($i + 1)) echo 'active'; ?>">
                <a class="page-link" href="<?php echo site_url('Acceuil/listAliment/'.($i + 1)); ?>"><?php echo ($i + 1); ?></a>
              </li>
              <?php } ?>
              <li class="page-item next">
                <a class="page-link" href="javascript:void(0);"
                  ><i class="tf-icon bx bx-chevron-right"></i
                ></a>
              </li>
              <li class="page-item last">
                <a class="page-link" href="javascript:void(0);"
                  ><i class="tf-icon bx bx-chevrons-right"></i
                ></a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="container">
          <div class="row">
          <?php for($i = 0; $i < count($compositions); $i++) { 
            $prix = 0;
          ?>
            <div class="col-sm-4 col-md-4 mb-4">
              <div class="card h-100 shadow card-span rounded-3" style="padding: 2%;padding-top: 5%;">
                <h4 style="text-align: center;">Jour <?php echo 7 * ($semaine - 1) + $i + 1; ?></h4><br>
                <div class="" style="height: 200px;overflow-y: scroll;">
                <?php foreach($compositions[$i] as $aliment) { 
                  $prix += $aliment->prix;
                ?>
                  <div class="row" style="margin: 2px;height: 60px;">
                    <div class="col-md-6"><?php echo $aliment->nom; ?></div>
                    <div class="col-md-4">
                      <img class="card-img-top rounded-top-3" style="height: 50px;width: 50px;border-radius: 0px; margin-left: 110%;" src="<?php echo site_url("assets/img/gallery/4.webp"); ?>" alt="news" />
                    </div>
                  </div>
                <?php } ?>
                </div>
                <br><hr>
                <p style="margin: 5%">
                  <strong>Total:</strong> <?php echo $prix; ?> Ariary
                </p>
              </div>
            </div> 
          <?php } ?>           
          </div>
        </div>
      </section> 
<?php  $this->load->view('FrontOffice/footer');  ?>    
</body>
</html>