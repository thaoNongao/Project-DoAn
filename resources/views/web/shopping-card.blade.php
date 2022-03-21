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
    <link rel="stylesheet" href="css/taikhoan.css" />
    <link rel="stylesheet" href="css/login">
    <link rel="stylesheet" href="css/nguoidung">
    <link rel="stylesheet" href="css/style_login">
    <link rel="stylesheet" href="css/gioHang.css" />
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/topnav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/shopping-card.css">

    <!-- js -->
    <script src="data/products.js"></script>
    <script src="js/classes.js"></script>
    <script src="js/dungchung.js"></script>
    <script src="data/products.js"></script>
    <script src="js/classes.js"></script>
    <script src="js/dungchung.js"></script>
    <script src="js/giohang.js"></script>

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
                    <li><a class="active" href="#home">Home</a></li>
                    <li><a href="#arrival">arrival</a></li>
                    <li><a href="#featured">featured</a></li>
                    <li><a href="#gallery">gallery</a></li>
                    <li><a href="#deal">deal</a></li>
                </ul>
            </nav>

            <div class="icons">
                <a class="fas fa-shopping-cart"></a>
                <a class="fas fa-user" href="login"></a>
            </div>
        </div>

    </header>

    <section class="section-main">
        <div class="alert alert-info" role="alert">
            Shopping Carts
        </div>
        <div class="font-card">
            <table class="table table-bordered">
                <thead>
                    <tr class="alert alert-primary" role="alert">
                        <th scope="col">
                            <input type="checkbox" class="checkbox-all">
                        </th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">price</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody class="alert alert-primary" role="alert">
                    <tr>
                        <td scope="row"><input type="checkbox"></td>
                        <td scope="row"><a href="">Mark</a></td>
                        <td class="soluong" scope="row">
                            <button><i class="fa fa-minus"></i></button>
                            <input size="1" value="1">
                            <button><i class="fa fa-plus"></i></button>
                        </td>
                        <td><i class="fas fa-dollar-sign"></i>12</td>
                        <td><a href=""><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                    <tr class="total-price">
                        <td colspan="3">TOTAL PRICE</td>
                        <td><i class="fas fa-dollar-sign"></i>12</td>
                        <td>
                            <button class="btn delete-all">Xóa hết</button>
                        </td>
                    </tr>
                </tbody>
            </table>
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
                <img src="image/worldmap.png" class="map" alt="">
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
