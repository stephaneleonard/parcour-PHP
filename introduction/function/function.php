<?php
$str = 'Trigger happy, pack heat, but it \'s black ink
Evil half of the Bad Meets Evil
That means take a back seat
Take it back to Fat Petes with a maxi, single
Look at my rap sheet, what attracts these people
Is my gangster, bitch, like Apache with a catchy jingle
I stack chips, you barely got a half-eaten Cheeto
Fill \'em with the venom and eliminate \'em
Other words, I Minute Maid \'em
I don\'t wanna hurt \'em, but I did \'em in a fit of rage
I\'m murderin\' again, nobody will evade him
Finna kill \'em and dump all the fuckin\' bodies in the lake
Obliterating everything, incinerate and renegade \'em
And I make anybody who want it with the pen afraid
But don\'t nobody want it, but they\'re gonna get it anyway
\'Cause I\'m beginnin\' to feel like I\'m mentally ill
I\'m Atilla, kill or be killed, I\'m a killer, be the vanilla gorilla
You\'re bringin\' the killer within me out of me
You don\'t want to be the enemy of the demon who went in me
Or being the recievin\' enemy, what stupidity it\'d be
Every bit of me is the epitome of a spitter
When I\'m in the vicinity, motherfucker, you better duck
Or you finna be dead the minute you run into me
A hunnid percent of you is a fifth of a percent of me
I\'m \'bout to fuckin\' finish you bitch, I\'m unfadable
You wanna battle, I\'m available, I\'m blowin\' up like an inflatable I\'m undebatable, I\'m unavoidable, I\'m unevadable
I\'m on the toilet bowl, I got a trailer full of money and I\'m paid in full
I\'m not afraid to pull the';
$arr = explode(" ", $str);
foreach ($arr as $i => $value) {
    $arr[$i] = substr($value, 0, 1) . str_shuffle(substr($value, 1, strlen($value) - 2)) . substr($value, strlen($value) - 1, 1);
}
$res = implode(' ', $arr);

echo $res;

function capitalizeFirstLetter($word)
{
    $first =  mb_strtoupper(mb_substr($word, 0, 1, 'UTF-8'));
    echo $first . mb_substr($word, 1, strlen($word) - 1, 'UTF-8');
}

echo '<br>';
echo '<br>';
capitalizeFirstLetter('hello world');
echo '<br>';
echo '<br>';

echo date("Y");
echo '<br>';
echo date("d/m/Y");

function sum($a, $b)
{
    return is_numeric($a) && is_numeric($b) ? $a + $b : 'Error: argument is the not a number.';
}
echo '<br>';
echo '<br>';
echo sum('2', 1);

function acronym($words)
{
    $arr = explode(" ", $words);
    $res = '';
    foreach ($arr as $key => $value) {
        $res = $res . strtoupper(substr($value, 0, 1));
    }
    echo $res;
}
echo '<br>';
echo '<br>';
acronym('In code we trust!');

function aeTransform($word)
{
    echo str_replace('ae', '&aelig;', $word);
}
echo '<br>';
echo '<br>';

aeTransform('haellaeo');

function aeTransform2($word)
{
    echo str_replace('æ', 'ae', $word);
}
echo '<br>';
echo '<br>';
aeTransform2('hællæo');


echo '<br>';
echo '<br>';

function feedback($msg, $type = 'info')
{
    return '<div class="' . $type . '">' . $msg . '</div>';
}

echo feedback('wrong email adress', 'error');
echo feedback('wrong email adress');


echo '<br>';
echo '<br>';


function randomword($size)
{
    $res = '';
    for ($i = 0; $i < $size; $i++) {
        $res = $res . chr(64 + rand(1, 26));
    }
    return $res;
}

function randomWords()
{
    echo  '<p>' . randomword(rand(1, 5)) . '</p>';
    echo  '<p>' . randomword(rand(7, 15)) . '</p>';
}


if (isset($_POST['button1'])) {
    randomWords();
}


?>
<form method="post">
    <input type="submit" name="button1" value="Button1" />
</form>


<?php

echo strtolower("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");


echo '<br>';
echo '<br>';

function calculate_cone_volume($ray , $height){
    return 'The volume of a cone which ray is '.$ray. ' and height is '.$height.' = ' . $ray * $ray *3.14 *$height* (1/3) . ' cm<sup>3</sup><br />';
}

echo calculate_cone_volume(10 , 3);
