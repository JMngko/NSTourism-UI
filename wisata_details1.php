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
    <?php include "admin/admin/koneksi.php"; ?>

<!-- WRAPPER
    =================================================================================================================-->
<div class="ts-page-wrapper ts-has-bokeh-bg" id="page-top">

    <!--*********************************************************************************************************-->
    <!--HEADER **************************************************************************************************-->
    <!--*********************************************************************************************************-->
    <header id="ts-header" class="fixed-top">

        <!-- SECONDARY NAVIGATION
        =============================================================================================================-->
        <nav id="ts-secondary-navigation" class="navbar p-0">
            <div class="container justify-content-end justify-content-sm-between">

                <!--Left Side-->
                <div class="navbar-nav d-none d-sm-block">
                    <!--Phone-->
                    <span class="mr-4">
                            <i class="fa fa-phone-square mr-1"></i>
                            +1 123 456 789
                        </span>
                    <!--Email-->
                    <a href="#">
                        <i class="fa fa-envelope mr-1"></i>
                        hello@example.com
                    </a>
                </div>

                <!--Right Side-->
                <div class="navbar-nav flex-row">

                    <!--Search Input-->
                    <input type="text" class="form-control p-2 border-left bg-transparent w-auto" placeholder="Search">

                    <!--Currency Select-->
                    <select class="custom-select bg-transparent ts-text-small border-left" id="currency" name="currency">
                        <option value="1">GBP</option>
                        <option value="2">USD</option>
                        <option value="3">EUR</option>
                    </select>

                    <!--Language Select-->
                    <select class="custom-select bg-transparent ts-text-small border-left border-right" id="language" name="language">
                        <option value="1">EN</option>
                        <option value="2">FR</option>
                        <option value="3">DE</option>
                    </select>

                </div>
                <!--end navbar-nav-->
            </div>
            <!--end container-->
        </nav>

        <!--PRIMARY NAVIGATION
        =============================================================================================================-->
        <nav id="ts-primary-navigation" class="navbar navbar-expand-md navbar-light">
            <div class="container">

                <!--Brand Logo-->
                <a class="navbar-brand" href="index-map-leaflet-fullscreen.html">
                    <img src="assets/img/logo.png" alt="">
                </a>

                <!--Responsive Collapse Button-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarPrimary" aria-controls="navbarPrimary" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!--Collapsing Navigation-->
                <div class="collapse navbar-collapse" id="navbarPrimary">

                    <!--LEFT NAVIGATION MAIN LEVEL
                    =================================================================================================-->
                    <ul class="navbar-nav">

                        <!--HOME (Main level)
                        =============================================================================================-->
                        <li class="nav-item ts-has-child">

                            <!--Main level link-->
                            <a class="nav-link active" href="#">
                                Home
                                <span class="sr-only">(current)</span>
                            </a>

                            <!-- List (1st level) -->
                            <ul class="ts-child">

                                <!-- MAP (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">Map</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <!-- OPENSTREETMAP (2nd level level)
                                        =============================================================================-->
                                        <li class="nav-item ts-has-child">

                                            <a href="#" class="nav-link">OpenStreetMap</a>

                                            <!--List (3rd level) -->
                                            <ul class="ts-child">

                                                <li class="nav-item">
                                                    <a href="index-map-leaflet-fullscreen.html" class="nav-link">Full Screen</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-leaflet-form-bottom.html" class="nav-link">Form Bottom</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-leaflet-half-map.html" class="nav-link">Half Map</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-leaflet-left-results.html" class="nav-link">Left Results</a>
                                                </li>

                                            </ul>

                                        </li>
                                        <!--end OpenStreetMap-->

                                        <!-- MAPBOX (2nd level level)
                                        =============================================================================-->
                                        <li class="nav-item ts-has-child">

                                            <a href="#" class="nav-link">MapBox</a>

                                            <!--List (3rd level) -->
                                            <ul class="ts-child">

                                                <li class="nav-item">
                                                    <a href="index-map-mapbox-fullscreen.html" class="nav-link">Full Screen</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-mapbox-form-bottom.html" class="nav-link">Form Bottom</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-mapbox-half-map.html" class="nav-link">Half Map</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-mapbox-left-results.html" class="nav-link">Left Results</a>
                                                </li>

                                            </ul>

                                        </li>
                                        <!--end MapBox-->

                                        <!-- GOOGLE (2nd level level)
                                        =============================================================================-->
                                        <li class="nav-item ts-has-child">

                                            <a href="#" class="nav-link">Google</a>

                                            <!--List (3rd level) -->
                                            <ul class="ts-child">

                                                <li class="nav-item">
                                                    <a href="index-map-google-fullscreen.html" class="nav-link">Full Screen</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-google-form-bottom.html" class="nav-link">Form Bottom</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-google-half-map.html" class="nav-link">Half Map</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-google-left-results.html" class="nav-link">Left Results</a>
                                                </li>

                                            </ul>

                                        </li>
                                        <!--end Google-->

                                        <!-- HERE (2nd level level)
                                        =============================================================================-->
                                        <li class="nav-item ts-has-child">

                                            <a href="#" class="nav-link">Here</a>

                                            <!--List (3rd level) -->
                                            <ul class="ts-child">

                                                <li class="nav-item">
                                                    <a href="index-map-here-fullscreen.html" class="nav-link">Full Screen</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-here-form-bottom.html" class="nav-link">Form Bottom</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-here-half-map.html" class="nav-link">Half Map</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-here-left-results.html" class="nav-link">Left Results</a>
                                                </li>

                                            </ul>

                                        </li>
                                        <!--end Here-->

                                        <!-- BING (2nd level level)
                                        =============================================================================-->
                                        <li class="nav-item ts-has-child">

                                            <a href="#" class="nav-link">Bing</a>

                                            <!--List (3rd level) -->
                                            <ul class="ts-child">

                                                <li class="nav-item">
                                                    <a href="index-map-bing-fullscreen.html" class="nav-link">Full Screen</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-bing-form-bottom.html" class="nav-link">Form Bottom</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-bing-half-map.html" class="nav-link">Half Map</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-bing-left-results.html" class="nav-link">Left Results</a>
                                                </li>

                                            </ul>

                                        </li>
                                        <!--end Bing-->

                                    </ul>
                                    <!--end List (2nd level)-->

                                </li>
                                <!--end MAP (1st level)-->

                                <!-- SLIDER (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">Slider</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <li class="nav-item">
                                            <a href="index-slider.html" class="nav-link">Slider Default</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-slider-fullscreen.html" class="nav-link">Full Screen</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-slider-form-vertical.html" class="nav-link">Vertical Form</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-slider-form-horizontal.html" class="nav-link">Horizontal Form</a>
                                        </li>

                                    </ul>
                                    <!--end List (2nd level) -->

                                </li>
                                <!--end SLIDER (1st level)-->

                                <!-- IMAGE (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">Image</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <li class="nav-item">
                                            <a href="index-image-form-horizontal-dark.html" class="nav-link">Horizontal Form</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-image-form-vertical-light.html" class="nav-link">Vertical Form</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-image-fullscreen.html" class="nav-link">Full Screen</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-video-background.html" class="nav-link">Video Background</a>
                                        </li>

                                    </ul>
                                    <!--end List (2nd level) -->

                                </li>
                                <!--end SLIDER (1st level)-->

                            </ul>
                            <!--end List (1st level) -->

                        </li>
                        <!--end HOME nav-item-->

                        <!--LISTING (Main level)
                        =============================================================================================-->
                        <li class="nav-item ts-has-child">

                            <!--Main level link-->
                            <a class="nav-link" href="#">Listing</a>

                            <!-- List (1st level) -->
                            <ul class="ts-child">

                                <!-- CATEGORY ICONS (1st level)
                                =====================================================================================-->
                                <li class="nav-item">

                                    <a href="listing-category-icons.html" class="nav-link">Category Icons</a>

                                </li>
                                <!--end CATEGORY ICONS (1st level)-->

                                <!-- GRID (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">Grid</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <li class="nav-item">
                                            <a href="listing-grid-3-columns.html" class="nav-link">Grid 3 Columns</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="listing-grid-4-columns.html" class="nav-link">Grid 4 Columns</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="listing-grid-mixed.html" class="nav-link">Mixed</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="listing-grid-sidebar-left.html" class="nav-link">Sidebar Left</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="listing-grid-sidebar-right.html" class="nav-link">Sidebar Right</a>
                                        </li>

                                    </ul>
                                    <!--end List (2nd level) -->

                                </li>
                                <!--end GRID (1st level)-->

                                <!-- LIST (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">List</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <li class="nav-item">
                                            <a href="listing-list-sidebar-left.html" class="nav-link">Sidebar Left</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="listing-list-sidebar-right.html" class="nav-link">Sidebar Right</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="listing-list-compact-sidebar.html" class="nav-link">Compact with Sidebar</a>
                                        </li>

                                    </ul>
                                    <!--end List (2nd level) -->

                                </li>
                                <!--end LIST (1st level)-->

                                <!-- PROPERTY (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">Property</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <li class="nav-item">
                                            <a href="detail-01.html" class="nav-link">Property Detail v1</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="detail-02.html" class="nav-link">Property Detail v2</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="detail-03.html" class="nav-link">Property Detail v3</a>
                                        </li>

                                    </ul>
                                    <!--end List (2nd level) -->

                                </li>
                                <!--end PROPERTY (1st level)-->

                            </ul>
                            <!--end List (1st level) -->

                        </li>
                        <!--end LISTING nav-item-->

                        <!--PAGES (Main level)
                        =============================================================================================-->
                        <li class="nav-item ts-has-child">

                            <!--Main level link-->
                            <a class="nav-link" href="#">Pages</a>

                            <!-- List (1st level) -->
                            <ul class="ts-child">

                                <!-- AGENCY (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">Agency</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <li class="nav-item">
                                            <a href="agencies-list.html" class="nav-link">Agencies List</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="agency-detail.html" class="nav-link">Agency Detail</a>
                                        </li>

                                    </ul>
                                    <!--end List (2nd level) -->

                                </li>
                                <!--end AGENCY (1st level)-->

                                <!-- AGENTS (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">Agents</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <li class="nav-item">
                                            <a href="agencies-list.html" class="nav-link">Agents List</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="agent-detail-01.html" class="nav-link">Agent Detail v1</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="agent-detail-02.html" class="nav-link">Agent Detail v2</a>
                                        </li>

                                    </ul>
                                    <!--end List (2nd level) -->

                                </li>
                                <!--end LIST (1st level)-->

                                <!-- EDIT PROPERTY (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="edit-property.html" class="nav-link">Edit Property</a>
                                </li>
                                <!--end EDIT PROPERTY (1st level)-->

                                <!-- FAQ (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link">FAQ</a>
                                </li>
                                <!--end FAQ (1st level)-->

                                <!-- LOGIN (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="login.html" class="nav-link">Login</a>
                                </li>
                                <!--end LOGIN (1st level)-->

                                <!-- PRICING (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="pricing.html" class="nav-link">Pricing</a>
                                </li>
                                <!--end PRICING (1st level)-->

                                <!-- REGISTER (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="register.html" class="nav-link">Register</a>
                                </li>
                                <!--end REGISTER (1st level)-->

                                <!-- SUBMIT (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="submit.html" class="nav-link">Submit Property</a>
                                </li>
                                <!--end SUBMIT (1st level)-->

                                <!-- SUBMIT PREVIEW (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="preview.html" class="nav-link">Submit Preview</a>
                                </li>
                                <!--end SUBMIT PREVIEW (1st level)-->

                                <!-- SUBMITTED (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="submitted.html" class="nav-link">Submitted</a>
                                </li>
                                <!--end SUBMITTED(1st level)-->

                            </ul>
                            <!--end List (1st level) -->

                        </li>
                        <!--end PAGES nav-item-->

                        <!--ABOUT US (Main level)
                        =============================================================================================-->
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.html">About Us</a>
                        </li>
                        <!--end ABOUT US nav-item-->

                        <!--CONTACT (Main level)
                        =============================================================================================-->
                        <li class="nav-item">
                            <a class="nav-link mr-2" href="contact.html">Contact</a>
                        </li>
                        <!--end CONTACT nav-item-->

                    </ul>
                    <!--end Left navigation main level-->

                    <!--RIGHT NAVIGATION MAIN LEVEL
                    =================================================================================================-->
                    <ul class="navbar-nav ml-auto">

                        <!--LOGIN (Main level)
                        =============================================================================================-->
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Login</a>
                        </li>

                        <!--REGISTER (Main level)
                        =============================================================================================-->
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="register.html">Register</a>
                        </li>

                        <!--SUBMIT (Main level)
                        =============================================================================================-->
                        <li class="nav-item">
                            <a class="btn btn-outline-primary btn-sm m-1 px-3" href="submit.html">
                                <i class="fa fa-plus small mr-2"></i>
                                Add Property
                            </a>
                        </li>

                    </ul>
                    <!--end Right navigation-->

                </div>
                <!--end navbar-collapse-->
            </div>
            <!--end container-->
        </nav>
        <!--end #ts-primary-navigation.navbar-->

    </header>
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

        <!--GALLERY CAROUSEL
            =========================================================================================================-->
        <section id="gallery-carousel" class="">
            <?php 
                $sqlv = mysqli_query($con, "SELECT * FROM wisata WHERE id_wisata = '$_GET[id]'");
                while($datav = mysqli_fetch_array($sqlv)){
            ?>

            <div class="owl-carousel ts-gallery-carousel ts-gallery-carousel__multi" data-owl-dots="1" data-owl-items="3" data-owl-center="1" data-owl-loop="1">
                 <div class="slide">
                    <div class="ts-image" data-bg-image="admin/admin/images/wisata/danau tondano.jpg">
                        <a href="admin/admin/images/wisata/danau tondano.jpg" class="ts-zoom popup-image"><i class="fa fa-search-plus"></i>Zoom</a>
                    </div>
                </div>
                <!--Slide-->
                <div class="slide">
                    <div class="ts-image" data-bg-image="admin/admin/<?php echo $datav['gambar']; ?>">
                        <a href="admin/admin/<?php echo $datav['gambar'] ?>" class="ts-zoom popup-image"><i class="fa fa-search-plus"></i>Zoom</a>
                    </div>

                </div>

            </div>

            <?php } ?>
        </section>

        <!--PAGE TITLE
            =========================================================================================================-->
        <section id="page-title" class="border-bottom ts-white-gradient">
            <div class="container">

                <div class="d-block d-sm-flex justify-content-between">

                    <!--Title-->
                    <div class="ts-title mb-0">
                        <h1>Big Luxury Apartment</h1>
                        <h5 class="ts-opacity__90">
                            <i class="fa fa-map-marker text-primary"></i>
                            1350 Arbutus Drive
                        </h5>
                    </div>

                    <!--Price-->
                    <h3>
                        <span class="badge badge-primary p-3 font-weight-normal ts-shadow__sm">$350,000</span>
                    </h3>

                </div>

            </div>
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
                        <section id="location">

                            <h3>Location</h3>

                            <div class="ts-box p-0">
                                <div class="ts-map ts-map__detail" id="ts-map-simple"
                                     data-ts-map-leaflet-provider="https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}{r}.png"
                                     data-ts-map-zoom="12"
                                     data-ts-map-center-latitude="40.702411"
                                     data-ts-map-center-longitude="-73.556842"
                                     data-ts-map-scroll-wheel="1"
                                     data-ts-map-controls="0"></div>
                                <div class="p-3 ts-text-color-light">
                                    <i class="fa fa-map-marker mr-2"></i>
                                    1496 Apple Lane
                                    San Jose, IL 62682
                                </div>
                            </div>

                        </section>

                        <!--CONTACT THE AGENT
                            =========================================================================================-->
                        <section class="contact-the-agent">
                            <h3>Contact the Agent</h3>

                            <div class="ts-box">

                                <!--Agent Image & Phone-->
                                <div class="ts-center__vertical mb-4">

                                    <!--Image-->
                                    <a href="agent-detail-01.html" class="ts-circle p-5 mr-4 ts-shadow__sm" data-bg-image="assets/img/img-person-05.jpg"></a>

                                    <!--Phone contact-->
                                    <figure class="mb-0">
                                        <h5 class="mb-0">Jane Brown</h5>
                                        <p class="mb-0">
                                            <i class="fa fa-phone-square ts-opacity__50 mr-2"></i>
                                            +1 602-862-1673
                                        </p>
                                    </figure>
                                </div>

                                <!--Agent contact form-->
                                <form id="form-agent" class="ts-form">

                                    <!--Name-->
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                    </div>

                                    <!--Email-->
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                    </div>

                                    <!--Message-->
                                    <div class="form-group">
                                        <textarea class="form-control" id="form-contact-message" rows="3" name="message" placeholder="Hi, I want to have more information about property #156461"></textarea>
                                    </div>

                                    <!--Submit button-->
                                    <div class="form-group clearfix mb-0">
                                        <button type="submit" class="btn btn-primary float-right" id="form-contact-submit">Send a Message
                                        </button>
                                    </div>

                                </form>

                            </div>
                        </section>

                        <!--ACTIONS
                        =============================================================================================-->
                        <section id="actions">

                            <div class="d-flex justify-content-between">

                                <a href="#" class="btn btn-light mr-2 w-100" data-toggle="tooltip" data-placement="top" title="Add to favorites">
                                    <i class="far fa-star"></i>
                                </a>

                                <a href="#" class="btn btn-light mr-2 w-100" data-toggle="tooltip" data-placement="top" title="Print">
                                    <i class="fa fa-print"></i>
                                </a>

                                <a href="#" class="btn btn-light mr-2 w-100" data-toggle="tooltip" data-placement="top" title="Add to compare">
                                    <i class="fa fa-exchange-alt"></i>
                                </a>

                                <a href="#" class="btn btn-light w-100" data-toggle="tooltip" data-placement="top" title="Share property">
                                    <i class="fa fa-share-alt"></i>
                                </a>

                            </div>

                        </section>

                    </div>
                    <!--end col-md-4-->

                    <!--RIGHT SIDE
                        =============================================================================================-->
                    <div class="col-md-7 col-lg-8">

                        <!--DESCRIPTION
                            =========================================================================================-->
                        <section id="description">

                            <h3>Description</h3>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dictum ac augue et suscipit.
                                Vivamus ac tellus ut massa bibendum aliquam vitae ac diam. Aenean in enim volutpat,
                                accumsan erat non, porta massa. Nulla ac porta orci. Quisque condimentum fermentum
                                isl, lacinia tempor erat venenatis non. Integer ut malesuada est, nec pulvinar magna.
                                Vestibulum tincidunt malesuada mi eget mattis. Phasellus quis purus porta, auctor dolor
                                sed, eleifend tortor. Vestibulum placerat tristique turpis, eu suscipit nulla elementum
                                porttitor. Duis eu varius libero.
                            </p>

                            <dl class="ts-description-list__line mb-0 ts-column-count-2">

                                <dt>ID:</dt>
                                <dd class="border-bottom pb-2">#156461</dd>

                                <dt>Category:</dt>
                                <dd class="border-bottom pb-2">Apartments</dd>

                                <dt>Status:</dt>
                                <dd class="border-bottom pb-2">Sale</dd>

                                <dt>Area:</dt>
                                <dd class="border-bottom pb-2">248<sup>2</sup></dd>

                                <dt>Rooms:</dt>
                                <dd class="border-bottom pb-2">6</dd>

                                <dt>Bathrooms:</dt>
                                <dd class="border-bottom pb-2">2</dd>

                                <dt>Bedrooms:</dt>
                                <dd class="border-bottom pb-2">2</dd>

                                <dt>Garages:</dt>
                                <dd class="border-bottom pb-2">1</dd>

                            </dl>

                        </section>

                        <!--FLOOR PLANS
                            =========================================================================================-->
                        <section id="floor-plans">

                            <h3>Floor Plans</h3>

                            <!--1st Floor-->
                            <a href="#collapse-floor-1" class="ts-box d-block mb-2 py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapse-floor-1">
                                1st Floor
                                <div class="collapse show" id="collapse-floor-1">
                                    <img src="assets/img/img-floor-plan-01.jpg" alt="" class="w-100">
                                </div>
                            </a>

                            <!--2nd Floor-->
                            <a href="#collapse-floor-2" class="ts-box d-block py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse-floor-2">
                                2nd Floor
                                <div class="collapse" id="collapse-floor-2">
                                    <img src="assets/img/img-floor-plan-02.jpg" alt="" class="w-100">
                                </div>
                            </a>

                        </section>

                        <!--FEATURES
                            =========================================================================================-->
                        <section id="features">

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

                        </section>

                        <!--VIDEO
                        =============================================================================================-->

                        <section id="video">

                            <h3>Video</h3>

                            <div class="embed-responsive embed-responsive-16by9 rounded ts-shadow__md">
                                <iframe src="https://player.vimeo.com/video/9799783?color=ffffff&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>

                        </section>

                        <!--AMENITIES
                            =========================================================================================-->
                        <section id="amenities">

                            <h3>Amenities</h3>

                            <ul class="ts-list-colored-bullets ts-text-color-light ts-column-count-3 ts-column-count-md-2">
                                <li>Air Conditioning</li>
                                <li>Swimming Pool</li>
                                <li>Central Heating</li>
                                <li>Laundry Room</li>
                                <li>Gym</li>
                                <li>Alarm</li>
                                <li>Window Covering</li>
                                <li>Internet</li>
                            </ul>

                        </section>

                    </div>
                    <!--end col-md-8-->

                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>

        <!--SIMILAR PROPERTIES
        =============================================================================================================-->
        <section id="similar-properties">
            <div class="container">
                <div class="row">

                    <div class="offset-lg-4 col-sm-12 col-lg-8">

                        <hr class="mb-5">

                        <h3>Similar Properties</h3>

                        <!--Item-->
                        <div class="card ts-item ts-item__list ts-card">

                            <!--Ribbon-->
                            <div class="ts-ribbon">
                                <i class="fa fa-thumbs-up"></i>
                            </div>

                            <!--Card Image-->
                            <a href="detail-01.html" class="card-img" data-bg-image="assets/img/img-item-thumb-01.jpg"></a>

                            <!--Card Body-->
                            <div class="card-body">

                                <figure class="ts-item__info">
                                    <h4>Big Luxury Apartment</h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        1350 Arbutus Drive
                                    </aside>
                                </figure>

                                <div class="ts-item__info-badge">
                                    $350,000
                                </div>

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

                        <!--Item-->
                        <div class="card ts-item ts-item__list ts-card">

                            <!--Ribbon-->
                            <div class="ts-ribbon-corner">
                                <span>Updated</span>
                            </div>

                            <!--Card Image-->
                            <a href="detail-01.html" class="card-img ts-item__image" data-bg-image="assets/img/img-item-thumb-02.jpg"></a>

                            <!--Card Body-->
                            <div class="card-body ts-item__body">

                                <figure class="ts-item__info">
                                    <h4>Cozy Design Studio</h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        4831 Worthington Drive
                                    </aside>
                                </figure>

                                <div class="ts-item__info-badge">$125,000</div>

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
                            <a href="detail-01.html" class="card-footer ts-item__footer">
                                <span class="ts-btn-arrow">Detail</span>
                            </a>

                        </div>

                        <!--Item-->
                        <div class="card ts-item ts-item__list ts-card">

                            <!--Card Image-->
                            <a href="detail-01.html" class="card-img ts-item__image" data-bg-image="assets/img/img-item-thumb-03.jpg"></a>

                            <!--Card Body-->
                            <div class="card-body ts-item__body">

                                <figure class="ts-item__info">
                                    <h4>Family Villa</h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        4127 Winding Way
                                    </aside>
                                </figure>

                                <div class="ts-item__info-badge">$45,900</div>

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
                            <a href="detail-01.html" class="card-footer ts-item__footer">
                                <span class="ts-btn-arrow">Detail</span>
                            </a>

                        </div>

                    </div>

                </div>
            </div>
        </section>

    </main>
    <!--end #ts-main-->

    <!--*********************************************************************************************************-->
    <!--************ FOOTER *************************************************************************************-->
    <!--*********************************************************************************************************-->

    <footer id="ts-footer">

        <!--MAIN FOOTER CONTENT
            =========================================================================================================-->
        <section id="ts-footer-main">
            <div class="container">
                <div class="row">

                    <!--Brand and description-->
                    <div class="col-md-6">
                        <a href="#" class="brand">
                            <img src="assets/img/logo.png" alt="">
                        </a>
                        <p class="mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec placerat tempor sapien.
                            In lobortis posuere tincidunt. Curabitur malesuada tempus ligula nec maximus. Nam tortor
                            arcu,
                            tincidunt quis molestie non, sagittis dignissim ligula. Fusce est ipsum, pharetra in felis
                            ac,
                            lobortis volutpat diam.
                        </p>
                        <a href="#" class="btn btn-outline-dark mb-4">Contact Us</a>
                    </div>

                    <!--Navigation-->
                    <div class="col-md-2">
                        <h4>Navigation</h4>
                        <nav class="nav flex-row flex-md-column mb-4">
                            <a href="#" class="nav-link">Home</a>
                            <a href="#" class="nav-link">Listing</a>
                            <a href="#" class="nav-link">About Us</a>
                            <a href="#" class="nav-link">Sign In</a>
                            <a href="#" class="nav-link">Register</a>
                            <a href="#" class="nav-link">Submit Property</a>
                        </nav>
                    </div>

                    <!--Contact Info-->
                    <div class="col-md-4">
                        <h4>Contact</h4>
                        <address class="ts-text-color-light">
                            2590 Rocky Road
                            <br>
                            Philadelphia, PA 19108
                            <br>
                            <strong>Email: </strong>
                            <a href="#" class="btn-link">office@example.com</a>
                            <br>
                            <strong>Phone:</strong>
                            +1 215-606-0391
                            <br>
                            <strong>Skype: </strong>
                            real.estate1
                        </address>
                    </div>

                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end ts-footer-main-->

        <!--SECONDARY FOOTER CONTENT
            =========================================================================================================-->
        <section id="ts-footer-secondary">
            <div class="container">

                <!--Copyright-->
                <div class="ts-copyright">(C) 2018 ThemeStarz, All rights reserved</div>

                <!--Social Icons-->
                <div class="ts-footer-nav">
                    <nav class="nav">
                        <a href="#" class="nav-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </nav>
                </div>
                <!--end ts-footer-nav-->

            </div>
            <!--end container-->
        </section>
        <!--end ts-footer-secondary-->

    </footer>
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
