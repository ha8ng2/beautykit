<form name="frmloaihang" action="" method="post">


<a href="index.php?action=loaisanpham&act=add" class="btn btn-info">Thêm mới</a>
  <div class="card mt-3 text-center" style="margin-left: 400px;">
    <div class="card-header text-center">
      QUẢN LÝ LOẠI SẢN PHẨM
    </div>
    <div class="card-body">
      <table class="table table-striped table">
        <thead>
          <tr class="bg-info">
            <th scope="col"></th>
            <th scope="col">Mã loại</th>
            <th scope="col">Tên loại</th>
            <th scope="col">Menu</th>
            <th scope="col"></th>

          </tr>
        </thead>
        <tbody>
          <?php
            $lsp = new loaisanpham();
            $Result = $lsp->getLoaiSanPham();
            while ($set = $Result->fetch()) :
          ?>
        
          <tr>
            <td><?php echo $set['maloai']?></td>
            <td><?php echo $set['tenloai']?></td>
            <td><?php echo $set['idmenu']?></td>
            <td>
              <a href="index.php?action=loaisanpham&act=delete&id=<?php echo $set['maloai']?>" class="btn btn-warning">Xoá</a>
              <a href="index.php?action=loaisanpham&act=update&id=<?php echo $set['maloai']?>" class="btn btn-info">Sửa</a>
            </td>
          </tr>

          <input type="hidden" name="xoa" value="" />
          <?php
            endwhile;
          ?>
        </tbody>
      </table>
    </div>
    
  </div>
</form>