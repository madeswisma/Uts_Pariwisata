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
                <div class="col-md-15">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><?= $title ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" id="quickForm" action="<?= site_url('Backend/save_register_wisata'); ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_wisata" value="<?= (isset($id_wisata['id_wisata'])) ? md5($id_wisata['id_wisata']) : ''; ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Wisata</label>
                                    <input type="text" name="nama_wisata" class="form-control" id="nama_wisata" placeholder="Masukan Nama Wisata" value="<?= (isset($id_wisata['nama_wisata'])) ? ($id_wisata['nama_wisata']) : ''; ?>">
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jam Buka</label>
                                    <input type="text" name="jam_buka" class="form-control" id="jam_buka" placeholder="Masukan Jam Buka" value="<?= (isset($id_wisata['jam_buka'])) ? ($id_wisata['jam_buka']) : ''; ?>">
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jam Tutup</label>
                                    <input type="text" name="jam_tutup" class="form-control" id="jam_tutup" placeholder="Masukan Jam Tutup" value="<?= (isset($id_wisata['jam_tutup'])) ? ($id_wisata['jam_tutup']) : ''; ?>">
                                </div>
                            </div>

                            <div class="card-body">
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