<form name="frmloaihang" action="" method="post" class="text-center" style="margin-left: 250px;">
  <div class="card mt-3">
    <div class="card-header">
      CHI TIẾT HÓA ĐƠN
    </div>
    <div class="card-body">
      <table class="table table-striped table">
        <thead>
          <tr class="bg-info">
            <th scope="col">Mã số hóa đơn</th>
            <th scope="col">Mã sản phẩm</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Tình trạng</th>
            <th scope="col">Thành tiền</th>
            <th scope="col"></th>

          </tr>
        </thead>
        <tbody>
          <?php
          $hd = new hoadon();
          $result = $hd->getcthoadon();
          while ($set = $result->fetch()) :
          ?>
            <tr>
              <td><?php echo $set['masohd'] ?></td>
              <td><?php echo $set['mahh'] ?></td>
              <td><?php echo $set['soluongmua'] ?></td>
              <td><?php echo $set['tinhtrang'] ?></td>
              <td><?php echo $set['thanhtien'] ?></td>
              <td>
                <a href="index.php?action=cthoadon&act=delete&id=<?php echo $set['masohd']?>" class="btn btn-warning">Xoá</a>
                <a href="index.php?action=cthoadon&act=update&id=<?php echo $set['masohd']?>" class="btn btn-info">Sửa</a>
              </td>
            </tr>
          <?php
          endwhile;
          ?>

          <input type="hidden" name="xoa" value="" />
        </tbody>
      </table>
    </div>
    
  </div>
</form>