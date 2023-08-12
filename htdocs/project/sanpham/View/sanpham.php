  <!-- quảng cáo -->

 
  <?php
    //   include "quangcao.php";

    $hh  = new hanghoa();
    $result = $hh->getAll();
    $count = $result->rowCount();

    $limit = 8;

    $p = new page();

    $page = $p->findPage($count, $limit);
    $start  = $p->findStart($limit);

    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

    ?>

  <?php
    if (isset($_GET['act']) == "khuyenmai") {
        $ac = 0;
    } elseif (isset($_GET['act']) == "timkiem") {
        $ac = 2;
    } else {
        $ac = 1;
    }
    ?>

  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right" style="padding-top: 30px;">
              <?php
                if ($ac == 0) {
                    echo '<h4 class="md-5 font-weight-bold">Sản phẩm khuyến mãi</h4>';
                }
                if ($ac == 1) {
                    echo '<h2 class="md-5 font-weight-bold" style="color: red;">Tất cả sản phẩm</h2>';
                } else {
                    echo '<h4 class="md-5 font-weight-bold">Sản phẩm tìm kiếm</h4>';
                }
                ?>
          </div>

      </div>
      <!--Grid row-->
      <div class="row">
          <?php
            $hh = new hanghoa();
            if ($ac == 1) {
                $result = $hh->getListHangHoaAllPage($start, $limit);
            }   if ($ac == 0) {
                $result = $hh->getAllsale();
            } else {
                if(isset($_POST['txtsearch'])){
                    $tk=$_POST['ten'];
                    $result  =$hh->getTimkiemHH($tk);
                }
            }
            if(isset($_POST['txtsearch'])){
                $tk=$_POST['txtsearch'];
                $result  =$hh->getTimkiemHH($tk);
            }
            
            while ($set = $result->fetch()) :

            ?>

              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left">

                  <div class="view overlay z-depth-1-half">
                      <img src="Content/images/<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>

                  <h5 class="my-4 font-weight-bold" style="color: red;"><?php echo $set['dongia'] ?> <sup> <u>đ</u></sup></h5>
                  <a href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh'] ?>">
                      <span> <?php echo $set['tenhh'] ?></span></br></a>
                  <!-- <button class="btn btn-warning" id="may4" value="lap 4">Xem sản phẩm</button> -->
                  <h5 style="color:red;">Số lượt xem: <?php echo $set['soluotxem'] ?></h5>
              </div>
          <?php

            endwhile;
            ?>
      </div>

      <!--Grid row-->

  </section>


  <!-- end sản phẩm mới nhất -->


  <div class="col-md-6 div col-md-offset-3">
      <ul class="pagination">
          <?php
            if ($current_page > 1 && $page > 1) {
                echo '<li><a href="index.php?action=sanpham&page=' . ($current_page - 1) . '">Prev</a></li>';
            }
            for ($i = 1; $i <= $page; $i++) {


            ?>
              <li><a href="index.php?action=sanpham&page=<?php echo $i;  ?>"><?php echo $i; ?></a></li>
          <?php
            }
            if ($current_page < $page && $page > 1) {
                echo '<li><a href="index.php?action=sanpham&page=' . ($current_page + 1) . '">Next</a></li>';
            }
            ?>
      </ul>
  </div>
