<form method="get" action="">
    <p>Are you a human a cat or a unicorn?</p>
    <label for="human">Human</label>
    <input type="radio" id="human" name="specie" value="human">
    <label for="cat">Cat</label>
    <input type="radio" id="cat" name="specie" value="cat">
    <label for="unicorn">Unicorn</label>
    <input type="radio" id="unicorn" name="specie" value="unicorn">
    <br>
    <input type="submit" name="submit" value="Get a GIFF">
</form>
<br>
<br>

<?php
if (isset($_GET['specie'])) {
    $result;
    $_GET['specie'] == 'human' ? $result = '<img src="https://media.giphy.com/media/10UUe8ZsLnaqwo/source.gif">'
        : ($_GET['specie'] == "cat" ? $result = '<img src="https://media.giphy.com/media/JIX9t2j0ZTN9S/source.gif">'
            : $result = '<img src="h
            ttps://media.giphy.com/media/mjo3HtlPnEuNq/source.gif">');
    echo $result;
}
?>