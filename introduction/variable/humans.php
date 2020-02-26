<html>

<head>
  <title>Hi!</title>
</head>

<body>
  <?php if (isset($_GET['name'])) { ?>
    <h1>Hello <?php echo $_GET['name']; ?>!</h1>
  <?php } ?>
  <?php
  $a = 5;
  $a = $a + 37;
  echo $a;
  ?>
</body>

</html>