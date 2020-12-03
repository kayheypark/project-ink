<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>잉크</title>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/Views/Layout/Style.php'; ?>
</head>

<body class="bg-green">
    <?php include $_SERVER['DOCUMENT_ROOT'].'/Views/Layout/Header.php'; ?>
    <main class="py-3 py-md-5 Regist Step1">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-8">
                                <em class="cate">갤러리</em>
                            </div>
                            <div class="col-4 d-flex justify-content-end align-items-center">
                                <a href="/" class="">홈</a>
                                &nbsp;&gt;&nbsp;
                                <a href="/Views/Gallery/" class="">갤러리</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container pt-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <!-- Swiper -->
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="crop crop-500">
                                                <img src="/Content/img/gallery/tatto1.jpg" class="w-100" alt="타투">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="crop crop-500">
                                                <img src="/Content/img/gallery/tatto2.jpg" class="w-100" alt="타투">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="crop crop-500">
                                                <img src="/Content/img/gallery/tatto3.jpg" class="w-100" alt="타투">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="crop crop-500">
                                                <img src="/Content/img/gallery/tatto4.jpg" class="w-100" alt="타투">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="crop crop-500">
                                                <img src="/Content/img/gallery/tatto5.jpg" class="w-100" alt="타투">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="crop crop-500">
                                                <img src="/Content/img/gallery/tatto1.jpg" class="w-100" alt="타투">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="crop crop-500">
                                                <img src="/Content/img/gallery/tatto2.jpg" class="w-100" alt="타투">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="crop crop-500">
                                                <img src="/Content/img/gallery/tatto3.jpg" class="w-100" alt="타투">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="crop crop-500">
                                                <img src="/Content/img/gallery/tatto4.jpg" class="w-100" alt="타투">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="crop crop-500">
                                                <img src="/Content/img/gallery/tatto5.jpg" class="w-100" alt="타투">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add Scrollbar -->
                                    <div class="swiper-scrollbar"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/Views/Layout/Footer.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/Views/Layout/Script.php'; ?>
    <script src="/Script/Pages/Gallery.js"></script>
    <script>
        fnPageInit();
    </script>
</body>

</html>