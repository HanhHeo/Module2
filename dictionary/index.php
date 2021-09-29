<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Từ điển</title>
</head>

<body>
    <?php 
    $dictionary = array(
        "hello" => "xin chào",
        "how" => "thế nào",
        "book" => "quyển vở",
        "computer" => "máy tính",
        "love" => "yêu",
        "hate" => "ghét",
        "cry" => "khóc",
        "fast" => "nhanh",
        "slow" => "chậm"
    );
       if( $_SERVER["REQUEST_METHOD"] == "POST"){
           $searchword = $_POST["search"];
           $flag = 0;
           foreach ($dictionary as $key => $values) {
               if($key == $searchword){
                   echo "Từ: " . $key . ". <br>Nghĩa là: " . $values;
                   echo "</br>" ;
                   $flag = 1;
               }
           }
           if($flag == 0){
               echo "Không tìm thấy từ cần tra.";
           }
       }
    ?>
   <style>
       .input {
        width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
       }
       .submit {
        border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
       }
   </style>
     <h1>Từ điển Anh - Việt</h1>
    <form method="Post"> 
     <input type = "text" name = "search" placeholder = "nhập từ cần tìm">
     <input type = "submit" value = "Tìm">
    </form>

</body>
</html>