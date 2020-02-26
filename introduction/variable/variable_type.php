<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable-type</title>
</head>

<body>
    <?php
    $name = 'Slim Shady';
    $age = 22;
    $eyesColor = 'brown';
    $hungry = false;
    $familyMembers = ['Christian' , 'Patricia' , 'Stéphane' , 'Florian' , 'Marie' , 'Victoria'];
    echo '<p>Hi! My name is (what?)
    My name is (who?)
    My name is ' . $name . '</p> ';
    echo '<p> I am ' . $age . ' years old </p>';
    echo '<p> My eyes are ' . $eyesColor . ' </p>';
    echo '<p> The first member of my family is ' . $familyMembers[0] . ' </p>';
    ?>
</body>

</html>