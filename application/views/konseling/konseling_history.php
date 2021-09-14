<input type="hidden" value="<?=$this->session->flashdata('success')?>" id="success-trigger">
<input type="hidden" value="<?=$this->session->flashdata('danger')?>" id="danger-trigger">
<input type="hidden" value="<?=$this->session->flashdata('warning')?>" id="warning-trigger">
 
            <!-- Bread crumb and right sidebar toggle -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Paket</h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                        <li class="breadcrumb-item active">List Paket</li>
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
                                    <h4 class="card-title">Booking Jadwal Konseling</h4>
                                </div>
                                <div class="text-right">
                                

                                </div>
                                <h5><font color="red">Setelah melakukan booking dan mengupload bukti pembayaran, silahkan menunggu hingga status berubah menjadi disetujui, lalu mengisi form konsultasi.</font>
                                <button type="button" class="btn waves-effect waves-light btn-lg btn-rounded btn-success" data-toggle="modal"
                                        data-target="#scrollable-modal">Booking Jadwal Konseling</button>
                                </h5>
                                
                                <br>
                                <div class="table-responsive">
                                    <table id="file_export" class="table table-striped table-bordered display">
                                        <thead>
                                            <tr>
                                                <th>Nama Paket</th>
                                                <th>Nama Psikolog</th>
                                                <th>Harga</th>
                                                <th>Tanggal Booking</th>
                                                <th>Waktu Sesi Konseling</th>
                                                <th>Bukti Pembayaran</th>
                                                <th>Status Pembayaran</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($row as $key => $res) { ?>
                                                <tr>
                                                <td><?=$res->namaPaket?></td>
                                                <td><?=$res->namaPsikolog?></td>
                                                <td>Rp.<?=number_format($res->harga,2,',','.')?></td>
                                                <td><?=$res->tglBooking?></td>
                                                <td><?=$res->tanggalKonseling." jam ".$res->jamKonseling?></td>
                                                <td>
                                                    <div class="el-element-overlay">
                                                        <div class="el-card-item pb-3">
                                                            <div class="el-card-avatar mb-3 el-overlay-1 w-100 overflow-hidden position-relative text-center">
                                                            <?php if ($res->buktiPembayaran != null) { ?>
                                                                <a class="image-popup-vertical-fit" href="<?=base_url('uploads/resi/'.$res->buktiPembayaran)?>"> <img src="<?=base_url('uploads/resi/'.$res->buktiPembayaran)?>" class="d-block position-relative" width="70px" alt="user"> </a>
                                                            <?php } else { ?>
                                                                <a class="image-popup-vertical-fit" href="<?=base_url('assets/no_image.jpg')?>"> <img src="<?=base_url('assets/no_image.jpg')?>" class="d-block position-relative" width="70px" alt="user"> </a>
                                                            <?php } ?>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>    
                                                </td>
                                                <td><?php if($res->statusPesanan == 0) { ?>
                                                        Belum Lunas
                                                    <?php } else if ($res->statusPesanan == 1) {?>
                                                        Menunggu Konfirmasi
                                                    <?php } else if ($res->statusPesanan == 2) { ?>
                                                        Lunas
                                                    <?php } else if ($res->statusPesanan == 3) { ?>
                                                        Psikolog Berhalangan
                                                    <?php } else  if ($res->statusPesanan == 4) {?>
                                                        Ditolak
                                                    <?php }else  if ($res->statusPesanan == 5) {?>
                                                        Menunggu approve ulang
                                                    <?php } ?>

                                                </td>
                                                <td>
                                                    <?php if($res->statusPesanan == 0) { ?>
                                                        <button type="button" class="btn waves-effect waves-light btn-primary" 
                                                        value="<?=$res->idbooking?>" onclick="uploadResi()">
                                                        Upload Bukti Bayar</button>
                                                    <?php } ?>
                                                    <?php if($res->statusPesanan == 1) { ?>
                                                        -
                                                    <?php } else if ($res->statusPesanan == 2 && $res->statusKonsultasi == 0) {?>
                                                        <button type="button" class="btn waves-effect waves-light btn-primary" 
                                                        value="<?=$res->idbooking?>" onclick="isiFormKonseling()">
                                                        Isi form konseling</button>
                                                    <?php } else if ($res->statusPesanan == 2 && $res->statusKonsultasi == 1) {?>
                                                        “silahkan melakukan chat dengan psikolog sesuai dengan jadwal konsultasi”
                                                    <?php } else if ($res->statusPesanan == 3){ ?>
                                                        <button type="button" class="btn waves-effect waves-light btn-primary" 
                                                        value="<?=$res->idbooking?>" onclick="gantiJadwal()">
                                                        Ganti Jadwal</button>
                                                    <?php } else if ($res->statusPesanan == 4){ ?>
                                                        <button type="button" class="btn waves-effect waves-light btn-primary" 
                                                        value="<?=$res->idbooking?>" onclick="">
                                                        Upload Bukti Bayar</button>
                                                    <?php } else if ($res->statusPesanan == 2 && $res->statusKonsultasi == 0){ ?>
                                                        <button type="button" class="btn waves-effect waves-light btn-primary" 
                                                        value="<?=$res->idbooking?>" onclick="isiFormKonseling()">
                                                        Isi form konseling</button>
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

    <!-- Long Content Scroll Modal -->
    <div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog"
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
                <form action="<?=site_url('konseling/simpan')?>" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="hidden" name="idpaket" value="<?=$paket->idpaket?>">
                                    <input type="hidden" name="idpasien" value="<?=$this->session->userdata('idpasien')?>">
                                    <label for="namaPaket">Nama Paket</label>
                                    <input type="text" name="namaPaket" class="form-control" id="namaPaket" value="<?=$paket->namaPaket?>" readonly="">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="idpaket" value="<?=$psikolog->idpsikolog?>">
                                    <label for="namaPsikolog">Psikolog</label>
                                    <input type="text" class="form-control" id="harga" name="harga" value="<?=$psikolog->namaPsikolog?>" readonly="">
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="text" class="form-control" id="harga" name="harga" value="<?=$paket->harga?>" readonly="">
                                </div>
                                <div class="form-group">
                                    <label for="jadwal">Jadwal Konseling</label>
                                    <select class="select2 form-control custom-select" name="jadwal" style="width: 100%; height:36px;" required>
                                        <option value="">-- Pilih Jadwal --</option>
                                        <?php foreach ($jadwal as $key => $res) {?>
                                            <option value="<?=$res->idjadwal?>"> <?=$res->tanggal.' '.$res->jamPraktik?></option>
                                        <?php } ?>
                                    
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="rekening">Rekening Pembayaran</label>
                                    <select class="select2 form-control custom-select" name="rekening" style="width: 100%; height:36px;" required>
                                        <option value="">-- Pilih Rekening --</option>
                                        <?php foreach ($rekening as $key => $res) {?>
                                            <option value="<?=$res->idrekening?>"> <?=$res->namaBank.' (a.n '.$res->namaPemilik.') - '.$res->noRekening?></option>
                                        <?php } ?>
                                    
                                    </select>
                                </div>
                                
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


    <div class="modal fade" id="uploadresi-modal" tabindex="-1" role="dialog"
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
                <form action="<?=site_url('konseling/uploadResi')?>" enctype="multipart/form-data" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="hidden" name="idbooking" id="idbookingrs">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input type="file" class="form-control" id="foto" required accept='image/*' name="buktiPembayaran" aria-describedby="fileHelp">
                                        </div>
                                    </div>
                                </div>
                                
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


    <div class="modal fade" id="formkonseling-modal" tabindex="-1" role="dialog"
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
                <form action="<?=site_url('konseling/isiFormKonseling')?>" enctype="multipart/form-data" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                                <!-- <div class="form-group"> -->
                                    <input type="hidden" name="idbooking" id="idbooking2">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="keluhan">Keluhan</label>
                                            <textarea class="form-control" rows="2" id="keluhan" required name="keluhan" placeholder="Isi keluhan..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="lamaKeluhan">Lama Keluhan</label>
                                            <input type="text" class="form-control" id="lamaKeluhan" name="lamaKeluhan" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="dampak">Dampak</label>
                                            <textarea class="form-control" rows="2" id="dampak" name="dampak" placeholder="Isi dampak yang dialami..." required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="riwayatPenanganan">Riwayat Penanganan</label>
                                            <textarea class="form-control" rows="2" id="riwayatPenanganan" name="riwayatPenanganan" placeholder="Isi riwayat penanganan..." required></textarea>
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


    <div class="modal fade" id="reupload-modal" tabindex="-1" role="dialog"
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
                <form action="<?=site_url('konseling/ubahjadwal')?>" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="hidden" name="idbooking" id="idx" value="">
                                    <input type="hidden" name="idpasien" value="<?=$this->session->userdata('idpasien')?>">
                                    <label for="namaPaket">Nama Paket</label>
                                    <input type="text" name="namaPaket" class="form-control" id="namaPaket" value="<?=$paket->namaPaket?>" readonly="">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="idpaket" value="<?=$psikolog->idpsikolog?>">
                                    <label for="namaPsikolog">Psikolog</label>
                                    <input type="text" class="form-control" id="harga" name="harga" value="<?=$psikolog->namaPsikolog?>" readonly="">
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="text" class="form-control" id="harga" name="harga" value="<?=$paket->harga?>" readonly="">
                                </div>
                                <div class="form-group">
                                    <label for="jadwal">Jadwal Konseling</label>
                                    <select class="select2 form-control custom-select" name="jadwal" style="width: 100%; height:36px;" required>
                                        <option value="">-- Pilih Jadwal --</option>
                                        <?php foreach ($jadwal as $key => $res) {?>
                                            <option value="<?=$res->idjadwal?>"> <?=$res->tanggal.' '.$res->jamPraktik?></option>
                                        <?php } ?>
                                    
                                    </select>
                                </div>

                                
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