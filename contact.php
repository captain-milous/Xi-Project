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
  <title>Kontakt</title>
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
          <h1 class="display-5 fw-bold lh-1">Kontakt</h1>
            <br>
            <div>
              <p class="lead"><strong>Adresa:</strong> Bira Point Of View</p>
              <p class="lead"><strong>Telefon:</strong> +420 123 456 789</p>
              <p class="lead"><strong>Email:</strong> IncredibleComboTwins@info.cz</p>
              <br>
              <p class="lead"><strong>Otevírací doba:</strong></p>
              <p class="lead">Pondělí - Čtvrtek: 18:00 - 02:00</p>
              <p class="lead">Pátek - Sobota: 16:00 - 04:00</p>
              <p class="lead">Neděle a státní svátky: ZAVŘENO</p>
            </div>
            <br>
            <br>
            <div class="d-grid gap-2 d-md-flex justify-content-center mb-4 mb-lg-3">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.2371475074797!2d120.47496777579943!3d-5.678821256204792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbbed81418e2025%3A0x96cf74eab5172897!2sBira%20Point%20Of%20View!5e0!3m2!1scs!2scz!4v1685823362294!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
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