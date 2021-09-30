<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Value Calculator</title>
</head>
<style>
        .container {
             height: 150px;
             width: 300px;
             margin: 0 ;
             padding: 10px;
             /* border: 1px #CCC solid; */
             border-radius: 10px;
             background: #ffcc99 ;

             margin: auto;
        }
        .input {
            border-radius: 10rem;
           
             
        }
        .btn:hover {
            border-radius: 5px;
            color : red;
            background: grey;
            cursor: pointer;

        }
    </style>
<body>
    
     <?php 
      $inventment_amount = "";
      if($_SERVER["REQUEST_METHOD"] == "POST") {
          $inventment_amount = $_POST["inventment_amount"];
          $yearly_rate = $_POST["yearly_rate"];
          $years = $_POST["years"];
           
          for ($i = 0; $i < $years; $i++) {
            $inventment_amount = $inventment_amount + ($inventment_amount * $yearly_rate) ;
        }
      }
     
     ?>
      
    <form method="post" action="">
        <div class = "container">
            Inventment Amount <input type="text" name="inventment_amount" placeholder="nhập vào đây" /> <br> <br>
            Yearly Interest Rate <input type="text" name="yearly_rate" placeholder="nhập vào đây" /> <br> <br>
            Number of Years <input type="text" name="years" placeholder="nhập vào đây" /> <br> <br>
            <input type="submit" value="Calculate" class = "btn">
            <br>
            <?php echo "Tổng tiền : " . $inventment_amount ?>
        
        </div>
    </form>
</body>

</html>