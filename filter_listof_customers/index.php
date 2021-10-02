<?php

$customer_list = [
    "1" => [     "name" => "Tokuda", 
                 "date_of_birth" => "1963/08/20", 
                 "address" => "Japan", 
                 "images" => "images/tokuda.jpg"],
    "2" => [     "name" => "Maria Ozawa", 
                 "date_of_birth" => "1985/08/20", 
                 "address" => "Japan", 
                 "images" => "images/ozawa.jpg"],
    "3" => [    "name" => "Ngọc Trinh", 
                 "date_of_birth" => "1989/08/21", 
                 "address" => "Hà Nội", 
                 "images" => "images/ngoctrinh.jpg"],
    "4" => [      "name" => "Trần Đức Bo", 
                  "date_of_birth" => "2000/08/22", 
                  "address" => "Hà Tây", 
                  "images" => "images/tranducbo.jpg"],
    "5" => [       "name" => "Khaby Lame", 
                  "date_of_birth" => "2001/08/17", 
                  "address" => "Italia", 
                  "images" => "images/khabylame.jpg"]
                ];

function searchByDate($customers, $from_date, $to_date) {
    if(empty($from_date) && empty($to_date)){
        return $customers;
    }
    $filtered_customers = [];
    foreach($customers as $customer){
        if(!empty($from_date) && (strtotime($customer['date_of_birth']) < strtotime($from_date)))
            continue;
        if(!empty($to_date) && (strtotime($customer['date_of_birth']) > strtotime($to_date)))
            continue;
        $filtered_customers[] = $customer;
    }
    return $filtered_customers;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <style>
            .container {
                text-align: center;
            }
            
            h2 {
                text-align: center;
            }
            table {
                margin: auto;
                width: 100%;
                border: 0px solid #000;
             }
             td,tr {
                 text-align: center;
                 width: 50px;
                 height: 50px;
             }
             th{
                 color:red;
             }
             h2{
                 color:blueviolet;
            }
            .btn:hover {
             color:red;
             cursor: pointer;
            }
        </style>
    <?php
        $from_date = NULL;
        $to_date = NULL;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $from_date = $_POST["from"];
            $to_date = $_POST["to"];
        }
        $filtered_customers = searchByDate($customer_list, $from_date, $to_date);
    ?>
        <form method="post">
            <div class = "container">
          Từ: <input id = "from" type="text" name="from" placeholder="yyyyy/mm/dd" value="<?php echo isset($from_date)?$from_date:''; ?>"/>
          Đến: <input id = "to" type="text" name="to" placeholder="yyyy/mm/dd" value="<?php echo isset($to_date)?$to_date:''; ?>"/>
          <input type = "submit" id = "submit" value = "Lọc" class = "btn"/>
          </div>
        </form>
         
        <table border="1">
          <caption><h2>CUSTOMER LIST</h2></caption>
          <tr>
            <th>No</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
          </tr>
          <?php foreach($filtered_customers as $index=> $customer): ?>
            <tr>
                <td><?php echo $index;?></td>
                <td><?php echo $customer['name'];?></td>
                <td><?php echo $customer['date_of_birth'];?></td>
                <td><?php echo $customer['address'];?></td>
                <td><div class="profile"><img src="<?php echo $customer['images'];?>" width="100px" height="100px"/> </div> </td>
            </tr>
            <?php endforeach; ?>
        </table>
       
</body>
</html>