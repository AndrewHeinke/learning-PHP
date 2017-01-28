<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      header {
        background-color: #efefef;
        text-align: center;
        padding: 2em;
      }
      h1 {

      }
    </style>
  </head>
  <body>
    <header>
      <h1></h1>
    </header>
    <ul>
      <?php
      foreach ($animals as $animal) {
        echo "<li>$animal</li>";
      } ?>
      <?php foreach ($animals as $animal) : ?>
        <li><?= $animal; ?></li>
      <?php endforeach ?>


    </ul>

  </body>
</html>
