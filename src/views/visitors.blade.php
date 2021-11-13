<!DOCTYPE html>
<html lang="tr" xmlns="http://www.w3.org/1999/html">
    <head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Ziyaretçi Bilgileri</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Ziyaretçi Bilgileri">
    <meta name="author" content="www.mezbilisim.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('visitor-info/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('visitor-info/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('visitor-info/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('visitor-info/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('visitor-info/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('visitor-info/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('visitor-info/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('visitor-info/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('visitor-info/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('visitor-info/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('visitor-info/css/theme-shop.css') }}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('visitor-info/css/skins/default.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('visitor-info/css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('visitor-info/vendor/modernizr/modernizr.min.js') }}"></script>

</head>
    <body class="bg-color-dark-scale-1">
        <div class="body">
            <div role="main" class="main">
                <section class="section section-concept section-dark section-no-border m-0">
                    <div class="container d-flex flex-column align-items-center">
                        <div class="row">
                            <h1>Ziyaretçi Bilgilerini İndirme Formu</h1>
                        </div>
                        <div class="row pb-lg-0 pb-xl-0">
                            <div class="card bg-color-light-scale-1">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <form class="contact-form form-style-2" action="php/contact-form.php" method="POST">
                                                <div class="row">
                                                    <div class="form-group col-lg-12">
                                                        <label class="form-label mb-1 text-2">Access Key</label>
                                                        <input type="text" value="" class="form-control text-3 h-auto" name="access-key" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-6">
                                                        <label class="form-label mb-1 text-2">Başlangıç Tarihi</label>
                                                        <input type="date" value="" class="form-control text-3 h-auto" name="start-date" required>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label class="form-label mb-1 text-2">Bitiş Tarihi</label>
                                                        <input type="date" value="" class="form-control text-3 h-auto" name="end-date" required>
                                                    </div>
                                                    <div class="form-group col">
                                                        <a href="javascript:void(0)" class="text-decoration-underline mr-2">Bu Ay</a>
                                                        <a href="javascript:void(0)" class="text-decoration-underline mr-2">Son 30 Gün</a>
                                                        <a href="javascript:void(0)" class="text-decoration-underline mr-2">Son 60 Gün</a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col">
                                                        <label class="form-label mb-1 text-2 w-100">Veri Tipi</label>
                                                        <div class="form-check form-check-inline">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input"
                                                                       type="radio"
                                                                       name="visitorType"
                                                                       value="all"
                                                                       required> Tüm Ziyaretçiler
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input"
                                                                       type="radio"
                                                                       name="visitorType"
                                                                       value="onlyCopied"
                                                                       required> Sadece Kopya Olanlar
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col">
                                                        <label class="form-label mb-1 text-2 w-100">Dosya Formatı</label>
                                                        <div class="form-check form-check-inline">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input"
                                                                       type="radio"
                                                                       name="format"
                                                                       value="xlsx"
                                                                       required> XLSX
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input"
                                                                       type="radio"
                                                                       name="format"
                                                                       value="csv"
                                                                       required> CSV
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input"
                                                                       type="radio"
                                                                       name="format"
                                                                       value="pdf"
                                                                       required> PDF
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="form-group col">
                                                        <input type="submit" value="İndir" class="btn btn-primary">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-4">
                            <a href="javascript:void(0)" class="btn btn-primary">Anasayfaya Dön</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- Vendor -->
        <script src="{{ asset('visitor-info/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('visitor-info/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('visitor-info/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('visitor-info/vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
        <script src="{{ asset('visitor-info/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('visitor-info/vendor/jquery.validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('visitor-info/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('visitor-info/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
        <script src="{{ asset('visitor-info/vendor/lazysizes/lazysizes.min.js') }}"></script>
        <script src="{{ asset('visitor-info/vendor/isotope/jquery.isotope.min.js') }}"></script>
        <script src="{{ asset('visitor-info/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('visitor-info/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('visitor-info/vendor/vide/jquery.vide.min.js') }}"></script>
        <script src="{{ asset('visitor-info/vendor/vivus/vivus.min.js') }}"></script>
        <!-- Theme Base, Components and Settings -->
        <script src="{{ asset('visitor-info/js/theme.js') }}"></script>
        <!-- Current Page Vendor and Views -->
        <script src="{{ asset('visitor-info/js/examples/examples.forms.js') }}"></script>
        <!-- Current Page Vendor and Views -->
        <script src="{{ asset('visitor-info/js/views/view.contact.js') }}"></script>
        <!-- Theme Custom -->
        <script src="{{ asset('visitor-info/js/custom.js') }}"></script>
        <!-- Theme Initialization Files -->
        <script src="{{ asset('visitor-info/js/theme.init.js') }}"></script>
    </body>
</html>
