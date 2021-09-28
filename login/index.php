<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chức năng đăng nhập</title>
</head>
<body>
<style>
         .container {
             height: 250px;
             width: 200px;
             margin: 0 ;
             padding: 10px;
             border: 1px #CCC solid;
             border-radius: 10px;
             background: yellowgreen;
             margin: auto;
         }
         .container input {
             padding: 5px; 
             margin: 5px;
            
         }
         .container h1 {
             color: blue;
             text-align: center;
         }
         .btn {
             text-align: center;
             color: blue;
             border-radius: 5px;
             
         }
    </style>
   
    <form>
        <div class="container">
            <h1>Login</h1>
            <input type="text" name = "username" placeholder="username">
            <input type="text" name = "password" placeholder="password">
            <input type="submit" value="Sign in" class = "btn">
        </div>
    </form>
    <?php
     if ( $_SERVER["REQUEST_METHOD"] == "POST"){
         $username = $_POST["username"];
         $password = $_POST["password"];
         if( $username === "admin" && $password === "admin"){
             echo " <h2> Welcome <span style = 'color:red'>" . $username. "</span> to website </h2>";
         } else {
             echo "<h2><span style='color:red'>Login Error </span></h2>";
         }
     }
    ?>

</body>
</html>