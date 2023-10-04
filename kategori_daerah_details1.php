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
    <?php
        $sql = mysqli_query($con, "SELECT * FROM daerah WHERE id_daerah = '$_GET[id]'");
        $data = mysqli_fetch_array($sql);
    ?>
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
                    <h1>Detail Kategori</h1>
                    <h5>Dengan Pilihan Kategori</h5>
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
                    <section id="type-select" class="ts-icons-checkboxes mb-1">

                        <!--Apartments Icon-->
                        <div class="form-group form-check ts-icon-checkbox">
                            <input type="checkbox" class="form-check-input" id="type_1" name="type[]" value="1">
                            <label class="form-check-label ts-box" for="type_1">
                                    <span class="ts-icon-checkbox-image">
                                        <img src="assets/svg/icon-apartment.svg" alt="">
                                    </span>
                                <span class="ts-icon-checkbox-text">Apartments</span>
                                <i class="fa fa-times-circle"></i>
                            </label>
                        </div>

                        <!--Houses Icon-->
                        <div class="form-group form-check ts-icon-checkbox">
                            <input type="checkbox" class="form-check-input" id="type_2" name="type[]" value="2" checked>
                            <label class="form-check-label ts-box" for="type_2">
                                    <span class="ts-icon-checkbox-image">
                                        <img src="assets/svg/icon-house.svg" alt="">
                                    </span>
                                <span class="ts-icon-checkbox-text">Houses</span>
                                <i class="fa fa-times-circle"></i>
                            </label>
                        </div>

                        <!--Offices Icon-->
                        <div class="form-group form-check ts-icon-checkbox">
                            <input type="checkbox" class="form-check-input" id="type_3" name="type[]" value="3" checked>
                            <label class="form-check-label ts-box" for="type_3">
                                    <span class="ts-icon-checkbox-image">
                                        <img src="assets/svg/icon-offices.svg" alt="">
                                    </span>
                                <span class="ts-icon-checkbox-text">Offices</span>
                                <i class="fa fa-times-circle"></i>
                            </label>
                        </div>

                        <!--Lands Icon-->
                        <div class="form-group form-check ts-icon-checkbox">
                            <input type="checkbox" class="form-check-input" id="type_4" name="type[]" value="4">
                            <label class="form-check-label ts-box" for="type_4">
                                    <span class="ts-icon-checkbox-image">
                                        <img src="assets/svg/icon-land.svg" alt="">
                                    </span>
                                <span class="ts-icon-checkbox-text">Lands</span>
                                <i class="fa fa-times-circle"></i>
                            </label>
                        </div>

                        <!--Garages Icon-->
                        <div class="form-group form-check ts-icon-checkbox">
                            <input type="checkbox" class="form-check-input" id="type_5" name="type[]" value="5">
                            <label class="form-check-label ts-box" for="type_5">
                                    <span class="ts-icon-checkbox-image">
                                        <img src="assets/svg/icon-garages.svg" alt="">
                                    </span>
                                <span class="ts-icon-checkbox-text">Garages</span>
                                <i class="fa fa-times-circle"></i>
                            </label>
                        </div>

                        <!--Cabins Icon-->
                        <div class="form-group form-check ts-icon-checkbox">
                            <input type="checkbox" class="form-check-input" id="type_6" name="type[]" value="6">
                            <label class="form-check-label ts-box" for="type_6">
                                    <span class="ts-icon-checkbox-image">
                                        <img src="assets/svg/icon-cabins.svg" alt="">
                                    </span>
                                <span class="ts-icon-checkbox-text">Cabins</span>
                                <i class="fa fa-times-circle"></i>
                            </label>
                        </div>

                    </section>

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
                        $sqlc = mysqli_query($con, "SELECT DISTINCT id_daerah as daer, id_daerah FROM wisata, daerah WHERE id_daerah = id_daerah AND id_daerah = '$data[nama_daerah]'");
                    while($datac = mysqli_fetch_array($sqlc)){
                    ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card ts-item ts-card ts-item__lg">

                            <!--Card Image-->
                            <a href="#" class="card-img" data-bg-image="assets/img/img-item-thumb-01.jpg">
                                <div class="ts-item__info-badge">
                                    $350,000
                                </div>
                                <figure class="ts-item__info">
                                    <h4>Big Luxury Apartment</h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        1350 Arbutus Drive
                                    </aside>
                                </figure>
                            </a>

                            <!--Card Body-->
                            <div class="card-body">
                                <div class="ts-description-lists">
                                    <dl>
                                        <dt>Area</dt>
                                        <dd>325m<sup>2</sup></dd>
                                    </dl>
                                    <dl>
                                        <dt>Bedrooms</dt>
                                        <dd>2</dd>
                                    </dl>
                                    <dl>
                                        <dt>Bathrooms</dt>
                                        <dd>1</dd>
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
        <section id="pagination">
            <div class="container">

                <!--Pagination-->
                <nav aria-label="Page navigation">
                    <ul class="pagination ts-center__horizontal">
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link ts-btn-arrow" href="#">Next</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </section>

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

s