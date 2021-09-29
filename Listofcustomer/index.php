<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khách hàng</title>
</head>
<body>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
</style>
<body>
<?php
$customerlist = [
    "1" => ["ten" => "Tokuda", 
                 "ngaysinh" => "1963-08-20", 
                 "diachi" => "Japan", 
                 "anh" => "images/tokuda.jpg"],
    "2" => ["ten" => "Maria Ozawa", 
                 "ngaysinh" => "1985-08-20", 
                 "diachi" => "Japan", 
                 "anh" => "images/ozawa.jpg"],
    "3" => ["ten" => "Ngọc Trinh", 
                 "ngaysinh" => "1989-08-21", 
                 "diachi" => "Hà Nội", 
                 "anh" => "images/ngoctrinh.jpg"],
    "4" => ["ten" => "Trần Đức Bo", 
                  "ngaysinh" => "2000-08-22", 
                  "diachi" => "Hà Tây", 
                  "anh" => "images/tranducbo.jpg"],
    "5" => ["ten" => "Khaby Lame", 
                  "ngaysinh" => "2001-08-17", 
                  "diachi" => "Italia", 
                  "anh" => "images/khabylame.jpg"]
                ];
?> 
 <table border="0">
  <caption><h1>Danh sách khách hàng</h1></caption>
  <tr>
    <th>STT</th>
    <th>Tên</th>
    <th>Ngày sinh</th>
    <th>Địa chỉ</th>
    <th>Ảnh</th>
  </tr>
  <?php
    foreach($customerlist as $key => $values){
      echo "<tr>";
      echo "<td>".$key."</td>";
      echo "<td>".$values['ten']."</td>";
      echo "<td>".$values['ngaysinh']."</td>";
      echo "<td>".$values['diachi']."</td>";
      echo "<td><image src ='".$values['anh']."' width = '60px' height ='60px'/></td>";
      echo "</tr>";
    }
?>
 </table>
</body>
</html>

