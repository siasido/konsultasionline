<input type="hidden" value="<?=$this->session->flashdata('success')?>" id="success-trigger">
<input type="hidden" value="<?=$this->session->flashdata('danger')?>" id="danger-trigger">
<input type="hidden" value="<?=$this->session->flashdata('warning')?>" id="warning-trigger">
            
    <!-- Bread crumb and right sidebar toggle -->
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Rekening</h3>
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                <li class="breadcrumb-item active">List Rekening</li>
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
                        <h4 class="card-title">Data Rekening</h4>
                        <div class="text-right">
                            <a href="<?=site_url('rekening/add')?>" class="btn btn-info"><i class="fas fa-plus"></i>
                                Tambah Rekening
                            </a>
                        </div>
                        
                        <div class="table-responsive">
                            <table id="file_export" class="table table-striped table-bordered display">
                                <thead>
                                    <tr>
                                        <th>Bank</th>
                                        <th>Nama Pemilik Rekening</th>
                                        <th>Nomor Rekening</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($row as $key => $res) { ?>
                                        <tr>
                                        <td><?=$res->namaBank?></td>
                                        <td><?=$res->namaPemilik?></td>
                                        <td><?=$res->noRekening?></td>
                                        <td>
                                            <a href="<?=site_url('rekening/edit/'.$res->idrekening)?>" class="btn waves-effect waves-light btn-warning"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                            <i class="fas fa-pencil-alt"></i></a>
                                            <a href="<?=site_url('rekening/delete/'.$res->idrekening)?>" class="btn waves-effect waves-light btn-danger"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                            <i class="fas fa-trash-alt"></i></a>
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