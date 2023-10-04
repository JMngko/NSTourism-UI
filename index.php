<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ThemeStarz">

    <!--CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/simplebar.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>NSTourism</title>

</head>

<body>

<!-- WRAPPER
=====================================================================================================================-->
<div class="ts-page-wrapper ts-homepage" id="page-top">

    <!--*********************************************************************************************************-->
    <!--HEADER **************************************************************************************************-->
    <!--*********************************************************************************************************-->
    <?php include "header.php"; ?>
    <!--end Header-->

    <!-- HERO SLIDER
    =================================================================================================================-->
    <section id="ts-hero" class="ts-hero-slider ts-bg-black mb-0 ">

        <div class="ts-min-h__70vh w-100">

            <!--Owl Carousel-->
            <div class="owl-carousel" data-owl-loop="1" data-owl-nav="1">

                <!-- SLIDE
                =====================================================================================================-->
                <?php
                    $sql1 = mysqli_query($con, "SELECT * FROM wisata ORDER BY klik DESC LIMIT 5");
                    while($data1 = mysqli_fetch_array($sql1)){ 
                ?>
                <div class="ts-slide" data-bg-image="admin/admin/<?php echo $data1['gambar']; ?>">
                    <div class="ts-slide-description h-100 ts-center__vertical pb-0">
                        <div class="container">

                            <!--Title-->
                            <h1 class="mb-3"><?php echo $data1['nama_wisata']; ?></h1>

                            <!--Location-->
                            <figure class="ts-opacity__50">
                                <i class="fa fa-map-marker mr-2"></i>
                                <?php echo $data1 ['alamat']; ?>
                            </figure>

                            <a href="wisata_details.php?id=<?php echo $data1['id_wisata']; ?>" class="btn btn-primary ts-btn-arrow">Detail</a>

                        </div>
                    </div>
                </div>
                <?php } ?>
                <!--end slide-->

            </div>
            <!--end owl-carousel-->

            <!--Hero slider control-->
            <div class="ts-hero-slider-control">
                <div class="container" id="owl-control"></div>
            </div>

        </div>

    </section>
    <!--end ts-hero-->

    <!--*********************************************************************************************************-->
    <!-- MAIN ***************************************************************************************************-->
    <!--*********************************************************************************************************-->

    <main id="ts-main">

        <!-- FEATURED PROPERTIES
        =============================================================================================================-->
        <section id="featured-properties" class="ts-block pt-5">
            <div class="container">

                <!--Title-->
                <div class="ts-title text-center">
                    <h2>TEMPAT WISATA TERPOPULER</h2>
                </div>

                <div class="row">

                    <!--Item-->
                    <?php
                        $sql = mysqli_query($con, "SELECT * FROM wisata ORDER BY klik DESC LIMIT 6");
                        while($data = mysqli_fetch_array($sql)){ 
                    ?>
                    <div class="col-sm-6 col-lg-4">

                        <div class="card ts-item ts-card ts-item__lg">

                            <!--Ribbon-->
                            <div class="ts-ribbon">
                                <i class="fa fa-thumbs-up"></i>
                            </div>

                            <!--Card Image-->
                            <a href="wisata_details.php?id=<?php echo $data['id_wisata']; ?>" class="card-img ts-item__image" data-bg-image="admin/admin/<?php echo $data['gambar']; ?>">
                                <figure class="ts-item__info">
                                    <h4><?php echo $data ['nama_wisata']; ?></h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        <?php echo $data ['alamat']; ?>
                                    </aside>
                                </figure>
                            </a>

                            <!--Card Body-->
                            <div class="card-body">
                                <div class="ts-description-lists">
                                    <dl>
                                        <dt>Kategori</dt>
                                        <dd><?php echo $data ['kategori']; ?></dd>
                                    </dl>
                                </div>
                            </div>

                            <!--Card Footer-->
                            <a href="wisata_details.php?id=<?php echo $data['id_wisata']; ?>" class="card-footer">
                                <span class="ts-btn-arrow">Detail</span>
                            </a>

                        </div>
                        <!--end ts-item-->
                    </div>
                    <?php }  ?>
                    <!--end Item col-md-4-->

                </div>
                <!--end row-->

                <!--All properties button-->
                <!-- <div class="text-center mt-3">
                    <a href="listing-category-icons.html" class="btn btn-outline-dark ts-btn-border-muted">Show All Properties</a>
                </div> -->

            <!--end container-->
        </section>

        <!-- FEATURES
        =============================================================================================================-->
        
        <!--end ts-block-->

        <!-- SUBSCRIBE
        =============================================================================================================-->
        

        <!--LATEST LISTINGS
        =============================================================================================================-->


        <!--PRICING
        =============================================================================================================-->
        

        <!--ITEM CAROUSEL
        =============================================================================================================-->
        <section class="ts-block" data-bg-pattern="assets/img/bg-pattern-dot.png">

            <!--Title-->
            <div class="ts-title text-center">
                <h2>TERAKHIR DITAMBAHKAN</h2>
            </div>

            <!--Carousel-->
            <div class="owl-carousel ts-items-carousel" data-owl-items="5" data-owl-dots="1">
                <?php
                    $sqlm = mysqli_query($con, "SELECT * FROM wisata ORDER BY id_wisata DESC LIMIT 8");
                    while($datam = mysqli_fetch_array($sqlm)){ 
                ?>
                <!--Item-->
                <div class="slide">
                    <div class="card ts-item ts-card ts-item__lg">

                        <!--Ribbon-->
                        <div class="ts-ribbon-corner">
                            <span>Updated</span>
                        </div>

                        <!--Card Image-->
                        <a href="wisata_details.php?id=<?php echo $datam['id_wisata']; ?>" class="card-img ts-item__image" data-bg-image="admin/admin/<?php echo $datam['gambar']; ?>">
                            <figure class="ts-item__info">
                                <h4><?php echo $datam['nama_wisata']; ?></h4>
                                <aside>
                                    <i class="fa fa-map-marker mr-2"></i>
                                    <?php echo $datam['alamat']; ?>
                                </aside>
                            </figure>
                        </a>

                        <!--Card Body-->
                        <div class="card-body">
                            <div class="ts-description-lists">
                                <dl>
                                    <dt>Kategori</dt>
                                    <dd><?php echo $datam['kategori']; ?></dd>
                                </dl>
                            </div>
                        </div>

                        <!--Card Footer-->
                        <a href="wisata_details.php?id=<?php echo $dataz['id_wisata']; ?>" class="card-footer">
                            <span class="ts-btn-arrow">Detail</span>
                        </a>

                    </div>
                    <!--end ts-item-->
                </div>
                <?php } ?>
                <!--end slide-->
            </div>
        </section>
        <!--end ts-block-->
        <!--end ts-block-->

        <!--SUBMIT BANNER
        =============================================================================================================-->
        

        <!--PARTNERS
        =============================================================================================================-->


    </main>

    <!--*********************************************************************************************************-->
    <!--************ FOOTER *************************************************************************************-->
    <!--*********************************************************************************************************-->

    <?php include "footer.php"; ?>
    <!--end #ts-footer-->

</div>
<!--end page-->

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>
