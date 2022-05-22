<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Ubah Publikasi</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Publikasi</a></li>
                    </ol>

                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-10 col-xlg-9 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" action="/publikasi/update/<?= $publikasi['id']; ?>" method="POST" enctype="multipart/form-data">
                            <? csrf_field(); ?>
                            <input type="hidden" name="sampulLama" value="<?= $publikasi['sampul']; ?>">
                            <input type="hidden" name="dokumenLama" value="<?= $publikasi['dokumen']; ?>">
                            <div class="form-group">
                                <label for="exampleFormControlInput1"> Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="   Judul Dokumen" value="<?= $publikasi['judul']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Deskripsi Dokumen</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"><?= $publikasi['deskripsi']; ?></textarea>
                            </div>

                            <div class="form-group col-sm-2">
                                <img width="100" length="200" src="<?= base_url(); ?>/img/<?= $publikasi['sampul']; ?>" alt="" class="img-thumbnail img-preview">
                            </div>
                            <div class="form-group">
                                <label class="custom-file-label" for="exampleFormControlFile1"><?= $publikasi['sampul']; ?></label>
                                <input type="file" class="form-control-file" id="sampul" name="sampul" accept=".jpg, .jpeg, .png" onchange="previewImg()">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Pilih Dokumen</label>
                                <input type="file" class="form-control-file" id="dokumen" name="dokumen" accept=".pdf">
                            </div>
                            <button class="btn btn-success"><i class="fas fa-save"></i> Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->