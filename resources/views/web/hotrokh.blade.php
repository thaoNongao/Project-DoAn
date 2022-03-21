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
    <link rel="stylesheet" href="css/lienhe.css">

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
    <section>
        <div class="body-lienhe">
            <div class="lienhe-header">TRUNG TÂM HỖ TRỢ KHÁCH HÀNG</div>
            <div class="lienhe-info">
                <div class="info-left">
                    <p>
                    <h2 style="color: gray"> ĐỒ ÁN CDIO 3 - GROUP 4 </h2><br />
                    <b>Địa chỉ:</b> Đà Nẵng<br /><br />
                    <b>Telephone:</b> 0123456789<br /><br />
                    <b>Hotline:</b> 011111111 - CSKH: 0222 333 444<br /><br />
                    <b>Website:</b> <a href="">Mobile Store - Công nghệ trong tay bạn</a> <br /><br />
                    <b>E-mail:</b> DoAn@gmail.com<br /><br />
                    <b>Mã số thuế:</b> 01 02 03 04 05<br /><br />
                    <b>Tài khoản ngân hàng :</b><br /><br />
                    <b>Số TK:</b> 00000000000 <br /><br />
                    <b>Tại Ngân hàng:</b> Sacombank<br /><br /><br /><br />
                    <b>Quý khách có thể gửi liên hệ tới chúng tôi bằng cách hoàn tất biểu mẫu dưới đây. Chúng tôi
                        sẽ trả lời thư của quý khách, xin vui lòng khai báo đầy đủ. Hân hạnh phục vụ và chân thành
                        cảm ơn sự quan tâm, đóng góp ý kiến đến Mobile Store.</b>
                    </p>
                </div>
                <div class="info-right">
                    <div style="width: 100%">
                        <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=%C4%90%E1%BA%A1i%20H%E1%BB%8Dc%20Duy%20T%C3%A2n,%20Nguy%E1%BB%85n%20V%C4%83n%20Linh,%20Thanh%20Kh%C3%AA,%20%C4%90%C3%A0%20N%E1%BA%B5ng+(%C4%90%E1%BA%A1i%20h%E1%BB%8Dc%20Duy%20T%C3%A2n)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                href="https://www.gps.ie/marine-gps/">DUY TAN UNIVERSITY</a>
                        </iframe>
                    </div>
                    <br />
                </div>
            </div>
            <div class="lienhe-info">

                <div class="guithongtin">
                    <p style="font-size: 22px; color: gray">Gửi thông tin liên lạc cho chúng tôi: </p>
                    <hr />
                    <form name="formlh" onsubmit="return nguoidung()">
                        <table cellspacing="10px">
                            <tr>
                                <td>Họ và tên</td>
                                <td><input type="text" name="ht" size="40" maxlength="40" autocomplete="off" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Điện thoại liên hệ</td>
                                <td><input type="text" name="sdt" size="40" maxlength="11" minlength="10" required></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ Email</td>
                                <td><input type="email" name="em" size="40" autocomplete="off" required></td>
                            </tr>
                            <tr>
                                <td>Tiêu đề</td>
                                <td><input type="text" name="tde" size="40" maxlength="100" required>
                            </tr>
                            <tr>
                                <td>Nội dung</td>
                                <td>
                                    <textarea name="nd" rows="5" cols="44" maxlength="500" wrap="physical" placeholder="" required></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button class="btn btn-form-hotro" type="submit">Gửi thông tin</button></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="thongtinnhom">
                    <p style="font-size: 22px; color: gray">Thông tin thành viên nhóm: </p>
                    <hr />
                    <table style="text-transform: capitalize">
                        <tr>
                            <th>Họ tên</th>
                            <th>MSSV</th>
                            <th>Giới tính</th>
                            <th>Lớp</th>
                            <th>Công việc</th>
                            <th>Tỉ lệ công việc</th>
                        </tr>
                        <script>
                            var thongtin = [
                                ["Nguyễn Đức Thạo", "25211214295", "Nam", "SE 397 D", "Code", "%"],
                                ["Nguyễn Đức Thạo", "25211214295", "Nam", "SE 397 D", "Code", "%"],
                                ["Nguyễn Đức Thạo", "25211214295", "Nam", "SE 397 D", "Code", "%"],
                                ["Nguyễn Đức Thạo", "25211214295", "Nam", "SE 397 D", "Code", "%"],
                                ["Nguyễn Đức Thạo", "25211214295", "Nam", "SE 397 D", "Code", "%"],
                            ]
                            for (var i = 0; i < thongtin.length; i++) {
                                document.write(
                                    `
                                        <tr>
                                            <td>` +
                                    thongtin[i][0] + `</td>
                                            <td>` +
                                    thongtin[i][1] + `</td>
                                            <td>` +
                                    thongtin[i][2] + `</td>
                                            <td>` +
                                    thongtin[i][3] + `</td>
                                            <td>` +
                                    thongtin[i][4] + `</td>
                                            <td>`
                                )
                            }
                        </script>
                    </table>
                </div>

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
