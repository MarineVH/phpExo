<?php
/**
 * Series of exercises on PHP conditional structures.
*/


// 1.1 Clean your room Exercise 

/*$room_is_filthy = true;

if( $room_is_filthy == true ){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
} 
*/


// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// When testing, change the index value to navigate to the possible array values
/*$room_filthiness = $possible_states[3]; 

if( $room_filthiness == $possible_states[0] ){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness == $possible_states[1] ){
	echo "Yuk, Room is filthy : let's clean it up !";
// ...
} else if( $room_filthiness == $possible_states[2] ){
    echo "Yuk, Room is dirty : let's clean it up !";
} else {
	echo "<br>Nothing to do, room is neat.";
}*/

// 2. "Different greetings according to time" Exercise

$now = date("H:i"); // How to get the current time in PHP ? Google is your friend ;-)

// Test the value of $now and display the right message according to the specifications.
if($now >= 5 && $now <= 9){
    echo "Good morning !";
} elseif($now > 9 && $now <= 12){
    echo "Good day !";
} elseif($now > 12 && $now <= 16){
    echo "Good afternoon !";
} elseif($now > 16 && $now <= 21){
    echo "Good evening !";
} else {
    echo "Good night !";
}

// 3. "Different greetings according to age" Exercise

if (isset($_GET['age'])){
	// Form processing
    if ($_GET['age'] < 12){
        echo "Hello kiddo!";
    } elseif ($_GET['age'] >= 12 && $_GET['age'] < 18){
        echo "Hello Teenager!";
    } elseif ($_GET['age'] >= 18 && $_GET['age'] < 115){
        echo "Hello Adult!";
    } else ($_GET['age'] >= 115){
        echo "Wow! Still alive? Are you a robot, like me? Can I hug you?";
    }
}
// Form (incomplete)
?>
<form method="get" action="conditions.php">
	<label for="age">Please type your age :</label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form>



