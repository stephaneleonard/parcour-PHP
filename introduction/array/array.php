<?php
$family = ['Christian', 'Patricia', 'Stéphane', 'Florian', 'Marie', 'Victoria'];
print_r($family);
$favoriteRecipies = ['Paella', 'Pizza', 'KFC'];
print_r($favoriteRecipies);
$favoriteMovies = ['Harry Potter', 'LOT', 'Lion King'];
echo $favoriteMovies[0];
?>

<br>

<?php
$me = array(
    'firstname' => 'Stéphane',
    'age' => 22,
    'favSeason' => 'Summer',
    'likeSoccer' => false,
    'hobbies' => ['Basketball', 'DJ', 'Lol', 'Horses']
);

$mother = array(
    'firstname' => 'Patricia',
    'age' => 48,
    'favSeason' => 'Summer',
    'likeSoccer' => false,
    'hobbies' => ['reading', 'family games']
);

$me['mother'] = $mother;
$me['hobbies'][] = 'taxidermy';

echo '<pre>';
print_r($me);
echo '</pre>';

echo sizeof($mother['hobbies']);
echo '<br>';
echo sizeof($me['hobbies']);

echo '<br>';
echo sizeof($me['hobbies']) + sizeof($mother['hobbies']);

$soulmate = array(
    'firstname' => 'Alexandra',
    'age' => 22,
    'favSeason' => 'Winter',
    'likeSoccer' => false,
    'hobbies' => ['knitting', 'Horses']
);

echo '<br>';
print_r(array_intersect($soulmate['hobbies'], $me['hobbies']));
print_r(array_merge($soulmate['hobbies'], $me['hobbies']));

echo '<br>';
echo '<br>';

$web_developement = array('frontend' => [], 'backend' => []);
$web_developement['frontend'][] = 'xhtml';
$web_developement['backend'][] = 'Ruby on Rails';
$web_developement['frontend'][] = 'CSS';
$web_developement['frontend'][] = 'Flash';
$web_developement['frontend'][] = 'Javascript';
$web_developement['backend'][] = 'Javascript';
$web_developement['frontend'][0] = 'html';
unset($web_developement['frontend'][array_search('Flash', $web_developement['frontend'])]);
print_r($web_developement);
