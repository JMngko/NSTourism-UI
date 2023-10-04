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
        <!-- BREADCRUMB (HAPUS) -->

        <!--PAGE TITLE
            =========================================================================================================-->
        <section id="page-title">
            <div class="container">

                <div class="ts-title">
                    <h1>Kategori Daerah</h1>
                </div>

            </div>
        </section>

        <!--SEARCH FORM
        =============================================================================================================-->
        <!-- SEARCH (HAPUS) -->
        <!--end #search-form-->

        <!--DISPLAY CONTROL
            =========================================================================================================-->
        <!-- DISPLAY CONTROL (HAPUS) -->

        <!--ITEMS LISTING
            =========================================================================================================-->
        <section id="items-grid">
            <div class="container">
                <!--Row-->
                <div class="row">

                    <!--Item-->
                    <?php 
                        $sql = mysqli_query($con, "SELECT * FROM daerah LIMIT 14");
                        while($data = mysqli_fetch_array($sql)){

                        $sqlx = mysqli_query($con, "SELECT COUNT(id_wisata) AS jum FROM wisata WHERE id_daerah = '$data[id_daerah]'");
                        $datax = mysqli_fetch_array($sqlx);
                    ?>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card ts-item ts-card">
                            
                            <!--Card Image-->
                            <a href="kategori_daerah_details.php?id=<?php echo $data['id_daerah']; ?>" class="card-img ts-item__image" style="height: 270px; width: auto" data-bg-image="admin/admin/<?php echo $data['gambar']; ?>">
                                <figure class="ts-item__info">
                                    <h4><?php echo $data['nama_daerah'] ?></h4>
                                    
                                </figure>
                            </a>

                            <!--Card Body-->
                            <div class="card-body">
                                <div class="ts-description-lists">
                                    <dl>
                                        <dt>Jumlah Tempat Wisata</dt>
                                        <dd><?php echo $datax['jum']; ?></dd>
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
        <!-- PAGINATION (HAPUS) -->

    </main>
    <!--end #ts-main-->

    <!--*********************************************************************************************************-->
    <!--************ FOOTER *************************************************************************************-->
    <!--*********************************************************************************************************-->
    <?php include "footer.php"; ?>
    <!-- FOOTER -->
    <!--end #ts-footer-->

</div>
<!--end page-->

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>

