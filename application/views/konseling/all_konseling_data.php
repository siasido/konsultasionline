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
                                                <td>
                                                    
                                                    <?php if($res->status == 1) { ?>
                                                        <button type="button" class="btn waves-effect waves-light btn-primary" 
                                                        value="<?=$res->idkonsultasi?>" onclick="inputHasilDiagnosa()">
                                                        Masukkan Hasil Diagnosa</button>
                                                    <?php } else {?>
                                                        <?=$res->hasilDiagnosa?>
                                                    <?php } ?>
                                                </td>
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

            <div class="modal fade" id="isiHasilKonsultasi-modal" tabindex="-1" role="dialog"
                                    aria-labelledby="scrollableModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <h5 class="modal-title" id="scrollableModalTitle">Booking Jadwal Konseling</h5>
                    <button type="button" class="close ml-auto" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?=site_url('konseling/isiHasilDiagnosa')?>" enctype="multipart/form-data" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                                <!-- <div class="form-group"> -->
                                    <input type="hidden" name="idkonsultasi" id="idkonsul">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="hasilDiagnosa">hasilDiagnosa</label>
                                            <textarea class="form-control" rows="2" id="hasilDiagnosa" required name="hasilDiagnosa" placeholder="Isi hasilDiagnosa..."></textarea>
                                        </div>
                                    </div>
                                <!-- </div> -->
                                
                                <!-- <button type="submit" class="btn btn-success waves-effect waves-light mr-2">Submit</button> -->
                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



