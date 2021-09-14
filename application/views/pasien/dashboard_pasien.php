
            <!-- Bread crumb and right sidebar toggle -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Dashboard</h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard Psikolog</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb and right sidebar toggle -->


            <!-- Container fluid  -->
            <div class="container-fluid">

                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                This is some text within a card block.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->

                <div class="row mt-4">
                    <?php foreach ($paket as $key => $value) { ?>
                   
                        <div class="col-md-4">
                            <div class="card card-hover border-success">
                                <div class="card-header bg-success">
                                    <h4 class="mb-0 text-white"><?=$value->namaPaket?></h4></div>
                                <div class="card-body">
                                    <!-- <h3 class="card-title">Special title treatment</h3> -->
                                    <hr>
                                    <?=$value->deskripsi?>
                                    <hr>
                                    <h2>Rp.<?=number_format($value->harga,2,',','.')?>/sesi</h2>
                                    <br>
                                    <hr>

                                    <?php if ($value->namaPaket == "Paket Konseling Psikologis") { ?>
                                    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                                        <a href="<?=site_url('konseling/index')?>" class="btn btn-success">Go somewhere</a>
                                    <?php } else if ($value->namaPaket == "Paket Konseling Psikologis dan Psikotest") { ?>
                                    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                                        <a href="<?=site_url('konselingPsikotes/index')?>" class="btn btn-success">Go somewhere</a>
                                    <?php } else { ?>
                                        <a href="<?=site_url('psikotes/index')?>" class="btn btn-success">Go somewhere</a>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    
                </div>


            </div>
            <!-- End Container fluid  -->