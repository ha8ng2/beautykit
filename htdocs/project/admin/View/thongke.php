<meta charset="UTF-8">
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 <script type="text/javascript">
   google.load('visualization', '1.0', {
     'packages': ['corechart']
   });
   google.setOnLoadCallback(drawVisualization);

   function drawVisualization() {
     var data = new google.visualization.DataTable();
     var tenhh = new Array();
     var soluongban = new Array();
     var rows = new Array(); //MẢNG CHỨA DÒNG VÀ CỘT
     var datahh = 0;
     var slban = 0;

     <?php
      $hh = new hanghoa();
      $month = 1;
      if (isset($_POST['month'])) {
        $month = $_POST['month'];
      }
      $result = $hh->getThongKe_MatHang($month);
      while ($set = $result->fetch()) {
        $tenhh = $set['tenhh']; //
        $soluong = $set['soluong']; //1
        echo "tenhh.push('" . $tenhh . "');";
        echo "soluongban.push('" . $soluong . "');";
      }
      ?>
     for (var i = 0; i < tenhh.length; i++) {
       datahh = tenhh[i];
       slban = parseInt(soluongban[i]);
       rows.push([datahh, slban]); 
     }
     data.addColumn('string', "Hàng hóa");
     data.addColumn('number', "Số Lượng Bán")
     data.addRows(rows);
     var option = {
       title: 'Thống kê số lượng bán',
       'width': 600,
       'height': 400,
       'backgroundColor': '#ffffff',
       is3D: true
     };
     var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
     chart.draw(data, option);

   }
 </script>
 <div class="thongke">
   <div style=" width:50%;  float: left;" id="chart_div">Thống Kê</div>
 </div>