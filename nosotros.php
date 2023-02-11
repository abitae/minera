<!DOCTYPE html>
<html lang="en">


<!-- Abel Arana -->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Promina - Construction And Building Template">
  <link href="assets/images/favicon/favicon1.png" rel="icon">
  <title>MICENSAC</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow:400,500,600,700%7cRoboto:400,500,700&amp;display=swap">
  <link rel="stylesheet" href="assets/css/libraries.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="wrapper">
    <?php

    include("include/preloader.php");
    include("include/header.php");
    include("include/banner-layout1.php");
    include("include/clients.php");
    include("include/banner-layout2.php");
    ?>




    <div>
      <div class="bg-img background-size-auto"><img src="assets/images/backgrounds/1.jpg" alt="background"></div>

      <?php

      include("include/testimonials-layout1.php");
      ?>

    </div>

    <?php
    include("include/footer.php");
    ?>
    <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>

    <div class="search-popup">
      <i class="search__popup-close">&times;</i>
      <form class="search__popup-form">
        <input type="text" class="search__input" placeholder="Type Words Then Enter">
        <button class="module__search-btn"><i class="fa fa-search"></i></button>
      </form>
    </div><!-- /. search-popup -->


  </div><!-- /.wrapper -->

  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from 7oroof.com/demos/promina/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jan 2022 18:06:27 GMT -->

</html>