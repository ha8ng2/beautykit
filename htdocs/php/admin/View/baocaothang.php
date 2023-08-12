<meta charset="UTF-8">
 <!-- <div class="card mt-3">
          <div class="card-header info">
            THỐNG KÊ
          </div>
          <div class="card-body">
            <div class="list-group">
              <a href="?action=thong_ke&lich=ngay" class="list_group-item">ngày</a>
              <a href="?action=thong_ke&lich=ngay" class="list_group-item">tháng</a>
              <a href="?action=thong_ke&lich=ngay" class="list_group-item">năm</a>
            </div>
            <div class="w-75"></div>
            <div>
              <form action="" method="POST">
              <input type="number" name="so_ngay" value="">Trước đến nay<button>Thống kê</button>
             </form>
            </div>
            <div id="chart_div"></div>
          </div>
        </div> -->
 <!--Load the AJAX API-->
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 <script type="text/javascript">
   google.load('visualization', '1.0', {
     'packages': ['corechart']
   });
   google.setOnLoadCallback(drawVisualization);

   function drawVisualization() {
     //thống kê số lượng bán hàng theo mặt hàng vẽ bieu do tron
     var data = new google.visualization.DataTable();
     var tenhh = new Array();
     var soluongban = new Array();
     var rows = new Array();
     var datahh = 0;
     var slban = 0;

     <?php
      $hh = new hanghoa();
      $result = $hh->getbaocao_Thang();
      while ($set = $result->fetch()) {
        $tenhh = $set['tenhh'];
        $soluong = $set['soluong'];
        echo "tenhh.push('" . $tenhh . "');";
        echo "soluongban.push('" . $soluong . "');";
      }
      ?>
     //tao dong
     for (var i = 0; i < tenhh.length; i++) {
       datahh = tenhh[i];
       slban = parseInt(soluongban[i]);
       rows.push([datahh, slban]);
     }
     // tao cot trong datatable
     data.addColumn('string', "Loại sản phẩm");
     data.addColumn('number', "Số lượng sản phẩm theo tháng");
     data.addRows(rows);
     //option
     var option = {
       title: 'Báo cáo sản phẩm theo Tháng',
       width: 800,
       height: 400,
       backgroundColor: '#ffffff',
       colors: ['#f88'],
       is3D: true
     };
     var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
     chart.draw(data, option);
   }
 </script>
 <div class="thongke">
   <div style=" width:50%;  float: left;" id="chart_div">Thống Kê</div>
 </div>
