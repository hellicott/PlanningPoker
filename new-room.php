<?php
require_once 'scripts/file-system.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Planning Poker</title>
  </head>
  <body>      
    <div class="jumbotron">
      <h1 class="display-4">Create a new planning room</h1>
      <p class="lead">A new room has been created, share the Room ID with your team so they can join you</p>
      <hr class="my-4">
      <form>
        <div>
          <label for="generatedId">Room ID: <?php echo createNewRoom() ?></label>
        </div>
        <div class="form-group">
          <label for="userName">Enter your name so your team mates can recognise you</label>
          <input type="text" class="form-control" id="userName">
        </div>
        <button type="submit" class="btn btn-primary">Join Room</button>
      </form>
    </div>

    <?php require "templates/boostrapscripts.php" ?>
  </body>
</html>