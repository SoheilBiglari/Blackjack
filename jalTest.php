<?php 

function checkWinner($player, $dealer) {	
	global $winner;
	if($winner != true) {
		if(cardSum($player) == 21 && cardSum($dealer) == 21) {
			print notification("You lose!");
			$winner = true;
		}elseif(cardSum($player) > 21 || cardSum($dealer) == 21) {
			print notification("You lose!");
			$winner = true;
		}elseif(cardSum($dealer) > 21 || cardSum($player) == 21) {
			print notification("You win!");
            $winner = true;
		}else {
			return false;
		}
	}
}

checkWinner(20,18);
?>