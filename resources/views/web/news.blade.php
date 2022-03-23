<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mobile Store - Công nghệ trong tay bạn</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- owl carousel libraries -->
    <link rel="stylesheet" href="js/owlcarousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="js/owlcarousel/owl.theme.default.min.css" />
    <script src="js/Jquery/Jquery.min.js"></script>
    <script src="js/owlcarousel/owl.carousel.min.js"></script>


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style_app.css" />
    <link rel="stylesheet" href="css/login">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/topnav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tintuc.css">

    <!-- js -->
    <script src="data/products.js"></script>
    <script src="js/dungchung.js"></script>
    <script src="js/classes.js"></script>
    <script src="js/lienhe.js"></script>

</head>

<body>
    <script>
        addTopNav();
    </script>
    <!-- header section starts  -->
    <header>
        <div class="header-1">
            <a href="home" class="logo">
                <i class="fas fa-store"></i>
                <span>
                    <p class="logo-style">mobile Store<i class="fab fa-digital-ocean fa-spin"
                            style="margin-left: 10px"></i>
                    </p>
            </a>

            <div class="form-container">
                <form action="">
                    <input type="search" placeholder="search products" id="search" />
                    <label for="search" class="fas fa-search"></label>
                </form>
            </div>
        </div>

        <div class="header-2">
            <div id="menu" class="fas fa-bars"></div>

            <nav class="navbar">
                <ul>
                    <li><a class="active" href="home">Home</a></li>
                    <li><a href="home#arrival">arrival</a></li>
                    <li><a href="home#featured">featured</a></li>
                    <li><a href="home#gallery">gallery</a></li>
                    <li><a href="home#deal">deal</a></li>
                </ul>
            </nav>

            <div class="icons">
                <a class="fas fa-shopping-cart"></a>
                <a class="fas fa-user" href="login"></a>
            </div>
        </div>

    </header>
    <section>
        <div class="body-tintuc">
            <div class="tintuc-info">
                <a href="http://doanhnghiepvn.vn/cong-nghe/danh-gia-smartphone-chip-s660-ram-8-gb-gia-6-99-trieu-tai-viet-nam/2018112603315443"
                    target="_blank">
                    <img src="images/tintuc/tintuc1.png">
                    <h2>Đánh giá smartphone chip S660, RAM 8 GB, giá 6,99 triệu tại Việt Nam</h2>
                </a>
                <br />
                <h5>Doanh ngiệp &emsp;3 giờ</h5>
            </div>
            <div class="tintuc-info">
                <a href="https://thanhnien.vn/cong-nghe/kham-pha-smartphone-man-hinh-gap-duoc-dau-tien-cua-samsung-1027111.html"
                    target="_blank">
                    <img src="images/tintuc/tintuc2.png">
                    <h2>Khám phá smartphone màn hình gập được đầu tiên của Samsung</h2>
                </a>
                <br />
                <h5>Thanh niên &emsp; 6 giờ</h5>
            </div>
            <div class="tintuc-info">
                <a href="https://vov.vn/cong-nghe/doanh-so-iphone-xs-va-iphone-xr-tham-hai-apple-san-xuat-lai-iphone-x-843717.vov"
                    target="_blank">
                    <img src="images/tintuc/tintuc3.png">
                    <h2>Doanh số iPhone XS và iPhone XR thảm hại, Apple sản xuất lại iPhone X</h2>
                </a>
                <br />
                <h5>VOV &emsp; 6 giờ</h5>
            </div>
            <div class="tintuc-info">
                <a href="http://vietq.vn/chiec-dien-thoai-thong-minh-nay-cua-lg-se-co-toi-16-camera-d151674.html"
                    target="_blank">
                    <img src="images/tintuc/tintuc4.png">
                    <h2>Chiếc điện thoại thông minh này của LG sẽ có tới 16 Camera</h2>
                </a>
                <br />
                <h5>VietQ &emsp; 13 giờ</h5>
            </div>
            <div class="tintuc-info" style="border-bottom: 0;">
                <a href="https://news.zing.vn/nhung-tieu-chi-ban-khong-nen-bo-qua-khi-mua-smartphone-2018-post894509.html"
                    target="_blank">
                    <img src="images/tintuc/tintuc5.png" height="148px" width="224px;">
                    <h2>Những tiêu chí bạn không nên bỏ qua khi mua smartphone 2018</h2>
                </a>
                <br />
                <h5>Zing &emsp; 9 giờ</h5>
            </div>

        </div>
    </section>

    <section class="newsletter">
        <h1>newsletter</h1>
        <p>get in touch for latest discounts and updates</p>
        <form action="">
            <input type="email" placeholder="enter your email" />
            <input type="submit" class="btn" />
        </form>
    </section>
    <!-- newsletter section ends -->
    <!-- footer section starts  -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>our locations</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> africa </a>
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> arrivals </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> blogs </a>
            </div>
            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> account info </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> ordered items </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> privacy policy </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> payment method </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> our serivces </a>
            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i>nguyenducthao.cntt@gmail.com </a>
                <div class="map">
                    <div style="width: 300px"><iframe width="100%" height="300px" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=100%25&amp;height=200&amp;hl=en&amp;q=Tr%C6%B0%E1%BB%9Dng%20%C4%90%E1%BA%A1i%20H%E1%BB%8Dc%20Duy%20T%C3%A2n,%20Nguy%E1%BB%85n%20V%C4%83n%20Linh,%20Thanh%20Kh%C3%AA,%20%C4%90%C3%A0%20N%E1%BA%B5ng,%20Vi%E1%BB%87t%20Nam+(My%20Business%20Name)&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                href="https://www.gps.ie/marine-gps/">marine gps</a></iframe></div>
                </div>
            </div>
        </div>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>
        <div class="credit"> created by <span>THAO</span> | all rights reserved! </div>
    </section>

    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- owl carousel js file cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>

</html>
