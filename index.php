<!DOCTYPE html>
<?php 
    include 'components/connection.php'; 
    session_start();

    if(isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    } else{
        $user_id = '';
    }

    if(isset($_POST['logout'])){
        session_destroy();
        header("location: login.php");
    }
?>

<style type="text/css">
    <?php include 'style.css'?>
</style>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- https://boxicons.com/usage -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>php + mysql</title>
</head>
<body>
    
<?php include 'components/header.php'; ?>
<div class="main">
    <section class="home-section">
        <div class="slider">
            <div class="slider_slider slide1">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Lorem, ipsum dolor.</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                    <a href="view_product.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- slide end -->

            <div class="slider_slider slide2">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Lorem, ipsum dolor.</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                    <a href="view_product.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- slide end -->

            <div class="slider_slider slide3">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Lorem, ipsum dolor.</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                    <a href="view_product.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- slide end -->

            <div class="slider_slider slide4">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Lorem, ipsum dolor.</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                    <a href="view_product.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- slide end -->

            <div class="slider_slider slide5">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Lorem, ipsum dolor.</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                    <a href="view_product.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- slide end -->
            <div class="left-arrow"><i class="bx bx-left-arrow"></i></div>
            <div class="right-arrow"><i class="bx bx-right-arrow"></i></div>
        </div>
    </section>
    <!-- section - 2 -->
    <section class="thumb">
        <div class="box_container">
            <div class="box">
                <img src="imges/1.jpg" alt="">
                <h3>jinsi</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                <i class="bx bx-chevron-right"></i>
            </div>

            <div class="box">
                <img src="imges/2.jpg" alt="">
                <h3>furbolki</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                <i class="bx bx-chevron-right"></i>
            </div>

            <div class="box">
                <img src="imges/3.jpg" alt="">
                <h3>sumki</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                <i class="bx bx-chevron-right"></i>
            </div>

            <div class="box">
                <img src="imges/4.jpg" alt="">
                <h3>parfum</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                <i class="bx bx-chevron-right"></i>
            </div>
        </div>
    </section>
    <!-- section - 3 -->
    <section class="container">
        <div class="box-container">
            <div class="box">
                <img src="imges/afisha.jpg" alt="">
                <span>health tea</span>
                <h1>save up to 50% off</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit fugit eveniet voluptatem!</p>
            </div>
        </div>
    </section>
    <!-- section - 4 -->
    <section class="shop">
        <div class="shop-container">
            <div class="box">
                <img src="shop/1.jpg" alt="">
                <a href="view_products.php" class="btn">shop now</a>
            </div>
            <div class="box">
                <img src="shop/2.jpg" alt="">
                <a href="view_products.php" class="btn">shop now</a>
            </div>
            <div class="box">
                <img src="shop/3.jpg" alt="">
                <a href="view_products.php" class="btn">shop now</a>
            </div>
            <div class="box">
                <img src="shop/4.jpg" alt="">
                <a href="view_products.php" class="btn">shop now</a>
            </div>
            <div class="box">
                <img src="shop/5.jpg" alt="">
                <a href="view_products.php" class="btn">shop now</a>
            </div>
            <div class="box">
                <img src="shop/5.jpg" alt="">
                <a href="view_products.php" class="btn">shop now</a>
            </div>
        </div>
    </section>
    <?php include 'components/footer.php'; ?>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<!-- <script src-"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script> -->
<script src="script.js"></script>
<?php include 'components/alert.php'; ?>
</body>
</html>