<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><?= $title ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" id="quickForm" action="<?= site_url('Backend/save_infomasi'); ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_wisata" value="<?= (isset($id_wisata['id_wisata'])) ? md5($id_wisata['id_wisata']) : ''; ?>">
                            <div class="card-body">
                                <div class="form-group">

                                    <div class="card-body">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Infomasi</label>
                                            <input type="text" name="nama_infomasi" class="form-control" id="nama_informasi" placeholder="Masukan Infomasi" value="<?= (isset($id_infomasi['nama_infomasi'])) ? ($id_infomasi['nama_infomasi']) : ''; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Deskripsi</label>
                                        <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Masukan deskripsi" value="<?= (isset($id_wisata['deskripsi'])) ? ($id_wisata['deskripsi']) : ''; ?>">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Masukan Foto</label>

                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="foto" name="foto">
                                            <label class="custom-file-label" for="file_prestasi">Choose file</label>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>


                        </form>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
</div>