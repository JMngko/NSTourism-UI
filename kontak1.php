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

    <title>MyHouse - Advanced Real Estate HTML Template by ThemeStarz</title>

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
                    <h1>Contact</h1>
                </div>
            </div>
        </section>

        <!--MAP
            =========================================================================================================-->
        <!-- MAP HAPUS -->

        <!--CONTACT INFO & FORM
            =========================================================================================================-->
        <section id="contact-form">
            <div class="container">
                <div class="row">

                    <!--CONTACTS (LEFT SIDE)
                        =============================================================================================-->
                    <div class="col-md-4">

                        <!--Title-->
                        <h3>Get In Touch</h3>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec placerat tempor sapien.
                            In lobortis posuere tincidunt.
                        </p>

                        <!--Phone-->
                        <figure class="ts-center__vertical">
                            <i class="fa fa-phone ts-opacity__50 mr-3 mb-0 h4 font-weight-bold"></i>
                            <dl class="mb-0">
                                <dt>Phone</dt>
                                <dd class="ts-opacity__50">+1 321-978-5552</dd>
                            </dl>
                        </figure>

                        <!--Email-->
                        <figure class="ts-center__vertical">
                            <i class="fa fa-envelope ts-opacity__50 mr-3 mb-0 h4 font-weight-bold"></i>
                            <dl class="mb-0">
                                <dt>Email</dt>
                                <dd class="ts-opacity__50">
                                    <a href="#">hello@example.com</a>
                                </dd>
                            </dl>
                        </figure>

                        <!--Skype-->
                        <figure class="ts-center__vertical">
                            <i class="fab fa-skype ts-opacity__50 mr-3 mb-0 h4 font-weight-bold"></i>
                            <dl class="mb-0">
                                <dt>Skype</dt>
                                <dd class="ts-opacity__50">
                                    <a href="#">real.estate.agency</a>
                                </dd>
                            </dl>
                        </figure>

                    </div>
                    <!--end col-md-4-->

                    <!--FORM (RIGHT SIDE)
                        =============================================================================================-->
                    <div class="col-md-8">

                            <!--Row-->
                            <div class="row">

                                <!--Name-->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="form-contact-name">Name *</label>
                                        <input type="text" class="form-control" id="form-contact-name" name="name" placeholder="Your Name" required>
                                    </div>
                                </div>

                                <!--Email-->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="form-contact-email">Email *</label>
                                        <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="Your Email" required>
                                    </div>
                                </div>

                            </div>
                            <!--end row -->

                            <!--Subject-->
                            <div class="form-group">
                                <label for="form-contact-email">Subject*</label>
                                <input type="text" class="form-control" id="form-contact-subject" name="subject" placeholder="Subject" required>
                            </div>

                            <!--Message-->
                            <div class="form-group">
                                <label for="form-contact-message">Message *</label>
                                <textarea class="form-control" id="form-contact-message" rows="5" name="message" placeholder="Your Message" required></textarea>
                            </div>

                            <!--Submit button-->
                            <div class="form-group clearfix">
                                <button type="submit" class="btn btn-primary float-right" id="form-contact-submit">Send
                                    a Message
                                </button>
                            </div>

                            <div class="form-contact-status"></div>

                        </form>
                        <!--end form-contact -->
                    </div>
                    <!--end col-md-8-->

                </div>
                <!--end row-->
            </div>
            <!--end container-->
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
<script src="assets/js/leaflet.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/map-leaflet.js"></script>

</body>
</html>
