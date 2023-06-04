<!doctype html>
<?php
session_start();
if(!isset($_SESSION["id"])){
    header('Location: /Xi-Project/');
    die;
  }
?>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rezervace</title>
  <link rel="icon" type="image/x-icon" href="images/black-logo.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="Styles/original.css">
  
</head>
<body class="font-weight-bolder">
<?php
    include_once 'header.php';
    
  ?>

<br>
<br>

<main style="margin: auto; text-align: center;">
    <div class="container my-4">
      <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-light">
        <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">

          <h1 class="display-5 fw-bold lh-1">Udělej si u nás rezervaci!</h1>
          <br>
          <form action="Scripts/reserve.php" method="post">

            <div class="form-group">
                <label for="name">Jméno</label>
                <input type="text" class="form-control" id="name" placeholder="Zadejte své jméno">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Zadejte svůj email">
            </div>

            <div class="form-group">
                <label for="date">Datum rezervace</label>
                <input type="date" class="form-control" id="date">
            </div>

            <div class="form-group">
                <label for="time">Čas rezervace</label>
                <input type="time" class="form-control" id="time">
            </div>

            <div class="form-group">
                <label for="guests">Počet hostů</label>
                <input type="number" class="form-control" id="guests">
            </div>

            <button type="submit" class="btn btn-primary">Rezervovat</button>
          </form>

          <small>Zatím mimo provoz</small>

          </div>
        </div>
    </div>
</main>

<br>
<br>
<br>
<br>


<?php
    include_once 'footer.php';
  ?>
</body>
</html>