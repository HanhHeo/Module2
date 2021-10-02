<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Product Discount Calculator</title>
</head>
<style>
        .container {
            border: 1px #000 solid;
            padding: 10px;
            margin: auto;
            height: 300px;
            width: 350px;
            border-radius: 10px;
        }
        h1 {
            color: blue;
        }
        .input {
         border-radius: 7px;

        }
        .price {
            margin-left: 67px;
        }
        .percent{
            margin-left: 18px;
        }
        .sub {
            width: 100%;
            height: 50px;
            background-color: #007fff;  
            border-radius: 10px;
        }
    </style>
<body>
   

    <form method="post" action="display_discount.php">
        <div class="container">
            <h1 >Product Discount Calculator</h1>
            Product Description <input type="text" name="product_description" placeholder="Nhập vào đây"><br> <br>
            List Price <input type="text" name="list_price" placeholder="Nhập vào đây" class = "price"><br> <br>
            Discount Percent <input type="text" name="discount_percent" placeholder="Nhập vào đây" class ="percent"><br> <br>
            <input type="submit" value="Calculate Discount" class="sub">
           
        </div>
    </form>
</body>

</html>