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
            <li class="active"><a href="<?php echo base_url('dashboard/beranda')?>">Beranda</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Layanan <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url('dashboard/layanankonseling')?>">Konseling</a></li>
                <li><a href="<?php echo base_url('dashboard/layananpsikotest')?>">Psikotes</a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url('dashboard/halamandokter')?>">Psikolog</a></li>
            <li><a href="<?php echo base_url('dashboard/halamanLoginPasien')?>">Masuk/Registrasi</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <!-- Section: intro -->
    <section id="intro" class="intro">
      <div class="intro-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                <h2 class="h-ultra">KAPAN KAMU BUTUH BANTUAN PSIKOLOG?</h2>
              </div>
              <div class="well well-trans">
                <div class="wow fadeInRight" data-wow-delay="0.1s">

                  <ul class="lead-list">
                    <li><span class="list"><strong>Kamu perlu mendatangi psikolog jika mengalami gejala-gejala berikut :</strong></span></li>
                    <li><span class="list"><span class="fa fa-check fa-2x icon-success"></span>Masalah yang kamu hadapi membuatmu sulit berkonsentrasi dan mengganggu aktivitas sehari-harimu</span></li>
                    <li><span class="list"><span class="fa fa-check fa-2x icon-success"></span>Melampiaskan perasaan kepada hal-hal yang beresiko seperti melakukan <i>self-harm</i> atau <i>self-injury</i></span></li>
                    <li><span class="list"><span class="fa fa-check fa-2x icon-success"></span>Menarik diri dari lingkungan dalam waktu yang lama</span></li>
                    <li><span class="list"><span class="fa fa-check fa-2x icon-success"></span>Baru saja mengalami kejadian traumatis</span></li>
                  </ul>
                </div>
              </div>

              
            </div>
            
          </div>
        </div>
      </div>
    </section>

    <!-- /Section: intro -->

    <!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">

      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <i class="fa fa-list-alt fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Lakukan Registrasi</h4>
                <p>
                  Registrasi akun anda terlebih dahulu dan masuk menggunakan akun tersebut pada menu registrasi.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">

            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <i class="fa fa-check fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Tentukan Paket dan Jadwal Konsultasi</h4>
                <p>
                  Pilih jadwal sesuai dengan keinginan anda dan lakukan pembayaran sesuai dengan paket yang telah anda pilih.</i>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">
                <i class="fa fa-user-md fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Ditangani oleh Psikolog</h4>
                <p>
                  Lakukan konsultasi mengenai masalah yang sedang anda alami dengan psikolog.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <i class="fa fa-hospital-o fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Dapatkan Hasil Konsultasi</h4>
                <p>
                  Anda akan mendapatkan diagnosis dan cara penyembuhan serta hasil psikotes dari psikolog.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /Section: boxes -->


    <section id="callaction" class="home-section paddingtop-40">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray">
              <div class="row">
                <div class="col-md-8">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text">
                      <h3>INGIN KONSULTASI?</h3>
                      <p>Lakukan registrasi dan masuk menggunakan akun anda terlebih dahulu lalu pilih jadwal dan paket konsultasi sesuai keinginan anda. Klik Mulai Konseling untuk registrasi</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                    <div class="cta-btn">
                      <a href="<?php echo base_url('pasien/loginpasien')?>" class="btn btn-skin btn-lg">Mulai Konseling</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

 
    <!-- Section: services -->
    <section id="service" class="home-section nopadding paddingtop-60">

      <div class="container">

        <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <img src="<?php echo base_url('asset/img/dummy/img-1-1.jpg')?>" class="img-responsive" alt="" />
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInRight" data-wow-delay="0.3s">
              <div class="service-box">
                <div class="service-desc">
                  <h5 class="h-light">Praktis</h5>
                  <p>Konseling dengan cepat dan mudah tanpa harus datang ke kantor psikolog. Lakukan konseling sesuai jadwal anda kapapun.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-desc">
                  <h5 class="h-light">Bersahabat</h5>
                  <p>Ceritakan dengan bebas segala masalahmu dengan psikolog yang akan memahami dan membantu mencari solusi tanpa menghakimi.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
             <div class="wow fadeInRight" data-wow-delay="0.3s">
              <div class="service-box">
                <div class="service-desc">
                  <h5 class="h-light">Profesional</h5>
                  <p>Psikolog yang akan menangani bukan sekedar teman curhat tetapi memiliki kompetensi terbaik dibidangnya yang menjamin pengalaman terbaik dalam konseling.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-desc">
                  <h5 class="h-light">Penyembuhan</h5>
                  <p>Komitmen serius dari psikolog untuk membantu anda untuk berubah.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section: services -->
    </section>

    <!-- /Section: pricing -->


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

</body>

</html>
