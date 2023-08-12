<div class="card mt-3">
  <div class="card-header info">
    <?php
    if ($act == 'add') {
      $ac = 1;
      echo 'THÊM LOẠI';
    }
    if ($act == 'update') {
      $ac = 2;
      echo 'SỬA LOẠI';
    }
    ?>
  </div>
  <div class="card-body">

    <?php
    if (isset($_GET['id'])) {
      $maloai = $_GET['id'];
      $lsp = new loaisanpham();
      $result = $lsp->getLoaiSanPhamById($maloai);
      $tenloai = $result['tenloai'];
      $idmenu = $result['idmenu'];
    }
    ?>
    <form action="index.php?action=loai&act=loai_action" method="post" enctype="multipart/form-data">
      <input type="file" name="file" /><br>
      <input type="submit" name="submit_file" value="THÊM VÀO"><br>
    </form>
    <?php
    if (isset($ac) && $ac == 2) {
      echo '<form action="index.php?action=loaisanpham&act=update_action" method="post">';
    }
    if (isset($ac) && $ac == 1) {
      echo '<form action="index.php?action=loaisanpham&act=add_action" method="post">';
    }
    ?>
    <div class="form-group">
      <label for="">Mã loại </label>
      <input type="text" readonly name="maloai" value="<?php if (isset($maloai)) echo $maloai; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Tên loại</label>
      <input type="text" name="tenloai" value="<?php if (isset($tenloai)) echo $tenloai; ?>" class="form-control">

    </div>
    <div class="form-group">
      <label for="">Menu số:</label>
      <input type="text" name="menu" value="<?php if (isset($idmenu)) echo $idmenu; ?>" class="form-control">
    </div>

    <div class="form-group">
      <button type="submit" name="submit" class="btn btn-primary">Lưu</button>
      <a href="" class="btn btn-danger">Danh sách</a>
    </div>
    </form>
  </div>
</div>