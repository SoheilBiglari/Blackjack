<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackjack - Game</title>
</head>
<body>

<form method="get" action="">
        <label for="submit">What would you like to do?</label> <br>
        <input type="submit" name="hitButton" value="Hit me!">
        <input type="submit" name="standButton" value="Stand">
        <input type="submit" name="foldButton" value="Fold">
    </form>

<?php  

//carddeck
$dec = ['A' => '11',
'2' => '2',
'3' => '3',
'4' => '4',
'5' => '5',
'6' => '6',
'7' => '7',
'8' => '8',
'9' => '9',
'10' => '10',
'K' => '10',
'Q' => '10',
'J' => '10'];

$random_key = array_rand($dec, 2);
    $result;
    echo $dec[$random_key[0]] . " " .
         $dec[$random_key[1]];
//buttons
switch ($_GET['hitButton']) {
    case "Hit me!":

$result = $dec[$random_key[0]] + $dec[$random_key[1]];
echo $result;
header("Location:benTest.php");
        break;
 }
switch ($_GET['standButton']) {
    case "Stand":
        echo "stand";
        break;
}
switch ($_GET['foldButton']) {
    case "Fold":
        echo "You lose!";
        break;
}

// function checkWinner($player, $dealer) {	
// 		if($player == 21 && $dealer == 21) {
// 			echo ("You lose!");

// 		}elseif($player > 21 || $dealer == 21) {
// 			echo ("You lose!");
			
// 		}elseif($dealer > 21 || $player == 21) {
// 			echo ("You win!");

// 		}else {
// 			return false;
		
// 	}
// }

// checkWinner(21,18);

?>

</body>
</html>
