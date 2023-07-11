<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/.css"); ?>">
    <?php include('linkheader.php'); ?>
    <title>Acceuil</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container"><a class="navbar-brand" href="index.html"><img src=<?php echo site_url("assets/img/gallery/logo.png"); ?> width="118" alt="logo" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
      <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
          <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="#about">A propos</a></li>
          <li class="nav-item px-2"><a class="nav-link" href="#findUs">Membership</a></li>
          <li class="nav-item px-2"><a class="nav-link" href="#findUs">Help </a></li>
          <li class="nav-item px-2"><a class="nav-link" href="#findUs">Contact</a></li>
        </ul><a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4"  href=<?php echo site_url("login/index"); ?>>Connexion</a>
      </div>
    </div>
</nav>

<section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url('http://localhost/s4/assets/img/gallery/hero(2).png');background-position:top center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row min-vh-xl-100 min-vh-xxl-25">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src=<?php echo site_url("assets/img/gallery/hero.png"); ?> alt="hero-header" /></div>
            <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
              <h1 class="fw-light font-base fs-6 fs-xxl-7">Nous sommes <strong>determiner </strong>pour<br />votre&nbsp;<strong>bien-être.</strong></h1>
              <p class="fs-1 mb-5">Nous sommes disponible 24/7 – Des <br />coach et specialistes pourrait vous aider . </p><a class="btn btn-lg btn-primary rounded-pill" href="#!" role="button">Make an Appointment</a>
            </div>
          </div>
        </div>
</section>
    <?php  $this->load->view('FrontOffice/footer');  ?> 

    <!------->
</body>
</html>
