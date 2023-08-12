<header class="row no-gutters">
    <section class="col-12" style="height:40px;">
        <div class="col-12">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top scrolling-navbar" style="margin-bottom: 0px;">
                    <div class="collapse navbar-collapse" id="basicExampleNav">
                        <ul class="navbar-nav mr-auto smooth-scroll"></ul>
                    </div>
                </nav>
            </div>
        </div>
    </section>
    <section >
        <div style="padding-left: 200px;">
            <nav class="navbar navbar-expand-lg n navbar-light bg-light" style="margin-bottom: 0px; ">
                <ul class="navbar-nav mx-auto ">
                    <li class="nav-item" >
                        <h3><a href="index.php?" class="nav-link">Home</a></3>
                    </li>
                    <li>
                        <form class="form-inline" action="index.php?action=sanpham&act=timkiem" method="post">
                            <div class="input-group">
                                <div class="input-group-prepend" style="padding-left: 300px;">
                                    <a>
                                        <input class="input-group-text" name="ten" style="height: 34px;" type="submit" id="btsearch"  value="Search" />
                                    </a>
                                    <input type="text" name="txtsearch" class="form-control" placeholder="Search" />
                                </div>
                            </div>
                        </form>
                    </li>
                    <li class="nav-item" style="padding-left: 100px;">
                       <h4> <a href="index.php?action=sanpham" class="nav-link">Shop</a></h4>
                    </li>
                    <li class="nav-item" style="padding-left: 10px;" >
                        <h4> <a href="#" class="nav-link">Blog</a></h4>
                    </li>
                    <li class="nav-item"  style="padding-left: 10px;" >
                        <h4> <a href="index.php?action=contact" class="nav-link">Contact Us</a></h4>
                    </li>
                    <li class="nav-item"  style="padding-left: 10px;" >
                        <?php
                            if (!isset($_SESSION['makh'])) {
                                echo ' <h4> <a href="index.php?action=dangky" class="nav-link">Register</a></h4>';
                            }
                        ?>
                    </li>
                    <li class="nav-item"  style="padding-left: 10px;" >
                        <?php
                            if (!isset($_SESSION['makh'])) {
                                echo ' <h4><a href="index.php?action=dangnhap" class="nav-link">Login</a></h4>';
                            }
                        ?>
                    </li>
                    <li class="nav-item">
                         <?php
                            if (isset($_SESSION['makh'])) {
                                echo ' <h4> <a href="index.php?action=dangnhap&act=logout" class="nav-link">Logout</a></h4>';
                            }
                            ?>
                    </li>
                    <li>
                        <h4>  <a href="index.php?action=giohang" class="nav-link"><img src="Content/images/bag-icon.png" width="30px" height="30px" alt=""></a></h4>
                    </li>
                    <li>
                        <?php
                            $dem = 0;
                            if (isset($_SESSION['cart']) != 0) {
                            }
                        ?>
                    <p style="color: red; margin-top: 20px; margin-left: 0px;">(0)</p>

                    </li>
                    <li>
                        <?php
                            if (isset($_SESSION['makh']) && isset($_SESSION['ten'])) :
                                $name = $_SESSION['ten'];
                        ?>
                    <h4 style="margin-top:10px; "><i class="fa fa-user"></i><a href="index.php?action=order"><?php echo $name; ?></a></h4>
                        <?php
                            else :
                                echo '<p style="color: red; margin-top: 20px; margin-left: 0px;"></p>'
                       ?>
                        <?php endif; ?>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
</header>


<!-- hinh dộng -->
<div class="banner_section layout_padding">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="banner_taital">Beauty <br>Kit</h1>
                            <p class="banner_text">Ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                            <div class="read_bt"><a href="#">Buy Now</a></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="banner_img"><img src="Content/images/banner-img.png"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="banner_taital">Beauty <br>Kit</h1>
                            <p class="banner_text">Ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                            <div class="read_bt"><a href="#">Buy Now</a></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="banner_img"><img src="Content/images/banner-img.png"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="banner_taital">Beauty <br>Kit</h1>
                            <p class="banner_text">Ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                            <div class="read_bt"><a href="#">Buy Now</a></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="banner_img"><img src="Content/images/banner-img.png"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="banner_taital">Beauty <br>Kit</h1>
                            <p class="banner_text">Ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                            <div class="read_bt"><a href="#">Buy Now</a></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="banner_img"><img src="Content/images/banner-img.png"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>