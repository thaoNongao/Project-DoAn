<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mobile Store - Công nghệ trong tay bạn</title>

    <!-- owl carousel css file cdn link  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        crossorigin="anonymous" />

    <!-- owl carousel libraries -->
    <link rel="stylesheet" href="js/owlcarousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="js/owlcarousel/owl.theme.default.min.css" />
    <script src="js/Jquery/Jquery.min.js"></script>
    <script src="js/owlcarousel/owl.carousel.min.js"></script>


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style_app.css" />
    <link rel="stylesheet" href="css/taikhoan.css" />
    <link rel="stylesheet" href="css/login">
    <link rel="stylesheet" href="css/nguoidung">
    <link rel="stylesheet" href="css/style_login">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/topnav.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- js -->
    <script src="data/products.js"></script>
    <script src="js/classes.js"></script>
    <script src="js/dungchung.js"></script>
</head>

<body>
    <div class="container-main">
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
                        <li><a class="active" href="#home">Home</a></li>
                        <li><a href="#arrival">arrival</a></li>
                        <li><a href="#featured">featured</a></li>
                        <li><a href="#gallery">gallery</a></li>
                        <li><a href="#deal">deal</a></li>
                    </ul>
                </nav>
                <div class="icons">
                    <a class="fas fa-shopping-cart" href="card"></a>
                    <a class="fas fa-user" href="login"></a>
                </div>
            </div>
        </header>
        <!-- header section ends -->
        <!-- home section starts  -->
        <section class="home" id="home">
            <div class="home-slider owl-carousel">
                <div class="item">
                    <img src="images/home_img1.jpg" alt="" />
                    <div class="content">
                        <h3>heavy discounts</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed,
                            neque.
                        </p>
                        <a href="#"><button class="btn">discover</button></a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/home_img2.jpg" alt="" />
                    <div class="content">
                        <h3>latest gadgets</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed,
                            neque.
                        </p>
                        <a href="#"><button class="btn">discover</button></a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/home_img3.jpg" alt="" />
                    <div class="content">
                        <h3>trending shoes</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed,
                            neque.
                        </p>
                        <a href="#"><button class="btn">discover</button></a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/home_img4.jpg" alt="" />
                    <div class="content">
                        <h3>fresh groceries</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed,
                            neque.
                        </p>
                        <a href="#"><button class="btn">discover</button></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- home section ends -->
        <!-- arrival section starts  -->
        <section class="arrival" id="arrival">
            <h1 class="heading"><span>new arrivals</span></h1>
            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <img src="images/arr_img1.jpg" alt="" />
                    </div>
                    <div class="info">
                        <h3>smart tv</h3>
                        <div class="subInfo">
                            <strong class="price"> $1000/- <span>$1500/-</span> </strong>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            </div>
                        </div>
                    </div>s
                    <div class="overlay">
                        <a href="#" style="--i: 1" class="fas fa-heart">
                            <span class="numb"></span>
                        </a>
                        <a href="#" style="--i: 2" class="fas fa-shopping-cart"></a>
                        <a href="#" style="--i: 3" class="fas fa-search"></a>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="images/arr_img2.jpg" alt="" />
                    </div>
                    <div class="info">
                        <h3>game controls</h3>
                        <div class="subInfo">
                            <strong class="price"> $1000/- <span>$1500/-</span> </strong>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="overlay">
                        <a href="#" style="--i: 1" class="fas fa-heart">
                            <span class="numb"></span>
                        </a>
                        <a href="#" style="--i: 2" class="fas fa-shopping-cart"></a>
                        <a href="#" style="--i: 3" class="fas fa-search"></a>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="images/arr_img3.jpg" alt="" />
                    </div>
                    <div class="info">
                        <h3>latest shoes</h3>
                        <div class="subInfo">
                            <strong class="price"> $1000/- <span>$1500/-</span> </strong>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="overlay">
                        <a href="#" style="--i: 1" class="fas fa-heart">
                            <span class="numb"></span>
                        </a>
                        <a href="#" style="--i: 2" class="fas fa-shopping-cart"></a>
                        <a href="#" style="--i: 3" class="fas fa-search"></a>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="images/arr_img4.jpg" alt="" />
                    </div>
                    <div class="info">
                        <h3>smartphones</h3>
                        <div class="subInfo">
                            <strong class="price"> $1000/- <span>$1500/-</span> </strong>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="overlay">
                        <a href="#" style="--i: 1" class="fas fa-heart">
                            <span class="numb"></span>
                        </a>
                        <a href="#" style="--i: 2" class="fas fa-shopping-cart"></a>
                        <a href="#" style="--i: 3" class="fas fa-search"></a>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="images/arr_img5.jpg" alt="" />
                    </div>
                    <div class="info">
                        <h3>branded t-shirts</h3>
                        <div class="subInfo">
                            <strong class="price"> $1000/- <span>$1500/-</span> </strong>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="overlay">
                        <a href="#" style="--i: 1" class="fas fa-heart">
                            <span class="numb"></span>
                        </a>
                        <a href="#" style="--i: 2" class="fas fa-shopping-cart"></a>
                        <a href="#" style="--i: 3" class="fas fa-search"></a>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="images/arr_img6.jpg" alt="" />
                    </div>
                    <div class="info">
                        <h3>amazing speakers</h3>
                        <div class="subInfo">
                            <strong class="price"> $1000/- <span>$1500/-</span> </strong>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="overlay">
                        <a href="#" style="--i: 1" class="fas fa-heart">
                            <span class="numb"></span>
                        </a>
                        <a href="#" style="--i: 2" class="fas fa-shopping-cart"></a>
                        <a href="#" style="--i: 3" class="fas fa-search"></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- arrival section ends -->
        <!-- featured section starts  -->
        <section class="feature" id="featured">
            <h1 class="heading"><span> featured product </span></h1>
            <div class="row">
                <div class="image-container">
                    <div class="big-image">
                        <img src="images/watch1.jpg" alt="" />
                    </div>
                    <div class="small-image">
                        <img class="image-active" src="images/watch1.jpg" alt="" />
                        <img src="images/watch2.jpg" alt="" />
                        <img src="images/watch3.jpg" alt="" />
                        <img src="images/watch4.jpg" alt="" />
                    </div>
                </div>
                <div class="content">
                    <h3>smart watches</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(500+) reviews</span>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda,
                        at!
                    </p>
                    <strong class="price">$1000 <span>$1500</span> </strong>
                    <a href="#"><button class="btn">buy now</button></a>
                </div>
            </div>
        </section>
        <!-- featured section ends -->
        <!-- gallery section starts  -->
        <section class="gallery" id="gallery">
            <h1 class="heading"><span> product gallery </span></h1>
            <ul class="controls">
                <li class="btn button-active" data-filter="all">all</li>
                <li class="btn" data-filter="phone">phone</li>
                <li class="btn" data-filter="laptop">laptop</li>
                <li class="btn" data-filter="headphone">headphone</li>
                <li class="btn" data-filter="lg">TV</li>
                <li class="btn" data-filter="ipad">ipad</li>
                <li class="btn" data-filter="camera">camera</li>
                <li class="btn" data-filter="shoes">shoes</li>
            </ul>
            <div class="image-container">
                <div class="box phone">
                    <div class="image">
                        <img src="images/g_img1.jpg" alt="" />
                    </div>
                    <div class="info">
                        <h3>smartphones</h3>
                        <div class="subInfo">
                            <strong class="price">$1000</strong>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="info-hover" id="info-hover">
                        <a href="#" style="--i: 1" class="fas fa-heart">
                            <span class="numb"></span>
                        </a>
                        <a href="#" style="--i: 2" class="fas fa-shopping-cart"></a>
                        <a href="#" style="--i: 3" class="fas fa-search"></a>
                    </div>
                </div>
                <div class="box lg">
                    <div class="image">
                        <img src="images/g_img1.jpg" alt="" />
                    </div>
                    <div class="info">
                        <h3>TV 1</h3>
                        <div class="subInfo">
                            <strong class="price">$1000</strong>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="info-hover" id="info-hover">
                        <a href="#" style="--i: 1" class="fas fa-heart">
                            <span class="numb"></span>
                        </a>
                        <a href="#" style="--i: 2" class="fas fa-shopping-cart"></a>
                        <a href="#" style="--i: 3" class="fas fa-search"></a>
                    </div>
                </div>
                <div class="box lg">
                    <div class="image">
                        <img src="images/g_img1.jpg" alt="" />
                    </div>
                    <div class="info">
                        <h3>TV 2</h3>
                        <div class="subInfo">
                            <strong class="price">$1000</strong>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="info-hover" id="info-hover">
                        <a href="#" style="--i: 1" class="fas fa-heart">
                            <span class="numb"></span>
                        </a>
                        <a href="#" style="--i: 2" class="fas fa-shopping-cart"></a>
                        <a href="#" style="--i: 3" class="fas fa-search"></a>
                    </div>
                </div>
                <div class="box camera">
                    <div class="image">
                        <img src="images/g_img1.jpg" alt="" />
                    </div>
                    <div class="info">
                        <h3>Camera</h3>
                        <div class="subInfo">
                            <strong class="price">$1000</strong>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="info-hover" id="info-hover">
                        <a href="#" style="--i: 1" class="fas fa-heart">
                            <span class="numb"></span>
                        </a>
                        <a href="#" style="--i: 2" class="fas fa-shopping-cart"></a>
                        <a href="#" style="--i: 3" class="fas fa-search"></a>
                    </div>
                </div>
                <div class="box ipad">
                    <div class="image">
                        <img src="images/g_img1.jpg" alt="" />
                    </div>
                    <div class="info">
                        <h3>ipad</h3>
                        <div class="subInfo">
                            <strong class="price">$1000</strong>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="info-hover" id="info-hover">
                        <a href="#" style="--i: 1" class="fas fa-heart">
                            <span class="numb"></span>
                        </a>
                        <a href="#" style="--i: 2" class="fas fa-shopping-cart"></a>
                        <a href="#" style="--i: 3" class="fas fa-search"></a>
                    </div>
                </div>
                <div class="box phone">
                    <div class="image">
                        <img src="images/g_img2.jpg" alt="" />
                    </div>
                    <div class="info">
                        <h3>smartphones</h3>
                        <div class="subInfo">
                            <strong class="price">$1000</strong>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="info-hover" id="info-hover">
                        <a href="#" style="--i: 1" class="fas fa-heart">
                            <span class="numb"></span>
                        </a>
                        <a href="#" style="--i: 2" class="fas fa-shopping-cart"></a>
                        <a href="#" style="--i: 3" class="fas fa-search"></a>
                    </div>
                </div>
                <div class="box laptop">
                    <div class="image">
                        <img src="images/g_img3.jpg" alt="" />
                    </div>
                    <div class="info">
                        <h3>laptop</h3>
                        <div class="subInfo">
                            <strong class="price">$1000</strong>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="info-hover" id="info-hover">
                        <a href="#" style="--i: 1" class="fas fa-heart">
                            <span class="numb"></span>
                        </a>
                        <a href="#" style="--i: 2" class="fas fa-shopping-cart"></a>
                        <a href="#" style="--i: 3" class="fas fa-search"></a>
                    </div>
                </div>
                <div class="box shoes">
                    <div class="image">
                        <img src="images/g_img4.jpg" alt="" />
                    </div>
                    <div class="info">
                        <h3>shoes</h3>
                        <div class="subInfo">
                            <strong class="price">$1000</strong>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="info-hover" id="info-hover">
                        <a href="#" style="--i: 1" class="fas fa-heart">
                            <span class="numb"></span>
                        </a>
                        <a href="#" style="--i: 2" class="fas fa-shopping-cart"></a>
                        <a href="#" style="--i: 3" class="fas fa-search"></a>
                    </div>
                </div>
                <div class="box laptop">
                    <div class="image">
                        <img src="images/g_img5.jpg" alt="" />
                    </div>
                    <div class="info">
                        <h3>laptop</h3>
                        <div class="subInfo">
                            <strong class="price">$1000</strong>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="info-hover" id="info-hover">
                        <a href="#" style="--i: 1" class="fas fa-heart">
                            <span class="numb"></span>
                        </a>
                        <a href="#" style="--i: 2" class="fas fa-shopping-cart"></a>
                        <a href="#" style="--i: 3" class="fas fa-search"></a>
                    </div>
                </div>
                <div class="box headphone">
                    <div class="image">
                        <img src="images/g_img6.jpg" alt="" />
                    </div>
                    <div class="info">
                        <h3>headphone</h3>
                        <div class="subInfo">
                            <strong class="price">$1000</strong>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="info-hover" id="info-hover">
                        <a href="#" style="--i: 1" class="fas fa-heart">
                            <span class="numb"></span>
                        </a>
                        <a href="#" style="--i: 2" class="fas fa-shopping-cart"></a>
                        <a href="#" style="--i: 3" class="fas fa-search"></a>
                    </div>
                </div>
                <div class="box shoes">
                    <div class="image">
                        <img src="images/g_img7.jpg" alt="" />
                    </div>
                    <div class="info">
                        <h3>shoes</h3>
                        <div class="subInfo">
                            <strong class="price">$1000</strong>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="info-hover" id="info-hover">
                        <a href="#" style="--i: 1" class="fas fa-heart">
                            <span class="numb"></span>
                        </a>
                        <a href="#" style="--i: 2" class="fas fa-shopping-cart"></a>
                        <a href="#" style="--i: 3" class="fas fa-search"></a>
                    </div>
                </div>
                <div class="box headphone">
                    <div class="image">
                        <img src="images/g_img8.jpg" alt="" />
                    </div>
                    <div class="info">
                        <h3>headphone</h3>
                        <div class="subInfo">
                            <strong class="price">$1000</strong>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="info-hover" id="info-hover">
                        <a href="#" style="--i: 1" class="fas fa-heart">
                            <span class="numb"></span>
                        </a>
                        <a href="#" style="--i: 2" class="fas fa-shopping-cart"></a>
                        <a href="#" style="--i: 3" class="fas fa-search"></a>
                    </div>
                </div>
                <div class="box headphone">
                    <div class="image">
                        <img src="images/g_img9.jpg" alt="" />
                    </div>
                    <div class="info">
                        <h3>headphone</h3>
                        <div class="subInfo">
                            <strong class="price">$1000</strong>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="info-hover" id="info-hover">
                        <a href="#" style="--i: 1" class="fas fa-heart">
                            <span class="numb"></span>
                        </a>
                        <a href="#" style="--i: 2" class="fas fa-shopping-cart"></a>
                        <a href="#" style="--i: 3" class="fas fa-search"></a>
                    </div>
                </div>
                <div class="box headphone">
                    <div class="image">
                        <img src="images/g_img9.jpg" alt="" />
                    </div>
                    <div class="info">
                        <h3>headphone</h3>
                        <div class="subInfo">
                            <strong class="price">$1000</strong>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="info-hover" id="info-hover">
                        <a href="#" style="--i: 1" class="fas fa-heart">
                            <span class="numb"></span>
                        </a>
                        <a href="#" style="--i: 2" class="fas fa-shopping-cart"></a>
                        <a href="#" style="--i: 3" class="fas fa-search"></a>
                    </div>
                </div>
                <div class="box headphone">
                    <div class="image">
                        <img src="images/g_img9.jpg" alt="" />
                    </div>
                    <div class="info">
                        <h3>headphone</h3>
                        <div class="subInfo">
                            <strong class="price">$1000</strong>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="info-hover" id="info-hover">
                        <a href="#" style="--i: 1" class="fas fa-heart">
                            <span class="numb"></span>
                        </a>
                        <a href="#" style="--i: 2" class="fas fa-shopping-cart"></a>
                        <a href="#" style="--i: 3" class="fas fa-search"></a>
                    </div>
                </div>
                <div class="box headphone">
                    <div class="image">
                        <img src="images/g_img9.jpg" alt="" />
                    </div>
                    <div class="info">
                        <h3>headphone</h3>
                        <div class="subInfo">
                            <strong class="price">$1000</strong>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info-hover" id="info-hover">
                    <a href="#" style="--i: 1" class="fas fa-heart">
                        <span class="numb"></span>
                    </a>
                    <a href="#" style="--i: 2" class="fas fa-shopping-cart"></a>
                    <a href="#" style="--i: 3" class="fas fa-search"></a>
                </div>
            </div>
        </section>
        <!-- gallery section ends -->
        <!-- deal section starts  -->
        <section class="deal" id="deal">
            <h1 class="heading"><span> best deals </span></h1>
            <div class="box-container">
                <div class="box">
                    <img src="images/deal1.jpg" alt="" />
                    <div class="content">
                        <h3>latest laptop</h3>
                        <p>upto 25% off on first purchase</p>
                        <a href="#"><button class="btn">explore</button></a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/deal2.jpg" alt="" />
                    <div class="content">
                        <h3>new headphone</h3>
                        <p>upto 25% off on first purchase</p>
                        <a href="#"><button class="btn">explore</button></a>
                    </div>
                </div>
            </div>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <h3>fast delivery</h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi,
                        molestiae?
                    </p>
                </div>
                <div class="icons">
                    <i class="fas fa-user-clock"></i>
                    <h3>24 x 7 support</h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi,
                        molestiae?
                    </p>
                </div>
                <div class="icons">
                    <i class="fas fa-money-check-alt"></i>
                    <h3>easy payments</h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi,
                        molestiae?
                    </p>
                </div>
                <div class="icons">
                    <i class="fas fa-box"></i>
                    <h3>10 days replacements</h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi,
                        molestiae?
                    </p>
                </div>
            </div>
        </section>
        <!-- deal section ends -->
        <!-- newsletter section starts  -->
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
    </div>
    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- owl carousel js file cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>


</body>

</html>
