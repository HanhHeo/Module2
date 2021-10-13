<?php
session_start();
// session_destroy();die();

$orgin_numbers = [];
for( $i = 1; $i <= 10; $i++ ){
	$orgin_numbers[] = $i;
}

$the_numbers = $orgin_numbers;

/*
Mảng	: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
Chỉ số	:  0  1  2  3  4  5  6  7  8  9 
*/

$L = 0;
$R = count($orgin_numbers) - 1;//9
$M = floor( ( $R + $L ) / 2 ) ;//9 + 0 / 2 = 4.5 => 4

$guest_number = $orgin_numbers[$M];
 
$question = 'Có phải là số '.$guest_number.' hay không ?';



if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
	$answer = $_REQUEST['answer'];

	//lần trả lời 2 trở đi
	if( isset( $_SESSION['orgin_numbers'] ) ){
		$orgin_numbers 	= $_SESSION['orgin_numbers'];
		$L 				= $_SESSION['L'];//5
		$R 				= $_SESSION['R'];//9
		$M 				= floor( ( $R + $L ) / 2 ) ;
	}

	switch ($answer) {
		case 'greater':
		/*
		Mảng	: [6, 7, 8, 9, 10]
		Chỉ số	:  5  6  7  8  9 
		*/
			$L = $M + 1;

			$orgin_numbers = [];
			for ($i = $L; $i <= $R ; $i++) { 
				$orgin_numbers[$i] = $the_numbers[$i];
			}

			$_SESSION['orgin_numbers'] 	= $orgin_numbers;
			$_SESSION['L'] 			= $L;//5
			$_SESSION['R'] 			= $R;//9

			break;
		case 'lower':
			/*
				Mảng	: [1, 2, 3, 4]
				Chỉ số	:  0  1  2  3 
			*/
			$R = $M - 1;
			$orgin_numbers = [];
			for ($i = $L; $i <= $R ; $i++) { 
				$orgin_numbers[$i] = $the_numbers[$i];
			}

			$_SESSION['orgin_numbers'] 	= $orgin_numbers;
			$_SESSION['L'] 			= $L;//0
			$_SESSION['R'] 			= $R;//3	

			break;
		default:
			$question = 'Trò chơi kết thúc !';
			unset($_SESSION['orgin_numbers']);
			break;
	}

	//In ra câu đoán
	// if( isset( $_SESSION['orgin_numbers'] ) ){
	// 	$orgin_numbers 	= $_SESSION['orgin_numbers'];
	// 	$L 				= $_SESSION['L'];//5
	// 	$R 				= $_SESSION['R'];//9
	// 	$M 				= floor( ( $R + $L ) / 2 ) ;
	// 	$guest_number = $the_numbers[$M];
	// 	$question = 'Có phải là số '.$guest_number.' hay không ?';
	// }
}

// echo '<pre>';
// print_r($orgin_numbers);
// echo '</pre>';


?>
 <style>
     .container {
         border             :2px solid black;
         padding            :10px;
         border-radius      :5px;
         width              : 393px;
         height             : 467px;
         margin             : auto;
         background-image : url("images/game.png");
         
     }
     img{
         width: 60px;
         height: 60px;
         overflow : hidden;
     }
     /* h1 {
         color          : transparent;
         font-size      : 50px;
         background-image: linear-gradient(to right bottom,#ff9900,#66ff66);
         background-clip: text;
        -webkit-background-clip: text;
        display         : inline-block;
        font-weight     : bold; */
     
       /* transition: transform ease 0.5s; */
     /* } */
     .btn:hover {
         color: red;
        cursor: pointer;
        
         
     }
     .select {
         width: 100%;
         margin-top: 203px;
         height: 25px;
         border-radius: 5px;
     }
     .btn {
         width: 100%;
         height: 30px;
         border-radius: 10px;
     }
 </style>
<form action="" method="POST">
	
	<p>
        <div class = "container">
        <!-- <h1>Guess the Number Game</h1> -->
		<select class = "select" name="answer">
			<option value="greater">Bigger</option>
			<option value="lower">Smaller</option>
			<option value="equal">Equal</option>
		</select>
	</p>
	<p>
		<button class = "btn" type="submit" >Guess</button>
	</p>
    <p><?= $question; ?></p>
   
    </div>
</form>
<?php 
    echo '<pre>';
    print_r($orgin_numbers);
    echo '</pre>';