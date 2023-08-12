<div class="card mt-3">
    <div class="card-header info">
        <?php
   
    if ($act == 'update') {
      $ac = 2;
      echo 'Sửa khách hàng';
    }
    ?>
    </div>
    <div class="card-body">

        <?php
    if (isset($_GET['id'])) {
      $makh = $_GET['id'];
      $kh = new khachhang();
      $result = $kh->getkhachhang1id($makh);
      $tenkh = $result['tenkh'];
            $email = $result['email'];
            $diachi = $result['diachi'];
            $sodienthoai = $result['sodienthoai'];
          
            $username=$result['username'];
            $matkhau=$result['matkhau'];
            $email=$result['email'];
    }
    ?>

        <?php
    if (isset($ac) && $ac == 2) {
      echo '<form action="index.php?action=khachhang&act=update_action" method="post">';
    }
    if (isset($ac) && $ac == 1) {
      echo '<form action="index.php?action=khachhang&act=add_action" method="post">';
    }
    ?>
        <div class="form-group">
            <label for="">Mã số khách hàng: </label>
            <input type="text" readonly name="makh" value="<?php if (isset($makh)) echo $makh; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="">username khách hàng: </label>
            <input type="text" readonly name="username" value="<?php if (isset($username)) echo $username; ?>" class="form-control">

        </div>
        <div class="form-group">
            <label for="">Mật khẩu khách hàng: </label>
            <input type="text" readonly name="matkhau" value="<?php if (isset($matkhau)) echo $matkhau; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="">email khách hàng: </label>
            <input type="text" readonly name="email" value="<?php if (isset($email)) echo $email; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Tên khách hàng: </label>
            <input type="text" name="tenkh" value="<?php if (isset($tenkh)) echo $tenkh; ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Địa chỉ khách hàng: </label>
            <input type="text" name="diachi" value="<?php if (isset($diachi)) echo $diachi; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Số điện thoại khách hàng: </label>
            <input type="text" name="sodienthoai" value="<?php if (isset($sodienthoai)) echo $sodienthoai; ?>"
                class="form-control">
        </div>


        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary">Lưu</button>
            <a href="" class="btn btn-danger">Danh sách</a>
        </div>
        </form>
    </div>
</div>