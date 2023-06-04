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
  <title>Xi Project</title>
  <link rel="icon" type="image/x-icon" href="images/black-logo.png">

  <script type="text/javascript" src="Scripts/drinks-script.js" defer></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="Styles/original.css">
  <link rel="stylesheet" type="text/css" href="Styles/drinks-orig.css">
  <link rel="stylesheet" type="text/css" href="Styles/drinks-PC.css">
  <link rel="stylesheet" type="text/css" href="Styles/drinks-tablet.css">
  <link rel="stylesheet" type="text/css" href="Styles/drinks-phone.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js" defer></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide@^3.4.1/dist/glide.min.js" defer></script>

</head>
<body class="font-weight-bolder">
<?php
    include_once 'header.php';
  ?>

<!-- Content -->

<br>
<br>
<br>

  <div id="drinks-container">
    <!-- Placeholder for drinks -->
  </div>


 <?php
    include_once 'footer.php';
  ?>

</body>
</html>