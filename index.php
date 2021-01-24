<?php
  include __DIR__."/partials/database.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Php Dischi</title>
  </head>
  <body>

    <header>
      <div class="container">
        <img src="img/logo.png" alt="logo">
      </div>
    </header>

    <main>
      <div id="main_container" class="container">
        <?php foreach ($discs as $disc) {?>
          <div class="disc_container">
            <div class="img_container">
              <img src=<?php echo $disc["poster"]; ?> alt="cover">
            </div>
            <div class="text_container">
              <h1><?php echo $disc["title"]; ?></h1>
              <h2><?php echo $disc["author"]; ?></h2>
              <p><?php echo $disc["year"]; ?></p>
            </div>
          </div>
        <?php
        }?>
      </div>
    </main>

  </body>
</html>








<!-- clean -->
