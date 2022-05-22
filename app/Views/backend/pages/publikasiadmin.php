<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Dokumen Publikasi</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="/adminpublikasi" class="fw-normal">Publikasi</a></li>
                    </ol>

                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xlg-9 col-md-12">
            <div class="card">
                <a href="/tambahpublikasi"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah</button></a>
                <div class="card-body">
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Publikasi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($publikasi as $p) : ?>

                                <?php $i = 1; ?>
                                <tr>
                                    <th scope="row"><?php $i++; ?></th>
                                    <td width="50%"><?php echo $p['judul']; ?></td>
                                    <td> <a href=""><?php if ($p['publish'] == 1) { ?>
                                                <i class="fas fa-toggle-on"></i>
                                            <?php } else { ?>
                                                <i class="fas fa-toggle-off"></i>
                                            <?php  } ?></a>
                                    </td>
                                    <td>
                                        <a href="/publikasi/edit/<?= $p['id']; ?>" <button type="button" class="btn btn-warning btn-sm">Ubah</button></a>
                                        <a href="/publikasi/delete/<?= $p['id']; ?>" <button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>

    <!-- /.col-lg-12 -->
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->