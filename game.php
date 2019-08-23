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

$hand = [];

session_start(); //To hold your value until you say so
$random_key = array_rand($dec, 2);
$card1 = $_SESSION['random1'];
$card2 = $_SESSION['random2'];
array_push($hand, $card1, $card2);


//declare "vaste" value
if(!isset($_SESSION['random1'])){
    $_SESSION['random1'] = $dec[$random_key[1]];
    }

if(!isset($_SESSION['random2'])){
    $_SESSION['random2'] = $dec[$random_key[0]];
     }

     


switch ($_GET['hitButton']) {
    case "Hit me!":
    
       
  
        break;
 }
switch ($_GET['standButton']) {
    case "Stand":
    unset($_SESSION['random1']);//reset 
    unset($_SESSION['random2']);//reset
    unset($hand);
        break;
}
switch ($_GET['foldButton']) {
    case "Fold":
        echo "You lose!";
        break;
}
print_r($hand);
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackjack - Game</title>
    
</head>
<body>

<form method="get">
        <label for="submit">What would you like to do?</label> <br>
        <input type="submit" name="hitButton" value="Hit me!">
        <input type="submit" name="standButton" value="Stand">
        <input type="submit" name="foldButton" value="Fold">
    </form>



</body>
</html>