<?php
session_start();
// session_destroy();
//0981568889 0982441285 0915132537 0903237567 0378466496
// khai báo mảng
    $_SESSION['Viettle']  = [];
    $_SESSION['Vina']     = [];
    $_SESSION['Mobile']   = [];

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $string_phone = $_POST["phone"];
    $array_phone  = explode(" ", $string_phone);
    
    foreach ($array_phone as $key => $value){
        // var_dump(substr($value, 0, 3));

        if (substr($value, 0, 3) == "098" || substr($value, 0, 3) == "097" || substr($value, 0, 3) == "037") {
            array_push($_SESSION['Viettle'], $value);
        }
        if (substr($value, 0, 3) == "091"  || substr($value, 0, 3) == "092" || substr($value, 0, 3) == "088") {
            array_push($_SESSION['Vina'], $value);
        }
        if (substr($value, 0, 3) == "090"  || substr($value, 0, 3) == "092" || substr($value, 0, 3) == "032") {
            array_push($_SESSION['Mobile'], $value);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra số điện thoại</title>
</head>
<style>
    .container {
        border: 1px solid black;
        border-radius: 10px;
        padding: 10px;
        background-color: darkorange;
        width: 400px;
        height: 250px;
    }
    .check {
        width : 100%;
        height: 50px;
        cursor: pointer;
        border-radius: 5px;
        background-image: linear-gradient( to left ,green,blue,yellow );    
    }
    .check:hover {
        color: red;
    }
    textarea{
        width: 100%;
        height: 150px;
    }
</style>
<body>
    <div class="container">
        <form action="" method="post">
            Số điện thoại:<textarea type="text" name="phone"></textarea> <br> <br>
            <input class="check" type="submit" value = "CHECK">
        </form>
    </div>
<hr>
    <table border="1">
        <tr>
            <td>Viettle</td>
            <td>Vina</td>
            <td>Mobile</td>
        </tr>
        <tr>
            <td><?php
                if (isset($_SESSION['Viettle'])) {
                    foreach ($_SESSION['Viettle'] as $value) {
                        echo $value . "<br>";
                    }
                }
                ?>
            </td>
            <td><?php
                if (isset($_SESSION['Vina'])) {
                    foreach ($_SESSION['Vina'] as $value) {
                        echo $value . "<br>";
                    }
                }
                ?>
            </td>
            <td>
                <?php
                if (isset($_SESSION['Mobile'])) {
                    foreach ($_SESSION['Mobile'] as $value) {
                        echo $value . "<br>";
                    }
                }
                ?>
            </td>
        </tr>
    </table>
</body>

</html>