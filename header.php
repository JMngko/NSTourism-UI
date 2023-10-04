<?php include "admin/admin/koneksi.php"; ?>
<header id="ts-header" class="fixed-top">

        <!-- SECONDARY NAVIGATION (DELETED)
        =============================================================================================================-->

        <!--PRIMARY NAVIGATION
        =============================================================================================================-->
        <nav id="ts-primary-navigation" class="navbar navbar-expand-md navbar-light">
            <div class="container">

                <!--Brand Logo-->
                <a class="navbar-brand" href="index.php">
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
                        <li class="nav-item">

                            <!--Main level link-->
                            <a class="nav-link active" href="index.php">
                                Home
                                <span class="sr-only">(current)</span>
                            </a>

                            <!-- List (1st level) -->
                            <!-- END HOME (HAPUS) -->
                            <!--end List (1st level) -->

                        </li>
                        <!--end HOME nav-item-->

                        <!--LISTING (Main level)
                        =============================================================================================-->
                        <li class="nav-item ts-has-child">

                            <!--Main level link-->
                            <a class="nav-link" href="#">Kategori</a>

                            <!-- List (1st level) -->
                            <ul class="ts-child">

                                <!-- CATEGORY ICONS (1st level)
                                =====================================================================================-->
                                <li class="nav-item">

                                    <a href="kategori_daerah.php" class="nav-link">Daerah Wisata</a>

                                </li>

                                <li class="nav-item">

                                    <a href="kategori_wisata.php" class="nav-link">Tempat Wisata</a>

                                </li>

                                <li class="nav-item">

                                    <a href="wisata_terpopuler.php" class="nav-link">Terpopuler</a>

                                </li>
                                <!--end CATEGORY ICONS (1st level)-->

                                <!-- GRID (1st level)
                                =====================================================================================-->

                                <!-- END GRID (HAPUS) -->
                                <!--end PROPERTY (1st level)-->

                            </ul>
                            <!--end List (1st level) -->

                        </li>
                        <!--end LISTING nav-item-->

                        <!--PAGES (Main level)
                        =============================================================================================-->
                        <li class="nav-item">

                            <!--Main level link-->
                            <a class="nav-link" href="rekomendasi.php">Rekomendasi</a>

                            <!-- List (1st level) -->
                            
                            <!-- END PAGES (HAPUS) -->
                            <!--end List (1st level) -->

                        </li>
                        <!--end PAGES nav-item-->

                        <!--ABOUT US (Main level)
                        =============================================================================================-->
                        <li class="nav-item">
                            <a class="nav-link" href="maps_wisata_all.php">Map Sulut</a>
                        </li>
                        <!--end ABOUT US nav-item-->

                        <!--CONTACT (Main level)
                        =============================================================================================-->
                        <li class="nav-item">
                            <a class="nav-link mr-2" href=kontak.php>Kontak</a>
                        </li>
                        <!--end CONTACT nav-item-->

                        <!--SEARCH (Main level)
                        =============================================================================================-->
                            <!-- <li>
                                <form method="GET" class="form" action="wisata_cari.php">
                                  <div class="search">
                                    <input type="text" placeholder="Cari Tempat Wisata" name= "cari" class="form-control search-field" required/><i class="flaticon-suntour-search search icon"></i>
                                  </div>
                                </form>
                            </li> -->
                        <!--end SEARCH nav-item-->

                    </ul>
                    <!--end Left navigation main level-->

                    <!--RIGHT NAVIGATION MAIN LEVEL
                    =================================================================================================-->

                    <!-- LOGIN REGISTER (HAPUS) -->
                    <!--end Right navigation-->

                </div>
                <!--end navbar-collapse-->
            </div>
            <!--end container-->
        </nav>
        <!--end #ts-primary-navigation.navbar-->

    </header>