<div class="table-responsive">

  <form action="" method="post">
    <table class="table table-bordered" border="0">
      <?php
      $hd = new HoaDon();
      $result = $hd->getOrder($_SESSION['masohd']);
      $sohd = $result['masohd'];
      $tenkh = $result['tenkh'];
      $diachi = $result['diachi'];
      $sodt = $result['sodienthoai'];
      $ngaydat = $result['ngaydat'];
      $d = new DateTime($ngaydat);
      ?>

<tr>
        <td colspan="4">
          <h2 style="color: red;">HÓA ĐƠN</h2>
        </td>
      </tr>
      <tr>
        <td colspan="2">Số Hóa đơn:</td>
        <td colspan="2"> <?php echo $sohd; ?></td>
      </tr>
      <tr>
      <td colspan="2"> Ngày lập:</td>
      <td colspan="2"> <?php echo $d->format('d/m/Y'); ?></td>
      </tr>
      <tr>
        <td colspan="2">Họ và tên: </td>
        <td colspan="2"><?php echo $tenkh; ?></td>
      </tr>
      <tr>
        <td colspan="2">Địa chỉ: </td>
        <td colspan="2"><?php echo $diachi; ?></td>
      </tr>
      <tr>
        <td colspan="2">Số điện thoại: </td>
        <td colspan="2"><?php echo $sodt; ?></td>
      </tr>
    </table>
    <!-- Thông tin sản phẩm -->
    <table class="table table-bordered">
      <thead>

        <tr class="table-success">
          <th>Số TT</th>
          <th>Thông Tin Sản Phẩm</th>
          <th>Tùy Chọn Của Bạn</th>
          <th>Giá</th>
        </tr>
      </thead>
      <tbody>
        

          <?php
          $j = 0;
          $result1 = $hd->getOrderDetail($_SESSION['masohd']);
          while ($set = $result1->fetch()) : $j++;
          ?>
            <tr>
              <td><?php echo $j; ?></td>
              <td><?php echo $set['tenhh']; ?></td>
              <td>Đơn Giá:<?php echo $set['dongia']; ?>
              Số Lượng:<?php echo $set['soluongmua']; ?> <br />
              </td>
            </tr>
          <?php
          endwhile;
          ?>
          <tr>  
            <td colspan="3">
              <b>Tổng Tiền</b>
            </td>
            <td style="float: right;">

              <?php
              $gh = new giohang();
              echo $gh->getTotal();
              ?>
              <b> <sup><u>đ</u></sup></b>
            </td>
          </tr>
        </tbody>
      </table>
    </form>

  </div>