<?php
//7 School sucks!
if (isset($_GET['grade'])) {
    $int = (is_numeric($_GET['grade']) ? (int) $_GET['grade'] : 0);
    switch (true) {
        case ($int >= 0 && $int < 4):
            echo '<p>This work is really bad. What a dumb kid! </p>';
            break;
        case ($int >= 4 && $int <= 9):
            echo '<p>This is not sufficient. More studying is required</p>';
            break;
        case ($int == 10):
            echo '<p>barely enough!</p>';
            break;
        case ($int >= 10 && $int <= 14):
            echo '<p>Not bad!</p>';
            break;
        case ($int >= 14 && $int <= 18):
            echo '<p>Bravo, bravissimo!</p>';
            break;
        default:
            echo '<p>Too good to be true : confront the cheater!</p>';
            break;
    }
}




?>
<form method="get" action="">
    <label for="grade">Enter your grade</label>
    <input type="" name="grade">
    <input type="submit" name="submit" value="Be part of the team">
</form>
<br>
<br>