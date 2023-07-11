<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  $this->load->view('FrontOffice/linkheader');  ?> 
    <title>Document</title>
</head>
<body>
<?php  $this->load->view('FrontOffice/header');  ?> 
<section>
  <div class="bg-holder bg-size" style="background-image:url(../assets/img/gallery/dot-bg.png);background-position:top left;background-size:auto;">
  </div>
  <!--/.bg-holder-->
  <h2 style="margin-left: 12%;">Activité</h2><br>

  <div class="container">
    <div class="row">
    <!-- Aucun Activité -->
    <?php if(count($activites) == 0) { ?>
      <div>
        <em>Aucun activité pour ce régime</em>
      </div>
    <?php } ?>
    <!--  -->
    <?php foreach($activites as $activite) { ?>
      <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src=<?php echo site_url("assets/img/gallery/fessier.jpg"); ?> alt="news" />
          <div class="card-body"><span class="fs--1 text-primary me-3">Activite</span>
            <svg class="bi bi-clock2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
              <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
            </svg><span class="fs--1 text-900"><?php echo $activite->duree; ?> minutes</span><span class="fs--1"></span>
            <h5 class="font-base fs-lg-0 fs-xl-1 my-3"><?php echo $activite->nom; ?></h5>
          </div>
        </div>
      </div>   
    <?php } ?>         
    </div>
  </div>
</section>  

<?php  $this->load->view('FrontOffice/footer');  ?> 
</body>
</html>