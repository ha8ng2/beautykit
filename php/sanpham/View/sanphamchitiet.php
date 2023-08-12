<script type="text/javascript">

    function chonsize(a) {
        document.getElementById("size").value = a;

    }

</script>

<section>
    <div class="col-lg-3">
        <div class="tab-content">
            <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    //goi model de lay thonG tin
                    $hh = new  hanghoa();
                    $result = $hh->gethanghoaID($id);
                    $tenhh = $result['tenhh'];
                    $dongia = $result['dongia'];
                    $mota = $result['mota'];
                    $hinh = $result['hinh'];
                }
            ?>
            <div class="tab-pane active" id="">
                <img src="Content/images/<?php echo $hinh; ?> " alt="" width="200px" height="350px">
            </div>        
        </div>
    </div>
        <div class="col-lg-6" >
            <form action="index.php?action=giohang" method="post"> 
                <input type="hidden" name="mahh" value="<?php echo $id; ?>" />
                    <div class="col-lg-4">
                        <h4 class="product-title"  style="color:red;"> <?php echo $tenhh; ?> </h4>
                        <div class="rating">
                            <div class="stars">
                                <span class="fa fa-star checked"></span> 
                                <span class="fa fa-star "></span>
                                 <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span> 
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <h4 class="price">Giá bán: <?php echo $dongia; ?> đ</h4>
                        Số Lượng: <input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" />    
                        <div class="action" style="margin-top:15px;">
                            <button class="add-to-cart btn btn-warning" type="submit" data-toggle="modal" data-target="#myModal">
                                <a href="index.php?action=giohang&act=update"> <h6>THÊM VÀO GIỎ HÀNG</h6></a>
                            </button><br>
                            <button class="add-to-cart btn btn-danger" type="submit" data-toggle="modal" data-target="#myModal">
                                <a href="index.php?action=order"><h6>MUA NGAY</h6></a>
                            </button>
                        <div>
                    </div>    
                </div>
            </div>
        </form>
    </div>

        <div class="col-lg-3">
            <h3 style="color:blue">Mô tả sản phẩm</h3>
            <p class="product-description">
                <?php echo $mota; ?>
              </p>
        </div>        
     </div>               
     </div>
</section>
    <?php
        if (isset($_SESSION['makh'])) :
    ?>
    <section>
        <?php
            if (isset($_GET['id'])) {
                $mahh = $_GET['id'];
                $bl = new binhluan();
                $tong = $bl->getCountComment($mahh);
            }
        ?> 
        <hr>
        <form action="index.php?action=sanpham&act=comment&id=<?php echo $_GET['id']; ?>" method="post">
            <div class="row1" style=" margin-left:100px">
                <input type="hidden" name="txtmahh" value="" />
                <img src="Content/images/user-icon.png" width="30px" height="30px" style="margin-bottom:50px" />
                <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment" placeholder="Thêm bình luận">  </textarea>
            </div>
            <div>
                <input type="submit" class="btn btn-primary" id="submitButton" style="float: right; margin-right:1100px;" value="Bình Luận" />
            </div>
        </form>
            <div class="row">
                <p style="float: left; margin-left:100px"><b>Các bình luận</b></p>
                <p class="float-left"><b>Bình luận <?php echo $tong; ?></b></p>
                <hr>
            </div>
            <div class="row">
                <?php
                $result = $bl->getNoiDungComment($_GET['id']);
                while ($set = $result->fetch()):
                // while ($set = $result->fetch());
                ?>
                <div class="col-12">
                    <div class="row">
                        <img src="Content/images/user-icon.png" width="40px" height="40px" style="margin-bottom:50px; margin-left:100px">
                        <p  ><?php echo '<b>' . $set['username'] . ': </b>' . $set['noidung']; ?></p><br>

                    </div>
                </div>
                <?php
                endwhile;
                ?>
    </section>
<?php
endif;
?>
