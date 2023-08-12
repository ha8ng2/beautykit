<div class="card mt-3">
  <div class="card-header info">
    <?php
    if ($act == 'add') {
      $ac = 1;
      echo 'THÊM HOA ĐƠN';
    }
    if ($act == 'update') {
      $ac = 2;
      echo 'SỬA HÓA ĐƠN';
    }
    ?>
  </div>
  <div class="card-body">

    <?php
    if (isset($_GET['id'])) {
      $masohd = $_GET['id'];
      $hd = new hoadon();
      $result = $hd->gethoadon1id($masohd);
      $makh = $result['makh'];
      $ngaydat = $result['ngaydat'];
      $tongtien = $result['tongtien'];
    }
    ?>
    
    <?php
    if (isset($ac) && $ac == 2) {
      echo '<form action="index.php?action=hoadon&act=update_action" method="post">';
    }
    if (isset($ac) && $ac == 1) {
      echo '<form action="index.php?action=hoadon&act=add_action" method="post">';
    }
    ?>
    <div class="form-group">
      <label for="">Mã số hóa đơn: </label>
      <input type="text" readonly name="masohd" value="<?php if (isset($masohd)) echo $masohd; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Mã số khách hàng: </label>
      <input type="text" name="makh" value="<?php if (isset($makh)) echo $makh; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Ngày đặt: </label>
      <input type="text" name="ngaydat" value="<?php if (isset($ngaydat)) echo $ngaydat; ?>" class="form-control">

    </div>
    <div class="form-group">
      <label for="">Tổng tiền: </label>
      <input type="text" name="tongtien" value="<?php if (isset($tongtien)) echo $tongtien; ?>" class="form-control">
    </div>

    <div class="form-group">
      <button type="submit" name="submit" class="btn btn-primary">Lưu</button>
      <a href="" class="btn btn-danger">Danh sách</a>
    </div>
    </form>
  </div>
</div>