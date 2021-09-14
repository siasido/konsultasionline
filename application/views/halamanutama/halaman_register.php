
<!DOCTYPE html>
<html dir="ltr">


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/materialpro-bootstrap-latest/material-pro/src/material/authentication-register1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 12:19:46 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/src/assets/images/favicon.png">
    <title>Monster admin Template - The Ultimate Multipurpose admin template</title>
	<link rel="canonical" href="https://www.wrappixel.com/templates/monsteradmin/" />
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
    <div class="main-wrapper">
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
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?php echo base_url()?>assets/src/assets/images/background/login-register.jpg) no-repeat center center; background-size: cover;">
            <div class="auth-box p-4 bg-white rounded">
                <div>
                    <div class="logo">
                        <h3 class="box-title mb-3">Sign Up</h3>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal" action="<?=site_url('pasien/register')?>" enctype="multipart/form-data" method="post">
                                <div class="form-group mb-3">
                                    <div class="col-xs-12">
                                        <input class="form-control <?=form_error('username') ? 'is-invalid' : 'is-valid' ?>" 
                                        value="<?php echo set_value('username'); ?>" name="username" type="text" placeholder="Username">
                                    </div>
                                    <!-- <div class="invalid-feedback"> -->
                                        <?php echo form_error('username'); ?>
                                    <!-- </div> -->
                                </div>
                                
                                
                                <div class="form-group mb-3">
                                    <div class="col-xs-12">
                                        <input class="form-control <?=form_error('namaLengkap') ? 'is-invalid' : 'is-valid' ?>" 
                                        value="<?php echo set_value('namaLengkap'); ?>" name="namaLengkap" type="text" placeholder="Nama Lengkap">
                                    </div>
                                    <!-- <div class="invalid-feedback"> -->
                                        <?php echo form_error('namaLengkap'); ?>
                                    <!-- </div> -->
                                </div>
                                <div class="form-group mb-3">
                                    <div class="col-xs-12">
                                        <input class="form-control <?=form_error('noHandphone') ? 'is-invalid' : 'is-valid' ?>" value="<?php echo set_value('noHandphone'); ?>"
                                        name="noHandphone" type="number" placeholder="No.Handphone">
                                    </div>
                                    <!-- <div class="invalid-feedback"> -->
                                        <?php echo form_error('noHandphone'); ?>
                                    <!-- </div> -->
                                </div>
                                <div class="form-group mb-3 ">
                                    <div class="col-xs-12">
                                        <input class="form-control <?=form_error('email') ? 'is-invalid' : 'is-valid' ?>" name="email"
                                        value="<?php echo set_value('email'); ?>" type="text" placeholder="Email">
                                    </div>
                                    <!-- <div class="invalid-feedback"> -->
                                        <?php echo form_error('email'); ?>
                                    <!-- </div> -->
                                </div>
                                <div class="form-group mb-3">
                                    <div class="mb-2">
                                        <label class="custom-control custom-radio">
                                            <input id="radio1" value="1" <?=set_value('gender') == '1' ? 'checked' : 'null' ?> name="gender" type="radio" class="custom-control-input">
                                            <span class="custom-control-label">Laki-Laki</span>
                                        </label>
                                    </div>
                                    <div class="mb-2">
                                        <label class="custom-control custom-radio">
                                            <input id="radio2" value="2" <?=set_value('gender') == '2' ? 'checked' : 'null' ?> name="gender" type="radio" class="custom-control-input">
                                            <span class="custom-control-label">Perempuan</span>
                                        </label>
                                    </div>
                                    <!-- <div class="invalid-feedback"> -->
                                        <?php echo form_error('gender'); ?>
                                    <!-- </div> -->
                                </div>
                                <div class="form-group mb-3 ">
                                    <div class="col-xs-12">
                                        <input class="form-control <?=form_error('password') ? 'is-invalid' : 'is-valid' ?>" name="password"
                                        value="<?php echo set_value('password'); ?>" type="password" placeholder="Password">
                                    </div>
                                    <!-- <div class="invalid-feedback"> -->
                                        <?php echo form_error('password'); ?>
                                    <!-- </div> -->
                                </div>
                                <div class="form-group mb-3">
                                    <div class="col-xs-12">
                                        <input class="form-control <?=form_error('passconf') ? 'is-invalid' : 'is-valid' ?>" name="passconf"
                                        value="<?php echo set_value('passconf'); ?>" type="password" placeholder="Confirm Password">
                                    </div>
                                    <!-- <div class="invalid-feedback"> -->
                                        <?php echo form_error('passconf'); ?>
                                    <!-- </div> -->
                                </div>
                                <div class="form-group mb-3">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input type="file" class="form-control <?=form_error('foto') ? 'is-invalid' : 'is-valid' ?>" id="foto" name="foto" aria-describedby="fileHelp">
                                        </div>
                                        <!-- <div class="invalid-feedback"> -->
                                            <?php echo form_error('foto'); ?>
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="form-group text-center mb-3">
                                    <div class="col-xs-12">
                                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
                                    </div>
                                </div>
                                <div class="form-group mb-0 mt-2 ">
                                    <div class="col-sm-12 text-center ">
                                        Already have an account? <a href="<?=site_url('dashboard/halamanLoginPasien')?>" class="text-info ml-1 ">Sign In</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url()?>assets/src/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url()?>assets/src/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/src/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip "]').tooltip();
    $(".preloader ").fadeOut();
    </script>
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/materialpro-bootstrap-latest/material-pro/src/material/authentication-register1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 12:19:47 GMT -->
</html>