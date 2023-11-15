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

date_default_timezone_set("Europe/Brussels");
$now = date("H"); // How to get the current time in PHP ? Google is your friend ;-)
echo "$now";
// Test the value of $now and display the right message according to the specifications.
if($now >= 5 && $now <= 9){
    echo "Good morning!";
} elseif($now >= 9 && $now <= 12){
    echo "Good day!";
} elseif($now >= 12 && $now <= 16){
    echo "Good afternoon!";
} elseif($now >= 16 && $now <= 21){
    echo "Good evening!";
} else {
    echo "Good night!";
}

// 3. "Different greetings according to age and gender and mothertongue" Exercise
if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['mothertongue'])){
    if ($_GET['mothertongue'] == "yes"){
        if ($_GET['gender'] == "Man"){
	    // Form processing
            if ($_GET['age'] < 12 && $_GET['gender'] == "Man"){
                echo "Hello mister kiddo!";
            } elseif ($_GET['age'] >= 12 && $_GET['age'] < 18){
                echo "Hello mister Teenager!";
            } elseif ($_GET['age'] >= 18 && $_GET['age'] < 115){
                echo "Hello mister Adult!";
            } else {
                echo "Wow! Still alive? Are you a robot, like me? Can I hug you?";
            }
        } else {
        // Form processing
            if ($_GET['age'] < 12){
                echo "Hello miss kiddo!";
            } elseif ($_GET['age'] >= 12 && $_GET['age'] < 18){
                echo "Hello miss Teenager!";
            } elseif ($_GET['age'] >= 18 && $_GET['age'] < 115){
                echo "Hello miss Adult!";
            } else {
                echo "Wow! Still alive? Are you a robot, like me? Can I hug you?";
            }
        }
    } else {
        if ($_GET['gender'] == "Man"){
            // Form processing
                if ($_GET['age'] < 12 && $_GET['gender'] == "Man"){
                    echo "Aloha mister kiddo!";
                } elseif ($_GET['age'] >= 12 && $_GET['age'] < 18){
                    echo "Aloha mister Teenager!";
                } elseif ($_GET['age'] >= 18 && $_GET['age'] < 115){
                    echo "Aloha mister Adult!";
                } else {
                    echo "Wow! Still alive? Are you a robot, like me? Can I hug you?";
                }
            } else {
            // Form processing
                if ($_GET['age'] < 12){
                    echo "Aloha miss kiddo!";
                } elseif ($_GET['age'] >= 12 && $_GET['age'] < 18){
                    echo "Aloha miss Teenager!";
                } elseif ($_GET['age'] >= 18 && $_GET['age'] < 115){
                    echo "Aloha miss Adult!";
                } else {
                    echo "Wow! Still alive? Are you a robot, like me? Can I hug you?";
                }
            }
    }
}

// Form (incomplete)
?>
<form method="get" action="conditions.php">
    <label for="mothertongue">Do you speak English ?</label>
    <input type="radio" name="mothertongue" value="yes">
    <label for="mothertongue">yes</label>
    <input type="radio" name="mothertongue" value="no">
    <label for="mothertongue">no</label></br>
    <input type="radio" name="gender" value="Man">
    <label for="gender">Man</label>
    <input type="radio" name="gender" value="Woman">
    <label for="gender">Woman</label></br>
	<label for="age">Please type your age :</label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form>