<!DOCTYPE html>

<html lang="eng">
  <head>
    <meta charset="utf-8">
    <title>Hir0ta</title>
    <link rel="icon" href="https://i.ibb.co/w7wdZJf/HirOta.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php
      //error handle
      ERROR_REPORTING (E_PARSE | E_ERROR);
      //include style for the additional content
      if ($_GET["lap"] == "") {print '<link rel="stylesheet" type="text/css" href="business_card/style.css">';
      }else{print '<link rel="stylesheet" type="text/css" href="' . $_GET["lap"] . '/style.css">';}
    ?>

    <!--For icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Bootstrap library -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="construction bg-dark d-flex justify-content-center"><img src="img/construction.png"></div>
    <!--bg-primary:blue, bg-succes:white bg-warning:yellow, bg-info:turquoise, bg-danger:red -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark text-danger sticky-top">
      <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapse_target">
        <a class="navbar-brand"></a>
        <a href="index.php" class="navbar-text"><img src="https://i.ibb.co/w7wdZJf/HirOta.png" alt="Hir0ta" style="height:2.5rem;"></a>
        <ul class="navbar-nav">

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-danger" data-toggle="dropdown" data-toggle="dropdown_target">
              About me:
              <span class="caret"></span>
            </a>
            <div class="dropdown-menu bg-dark" aria-labelledby="dropdown_target">
              <ul class="navbar-nav">
                <a href="index.php?lap=intro" class="dropdown-item text-danger bg-dark">Introduce</a>
                <a href="index.php?lap=#" class="dropdown-item text-danger bg-dark">Hobbies</a>
              </ul>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-danger" data-toggle="dropdown" data-toggle="dropdown_target">
              Pages:
              <span class="caret"></span>
            </a>
            <div class="dropdown-menu bg-dark" aria-labelledby="dropdown_target">
              <ul class="navbar-nav">
                <a href="index.php?lap=guess_the_number" class="dropdown-item text-danger bg-dark">Play</a>
                <a href="index.php?lap=color_clock" class="dropdown-item text-danger bg-dark">Color Clock</a>
                <!--<a href="index.php?lap=#" class="dropdown-item text-danger bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-danger bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-danger bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-danger bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-danger bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-danger bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-danger bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-danger bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-danger bg-dark">###</a>-->
              </ul>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-danger" data-toggle="dropdown" data-toggle="dropdown_target">
              JS Draws:
              <span class="caret"></span>
            </a>
            <div class="dropdown-menu bg-dark" aria-labelledby="dropdown_target">
              <ul class="navbar-nav">
                <a href="index.php?lap=broodcomb" class="dropdown-item text-danger bg-dark">BroodComb</a>
                <a href="index.php?lap=hyperspace" class="dropdown-item text-danger bg-dark">Hyperspace</a>
                <a href="index.php?lap=color_rect" class="dropdown-item text-danger bg-dark">Colorful Rectangle</a>
                <!--<a href="index.php?lap=#" class="dropdown-item text-danger bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-danger bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-danger bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-danger bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-danger bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-danger bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-danger bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-danger bg-dark">###</a>-->
              </ul>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-danger" data-toggle="dropdown" data-toggle="dropdown_target">
              Contact me:
              <span class="caret"></span>
            </a>
            <div class="dropdown-menu bg-dark" aria-labelledby="dropdown_target">
              <ul class="navbar-nav">
                <a href="tel:+36202345185" class="dropdown-item text-danger bg-dark">Tel:</a>
                <a href="mailto:kis.zoltan.cs@gmail.com" class="dropdown-item text-danger bg-dark">Email:</a>
                <!--<a href="index.php?lap=guestbook" class="dropdown-item text-danger bg-dark">Contact me</a>-->
              </ul>
            </div>
          </li>

        </ul>
      </div>
    </nav>
    <br>
    <div class="panel container">
      <?php
        //content from the menu
        if ($_GET["lap"] == "") include "business_card/index.php";
        if ($_GET["lap"] == "broodcomb") include "broodcomb/index.php";
        if ($_GET["lap"] == "hyperspace") include "hyperspace/index.php";
        if ($_GET["lap"] == "guess_the_number") include "guess_the_number/index.php";
        if ($_GET["lap"] == "color_clock") include "color_clock/index.php";
        if ($_GET["lap"] == "color_rect") include "color_rect/index.php";
        if ($_GET["lap"] == "intro") include "intro/index.php";
        if ($_GET["lap"] == "terms") include "terms/index.php";
        if ($_GET["lap"] == "privacy") include "privacy/index.php";
      ?>
    </div>
    <footer class="panel-footer text-center bg-dark fixed-bottom">
      <div class="wrapper">
        <small>2018 <strong>Hir0ta</strong>, All Rights Reserved</small>
        <nav class="footer-nav">
          <a href="index.php">Back to Top</a>
          <a href="index.php?lap=terms">Terms of Use</a>
          <a href="index.php?lap=privacy">Privacy</a>
        </nav>
      </div>
    </footer>
  </body>
</html>