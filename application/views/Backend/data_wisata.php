<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class=""></div>
            <a href="<?= base_url('Backend/register_wisata'); ?>" class="btn btn-primary btn-icon-split float-right">
                <span class="icon text-white-50">
                    <i class="fas fa-folder-plus"></i>
                </span>
                <span class="text">Tambah Data</span>
            </a>
        </div>


        <div class="card-body">
            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="<?= site_url('Backend/search_wisata'); ?>" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="search keyword.." name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="search_submit" value="Cari">
                    </div>
                </div>
                <br>
            </form>
            </br>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Wisata</th>
                            <th class="text-center">Jam Buka</th>
                            <th class="text-center">Jam Tutup</th>
                            <th class="text-center">Deskripsi</th>
                            <th class="text-center">Foto</th>
                            <th colspan="2" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($daftar_wisata as $val) { ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td><?= $val['nama_wisata']; ?></td>
                                <td><?= $val['jam_buka']; ?></td>
                                <td><?= $val['jam_tutup']; ?></td>
                                <td><?= $val['deskripsi']; ?></td>
                                <td><img width='150' height='100' src="<?= base_url('media/images/' . $val['foto']); ?>"></td>
                                <td class="text-center"><a href="<?= site_url('Backend/update_register_wisata/' . md5($val['id_wisata'])) ?>">
                                        <div class="btn btn-sm btn-primary"><i class="fas fa-fw fa-edit"></i></div>
                                    </a></td>
                                <td class="text-center"><a href="<?= site_url('backend/delete_wisata/' . ($val['id_wisata'])); ?>" onclick="return confirm('Anda yakin akan menghapus data ini ?');">
                                        <div class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash"></i></div>
                                    </a></td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>