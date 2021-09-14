
            <!-- Bread crumb and right sidebar toggle -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Psikolog</h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Jadwal Praktik</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb and right sidebar toggle -->

            <?=$error?? ""?>


            <!-- Container fluid  -->
            <div class="container-fluid">
                <div class="col-lg-12 col-md-12">
                        <div class="card card-body">
                            <h3 class="mb-0">Tambah Jadwal Praktik</h3>
                            <p class="text-muted mb-4 font-13"> Lengkapi form berikut untuk menambah jadwal praktik:</p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form action="<?=site_url('jadwal/ubah')?>" method="post">
                                        <div class="row">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <input type="hidden" name="idjadwal" value="<?=$this->input->post('idjadwal') ?? $row->idjadwal ?>">
                                                    <input type="hidden" name="idpsikolog" value="<?=$psikolog->idpsikolog?>">
                                                    <label for="namaPsikolog">Psikolog</label>
                                                    <input type="text" name="namaPsikolog" class="form-control" id="namaPsikolog" value="<?=$psikolog->namaPsikolog?>" readonly>
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('psikolog'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="paket">Jenis Layanan</label>
                                                    <select class="select2 form-control custom-select <?=form_error('paket') ? 'is-invalid' : null ?>" name="paket" style="width: 100%; height:36px;">
                                                        <option value="">Pilih Paket</option>
                                                        <?php $selectedPaket = $this->input->post('paket') ?? $row->idpaket?>
                                                        <?php foreach ($paket as $key => $res) {?>
                                                            <option value="<?=$res->idpaket?>" <?php echo $selectedPaket== $res->idpaket ? 'selected' : null ?>> <?=$res->namaPaket?></option>
                                                        <?php } ?>
                                                    
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('paket'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                <label for="periode">Jam Praktik</label>
                                                    <div class='input-group mb-3'>
                                                        <input type='text' name="jamPraktik" class="form-control timerange <?=form_error('jamPraktik') ? 'is-invalid' : null ?>"
                                                             value="<?=$this->input->post('jamPraktik') ?? $row->jamPraktik ?>"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <span class="ti-calendar"></span>
                                                            </span>
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('jamPraktik'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3 mb-md-0">
                                            <div class="form-group">
                                                <label for="periode">Periode Berlaku</label>
                                                    <div class='input-group mb-3'>
                                                        <input type="text" class="form-control" name="tanggalPraktik" value="<?=$this->input->post('tanggal') ?? $row->tanggal ?>" placeholder="20xx-0x-0x" id="mdate">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            <?php echo form_error('tanggalPraktik'); ?>
                                                        </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="kuota">Kuota</label>
                                                    <input type="number" class="form-control <?=form_error('kuota') ? 'is-invalid' : null ?>" id="kuota" name="kuota"  value="<?=$this->input->post('kuota') ?? $row->kuota ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('kuota'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        

                                        <div class="row">
                                            <button type="submit" name="submit" class="btn btn-success waves-effect waves-light mr-2">Submit</button>
                                            <a href="<?=site_url('jadwal/index')?>" class="btn btn-inverse waves-effect waves-light">Cancel</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                


            </div>
            <!-- End Container fluid  -->

                    