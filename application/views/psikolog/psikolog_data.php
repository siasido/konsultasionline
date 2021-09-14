
            <!-- Bread crumb and right sidebar toggle -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Psikolog</h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                        <li class="breadcrumb-item active">List Psikolog</li>
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
                                <h4 class="card-title">Data Psikolog</h4>
                                <!-- <div class="text-right">
                                    <a href="<?=site_url('psikolog/add')?>" class="btn btn-info"><i class="fas fa-plus"></i>
                                        Tambah Psikolog
                                    </a>
                                </div> -->
                                
                                <div class="table-responsive">
                                    <table id="file_export" class="table table-striped table-bordered display">
                                        <thead>
                                            <tr>
                                                <th>Nama Psikolog</th>
                                                <th>No.Handphone</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Foto</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($row as $key => $res) { ?>
                                                <tr>
                                                <td><?=$res->namaPsikolog?></td>
                                                <td><?=$res->noHandphone?></td>
                                                <td><?=$res->username?></td>
                                                <td><?=$res->email?? "-" ?></td>
                                                <td>
                                                    <?php if ($res->foto != null) { ?>
                                                        <img class="" src="<?=base_url('uploads/psikolog/'.$res->foto)?>" width="50px"> 
                                                    <?php } else { ?>
                                                        <img class="" src="<?=base_url('assets/no_image.jpg')?>" width="50px"> 
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <a href="<?=site_url('psikolog/edit/'.$res->idpsikolog)?>" class="btn waves-effect waves-light btn-warning"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                    <i class="fas fa-pencil-alt"></i></a>
                                                    <!-- <a href="<?=site_url('psikolog/delete/'.$res->idpsikolog)?>" class="btn waves-effect waves-light btn-danger"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                    <i class="fas fa-trash-alt"></i></a> -->
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