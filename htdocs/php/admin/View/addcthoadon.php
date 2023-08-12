<div class="card mt-3">
  <div class="card-header info">
    <?php
    if ($act == 'add') {
      $ac = 1;
      echo 'THÊM HÓA ĐƠN';
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
      $cthd = new cthoadon();
      $result = $cthd->getcthoadon1id($masohd);
      $mahh = $result['mahh'];
      $soluongmua = $result['soluongmua'];
      $thanhtien = $result['thanhtien'];
    }
    ?>
    
    <?php
    if (isset($ac) && $ac == 2) {
      echo '<form action="index.php?action=cthoadon&act=update_action" method="post">';
    }
    if (isset($ac) && $ac == 1) {
      echo '<form action="index.php?action=cthoadon&act=add_action" method="post">';
    }
    ?>
    <div class="form-group">
      <label for="">Mã số hóa đơn: </label>
      <input type="text" readonly name="masohd" value="<?php if (isset($masohd)) echo $masohd; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Mã số hàng hóa: </label>
      <input type="text" name="mahh" value="<?php if (isset($mahh)) echo $mahh; ?>" class="form-control">
    </div>
  
    <div class="form-group">
      <label for="">Số lượng mua: </label>
      <input type="text" name="soluongmua" value="<?php if (isset($soluongmua)) echo $soluongmua; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Thành tiền: </label>
      <input type="text" name="thanhtien" value="<?php if (isset($thanhtien)) echo $thanhtien; ?>" class="form-control">
    </div>

    <div class="form-group">
      <button type="submit" name="submit" class="btn btn-primary">Lưu</button>
      <a href="" class="btn btn-danger">Danh sách</a>
    </div>
    </form>
  </div>
</div>