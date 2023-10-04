<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ThemeStarz">

    <!--CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/leaflet.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>NSTourism</title>

</head>

<body>
<?php
    include "header.php";
    
    $sqlx = mysqli_query($con, "SELECT * FROM wisata WHERE id_wisata = '$_GET[id]'");
    $datax = mysqli_fetch_array($sqlx);

    $klik = $datax['klik'] + 1;
        
    $sqlxx="UPDATE wisata SET klik = '$klik' WHERE id_wisata = '$_GET[id]'";
    mysqli_query($con, $sqlxx);
?>

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
                        <li class="breadcrumb-item"><a href="#">Details</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tempat Wisata</li>
                    </ol>
                </nav>
            </div>
        </section>

        <!--PAGE TITLE
            =========================================================================================================-->
        <section id="page-title">
        <?php
            $sql = mysqli_query($con, "SELECT * FROM wisata, daerah WHERE id_wisata = '$_GET[id]' LIMIT 1");
            while($data = mysqli_fetch_array($sql)){
        ?>
            <div class="container">

                <div class="d-block d-sm-flex justify-content-between">

                    <!--Title-->
                    <div class="ts-title mb-0">
                        <h1><?php echo $data['nama_wisata']; ?></h1>
                        <h5 class="ts-opacity__90">
                            <i class="fa fa-map-marker text-primary"></i>
                            <?php echo  $data['alamat']; ?>
                        </h5>
                    </div>

                    <!--Price-->
                    <h3>
                        <a href="https://www.google.com/search?safe=strict&sxsrf=ACYBGNRrP3KQ7YWM0lTCNEYJ7CjmZeEFSA%3A1581151669540&source=hp&ei=tXU-Xq-HHtPerQHnt6WQBg&q=<?php echo $data['nama_wisata']; ?>&oq=<?php echo $data['nama_wisata']; ?>&gs_l=psy-ab.3..0l5j0i203j0j0i203j0l2.1777.4102..4452...4.0..0.209.1294.0j7j1......0....1..gws-wiz.....10..35i362i39j35i39j0i131.Co1nJatL27Q&ved=0ahUKEwjvteL8yMHnAhVTbysKHedbCWIQ4dUDCAU&uact=5" class="btn btn-light w-100" data-toggle="tooltip" data-placement="top"> BROWSE ON GOOGLE <i class="fa fa-search"></i></a>
                    </h3>

                </div>

            </div>
        <?php } ?>
        </section>

        <!--CONTENT
            =========================================================================================================-->
        <section id="content">
            <div class="container">
                <div class="row flex-wrap-reverse">

                    <!--LEFT SIDE
                        =============================================================================================-->
                    <div class="col-md-5 col-lg-4">

                        <!--DETAILS
                            =========================================================================================-->
                        <section>
                        <?php 
                            $sqlz = mysqli_query($con, "SELECT * FROM wisata, daerah WHERE wisata.id_daerah = daerah.id_daerah AND id_wisata = '$_GET[id]'");
                            $dataz = mysqli_fetch_array($sqlz);
                        ?>
                            <h3>Details</h3>
                            <div class="ts-box">

                                <dl class="ts-description-list__line mb-0">

                                    <dt>ID :</dt>
                                    <dd><?php echo $dataz['id_wisata']; ?></dd>

                                    <dt>Category :</dt>
                                    <dd><?php echo $dataz['kategori'] ?></dd>

                                    <dt>Biaya :</dt>
                                    <dd>Rp. <?php echo $dataz['biaya2']; ?></dd>

                                    <dt>Daerah :</dt>
                                    <dd><?php echo $dataz['nama_daerah']; ?></dd>

                                </dl>

                            </div>
                        </section>

                        <!--LOCATION
                            =========================================================================================-->
                        <section id="location">
                        <?php 
                            $sqlc = mysqli_query($con, "SELECT * FROM wisata, daerah WHERE wisata.id_daerah = daerah.id_daerah AND id_wisata = '$_GET[id]'");
                            $datac = mysqli_fetch_array($sqlc);
                        ?>
                            <h3>Location</h3>

                            <div class="ts-box p-0">

                                <div class="ts-map ts-map__detail" id="ts-map-simple"
                                     data-ts-map-leaflet-provider="https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}{r}.png"
                                     data-ts-map-zoom="12"
                                     data-ts-map-center-latitude="<?php echo $datac['lat']; ?>"
                                     data-ts-map-center-longitude="<?php echo $datac['lng']; ?>"
                                     data-ts-map-scroll-wheel="1"
                                     data-ts-map-controls="0"></div>

                                <dl class="ts-description-list__line mb-0 p-4">
                                    <dt><i class="fa fa-map-marker ts-opacity__30 mr-2"></i>Daerah Tempat Wisata :</dt>
                                        <dd><?php echo $datac['nama_daerah']; ?></dd>
                                </dl>

                            </div>

                        </section>

                        <!--ACTIONS
                        =============================================================================================-->
                        <section id="actions">

                            <div class="d-flex justify-content-between">

                                <a href="maps.php?id=<?php echo $datac['id_daerah']; ?>" class="btn btn-light mr-2 w-100" data-toggle="tooltip" data-placement="top" title="Maps Kuliner">
                                    <i class="far fa-star"><span> Kuliner</span></i>
                                </a>

                                <a href="maps_wisata.php?id=<?php echo $datac['id_daerah']; ?>" class="btn btn-light mr-2 w-100" data-toggle="tooltip" data-placement="top" title="Maps Daerah">
                                    <i class="far fa-star"><span> Daerah Wisata</span> </i>
                                </a>
                            </div>

                        </section>

                    </div>
                    <!--end col-md-4-->

                    <!--RIGHT SIDE
                        =============================================================================================-->
                    <div class="col-md-7 col-lg-8">

                        <!--GALLERY CAROUSEL
                        =============================================================================================-->
                        <section id="gallery-carousel position-relative">
                        <?php 
                            $sqlv = mysqli_query($con, "SELECT * FROM wisata WHERE id_wisata = '$_GET[id]'");
                            $datav = mysqli_fetch_array($sqlv);
                        ?>

                            <h3>Gallery</h3>

                            <div class="owl-carousel ts-gallery-carousel" data-owl-auto-height="1" data-owl-dots="1" data-owl-loop="1">

                                <!--Slide-->
                                <div class="slide">
                                    <div class="ts-image" data-bg-image="admin/admin/<?php echo $datav['gambar']; ?>">
                                        <a href="admin/admin/<?php echo $datav['gambar']; ?>" class="ts-zoom popup-image"><i class="fa fa-search-plus"></i>Zoom</a>
                                    </div>
                                </div>

                                <?php
                                    $sqlvr = mysqli_query($con, "SELECT * FROM wisata_gambar WHERE id_wisata = '$_GET[id]'");
                                    while($datavr = mysqli_fetch_array($sqlvr)){
                                ?>
                                    <div class="slide">
                                        <div class="ts-image" data-bg-image="admin/admin/<?php echo $datavr['gambar_wisata']; ?>">
                                            <a href="admin/admin/<?php echo $datavr['gambar_wisata']; ?>" class="ts-zoom popup-image"><i class="fa fa-search-plus"></i>Zoom</a>
                                        </div>
                                    </div>

                                <?php } ?>
                            </div>
                        
                        </section>

                        <!--QUICK INFO
                            =========================================================================================-->
                            <!-- QUICK INFO HAPUS -->
                            <!-- end ts-quick-info -->

                        <!--DESCRIPTION
                            =========================================================================================-->
                        <section id="description">
                        <?php 
                            $sqlb = mysqli_query($con, "SELECT * FROM wisata WHERE id_wisata = '$_GET[id]'");
                            $datab = mysqli_fetch_array($sqlb);
                        ?>

                            <h3>Description</h3>

                            <p>
                                <?php echo $datab['deskripsi']; ?>
                            </p>

                        </section>

                        <!--FEATURES
                            =========================================================================================-->
                        <!-- <section id="features">


                            <h3>Features</h3>

                            <ul class="list-unstyled ts-list-icons ts-column-count-4 ts-column-count-sm-2 ts-column-count-md-2">
                                <li>
                                    <i class="fa fa-bell"></i>
                                    Door Bell
                                </li>
                                <li>
                                    <i class="fa fa-wifi"></i>
                                    Wi-Fi
                                </li>
                                <li>
                                    <i class="fa fa-utensils"></i>
                                    Restaurant Nearby
                                </li>
                                <li>
                                    <i class="fa fa-plug"></i>
                                    230V Plugs
                                </li>
                                <li>
                                    <i class="fa fa-wheelchair"></i>
                                    Accessible
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    Phone
                                </li>
                                <li>
                                    <i class="fa fa-train"></i>
                                    Train Station
                                </li>
                                <li>
                                    <i class="fa fa-key"></i>
                                    Secured Key
                                </li>
                            </ul>

                        </section> -->

                        <!--FLOOR PLANS
                            =========================================================================================-->
                        <!-- FLOOR PLANS HAPUS -->

                        <!--VIDEO
                        =============================================================================================-->

                        <section id="video">

                            <h3>Video</h3>

                            <div class="embed-responsive embed-responsive-16by9 rounded ts-shadow__md">
                                <iframe src="<?php echo $datab['video']; ?>" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>

                        </section>

                        <!--AKOMODASI
                        =============================================================================================-->
                        <!-- <div id="prices" class="container mb-50 mt-40">
                            <div class="search-hotels room-search pattern">
                                <div class="search-room-title">
                                    <h5>Find the Nearest Accomodation</h5>
                                </div>
                                <div class="tours-container">
                                    <div class="tours-box">
                                        <form action="hotel_search.php" method="GET">
                                            <input type="hidden" name="daerah" value="<?php echo $data['daerah']; ?>"/>
                                            <input type="hidden" name="kode" value="<?php echo $data['kode_traveloka']; ?>"/>
                                                <div class="tours-search mb-20">
                                                    <div class="tours-calendar divider-skew"> 
                                                        <input placeholder="Check-in" type="text" name="checkin" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                                                    </div>
                                                    <div class="tours-calendar divider-skew"> 
                                                        <input placeholder="Check-Out" type="text" name="checkout" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                                                    </div>
                                                    <div class="selection-box divider-skew"><i class="flaticon-suntour-adult box-icon"></i>
                                                        <select name="guest">
                                                            <option>Guest</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                        </select>
                                                    </div>
                                                    <div class="selection-box divider-skew"><i class="flaticon-suntour-children box-icon"></i>
                                                        <select name="room">
                                                            <option>Room</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                        </select>
                                                    </div>
                                                    <button type="submit" class="button-search">GO</button>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- AKOMODASI -->

                        <!--CONTACT THE AGENT
                        =============================================================================================-->
                        <!-- CONTACT AGENT HAPUS -->

                    </div>
                    <!--end col-md-8-->

                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>

        <!--SIMILAR PROPERTIES
        =============================================================================================================-->
        <!--SIMILAR PROPERTIES HAPUS  -->

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
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/leaflet.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/map-leaflet.js"></script>

</body>
</html>
