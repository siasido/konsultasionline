
            <!-- Bread crumb and right sidebar toggle -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Rekening</h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                        <li class="breadcrumb-item active">Edit Rekening</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb and right sidebar toggle -->

            <?=$error?? ""?>


            <!-- Container fluid  -->
            <div class="container-fluid">
                <div class="col-lg-12 col-md-12">
                        <div class="card card-body">
                            <h3 class="mb-0">Edit Rekening</h3>
                            <p class="text-muted mb-4 font-13"> Lengkapi form berikut untuk mengubah data rekening pembayaran:</p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form action="<?=site_url('rekening/simpan')?>" method="post">
                                        <div class="row">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <input type="hidden" name="idrekening" value="<?=$this->input->post('idrekening') ?? $row->idrekening ?>">
                                                    <label for="namaBank">Nama Bank</label>
                                                    <input type="text" name="namaBank" class="form-control <?=form_error('namaBank') ? 'is-invalid' : null ?>" id="namaBank" value="<?=$this->input->post('namaBank') ?? $row->namaBank ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('namaBank'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="namaPemilik">Nama Pemilik Rekening</label>
                                                    <input type="text" class="form-control <?=form_error('namaPemilik') ? 'is-invalid' : null ?>" id="namaPemilik" name="namaPemilik"  value="<?=$this->input->post('namaPemilik') ?? $row->namaPemilik ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('namaPemilik'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="noRekening">Nomor Rekening</label>
                                                    <input type="number" class="form-control <?=form_error('noRekening') ? 'is-invalid' : null ?>" id="noRekening" name="noRekening"  value="<?=$this->input->post('noRekening') ?? $row->noRekening ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('noRekening'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <button type="submit" name="submit" class="btn btn-success waves-effect waves-light mr-2">Submit</button>
                                            <a href="<?=site_url('psikolog/index')?>" class="btn btn-inverse waves-effect waves-light">Cancel</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                


            </div>
            <!-- End Container fluid  -->

                    