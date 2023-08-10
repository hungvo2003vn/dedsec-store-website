<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font API -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- My css -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Home Page</title>
</head>
<body class="bg-light">

    <!-- header and Navigation bar -->
    <div id="header-navigation-container">
        <?php include './pages/component-html/header-navbar-index.php';?>
    </div>
    <!-- Ending of Navigation bar  -->

    <!-- Slider -->
    <div id="mySlider" class="carousel slide" data-bs-ride="carousel">

        <!-- Slide inner -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="d-md-flex">

                    <img class="img-fluid col-md-8" height="100%"  src="./images/home-img/home-slide-img1.png" alt="">
    
                    <div class="d-flex align-items-center p-5 col-md-4" style="background: rgba(0, 0, 0, 0.67);">
                        <div>
                            <div class="my-font-basic font-type-1">1 Multi-tool device for geeks</div>
                            <div class="my-font-basic font-type-2">DEDSEC Zero</div>
                            <div class="my-font-basic font-type-3"><div class="my-font-basic font-type-4 d-inline-block">DEDSEC</div> Zero is a portable multi-tool for pentesters and 
                                geeks in a toy-like body. It loves hacking digital stuff, 
                                such as radio protocols, access control systems, hardware and more. 
                                It's fully open-source and customizable, so you can extend it in whatever way you like.
                            </div>
    
                            <a href="#">
                                <div class="my-href">Buy now ></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="d-md-flex">

                    <img class="img-fluid col-md-8" height="100%"  src="./images/home-img/home-slide-img1.png" alt="">
    
                    <div class="d-flex align-items-center p-5 col-md-4" style="background: rgba(0, 0, 0, 0.67);">
                        <div>
                            <div class="my-font-basic font-type-1">2 Multi-tool device for geeks</div>
                            <div class="my-font-basic font-type-2">DEDSEC Zero</div>
                            <div class="my-font-basic font-type-3"><div class="my-font-basic font-type-4 d-inline-block">DEDSEC</div> Zero is a portable multi-tool for pentesters and 
                                geeks in a toy-like body. It loves hacking digital stuff, 
                                such as radio protocols, access control systems, hardware and more. 
                                It's fully open-source and customizable, so you can extend it in whatever way you like.
                            </div>
    
                            <a href="#">
                                <div class="my-href">Buy now ></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="d-md-flex">

                    <img class="img-fluid col-md-8" height="100%"  src="./images/home-img/home-slide-img1.png" alt="">
    
                    <div class="d-flex align-items-center p-5 col-md-4" style="background: rgba(0, 0, 0, 0.67);">
                        <div>
                            <div class="my-font-basic font-type-1">3 Multi-tool device for geeks</div>
                            <div class="my-font-basic font-type-2">DEDSEC Zero</div>
                            <div class="my-font-basic font-type-3"><div class="my-font-basic font-type-4 d-inline-block">DEDSEC</div> Zero is a portable multi-tool for pentesters and 
                                geeks in a toy-like body. It loves hacking digital stuff, 
                                such as radio protocols, access control systems, hardware and more. 
                                It's fully open-source and customizable, so you can extend it in whatever way you like.
                            </div>
    
                            <a href="#">
                                <div class="my-href">Buy now ></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="carousel-item">
                <div class="d-md-flex">

                    <img class="img-fluid col-md-8" height="100%"  src="./images/home-img/home-slide-img1.png" alt="">
    
                    <div class="d-flex align-items-center p-5 col-md-4" style="background: rgba(0, 0, 0, 0.67);">
                        <div>
                            <div class="my-font-basic font-type-1">4 Multi-tool device for geeks</div>
                            <div class="my-font-basic font-type-2">DEDSEC Zero</div>
                            <div class="my-font-basic font-type-3"><div class="my-font-basic font-type-4 d-inline-block">DEDSEC</div> Zero is a portable multi-tool for pentesters and 
                                geeks in a toy-like body. It loves hacking digital stuff, 
                                such as radio protocols, access control systems, hardware and more. 
                                It's fully open-source and customizable, so you can extend it in whatever way you like.
                            </div>
    
                            <a href="#">
                                <div class="my-href">Buy now ></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of slide -->
        </div>
        
    </div>
    

    <!-- Page navigation -->
    <div class="d-flex pg-nav align-content-center justify-content-center">
        <div class="pg-nav-main">
            <!-- Arrow left -->
            <button class="btn btn-light m-0" data-bs-target="#mySlider" data-bs-slide="prev">
                <div class="pg-nav-arrow-l"></div>
            </button>
            
            <!-- Box -->
            <div class="pg-nav-box-container">
                <div class="pg-nav-box bg-black" data-bs-target="#mySlider" data-bs-slide-to="0"></div>
                <div class="pg-nav-box" data-bs-target="#mySlider" data-bs-slide-to="1"></div>
                <div class="pg-nav-box" data-bs-target="#mySlider" data-bs-slide-to="2"></div>
                <div class="pg-nav-box" data-bs-target="#mySlider" data-bs-slide-to="3"></div>
            </div>

            <!-- Arrow right -->
            <button class="btn btn-light m-0" data-bs-target="#mySlider" data-bs-slide="next">
                <div class="pg-nav-arrow-r"></div>
            </button>

        </div>
    </div>

    <!-- Next Content 1-->
    <div class="d-md-flex bg-black">
        <div class="d-flex justify-content-center align-items-center p-5 col-md-6">
            <div>
                <div class="mb-3">
                    <img class="img-fluid" src="./images/home-img/home-rasperi.png" alt="">
                </div>
                <div class="my-font-basic font-type-3 mb-3">
                    The classic compact camera for Raspberry Pi with a 12MP sensor, 
                    autofocus and your choice of standard or wide fields of view. 
                    Available from $25.
                </div>

                <a href="#">
                    <div class="my-href">Buy now ></div>
                </a>
            </div>
        </div>

        <div class="d-flex justify-content-center align-content-center p-5 col-md-6">
            <img src="./images/home-img/home-camera.png" alt="">
        </div>
    </div>

    <!-- Next Content 2 -->
    <div class="d-lg-flex" style="background: #2E2E2E; border-bottom: 1px solid #000;">
        
        <div class="d-flex justify-content-center col-lg-6 bg-dark">
            <img class="img-fluid" src="./images/home-img/home-laptop.png" alt="">
        </div>

        <div class="d-flex justify-content-center align-items-center p-5 col-lg-6">
            <div>
                <div class="my-href-type-2 mb-3">DEDSEC Laptop 13</div>
                <div class="my-font-basic font-type-3 mb-3">
                    The ultimate laptop for repairability with fully 
                    upgradable internals and customizable ports, now 
                    available with DMA Ryzen™ 7040 Series and 13th Gen 
                    ENTEL® Core™
                </div>

                <a href="#">
                    <div class="my-href">Choose yours now ></div>
                </a>
                
            </div>
        </div>
    </div>

    <!-- Next Content 3 -->
    <div class="d-lg-flex" style="background: #B8B8B8;">

        <div class="content-3-layout px-5 col-lg-6 content-3-max-height">
            <div class="my-font-type-3">
                Shop our latest products today 
                and get 10% off on selected products
            </div>

            <a href="#">
                <div class="my-href-type-3">Shop now ></div>
            </a>
            
        </div>

        <div class="content-3-layout px-5 col-lg-6 content-3-max-height">
            <div class="my-font-type-3">
                Need help? Visit our support 
                page or ask the community 
            </div>

            <a href="#">
                <div class="my-href-type-3">Support ></div>
            </a>
            
        </div>

    </div>

    <!-- Latest news -->
    <div class="px-5 py-5" style="background: #DDD;">

        <a href="./pages/news.php">
            <div class="latest-news-content mb-5">Latest news ></div>
        </a>
        
        <div class="d-flex justify-content-between row row-cols-lg-3 row-cols-md-2 row-cols-sm-1">

            <!-- Card 1 -->
            <div class="card pe-5 mb-5 border-0" style="background: #DDD;">
                <img src="./images/home-img/home-products-img.jfif" class="card-img-top" alt="...">
                <div class="card-body p-0">
                    <div class="card-head my-2">Phone news</div>
                    <div class="card-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Nam id rhoncus augue, id bibendum magna. Nulla urna nibh, 
                        ornare sit amet lacinia vel, accumsan non diam.
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card pe-5 mb-5 border-0" style="background: #DDD;">
                <img src="./images/home-img/home-products-img.jfif" class="card-img-top" alt="...">
                <div class="card-body p-0">
                    <div class="card-head my-2">Phone news</div>
                    <div class="card-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Nam id rhoncus augue, id bibendum magna. Nulla urna nibh, 
                        ornare sit amet lacinia vel, accumsan non diam.
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card pe-5 mb-5 border-0" style="background: #DDD;">
                <img src="./images/home-img/home-products-img.jfif" class="card-img-top" alt="...">
                <div class="card-body p-0">
                    <div class="card-head my-2">Phone news</div>
                    <div class="card-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Nam id rhoncus augue, id bibendum magna. Nulla urna nibh, 
                        ornare sit amet lacinia vel, accumsan non diam.
                    </div>
                </div>
            </div>
            
        </div>
    </div>




    <!-- Footer -->
    <div id="footer-container">
        <?php include './pages/component-html/footer.php';?>
    </div>
    <!-- Ending Footer -->

    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Script for fixed navbar -->
    <script src="./scripts/handle_view/fixed_navbar.js"></script>
    <!-- Handle menu bar -->
    <script src="./scripts/handle_view/handle_menu.js"></script>
    <!-- Adding script for slider change -->
    <script src="./scripts/handle_view/for_slider.js"></script>
    <!-- Handle sign in-up -->
    <script src="./scripts/handle_sign/handle_sign.js"></script>

</body>
</html>