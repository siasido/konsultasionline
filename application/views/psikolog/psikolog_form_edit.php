
            <!-- Bread crumb and right sidebar toggle -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Psikolog</h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                        <li class="breadcrumb-item active">Edit Psikolog</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb and right sidebar toggle -->


            <!-- Container fluid  -->
            <div class="container-fluid">
                <div class="col-lg-12 col-md-12">
                        <div class="card card-body">
                            <h3 class="mb-0">Edit Psikolog</h3>
                            <p class="text-muted mb-4 font-13"> Ubah data pada form untuk</p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form action="<?=site_url('psikolog/simpan')?>" enctype="multipart/form-data" method="post">
                                    <div class="row">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <input type="hidden" name="idpsikolog" value="<?=$this->input->post('idpsikolog') ?? $row->idpsikolog ?>">
                                                    <label for="namaPsikolog">Nama Lengkap</label>
                                                    <input type="text" name="namaPsikolog" class="form-control <?=form_error('namaPsikolog') ? 'is-invalid' : null ?>" id="namaPsikolog" value="<?=$this->input->post('namaPsikolog') ?? $row->namaPsikolog ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('namaPsikolog'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="noHandphone">No.Handphone</label>
                                                    <input type="number" class="form-control <?=form_error('noHandphone') ? 'is-invalid' : null ?>" id="noHandphone" name="noHandphone"  value="<?=$this->input->post('noHandphone') ?? $row->noHandphone ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('noHandphone'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control <?=form_error('email') ? 'is-invalid' : null ?>" id="email" name="email"  value="<?=$this->input->post('email') ?? $row->email ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('email'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <input type="text" class="form-control <?=form_error('username') ? 'is-invalid' : null ?>" id="username" name="username"  value="<?=$this->input->post('username') ?? $row->username ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('username'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="text-muted">*Kosongkan password jika tidak ingin mengubah password</span>
                                        <div class="row">
                                        
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control <?=form_error('password') ? 'is-invalid' : null ?>" id="password" name="password"  value="<?=$this->input->post('password')?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('password'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="passconf">Konfirmasi Password</label>
                                                    <input type="password" class="form-control <?=form_error('passconf') ? 'is-invalid' : null ?>" id="passconf" name="passconf"  value="<?=$this->input->post('passconf')?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('passconf'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="el-element-overlay">
                                                    <div class="el-card-item pb-3">
                                                        <div class="el-card-avatar mb-3 el-overlay-1 w-100 overflow-hidden position-relative text-center">
                                                        <?php if ($row->foto != null) { ?>
                                                            <a class="image-popup-vertical-fit" href="<?=base_url('uploads/psikolog/'.$row->foto)?>"> <img src="<?=base_url('uploads/psikolog/'.$row->foto)?>" class="d-block position-relative" width="150px" alt="user"> </a>
                                                        <?php } else { ?>
                                                            <a class="image-popup-vertical-fit" href="<?=base_url('assets/no_image.jpg')?>"> <img src="<?=base_url('assets/no_image.jpg')?>" class="d-block position-relative" width="150px" alt="user"> </a>
                                                        <?php } ?>
                                                            
                                                        </div>
                                                        <div class="el-card-content">
                                                            <!-- <h4 class="mb-0">Project title</h4>  -->
                                                            <span class="text-muted">*Kosongkan file upload jika tidak ingin mengubah foto</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Foto</label>
                                                    <input type="file" class="form-control" id="foto" name="foto" aria-describedby="fileHelp">
                                                </div>
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

                    