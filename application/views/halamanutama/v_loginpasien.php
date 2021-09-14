<!DOCTYPE html>
<style type="text/css">
  .posisi{
    position: absolute;
    left: 250px;
    right: 250px;
  }
</style>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Konsultasi Psikologi</title>

  <!-- css -->
  <link href="<?php echo base_url('asset/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('asset/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/plugins/cubeportfolio/css/cubeportfolio.min.css')?>">
  <link href="<?php echo base_url('asset/css/nivo-lightbox.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('asset/css/nivo-lightbox-theme/default/default.css')?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('asset/css/owl.carousel.css')?>" rel="stylesheet" media="screen" />
  <link href="<?php echo base_url('asset/css/owl.theme.css')?>" rel="stylesheet" media="screen" />
  <link href="<?php echo base_url('asset/css/animate.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('asset/css/style.css')?>" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/src/assets/extra-libs/toastr/dist/build/toastr.min.css" rel="stylesheet">

  <!-- boxed bg -->
  <link id="bodybg" href="<?php echo base_url('asset/bodybg/bg1.css')?>" rel="stylesheet" type="text/css" />

  <!-- template skin -->
  <link id="t-colors" href="<?php echo base_url('asset/color/default.css')?>" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Medicio
    Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<input type="hidden" value="<?=$this->session->flashdata('success')?>" id="success-trigger">
<input type="hidden" value="<?=$this->session->flashdata('danger')?>" id="danger-trigger">
<input type="hidden" value="<?=$this->session->flashdata('warning')?>" id="warning-trigger">

  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            <a class="navbar-brand" href="<?php echo base_url('dashboard/beranda')?>">
                <img src="<?=base_url('assets/logo1.png')?>" width="55%" style="margin-top: 0xpx" alt="">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="<?php echo base_url('psikotes/halamanutama')?>">Beranda</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Layanan<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url('dashboard/layanankonseling')?>">Konseling</a></li>
                <li><a href="<?php echo base_url('dashboard/layananpsikotest')?>">Psikotes</a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url('psikotes/haldokter')?>">Psikolog</a></li>
            <li class="active"><a href="<?php echo base_url('pasien/loginpasien')?>">Login/Registrasi</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

   <section id="intro" class="intro">
      <div class="intro-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <!-- <?php if(isset($error)) { echo $error; }; ?> -->
              <div class="form-wrapper">
                <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

                  <div class="panel panel-skin">
                    <div class="panel-heading">
                      <h3 class="panel-title">Masuk</h3>
                    </div>
                    <div class="panel-body">
                    <form action="<?=site_url('auth/loginPasien')?>" method="post">

                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <input type="text" name="username" id="username" class="form-control input-md" required="" placeholder="Nama Pengguna">
                                
                                </div>
                              </div>
                          </div>

                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                              <input type="password" name="password" required="" class="form-control input-md" placeholder="Kata Sandi">
                              
                              <br>
                              
                              <button name="login" class="btn btn-block btn-primary" type="submit">Masuk</button>

                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                        <!-- <p class="lead-footer" style="color: red">Jika anda belum mempunyai<br> akun silahkan registrasi*</p> -->
                        <!-- <a class="btn waves-effect waves-light btn-block btn-info" href="<?=site_url('dashboard/halamanRegisterPasien')?>">Registrasi</a> -->
                            </div>
                          </div>
                        </div>

                        </form>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Tentang</h5>
                <p>
                  Aplikasi ini memberikan fasilitas layanan konsultasi psikologi secara <i>online</i> yang dapat membantu siapapun yang membutuhkan bantuan dalam menyelesaikan segala masalah kesehatan mental.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Kontak</h5>
                <ul>
                  <li>
                    <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                </span> +62 896 8044 4387
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                </span> saktiyono@ymail.com
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-wordpress fa-stack-1x fa-inverse"></i>
                </span> saktiyono.wordpress.com
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                </span> psikolog_sakti
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Alamat</h5>
                <p>Jl. Cingised No.1, Antapani Tengah, Kec. Antapani, Kota Bandung, Jawa Barat 40291</p>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                <div class="text-left">
                  <p>&copy;Copyright - Medicio Theme. All rights reserved.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="text-right">
                  <div class="credits">
                    <!--
                      All the links in the footer should remain intact. 
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medicio
                    -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

  <!-- Core JavaScript Files -->
  <script src="<?php echo base_url ('asset/js/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url ('asset/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url ('asset/js/jquery.easing.min.js'); ?>"></script>
  <script src="<?php echo base_url ('asset/js/wow.min.js'); ?>"></script>
  <script src="<?php echo base_url ('asset/js/jquery.scrollTo.js'); ?>"></script>
  <script src="<?php echo base_url ('asset/js/jquery.appear.js'); ?>"></script>
  <script src="<?php echo base_url ('asset/js/stellar.js'); ?>"></script>
  <script src="<?php echo base_url ('asset/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js'); ?>"></script>
  <script src="<?php echo base_url ('asset/js/owl.carousel.min.js'); ?>"></script>
  <script src="<?php echo base_url ('asset/js/nivo-lightbox.min.js'); ?>"></script>
  <script src="<?php echo base_url ('asset/js/custom.js'); ?>"></script>
  <script src="<?php echo base_url () ?>assets/src/assets/extra-libs/toastr/dist/build/toastr.min.js"></script>
  <script>
    var successMessage = $('#success-trigger').val();
    var dangerMessage = $('#danger-trigger').val();
    var warningMessage = $('#warning-trigger').val();

    if (successMessage){
      // toastr.success(successMessage);
      toastr.warning(successMessage, 'Berhasil Registrasi ', { "progressBar": true });
    }

    if (dangerMessage){
      toastr.error(dangerMessage);
    }

    if (warningMessage){
      Toast.fire({
        type: 'error',
        title: warningMessage
      })
    }
  </script>
</body>

  

    <script type="text/javascript">
        $(function () {
            $("#btnSubmit").click(function () {
                var password = $("#pass1").val();
                var confirmPassword = $("#pass2").val();
                if (password != confirmPassword) {
                    alert("Passwords Tidak Sesuai");
                    return false;
                }
                return true;
            });
        });
    </script>


<!-- Mirrored from my.ypt.or.id/admin by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Apr 2019 02:08:05 GMT -->
</html>

</html>
