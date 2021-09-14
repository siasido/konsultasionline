
            <!-- Bread crumb and right sidebar toggle -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Paket</h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                        <li class="breadcrumb-item active">Edit Paket</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb and right sidebar toggle -->


            <!-- Container fluid  -->
            <div class="container-fluid">
                <div class="col-lg-12 col-md-12">
                        <div class="card card-body">
                            <h3 class="mb-0">Edit Paket</h3>
                            <p class="text-muted mb-4 font-13"> Ubah deskripsi paket saja </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form action="<?=site_url('paket/simpan')?>" method="post">
                                        <div class="form-group">
                                            <input type="hidden" name="idpaket" value="<?=$this->input->post('idpaket') ?? $row->idpaket ?>">
                                            <label for="namaPaket">Nama Paket</label>
                                            <input type="text" name="namaPaket" class="form-control" id="namaPaket" value="<?=$this->input->post('namaPaket') ?? $row->namaPaket ?>" readonly>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="harga">Harga</label>
                                            <input type="text" class="form-control" id="harga" name="harga"  value="<?=$this->input->post('harga') ?? $row->harga ?>" readonly>
                                        </div>

                                        <div class="mb-3">
                                            <label for="Deskripsi">Deskripsi</label>
                                            <textarea class="form-control <?=form_error('deskripsi') ? 'is-invalid' : null ?>"
                                                name="deskripsi" id="Deskripsi" rows="5" placeholder="Isi deskripsi.." ><?=$this->input->post('deskripsi') ?? $row->deskripsi ?></textarea>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('deskripsi'); ?>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success waves-effect waves-light mr-2">Submit</button>
                                        <a href="<?=site_url('paket/index')?>" class="btn btn-inverse waves-effect waves-light">Cancel</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                


            </div>
            <!-- End Container fluid  -->

                    