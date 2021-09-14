<input type="hidden" value="<?=$this->session->flashdata('success')?>" id="success-trigger">
<input type="hidden" value="<?=$this->session->flashdata('danger')?>" id="danger-trigger">
<input type="hidden" value="<?=$this->session->flashdata('warning')?>" id="warning-trigger">
 
            <!-- Bread crumb and right sidebar toggle -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Konseling</h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                        <li class="breadcrumb-item active">Data Konseling</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb and right sidebar toggle -->


            <!-- Container fluid  -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-left">
                                    <h4 class="card-title">Data Konseling</h4>
                                </div>
                                
                                <br>
                                <div class="table-responsive">
                                    <table id="file_export" class="table table-striped table-bordered display">
                                        <thead>
                                            <tr>
                                                <th>Tanggal Konsultasi</th>
                                                <th>Keluhan</th>
                                                <th>Lama Keluhan</th>
                                                <th>Dampak</th>
                                                <th>Riwayat Penanganan</th>
                                                <th>Hasil Diagnosa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($row as $key => $res) { ?>
                                                <tr>
                                                <td><?=$res->tanggal." ".$res->jamPraktik?></td>
                                                <td><?=$res->keluhan?></td>
                                                <td><?=$res->lamaKeluhan?></td>
                                                <td><?=$res->dampak?></td>
                                                <td><?=$res->riwayatPenanganan?></td>
                                                <td><?=$res->hasilDiagnosa != "" ? $res->hasilDiagnosa : '-'?></td>
                                            </tr>
                                            <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- End Container fluid  -->



