<?php
$pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');

foreach ($pronouns as $key => $value) {
    echo '<br>';
    echo  $value == 'He/She' ? $value . ' codes' : $value . ' code';
}

echo '<br>';
echo '<br>';

$i = 1;

while ($i <= 120) {
    echo $i . ' ';
    $i++;
}
echo '<br>';
for ($j = 1; $j <= 120; $j++) {
    echo $j . ' ';
}

echo '<br>';
echo '<br>';

$startupMembers = ['Sundar', 'Mark', 'Steve', 'Bill', 'Andy', 'Dijkstra'];

foreach ($startupMembers as $key => $value) {
    echo $value . ' ';
}

echo '<br>';
echo '<br>';

$countries = array('BE' => 'Belgium', 'CA' => 'Canada', 'FR' => 'France', 'FN' => 'Finland', 'MR' => 'Moroco' , 'RU' => 'Russia' , 'KN' => 'Kenya' , 'USA' => 'America' , 'GR' => 'Greece');

?>

<select id='countries' name='countries'>
<?php
foreach($countries as $ISO => $name){
    echo '<option value='.$ISO.'>'.$name.'</option>';
}
?>

</select>
