<div role="main" class="main">


    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md" style="margin:0px 0px 30px 0px !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="text-dark"> Publikasi Rencana Pembangunan dan Rencana Kerja Pemerintah Daerah Kabupaten Banggai Laut</h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end">

                        <li class="active">Data dan Publikasi</li>
                        <li><a href="<?= base_url(); ?>/publikasi">Dokumen Perencanaan.</a></li>
                        <li>Rencana Pembangunan dan Rencana Kerja Pemerintah Daerah Kabupaten Banggai Laut</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col-lg-3 order-lg-2">
                <aside class="sidebar">
                    <form action="" method="get">
                        <div class="input-group mb-3 pb-1">
                            <input class="form-control text-1" placeholder=" Cari " name="keyword" id="keyword" type="text">
                            <button type="submit" class="btn btn-light text-1 p-2"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>

                    <h5 class="font-weight-semi-bold"> Topik </h5>
                    <ul class="nav nav-list flex-column mb-5">
                        <li class="nav-item">
                            <a class="" href="">Empty</a>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="col-lg-9 order-lg-1">
                <div class="blog-posts">
                    <?php foreach ($publikasi as $p) :  ?>

                        <article class="post post-medium">
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <div class="post-image">
                                        <a href="#">
                                            <img src="<?= base_url() ?>/img/<?= $p['sampul']; ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" style="border: 1px solid #dbdbdb;" alt="RKP Tahun 2021">
                                        </a>
                                    </div>
                                </div>
                                <style>
                                    p {
                                        text-align: justify !important;
                                    }
                                </style>
                                <div class="col-lg-9">
                                    <div class="post-content">

                                        <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2" style="text-align: justify;"><a href="#" class="text-decoration-none" title="RKP Tahun 2021" target="_blank"><?php echo $p['judul']; ?></a></h2>
                                        <?php if ($p['deskripsi'] == '') {
                                            '';
                                        } else {
                                        ?>
                                            <div class="accordion without-bg without-borders" id="accordion8">
                                                <div class="card card-default">
                                                    <div class="card-header">
                                                        <h4 class="card-title m-0">

                                                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2" style="font-size: 14px;">
                                                                Deskripsi <i class="fa-solid fa-caret-down"></i>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse2" class="collapse" style="">
                                                        <div class="card-body">
                                                            <p class="mb-0 o-line-bappenas">
                                                            <p style="text-align:justify"><?php echo $p['deskripsi']; ?></p>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="post-meta">
                                        <span><i class="fa-solid fa-calendar"></i><?php echo $p['updated_at']; ?> </span>

                                        <span><i class="fa-solid fa-user"></i>
                                            <?php echo $p['author']; ?>
                                        </span>
                                        <span class="d-block mt-2"><a href="<?= base_url() ?>/dok/<?= $p['dokumen']; ?>" class="btn btn-xs btn-light text-1 text-uppercase" target="_blank"> Unduh File</a></span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endforeach ?>
                    <div d-flex justify-content-center>
                        <?= $pager->links('publikasi', 'pager'); ?>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>
</div>