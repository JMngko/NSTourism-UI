<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ThemeStarz">

    <!--CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

	<title>NSTourism</title>

</head>

<body>

<!-- WRAPPER
    =================================================================================================================-->
<div class="ts-page-wrapper ts-has-bokeh-bg" id="page-top">

    <!--*********************************************************************************************************-->
    <!--HEADER **************************************************************************************************-->
    <!--*********************************************************************************************************-->
    <?php include "header.php"; ?>
    <!--end Header-->

    <!--*********************************************************************************************************-->
    <!-- MAIN ***************************************************************************************************-->
    <!--*********************************************************************************************************-->

    <main id="ts-main">
        <!--BREADCRUMB
            =========================================================================================================-->
        <section id="breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
        </section>

        <!--PAGE TITLE
            =========================================================================================================-->
        <section id="page-title">
            <div class="container">

                <div class="ts-title">
                    <h1>Tempat Wisata Terpopuler</h1>
                </div>

            </div>
        </section>

        <!--SEARCH FORM
            =========================================================================================================-->
        <section id="search-form">
            <div class="container">

                <form id="form-search" class="ts-form">

                    <!--TYPE/CATEGORY SELECT WITH ICONS
                        =============================================================================================-->

                    <!--BOX WRAPPER
                        =============================================================================================-->
                    <!--SEARCH HAPUS -->

                </form>
                <!--end #form-search-->

            </div>
            <!--end container-->
        </section>
        <!--end #search-form-->

        <!--DISPLAY CONTROL
            =========================================================================================================-->
        <!-- DISPLAY CONTROL HAPUS -->

        <!--ITEMS LISTING
            =========================================================================================================-->
        <section id="items-grid">
            <div class="container">

                <!--Featured Items-->
                <div class="row">

                    <!--Item-->
                    <?php
                        $sql1 = mysqli_query($con, "SELECT * FROM wisata ORDER BY klik DESC");
                        while($data1 = mysqli_fetch_array($sql1)){ 
                    ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card ts-item ts-card ts-item__lg">

                            <!--Ribbon-->

                            <!--Card Image-->
                            <a href="wisata_details.php?id=<?php echo $data1['id_wisata']; ?>" class="card-img ts-item__image" data-bg-image="admin/admin/<?php echo $data1['gambar']; ?>">
                
                                <figure class="ts-item__info">
                                    <h4><?php echo $data1['nama_wisata']; ?></h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        <?php echo $data1['alamat']; ?>
                                    </aside>
                                </figure>
                            </a>

                            <!--Card Body-->
                            <div class="card-body">
                                <div class="ts-description-lists">
                                    <dl>
                                        <dt>Kategori</dt>
                                        <dd><?php echo $data1['kategori'] ?></dd>
                                    </dl>
                                </div>
                            </div>

                            <!--Card Footer-->
                            <a href="detail-01.html" class="card-footer">
                                <span class="ts-btn-arrow">Detail</span>
                            </a>

                        </div>
                        <!--end ts-item-->
                    </div>
                    <?php } ?>
                    <!--end Item col-md-4-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>

        <!--PAGINATION
            =========================================================================================================-->

    </main>
    <!--end #ts-main-->

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
<script src="assets/js/custom.js"></script>

</body>
</html>

