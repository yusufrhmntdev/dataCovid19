

<html>
<!-- Mirrored from webapplayers.com/inspinia_admin-v2.8/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Oct 2018 06:17:15 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title; ?></title>

    <link href="<?php echo base_url()?>vendor/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>vendor/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url()?>vendor/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>vendor/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>vendor/css/style.css" rel="stylesheet">
    <script src="<?php echo base_url()?>vendor/js/timeticker.js"></script>
    <script src="<?php echo base_url()?>vendor/js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>

</head>

<body>
    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="<?php echo base_url()?>vendor/img/profile/dirumahaja.png" width="150px"/>
                      
                    </div>
                    <div class="logo-element">
                                        </div>
                </li>
                <li>
                    <a href="<?php echo site_url('home/index')?>"><i class="fa fa-home"></i> <span class="nav-label">Data Indonesia</span></a>
                </li>
                 <li>
                    <a href="<?php echo site_url('home/global')?>"><i class="fa fa-globe"></i> <span class="nav-label">Data Global</span></a>
                </li>
                 <li>
                    <a href="<?php echo site_url('home/pemetaan')?>"><i class="fa fa-map-marker"></i> <span class="nav-label">Peta Global Covid 19</span></a>
                </li>               
        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" action="http://webapplayers.com/inspinia_admin-v2.8/search_results.html">
                        <div class="form-group">
                            <input type="text"  class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                         <span class="m-r-sm text-muted welcome-message">System Pemantauan Covid 19 ||</span>
                        <span class="m-r-sm text-muted welcome-message"><?= date('d M Y') ?> - <span id="time-ticker"><?= date('H:s:i') ?></span> wib</span> 

                        <span class="m-r-sm text-muted welcome-message">#APIKawalCorona</span>
                        <span class="m-r-sm text-muted welcome-message">#DirumahAja</span>
                    </li>
                    
                            </ul>

            </nav>
        </div>
          <div class="footer">
            <div class="float-right">
                <strong>Copyright</strong> YusufRahmanto &copy; 2020
            </div>
            <div class="float-left">
                <strong> #APIKAWALKORONA</strong>
            </div>
        </div>

    </div>
</div>



 <!-- Mainly scripts -->    

    <script src="<?php echo base_url()?>vendor/js/popper.min.js"></script>
    <script src="<?php echo base_url()?>vendor/js/bootstrap.js"></script>
    <script src="<?php echo base_url()?>vendor/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url()?>vendor/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Peity -->
    <script src="<?php echo base_url()?>vendor/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url()?>vendor/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url()?>vendor/js/inspinia.js"></script>
    <script src="<?php echo base_url()?>vendor/js/plugins/pace/pace.min.js"></script>
    <script src="<?php echo base_url()?>vendor/js/plugins/dataTables/datatables.min.js"></script>
    <script src="<?php echo base_url()?>vendor/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>
    <!-- jQuery UI -->
    <script src="<?php echo base_url()?>vendor/js/plugins/jquery-ui/jquery-ui.min.js"></script>
     <script>
        $(document).ready(function(){

            $('#example').DataTable({
                pageLength: 25,
                responsive: true,
                targets:[8],
                orderable:false,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>
</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.8/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Oct 2018 06:17:30 GMT -->
</html>
  