<div class="table-responsive" style="margin-top:50px">

    <form action="index.php?action=giohang&act=update" method="post">
       <h3> <a href="index.php?action=sanpham" class="text-uppercase" style="color:blue;">Thêm sản phẩm</a></h3>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <td colspan="5">
                        <h3 style="color: red;">THÔNG TIN GIỎ HÀNG</h3>
                    </td>
                </tr>
                <tr class="table-success text-center">
                    <th>Số TT</th>
                    <th>Thông Tin Sản Phẩm</th>
                    <th>Tùy Chọn Của Bạn</th>
                    <th >Giá</th>
                    <th>Chọn</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $tongtien = 0;
                if (isset($_SESSION['cart'])) {
                    $cart = $_SESSION['cart'];
                    foreach ($cart as $key => $value) :
                        ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><img width="50px" height="50px" src="Content/images/<?php echo $cart[$key]['hinh']; ?>">
                                <?php echo $cart[$key]['ten']; ?>
                                </td>
                                <td>Đơn Giá: <?php echo number_format($cart[$key]['dongia']); ?> <br>
                                 Số Lượng: <input type="text" name="newqty[<?php echo $key; ?>]" value="<?php echo $cart[$key]['soluong']; ?>" /><br />
                                    
                                </td>
                                <td>
                                <p style="float: right;"> 
                                        Thành Tiền : <?php echo $cart[$key]['total']; ?> <sup><u>đ</u></sup>
                                    </p>
                                </td>
                                <td>
                                <a href="index.php?action=giohang&act=del&id=<?php echo $key; ?>">
                                        <button type="button" class="btn btn-danger">Xóa</button>
                                    </a>
                                    <button type="submit" class="btn btn-secondary">Sửa</button>
                                </td>
                            </tr>
                        <?php
                            $tongtien = $tongtien + $cart[$key]['total'];
                        endforeach;
                }
                ?>
                <tr>
                    <td colspan="3">
                        <b>Tổng Tiền </b>
                    </td>
                    <td style="float: right; color: red">

                        <b> <?php $gh =new giohang();
                         echo $gh->getTotal(); ?><sup><u>đ</u></sup></b>
                    </td>
                    <td><a href="index.php?action=order">Thanh toán</a></td>
                </tr>
            </tbody>
        </table>

    </form>

</div>
</div>