<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máy tính</title>
</head>
<style>
    .container {
        height: 250px;
        width: 304px;
        margin: 0;
        padding: 10px;
        border: 1px #CCC solid;
        border-radius: 10px;
        background: orange;
        margin: auto;
    }

    .input {
        border-radius: 10px;
        
    }
    .opera {
        width: 73px;
        margin-left: 45px
    }
    .first {
      margin-left: 17px;
    }
    .btn:hover {
      color : green;
      cursor: pointer;
      background: grey ;
      border-radius: 5px;
    }
    .caption {
        color : blueviolet;
    }
</style>



<body>
    <?php
    $result = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first_operand = $_POST["first_operand"];
        $operand  = $_POST["operand"];
        $second_operand = $_POST["second_operand"];
        if ($operand == "1") {
            $result = $first_operand + $second_operand;
        } else if ($operand == "2") {
            $result = $first_operand - $second_operand;
        } else if ($operand == "3") {
            $result = $first_operand * $second_operand;
        } else if ($operand == "4") {
            if ($second_operand == 0) {
                $result = "error";
            } else {
                $result = $first_operand / $second_operand;
            }
        }
    }


    ?>
    <div class="container">
        <form method="post">
            <h1 class = "caption">Simple Calcutor</h1>


            First operand <input type="text" name="first_operand" class = "first"> <br> <br>
            Operator <select name="operand" class="opera">
                <option value="1">Addition</option>
                <option value="2">Minus</option>
                <option value="3">Multiply</option>
                <option value="4">Divide</option>
            </select>
            <br> <br>
            Second operand <input type="text" name="second_operand"> <br> <br>
            <input type="submit" value="Calculate" class = "btn"> <br> <br>


            <?php
            echo "Result: " . $result;
            ?>
    </div>
    </form>
</body>

</html>