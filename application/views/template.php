
<!DOCTYPE html>
<html dir="ltr" lang="en">


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/materialpro-bootstrap-latest/material-pro/src/material/starter-kit.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 12:19:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/src/assets/images/favicon.png">
    <title>Konseling Psikologi Online</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/xtremeadmin/" />

    <!-- select box CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/src/assets/libs/select2/dist/css/select2.min.css">

    <!-- range picker CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/src/assets/libs/daterangepicker/daterangepicker.css">

    <!-- Datetime Picker CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/src/assets/libs/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css">

    <!-- Toastr CSS -->
    <link href="<?php echo base_url()?>assets/src/assets/extra-libs/toastr/dist/build/toastr.min.css" rel="stylesheet">

    <!-- zoom -->
    <link href="<?php echo base_url()?>assets/src/assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    
    <!-- Datatable -->
    <link href="<?php echo base_url()?>assets/src/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url()?>assets/src/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url()?>assets/src/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="<?php echo base_url()?>assets/src/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="<?php echo base_url()?>assets/src/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a
                                class="nav-link sidebartoggler d-none d-md-block waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        
                        
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        
                        
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <?php if ($this->session->userdata('fotoPsikolog') != null) { ?>
                                    <img src="<?=base_url('uploads/psikolog/'.$this->session->userdata('fotoPsikolog'))?>" width="30" class="profile-pic rounded-circle"> 
                                <?php } else { ?>
                                    <img src="<?=base_url('assets/no_image.jpg')?>"  width="30" class="profile-pic rounded-circle" > 
                                <?php } ?>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right scale-up">
                                <ul class="dropdown-user list-style-none">
                                    <li>
                                        <div class="dw-user-box p-3 d-flex">
                                            <div class="u-img">
                                                    <?php if ($this->session->userdata('fotoPsikolog') != null) { ?>
                                                        <img src="<?=base_url('uploads/psikolog/'.$this->session->userdata('fotoPsikolog'))?>" class="rounded" width="80"> 
                                                    <?php } else { ?>
                                                        <img src="<?=base_url('assets/no_image.jpg')?>" class="rounded" width="80"> 
                                                    <?php } ?>
                                            </div>
                                            <div class="u-text ml-2">
                                                <h4 class="mb-0"><?php echo $this->session->userdata('namaPsikolog')?></h4>
                                                <p class="text-muted mb-1 font-14"><a href="#" class="__cf_email__" data-cfemail=""><?php echo $this->session->userdata('emailPsikolog')?></a></p>
                                                <a href="#" class="btn btn-rounded btn-danger btn-sm text-white d-inline-block">View
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="dropdown-divider"></li>
                                    <li class="user-list"><a class="px-3 py-2" href="<?=site_url('auth/logoutPsikolog')?>"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        
                       
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <div class="user-profile position-relative" style="background: url(<?php echo base_url()?>assets/src/assets/images/background/user-info.jpg) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img">
                    <?php if ($this->session->userdata('fotoPsikolog') != null) { ?>
                        <img src="<?=base_url('uploads/psikolog/'.$this->session->userdata('fotoPsikolog'))?>" class="rounded w-100"> 
                    <?php } else { ?>
                        <img src="<?=base_url('assets/no_image.jpg')?>" class="rounded" width="80"> 
                    <?php } ?>
                     </div>
                    <!-- User profile text-->
                    <div class="profile-text pt-1"> 
                        <a href="#" class=" text-white d-block" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><?php echo $this->session->userdata('namaPsikolog')?></a>
                        
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">

                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Master Data</span>
                        </li>
                        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html" aria-expanded="false"><i class="ti-loop"></i><span class="hide-menu">Back To Home</span></a></li> -->
                        <li class="sidebar-item <?=$active_menu == 'psikolog' ? 'active' : null?>"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?=$active_menu == 'psikolog' ? 'active' : null?>" href="<?=site_url('psikolog/index')?>" aria-expanded="false">
                                <i class="mdi mdi-face"></i><span class="hide-menu">Psikolog</span>
                            </a>
                        </li>

                        <li class="sidebar-item <?=$active_menu == 'rekening' ? 'active' : null?>"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?=$active_menu == 'rekening' ? 'active' : null?>" href="<?=site_url('rekening/index')?>" aria-expanded="false">
                                <i class="mr-2 mdi mdi-currency-usd"></i><span class="hide-menu">Rekening Bank</span>
                            </a>
                        </li>

                        <li class="sidebar-item <?=$active_menu == 'jadwal' ? 'active' : null?>"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?=$active_menu == 'jadwal' ? 'active' : null?>" href="<?=site_url('jadwal/index')?>" aria-expanded="false">
                                <i class="mr-2 mdi mdi-calendar-text"></i><span class="hide-menu">Jadwal</span>
                            </a>
                        </li>

                        <li class="sidebar-item <?=$active_menu == 'paket' ? 'active' : null?>"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?=$active_menu == 'paket' ? 'active' : null?>" href="<?=site_url('paket/index')?>" aria-expanded="false">
                                <i class="mr-2 mdi mdi-package"></i><span class="hide-menu">Paket</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-content-paste"></i><span class="hide-menu">Soal Psikotes</span></a>
                        </li>

                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Transaksi</span>
                        </li>
                        <li class="sidebar-item <?=$active_menu == 'booking' ? 'active' : null?>"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?=$active_menu == 'booking' ? 'active' : null?>" href="<?=site_url('konseling/data')?>" aria-expanded="false">
                                <i class="mdi mdi-content-paste"></i><span class="hide-menu">Booking</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?=$active_menu == 'konseling' ? 'active' : null?>"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?=$active_menu == 'konseling' ? 'active' : null?>" href="<?=site_url('konseling/allDataKonseling')?>" aria-expanded="false">
                                <i class="mdi mdi-content-paste"></i>
                                <span class="hide-menu">Konsultasi</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

            <?php echo $contents ?>
            

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2020 Material Pro Admin by wrappixel.com
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <aside class="customizer">
        <a href="https://dashboard.tawk.to/?lang=en#/chat" target="_blank" class="service-panel-toggle"><i class="fa fa-spin fa-cog"></i></a>
        
    </aside>
    <!-- <div class="chat-windows"></div> -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script data-cfasync="false" src="<?php echo base_url()?>assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="<?php echo base_url()?>assets/src/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url()?>assets/src/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/src/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="<?php echo base_url()?>assets/dist/js/app.min.js"></script>
    <script src="<?php echo base_url()?>assets/dist/js/app.init.js"></script>
    <script src="<?php echo base_url()?>assets/dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url()?>assets/src/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/src/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url()?>assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url()?>assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url()?>assets/dist/js/custom.min.js"></script>

    <!--Datatables plugins -->
    <script src="<?php echo base_url()?>assets/src/assets/libs/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>assets/dist/js/pages/datatable/custom-datatable.js"></script>

    <!-- start - This is for export functionality only -->
    <script src="<?php echo base_url()?>assets/cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url()?>assets/cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url()?>assets/cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="<?php echo base_url()?>assets/cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="<?php echo base_url()?>assets/cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="<?php echo base_url()?>assets/cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url()?>assets/cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url()?>assets/dist/js/pages/datatable/datatable-advanced.init.js"></script>
   
    <!-- ZOOM IMage JS -->
    <script src="<?php echo base_url()?>assets/src/assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url()?>assets/src/assets/libs/magnific-popup/meg.init.js"></script>

    <!-- SELECT JS -->
    <script src="<?php echo base_url()?>assets/src/assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url()?>assets/src/assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="<?php echo base_url()?>assets/dist/js/pages/forms/select2/select2.init.js"></script>

    <!-- RangePicker JS -->
    <script src="<?php echo base_url()?>assets/src/assets/libs/moment/moment.js"></script>
    <script src="<?php echo base_url()?>assets/src/assets/libs/daterangepicker/daterangepicker.js"></script>

    <!-- Datetetimepicker JS -->
    <!-- <script src="<?php echo base_url()?>assets/src/assets/libs/moment/moment.js"></script> -->
    <script src="<?php echo base_url()?>assets/src/assets/libs/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker-custom.js"></script>

    <script src="<?php echo base_url () ?>assets/src/assets/extra-libs/toastr/dist/build/toastr.min.js"></script>

    <?php if ($page_js) {?>
	<script src="<?php echo $page_js?>"></script>
	<?php }?>

</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/materialpro-bootstrap-latest/material-pro/src/material/starter-kit.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 12:19:36 GMT -->
</html>