    <a href="index.php?action=loaisanpham&act=add" class="btn btn-info" style="width:100px; height:40px ">Thêm mới</a>

<form name="frmloaihang" action="" method="post" class="text-center" style="margin-left: 250px;">
    <div class="card mt-3">

        <div class="card-header">
            QUẢN LÝ HÓA ĐƠN
        </div>
        <div class="card-body">
            <table class="table table-striped table">
                <thead>
                    <tr class="bg-info">
                        <th scope="col"></th>
                        <th scope="col">Mã số hóa đơn</th>
                        <th scope="col">Mã khách hàng</th>
                        <th scope="col">Ngày đặt</th>
                        <th scope="col">Tổng tiền</th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>

                    <?php
                    $hd = new hoadon();
                    $result = $hd->gethoadon();
                    while ($set = $result->fetch()) :
                    ?>
                        <tr>
                            <td><?php echo $set['masohd'] ?></td>
                            <td><?php echo $set['makh'] ?></td>
                            <td><?php echo $set['ngaydat'] ?></td>
                            <td><?php echo $set['tongtien'] ?></td>
                            <td>
                                <a href="index.php?action=hoadon&act=delete&id=<?php echo $set['masohd']?>" class="btn btn-warning">Xoá</a>
                                <a href="index.php?action=hoadon&act=update&id=<?php echo $set['masohd']?>" class="btn btn-info">Sửa</a>
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