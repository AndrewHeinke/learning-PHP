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
      <li><strong>Title of Task: </strong> <?= $task['title']; ?></li>
      <li><strong>Date Due: </strong> <?= $task['due']; ?></li>
      <li><strong>Person Responsible: </strong> <?= $task['assigned_to']; ?></li>
      <li><strong>Status: </strong>
        <?php
          if ($task['completed']) {
            echo "Completed &#10003;";
          }
          else {
            echo "Incomplete";
          }

        ?>

      </li>
      <li><strong>Is this person old enough to enter the bar? </strong>
        <?php
          if ($answer === true) {
            echo "The person is old enough to enter the bar";
          }
          else {
            echo "This person is to young to enter the bar";
          }
        ?>

      </li>
    </ul>

  </body>
</html>
