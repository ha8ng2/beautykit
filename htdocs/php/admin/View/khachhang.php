<a href="index.php?action=khachhang&act=add" class="btn btn-info" style="width:100px; height:40px ">Thêm mới</a>
<form name="frmloaihang" action="" method="post" style="margin-left:30px">
    <div class="card mt-3">
        <div class="card-header text-center">
            QUẢN LÝ KHÁCH HÀNG
        </div>
        <div class="card-body">
            <table class="table table-striped table">
                <thead>
                    <tr class="bg-info">
                        <th scope="col"></th>
                        <th scope="col">Mã số khách hàng</th>
                        <th scope="col">Tên khách hàng</th>
                        <th scope="col">Tài khoản</th>
                        <th scope="col">Mật khẩu</th>
                        <th scope="col">Email</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>

                <?php
                    $kh = new khachhang();
                    $result = $kh->getkhachhang();
                    while ($set = $result->fetch()) :
                    ?>
                        <tr>
                            <td><?php echo $set['makh'] ?></td>
                            <td><?php echo $set['tenkh'] ?></td>
                            <td><?php echo $set['username'] ?></td>
                            <td><?php echo $set['matkhau'] ?></td>
                            <td><?php echo $set['email'] ?></td>
                            <td><?php echo $set['diachi'] ?></td>
                            <td><?php echo $set['sodienthoai'] ?></td>
                            <td>
                               
              <a href="index.php?action=khachhang&act=delete&id=<?php echo $set['makh']?>" class="btn btn-warning">Xoá</a>
              <a href="index.php?action=khachhang&act=update&id=<?php echo $set['makh']?>" class="btn btn-info">Sửa</a>
                            </td>
                        </tr>
                    <?php
                    endwhile;
                    ?>

                    <!-- <input type="hidden" name="xoa" value="" /> -->
                </tbody>
            </table>
        </div>
        
    </div>
</form>