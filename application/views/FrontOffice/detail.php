<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail</title>
    <?php  $this->load->view('FrontOffice/linkheader');  ?> 

  </head>


  <body>
    
    <?php  $this->load->view('FrontOffice/header');  ?> 
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">      

      <section class="bg-secondary">
        <div class="bg-holder" style="background-image:url(<?php echo site_url("assets/img/gallery/bg-eye-care.png"); ?>);background-position:center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-xxl-6"><img class="img-fluid" src=<?php echo site_url("assets/img/gallery/bompard.webp"); ?> alt="..." /></div>
            <div class="col-md-7 col-xxl-6 text-center text-md-start">
              <h2 class="fw-bold text-light mb-4 mt-4 mt-lg-0">Coach diététique<br class="d-none d-sm-block" />et suivis.</h2>
              <p class="text-light">Nous developpons une alimentation equilibré pour vous.<br class="d-none d-sm-block" />Pour nous, l'alimentation saine est la base de tout changement physique <br class="d-none d-sm-block" />et santé. </p>
              <div class="py-3"><a class="btn btn-lg btn-light rounded-pill" href="#!" role="button">Apprendre plus</a></div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-0" >

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(<?php echo site_url("assets/img/gallery/about-us.png"); ?>);background-position:top center;background-size:contain;">
              </div>

              <h1 class="text-center">A PROPOS</h1>
            </div>
          </div>
        </div>

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-5">
        <div class="bg-holder bg-size" style="background-image:url(<?php echo site_url("assets/img/gallery/about-bg.png"); ?>);background-position:top center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 order-lg-1 mb-5 mb-lg-0"><img class="fit-cover rounded-circle w-100" src=<?php echo site_url("assets/img/gallery/health-care.png"); ?> alt="..." /></div>
            <div class="col-md-6 text-center text-md-start">
              <h2 class="fw-bold mb-4">Nous vous aidons sur <br class="d-none d-sm-block" />le developpement de votre corps</h2>
              <p>Nous utilisons une méthode unique et globale basée  <br class="d-none d-sm-block" />sur le coaching personnalisé. Studio COMME J'AIME accompagne <br class="d-none d-sm-block" /> ses clientes pour atteindre leurs objectifs en tenant compte de  <br class="d-none d-sm-block" /> leur morphologie, de leur métabolisme et de leurs habitudes alimentaires. </p>
              <div class="py-3">
                <button class="btn btn-lg btn-outline-primary rounded-pill" type="submit">En savoir plus</button>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      
      <section class="py-8">
        <div class="bg-holder bg-size" style="background-image:url(<?php echo site_url("assets/img/gallery/people-bg-1.png"); ?>);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center offset-sm-1">
            <div class="carousel slide" id="carouselPeople" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <div class="row h-100">
                    <div class="col-sm-3 text-center"><img src=<?php echo site_url("assets/img/gallery/people-who-loves.png"); ?> width="100" alt="" />
                      <h5 class="mt-3 fw-medium text-secondary">Edward Newgate</h5>
                      <p class="fw-normal mb-0">Founder Circle</p>
                    </div>
                    <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                      <h2>Comment ça marche ?!</h2>
                      <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div>
                      <p>Le programme COMME J’AIME est pensé pour vous rendre la vie plus facile. Plus besoin de faire des listes de courses interminables, plus besoin de vous demander ce que vous allez manger, plus besoin de compter les calories, plus besoin de passer des heures en cuisine.32 diététiciens et 22 experts minceur vous accompagnent au quotidien. Lors de votre consultation diététique bimensuelle, votre coach dédié vous écoute, vous motive et vous apprend à adopter de bonnes habitudes alimentaires. Cet accompagnement est primordial pour vous permettre d’atteindre votre objectif, et surtout de maintenir votre poids bien-être.</p>
                    </div>
                  </div>
                </div>
                
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(<?php echo site_url("assets/img/gallery/blog-post.png"); ?>);background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">RECENT BLOGPOSTS</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section>
        <div class="bg-holder bg-size" style="background-image:url(<?php echo site_url("assets/img/gallery/dot-bg.png"); ?>);background-position:top left;background-size:auto;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src=<?php echo site_url("assets/img/gallery/4.webp"); ?> alt="news" />
                <div class="card-body"><span class="fs--1 text-primary me-3">Alimentation</span>
                  <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                  </svg><span class="fs--1 text-900">Nov 21, 2021</span><span class="fs--1"></span>
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Mangez 2 ou 3 portions de fruits de saison par jour et faites la difference</h5><a class="stretched-link" href="#!">en savoir plus</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src=<?php echo site_url("assets/img/gallery/9.webp"); ?> alt="news" />
                <div class="card-body"><span class="fs--1 text-primary me-3">Style de vie</span>
                  <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                  </svg><span class="fs--1 text-900">Nov 25, 2021</span><span class="fs--1"></span>
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Influance du style de vie sur votre poids et votre santé</h5><a class="stretched-link" href="#!">en savoir plus</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src=<?php echo site_url("assets/img/gallery/5.f81a9be6.jpg"); ?> alt="news" />
                <div class="card-body"><span class="fs--1 text-primary me-3">Hydratation</span>
                  <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                  </svg><span class="fs--1 text-900">Nov 28, 2021</span><span class="fs--1"></span>
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">LE RÔLE DE L'HYDRATATION ET LES BESOINS DE L'ORGANISME</h5><a class="stretched-link" href="#!">en savoir plus</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src=<?php echo site_url("assets/img/gallery/sport.jpg"); ?> alt="news" />
                <div class="card-body"><span class="fs--1 text-primary me-3">Activite</span>
                  <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                  </svg><span class="fs--1 text-900">Nov 30, 2021</span><span class="fs--1"></span>
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">L'importance des activités physique pour le corps</h5><a class="stretched-link" href="#!">en savoir plus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
    </main>
    
    <?php  $this->load->view('FrontOffice/footer');  ?> 

  </body>

</html>