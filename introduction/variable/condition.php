<?php

/**
 * Series of exercises on PHP conditional structures.
 */

// 1.1 Clean your room Exercise 

$room_is_filthy = true;

if ($room_is_filthy) {
    echo "Yuk, Room is dirty : let's clean it up !";
    // cleanup_room();
    echo "<br>Room is now clean!";
    $room_is_filthy = false;
} else {
    echo "<br>Nothing to do, room is neat.";
}


// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[4];

if ($room_filthiness == $possible_states[0]) {
    echo "<br>Yuk, Room is Disgusting! Let's clean it up !";
} else if ($room_filthiness == $possible_states[1]) {
    echo "<br>Yuk, Room is dirty : let's clean it up !";
    // ...
} else if ($room_filthiness == $possible_states[2]) {
    echo "<br>clean";
} else {
    echo "<br>Nothing to do, room is neat.";
}

// 2. "Different greetings according to time" Exercise

$now = date('G'); // How to get the current time in PHP ? Google is your friend ;-)

// Test the value of $now and display the right message according to the specifications.
if ($now < 9) {
    echo '<p>Good morning !</p>';
} else if ($now < 12) {
    echo '<p>Good day !</p>';
} else if ($now < 16) {
    echo '<p>Good afternoon !</p>';
} else if ($now < 21) {
    echo '<p>Good evening !</p>';
} else if ($now < 5) {
    echo '<p>Good night !</p>';
}

// 3,4. "Different greetings according to age" Exercise

if (isset($_GET['age'])) {
    // Form processing
    $int = (is_numeric($_GET['age']) ? (int) $_GET['age'] : 0);
    $gender = $_GET['gender'];
    $english = $_GET['english'] == 'true' ? true : false;
    if ($gender == 'male' and $english) {
        if ($int < 12) {
            echo '<p>Hello kiddo!</p>';
        } else if ($int < 18) {
            echo '<p>Hello Teenager !</p>';
        } else if ($int < 115) {
            echo '<p>Hello Adult !</p>';
        } else {
            echo '<p>Wow! Still alive ? Are you a robot, like me ? Can I hug you ?</p>';
        }
    } else if ($gender == 'male' and !$english) {
        if ($int < 12) {
            echo '<p>Haloa kiddo!</p>';
        } else if ($int < 18) {
            echo '<p>Haloa Teenager !</p>';
        } else if ($int < 115) {
            echo '<p>Haloa Man !</p>';
        } else {
            echo '<p>Wow! Still alive ? Are you a robot, like me ? Can I hug you ?</p>';
        }
    } else if ($gender == 'female' and !$english) {
        if ($int < 12) {
            echo '<p>Haloa Girl!</p>';
        } else if ($int < 18) {
            echo '<p>Haloa Teenage girl !</p>';
        } else if ($int < 115) {
            echo '<p>Haloa Female !</p>';
        } else {
            echo '<p>Wow! Still alive ? Are you a robot, like me ? Can I hug you ?</p>';
        }
    } else if ($gender == 'female' and $english) {
        if ($int < 12) {
            echo '<p>Hello Girl!</p>';
        } else if ($int < 18) {
            echo '<p>Hello Teenage girl !</p>';
        } else if ($int < 115) {
            echo '<p>Hello Female !</p>';
        } else {
            echo '<p>Wow! Still alive ? Are you a robot, like me ? Can I hug you ?</p>';
        }
    }
}
// Form (incomplete)
?>
<form method="get" action="">
    <label for="age">Age</label>
    <input type="" name="age">
    <p>Are you a male or a female?</p>
    <label for="male">Male</label>
    <input type="radio" id="male" name="gender" value="male">
    <label for="female">Female</label>
    <input type="radio" id="female" name="gender" value="female">
    <p>Do you speak english</p>
    <label for="yes">yes</label>
    <input type="radio" id="yes" name="english" value=true>
    <label for="no">no</label>
    <input type="radio" id="no" name="english" value=false>
    <br>
    <input type="submit" name="submit" value="Greet me now">
</form>
<br>
<br>

<?php
if (isset($_GET['age']) and isset($_GET['gender'])) {
    $int = (is_numeric($_GET['age']) ? (int) $_GET['age'] : 0);
    $gender = $_GET['gender'];
    $result = '<p>Sorry you don\'t fit the criteria</p>';
    if (21 < $int  and $int < 40  and $gender == 'female') {
        $result = '<p>welcome to the team !</p>';
    }
    echo $result;
}


//5,6 The girl Soccer team
?>
<form method="get" action="">
    <label for="age">Age</label>
    <input type="" name="age">
    <p>Are you a male or a female?</p>
    <label for="male">Male</label>
    <input type="radio" id="male" name="gender" value="male">
    <label for="female">Female</label>
    <input type="radio" id="female" name="gender" value="female">
    <br>
    <input type="submit" name="submit" value="Be part of the team">
</form>
<br>
<br>

<?php
//7 School sucks!
if (isset($_GET['grade'])) {
    $int = (is_numeric($_GET['grade']) ? (int) $_GET['grade'] : 0);
    $result = '<p>Too good to be true : confront the cheater! </p>';
    if ($int < 4)
        $result = '<p>This work is really bad. What a dumb kid! </p>';
    else if ($int <= 9)
        $result = '<p>This is not sufficient. More studying is required</p>';
    else if ($int == 10)
        $result = '<p>barely enough!</p>';
    else if ($int <= 14)
        $result = '<p>Not bad!</p>';
    else if ($int <= 18)
        $result = '<p>Bravo, bravissimo!</p>';
    else
        $result = '<p>Too good to be true : confront the cheater!</p>';
    echo $result;
}


?>
<form method="get" action="">
    <label for="grade">Enter your grade</label>
    <input type="" name="grade">
    <input type="submit" name="submit" value="Be part of the team">
</form>
<br>
<br>