<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title;?> - Sistem Informasi Desa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Template Style -->
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/backend/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/backend/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/backend/css/components.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/backend/css/all.min.css')?>">

    <link rel="icon" href="<?= site_url('assets/img/logo.png'); ?>">
    
</head>
<body>

    <div id="app">
        <div class="main-wrapper">

            <?php $this->load->view($header) ?>
            <?php $this->load->view($sidebar) ?>
            
            <div class="main-content">
                <?php $this->load->view($content) ?>
            </div>

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2020 - SMK Negeri 12 Aceh Singkil
                </div>
                <div class="footer-right">
                    Powered by <b>Mende</b>tech
                </div>
            </footer>

        </div>
    </div>


    <!-- Script Javascript -->
    <script src="<?=site_url('vendor/backend/js/jquery-3.5.1.min.js')?>"></script> 
    <script src="<?=site_url('vendor/backend/js/bootstrap.bundle.min.js')?>"></script> 
    <script src="<?=site_url('vendor/backend/js/stisla.js')?>"></script> 
    <script src="<?=site_url('vendor/backend/js/moment.js')?>"></script> 
    <script src="<?=site_url('vendor/backend/js/scripts.js')?>"></script> 
    <script src="<?=site_url('vendor/backend/js/jquery.nicescroll.min.js')?>"></script> 
    <script>
        window.setTimeout(function() {
            $(".alert").fadeIn(500, 0).fadeOut(500, function(){
            $(this).remove(); 
            });
        }, 3000);
     </script>
</body>
</html>