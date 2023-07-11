<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo site_url("asset/vendor/css/core.css"); ?> class="template-customizer-core-css" />
    <?php  $this->load->view('FrontOffice/linkheader');  ?> 

    <title>Monaie</title>
</head>
<body>
    
<?php  $this->load->view('FrontOffice/header');  ?> 

<div style="width: 100%;height: 100px;"></div>

<div class="container-xxl flex-grow-1 container-p-y">
<h2 style="color:#283779 ">Monnaie</h2>

    <div class="row">
    <div class="col-lg-4 col-md-4 order-1">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-6 mb-4">
                <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                        <img
                        src=<?php echo site_url("asset/img/icons/unicons/chart-success.png"); ?>
                        alt="chart success"
                        class="rounded"
                        />
                    </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Débit</span>
                    <h3 class="card-title mb-2"><?php echo $solde[0]->debit; ?> Ariary</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
            <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                    <img
                    src=<?php echo site_url("asset/img/icons/unicons/wallet-info.png"); ?>
                    alt="Credit Card"
                    class="rounded"
                    />
                </div>
                </div>
                <span>Crédit</span>
                <h3 class="card-title text-nowrap mb-1"><?php echo $solde[0]->credit; ?> Ariary</h3>
            </div>
            </div>
        </div>
        </div>
    </div>                
    </div>
</div>



<?php  $this->load->view('FrontOffice/footer');  ?> 

</body>
</html>