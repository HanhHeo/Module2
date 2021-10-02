<?php 
$discount_amount = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $product_description = $_POST["product_description"];
        $list_price = $_POST["list_price"];
        $discount_percent = $_POST["discount_percent"];
    }
    for($i = 0; $i < $list_price; $i++){
        $discount_amount =  $list_price * $discount_percent * 0.1 ;
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giá thành sau khi chiết khấu</title>
</head>
<style>
    .container {
        padding: 10px;
        border: 1px solid #000;
        margin: auto;
        border-radius: 10px;
        width: 350px;
        height: 300px;
    }
    h1 {
        color: blue;
    }
</style>
<body>
    <div class = "container">
          <h1>Giá thành sau khi chiết khấu</h1>
          Product Description : <?php echo $_POST["product_description"] ?>; <br> <br>
          List Price : <?php echo $_POST["list_price"] ?>; <br> <br>
          Discount Percent: <?php echo $_POST["discount_percent"] ?>; <br> <br>
          Discount Amount: <?php echo $discount_amount ?>; <br> <br>
          Thank kiu vinamilk !! ^_^

    </div>   
</body>
</html>