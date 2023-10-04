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
    <?php 
      include "header.php";

      if(isset($_GET['find'])){

          $daerah = $_GET['daerah'];
          $kategori = $_GET['kategori'];

      }
   ?>
    <!--end Header-->

    <!--*********************************************************************************************************-->
    <!-- MAIN ***************************************************************************************************-->
    <!--*********************************************************************************************************-->

    <main id="ts-main">

        <!--BREADCRUMB
            =========================================================================================================-->

        <!--SEARCH FORM
            =========================================================================================================-->
        <section id="search-form">
            <div class="container">

                <form id="form-search" class="ts-form">

                    <!--TYPE/CATEGORY SELECT WITH ICONS
                        =============================================================================================-->

                    <!--BOX WRAPPER
                        =============================================================================================-->
                    <section class="ts-box p-0">

                        <!--PRIMARY SEARCH INPUTS
                            =========================================================================================-->
                        <div class="form-row px-4 py-3">

                            <!--Other inputs-->
                            <div class="col-md-12">
                                <div class="form-row">
                                    
                                    <!--Daerah-->
                                    <div class="col-md-6">
                                        <select class="custom-select mb-6" id="daerah" name="daerah">
                                            <option form disabled selected value>Pilih Daerah</option>
                                            <option value = "12">Bolaang Mongondouw</option>
                                            <option value = "15">Bolaang Mongondouw Selatan</option>
                                            <option value = "14">Bolaang Mongondouw Timur</option>
                                            <option value = "13">Bolaang Mongondouw Utara</option>
                                            <option value = "11">Kepulauan Sangihe</option>
                                            <option value = "9">Kepulauan Sitaro</option>
                                            <option value = "10">Kepulauan Talaud</option>
                                            <option value = "5">Minahasa</option>
                                            <option value = "7">Minahasa Selatan</option>
                                            <option value = "8">Minahasa Tenggara</option>
                                            <option value = "6">Minahasa Utara</option>
                                            <option value = "3">Bitung</option>
                                            <option value = "4">Kotamobagu</option>
                                            <option value = "1">Manado</option>
                                            <option value = "2">Tomohon</option>
                                        </select>
                                    </div><br>

                                    <!--Kategori-->
                                    <div class="col-md-6">
                                        <select class="custom-select mb-6" id="kategori" name="kategori">
                                           <option form disabled selected value>Pilih Kategori</option>
                                            <option value = "Gunung dan Bukit">Gunung dan Bukit</option>
                                            <option value = "Pantai dan Laut">Pantai dan Laut</option>
                                            <option value = "Danau">Danau</option>
                                            <option value = "Tempat Bersejarah">Tempat Bersejarah</option>
                                            <option value = "Atraksi">Atraksi</option>
                                            <option value = "Kuliner">Kuliner</option>
                                        </select>
                                    </div>

                                    <!--Kategori-->
                                    <div class="col-md-6">
                                        <select class="custom-select mb-6" id="biaya" name="biaya">
                                           <option form disabled selected value>Pilih Biaya</option>
                                            <?php
                                                $sqlzz = mysqli_query($con, "SELECT * FROM biaya");
                                                while($datazz = mysqli_fetch_array($sqlzz)){
                                            ?>
                                            <?php if($datazz['biaya_akhir']=='999999999'){ ?>
                                                <option value ="<?php echo $datazz['id_biaya']; ?>">> Rp.<?php echo $datazz['biaya_awal']; ?></option>
                                            <?php }else{ ?>
                                                <option value ="<?php echo $datazz['id_biaya']; ?>">Rp.<?php echo $datazz['biaya_awal']; ?> - Rp.<?php echo $datazz['biaya_akhir']; ?></option>
                                            <?php } ?>
                                            <?php 
                                            } ?>
                                        </select>
                                    </div><br>

                                    <!--Submit button-->
                                    <div class="col-sm-3">
                                        <div class="form-group my-2">
                                            <button type="submit" class="btn btn-primary w-100" id="search-btn">Search
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <!--end row-->
                            </div>
                            <!--end col-md-8-->

                        </div>
                        <!--end form-row-->

                        <!--MORE OPTIONS - ADVANCED SEARCH
                            =========================================================================================-->

                    </section>

                </form>
                <!--end #form-search-->

            </div>
            <!--end container-->
        </section>
        <!--end #search-form-->

        <!--DISPLAY CONTROL
            =========================================================================================================-->

        <!--ITEMS LISTING
            =========================================================================================================-->
        <section id="items-grid">
            <div class="container">

                <!--Row-->
                <div class="row"> 

                    <!--Item-->
                    <?php 
                          $no=0;
                          if(isset($_GET['daerah'])){
                              
                              $sql = mysqli_query($con, "SELECT * FROM wisata, hasil WHERE id_alternatif = id_wisata AND id_daerah = '$_GET[daerah]' AND kategori = '$_GET[kategori]' AND id_biaya = '$_GET[biaya]' ORDER BY nilai DESC");
                              
                          }else{
                            
                              $sql = mysqli_query($con, "SELECT * FROM wisata, hasil WHERE id_alternatif = id_wisata ORDER BY nilai DESC");
                          }
                          while($data = mysqli_fetch_array($sql)){
                          $no++;
                    ?>

                    <div class="col-sm-6 col-lg-3">
                        <div class="card ts-item ts-card">

                            <!--Ribbon-->
                            <?php if($no==1){ ?>
                            <div class="ts-ribbon">
                                <i class="fa fa-thumbs-up"></i>
                            </div>
                            <?php } ?>
                            <!--Card Image-->
                            <a href="#" class="card-img" data-bg-image="admin/admin/<?php echo $data['gambar']; ?>">
                                <figure class="ts-item__info">
                                    <h4><?php echo $data['nama_wisata']; ?></h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        <?php echo $data['alamat']; ?>
                                    </aside>
                                </figure>
                            </a>

                            <!--Card Body-->
                            <div class="card-body">
                                <div class="ts-description-lists">
                                    <dl>
                                        <dt>Kategori</dt>
                                        <dd><?php echo $data['kategori']; ?></dd>
                                    </dl>

                                    <dl>
                                        <dt>Biaya Masuk</dt>
                                        <dd><?php echo $data['biaya2']; ?></dd>
                                    </dl>
                                </div>
                            </div>

                            <!--Card Footer-->
                            <a href="wisata_details.php?id=<?php echo $data['id_wisata']; ?>" class="card-footer">
                                <span class="ts-btn-arrow">Detail</span>
                            </a>

                            <a href="maps_wisata.php?id=<?php echo $data['id_daerah']; ?>" class="card-footer">
                                <span class="ts-btn-arrow">Maps</span>
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

