<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  $this->load->view('FrontOffice/linkheader');  ?> 
    <title>Menu</title>

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href=<?php echo site_url("asset/vendor/fonts/boxicons.css"); ?> />

    <!-- Core CSS -->
    <link rel="stylesheet" href=<?php echo site_url("asset/vendor/css/core.css"); ?> class="template-customizer-core-css" />
    <link rel="stylesheet" href=<?php echo site_url("asset/vendor/css/theme-default.css"); ?> class="template-customizer-theme-css" />
    <link rel="stylesheet" href=<?php echo site_url("asset/css/demo.css"); ?> />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href=<?php echo site_url("asset/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"); ?> />

    <link rel="stylesheet" href=<?php echo site_url("asset/vendor/libs/apex-charts/apex-charts.css"); ?> />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src=<?php echo site_url("asset/vendor/js/helpers.js"); ?>></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src=<?php echo site_url("asset/js/config.js"); ?>></script>
</head>
<body>
<?php  $this->load->view('FrontOffice/header');  ?> 
<section>
        <div class="bg-holder bg-size" style="background-image:url(<?php echo site_url("assets/img/gallery/dot-bg.png"); ?>);background-position:top left;background-size:auto;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-4 mb-4 ">
              <a href="<?php echo site_url('Acceuil/listActivite'); ?>">
                <div class="card h-100 shadow card-span rounded-3" style="background-image: url(<?php echo site_url("assets/img/gallery/fessier.jpg"); ?>);background-size: 100%;">
                  <span style="text-align: center;color: whitesmoke;font-size: 1.5cm;padding: 2cm;font-weight: bold;font-family: initial;">Activité</span>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 ">
              <a href=<?php echo site_url("Acceuil/listAliment"); ?>>
                <div class="card h-100 shadow card-span rounded-3" style="background-image: url(<?php echo site_url("assets/img/gallery/fessier.jpg"); ?>);background-size: 100%;">
                  <span style="text-align: center;color: whitesmoke;font-size: 1.5cm;padding: 2cm;font-weight: bold;font-family: initial;">Nutrition</span>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 ">
              <a href="<?php echo site_url('Acceuil/sommeil'); ?>">
                <div class="card h-100 shadow card-span rounded-3" style="background-image: url(<?php echo site_url("assets/img/gallery/fessier.jpg"); ?>);background-size: 100%;">
                  <span style="text-align: center;color: whitesmoke;font-size: 1.5cm;padding: 2cm;font-weight: bold;font-family: initial;">Sommeil</span>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 ">
              <a href=<?php echo site_url(""); ?>>
                <div class="card h-100 shadow card-span rounded-3" style="background-image: url(<?php echo site_url("assets/img/gallery/fessier.jpg"); ?>);background-size: 100%;">
                  <span style="text-align: center;color: whitesmoke;font-size: 1.5cm;padding: 2cm;font-weight: bold;font-family: initial;">Calendrier</span>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 ">
              <a href="<?php echo site_url('Acceuil/detailCompte'); ?>">
                <div class="card h-100 shadow card-span rounded-3" style="background-image: url(<?php echo site_url("assets/img/gallery/fessier.jpg"); ?>);background-size: 100%;">
                  <span style="text-align: center;color: whitesmoke;font-size: 1.5cm;padding: 2cm;font-weight: bold;font-family: initial;">Mon compte</span>
                </div>
              </a>
            </div>            
          </div>
        </div>
      </section>  

      <!-- Modal -->
      <div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <form action="<?php echo site_url("Regime/nouveau"); ?>" method="post">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalScrollableTitle">Desciption</h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body">
                  
                <div class="row">
                  <div class="col mb-3">
                    <label for="nameWithTitle" class="form-label">Taille</label>
                    <input
                      type="number"
                      id="nameWithTitle"
                      class="form-control"
                      name="taille"
                      placeholder="en cm"
                    />
                  </div>
                </div>

                <div class="row">
                  <div class="col mb-3">
                    <label for="nameWithTitle" class="form-label">Mon poids</label>
                    <input
                      type="number"
                      id="nameWithTitle"
                      class="form-control"
                      name="poids"
                      placeholder="en kg"
                    />
                  </div>
                </div>

                <div class="row">
                  <div class="col mb-3">
                    <label for="nameWithTitle" class="form-label">Objectif</label>
                    <input
                      type="number"
                      id="nameWithTitle"
                      class="form-control"
                      name="objectif"
                      placeholder="en cm"
                    />
                  </div>
                </div>
                

                <div class="row">

                  <div class="col-md-6">
                    <label for="nameWithTitle" class="form-label">Mon ossature</label>
                    <br>
                    <div class="" style="width: 212%;">
                      <div class="list-group">
                        <label class="list-group-item">
                          <input name="ossature" class="form-check-input me-1" type="radio" value="0" checked />
                          Fine 
                        </label>
                        <label class="list-group-item">
                          <input name="ossature" class="form-check-input me-1" type="radio" value="1" />
                          Moyen
                        </label>
                        <label class="list-group-item">
                          <input name="ossature" class="form-check-input me-1" type="radio" value="2" />
                          Lourd
                        </label>
                        
                      </div>
                    </div>
                  </div>


                </div>

                <div class="row">

                  <div class="col-md-6">
                    <label for="nameWithTitle" class="form-label">Rythme</label>
                    <br>
                    <div class="" style="width: 212%;">
                      <div class="list-group">
                        <label class="list-group-item">
                          <input name="rythme" class="form-check-input me-1" type="radio" value="0" checked />
                          Lent 
                        </label>
                        <label class="list-group-item">
                          <input name="rythme" class="form-check-input me-1" type="radio" value="1" />
                          Normal
                        </label>
                        <label class="list-group-item">
                          <input name="rythme" class="form-check-input me-1" type="radio" value="2" />
                          Avancée
                        </label>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                  Close
                </button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </form>

        </div>
      </div>
      <!--  -->
      <?php  $this->load->view('FrontOffice/footer');  ?>     

      <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
    <script src=<?php echo site_url("asset/vendor/libs/jquery/jquery.js"); ?>></script>
    <script src=<?php echo site_url("asset/vendor/libs/popper/popper.js"); ?>></script>
    <script src=<?php echo site_url("asset/vendor/js/bootstrap.js"); ?>></script>
    <script src=<?php echo site_url("asset/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"); ?>></script>

    <script src=<?php echo site_url("asset/vendor/js/menu.js"); ?>></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src=<?php echo site_url("asset/vendor/libs/apex-charts/apexcharts.js"); ?>></script>

    <!-- Main JS -->
    <script src=<?php echo site_url("asset/js/main.js"); ?>></script>

    <!-- Page JS -->
    <script src=<?php echo site_url("asset/js/dashboards-analytics.js"); ?>></script>
</body>
</html>