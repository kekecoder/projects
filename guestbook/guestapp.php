<?php
date_default_timezone_set("Africa/Lagos");
require_once __DIR__ . '/core/dbconfig.php';
$query = $pdo->prepare("SELECT * FROM guest ORDER BY created_at ASC");
$query->execute();

$guestapp = $query->fetchAll(PDO::FETCH_ASSOC);
/*echo "<pre>";
var_dump($guestapp);
echo "</pre>"; */
?>

<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf8">
    <title>Guest Book</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body class="bg-dark">
    <div class="container container-sm">
      <h1 class="text-center text-warning mb-3 mt-3 ">Guest Book</h1>
      <a href="/" class="btn btn-success mb-3">Back</a>
      <?php foreach($guestapp as $book): ?>
        <div class="alert alert-success text-center border border-warning shadow-sm">
          <h3 class="alert-heading text-dark"><?php echo $book['firstname'] . " " . $book['lastname']?></h1>
          <p class="lead text-dark"><?php echo $book['comment']?></p>
          <hr>
          <span class="text-muted font-italic">
            <?php 
              $when = $book['created_at'];
              $posted = strtotime($when);
              $newDate = date("d M, Y h:ia", $posted);
              echo $newDate;
            ?>
            </span>
        </div>
      <?php endforeach; ?>
    </div>
  </body>
</html>