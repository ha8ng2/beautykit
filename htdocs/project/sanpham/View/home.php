  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">
              <h3 class="mb-5 font-weight-bold" style="color: red;">SẢN PHẨM MỚI NHẤT</h3>
          </div>
          <div class="col-lg-4 text-right mt-4">
              <a href="index.php?action=sanpham">
                  <span style="color: gray;">Xem chi tiết</span>
          </div>
          </a>


      </div>
      <!--Grid row-->
      <div class="row">
          <?php
            $hh = new hanghoa();
            $result = $hh->getHHnew();
            while ($set = $result->fetch()) :

            ?>

              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left">

                  <div class="view overlay z-depth-1-half">
                      <img src="Content/images/<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>

                  <h5 class="my-4 font-weight-bold" style="color: red;"><?php echo $set['dongia'] ?><sup> <u>đ</u></sup></br>
                  </h5>
                  <a href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh'] ?>">
                      <span> <?php echo $set['tenhh'] ?> </span></br></a>
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
  <!-- sản phẩm khuyến mãi -->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">
              <h3 class="mb-5 font-weight-bold" style="color: red;">SẢN PHẨM KHUYẾN MÃI</h3>
          </div>
          <div class="col-lg-4 text-right mt-4">
              <a href="index.php?action=sanpham&act=khuyenmai">
                  <span style="color: black;">Xem chi tiết</span>
          </div>
          </a>

      </div>
      <!--Grid row-->
      <div class="row">
          <?php
            $hh = new hanghoa();
            $result = $hh->getHHsale();
            while ($set = $result->fetch()) :

            ?>

              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left">

                  <div class="view overlay z-depth-1-half">
                      <img src="Content/images/<?php echo $set['hinh'] ?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>

                  <h5 class="my-4 font-weight-bold">
                      <font color="red"><?php echo $set['dongia']   ?><sup><u>đ</u></sup></font>
                      <strike> <?php echo $set['giamgia'] ?> </strike><sup><u>đ</u></sup>
                  </h5>

                  <a href="">
                      <span> <?php echo $set['tenhh'] ?></span></br></a>
                  <!-- <button class="btn btn-warning" id="may4" value="lap 4">Xem sản phẩm</button> -->
                  <h5 style="color:red;">Số lượt xem: <?php echo $set['soluotxem'] ?></h5>

              </div>
          <?php
            endwhile;
            ?>
      </div>


  </section>
  <!-- end sản phẩm khuyến mãi -->