<!-- Header -->

<div class="p-3 fixed-top text-bg-dark">
    <div class="container">

      <header class="d-flex flex-wrap justify-content-center ">
        <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
          <span class="fs-4 text-white"><img src="images/white-logo.png" class="logo">Milošův Bar</span>
        </a>
        <ul class="nav nav-pills">
          <li class="nav-item"><a href="index.php" class="nav-link px-2 text-white">Hlavní stránka</a></li>
          <li class="nav-item"><a href="drinks.php" class="nav-link px-2 text-white">Drink Menu</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link px-2 text-white">Kontakt</a></li>
          <?php
            if(isset($_SESSION["id"])){
          ?>
            <li class="nav-item" id="login"><a href="Scripts/logout.php" class="nav-link px-2 text-white">Odhlásit se</a></li>
          <?php
            } else {
          ?>
            <li class="nav-item" id="login"><a href="login.php" class="nav-link px-2 text-white">Přihlásit se</a></li>
          <?php
            }
          ?>
        </ul>
      </header>

    </div>
  </div>

<br>
<br>