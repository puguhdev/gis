<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gis Digital</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Template Style -->
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/backend/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/backend/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/backend/css/components.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/backend/css/all.min.css')?>">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
  integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
  crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
  integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
  crossorigin=""></script>
    
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
                    Copyright &copy; 2020 - PT. Karya Untuk Negeri
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
    <script src="<?=site_url('vendor/backend/js/jquery.dataTables.min.js')?>"></script> 

</body>
</html>