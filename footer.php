<!-- Footer -->
<br>
<br>
<br>
<br>

  <div class="fixed-bottom container-fluid p-1 bg-dark">
    <footer class="my-4 align-items-center text-center">
      <a href="https://github.com/captain-milous/Xi-Project" class="text-white em text-decoration-none">Copyright © Miloš Tesař C3b, 2023</a>
    </footer>
  </div>

  <?php
  if(isset($_GET["mssg"])){
    $oo = $_GET["mssg"];
    ?>
        <script defer>
            alert("<?php echo $oo;?>");
        </script>
    <?php
}
?>