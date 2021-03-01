<?php
  @include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php dischi</title>
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <div class="container">
      <img src="img/logo.png" alt="spotify logo">
    </div>
  </header>
  <main>
    <div class="cds-container container">
      <div class="cd">
        <?php foreach ($cds as $cd) { ?>
          <img src="<?php echo $cd['poster'] ?>" alt="<?php echo $cd['title'] ?>">
          <h3><?php echo $cd['title'] ?></h3>
          <span><?php echo $cd['author'] ?></span>
          <span><?php echo $cd['year'] ?></span>
        <?php } ?>
      </div>
    </div>
  </main>
</body>
</html>