<!DOCTYPE html>

<html lang="hu">
  <head>
    <meta charset="utf-8">
    <title>Hir0ta</title>
    <link rel="icon" href="https://i.ibb.co/w7wdZJf/HirOta.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php
      //error handle
      ERROR_REPORTING (E_PARSE | E_ERROR);
      //include style for the additional content
      print '<link rel="stylesheet" type="text/css" href="' . $_GET["lap"] . '/style.css">';
    ?>
    
    <!--For icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Bootstrap library -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
      /*for JQuery scripts*/

    </script>
    <style>
      *{box-sizing: border-box;}
    </style>
  </head>

  <body class="bg-dark text-light">
    <!--bg-primary:blue, bg-succes:white bg-warning:yellow, bg-info:turquoise, bg-danger:red -->
    <nav class="navbar navbar-expand-md navbar-dark bg-danger text-dark sticky-top">
      <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapse_target">
        <a class="navbar-brand"></a>
        <a href="index.php" class="navbar-text"><img src="https://i.ibb.co/w7wdZJf/HirOta.png" alt="Hir0ta" style="height:2.5rem;"></a>
        <ul class="navbar-nav">

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" data-toggle="dropdown_target">
              About me:
              <span class="caret"></span>
            </a>
            <div class="dropdown-menu bg-dark" aria-labelledby="dropdown_target">
              <ul class="navbar-nav">
                <a href="index.php?lap=#" class="dropdown-item text-light bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-light bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-light bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-light bg-dark">###</a>
              </ul>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" data-toggle="dropdown_target">
              My Pages:
              <span class="caret"></span>
            </a>
            <div class="dropdown-menu bg-dark" aria-labelledby="dropdown_target">
              <ul class="navbar-nav">
                <a href="index.php?lap=broodcomb" class="dropdown-item text-light bg-dark">Brood Comb</a>
                <a href="index.php?lap=business_card" class="dropdown-item text-light bg-dark">Business Card</a>
                <a href="index.php?lap=#" class="dropdown-item text-light bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-light bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-light bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-light bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-light bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-light bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-light bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-light bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-light bg-dark">###</a>
                <a href="index.php?lap=#" class="dropdown-item text-light bg-dark">###</a>
              </ul>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" data-toggle="dropdown_target">
              Contact me:
              <span class="caret"></span>
            </a>
            <div class="dropdown-menu bg-dark" aria-labelledby="dropdown_target">
              <ul class="navbar-nav">
                <a href="tel:+36202345185" class="dropdown-item text-light bg-dark">Tel:</a>
                <a href="mailto:kis.zoltan.cs@gmail.com" class="dropdown-item text-light bg-dark">Email:</a>
              </ul>
            </div>
          </li>

        </ul>
      </div>
    </nav>
    <br>
    <div class="panel mx-auto container" style="display: inline-block; margin: 0px; padding: 0px; max-width: 100vw; max-height: calc(100vh - 83rem);">
      <?php
        //content from the menu
        if ($_GET["lap"] == "") include "welcome.php";
        if ($_GET["lap"] == "broodcomb") include "broodcomb/index.php";
        if ($_GET["lap"] == "business_card") include "business_card/index.php";
        if ($_GET["lap"] == "link3") include "lap3.php";
        if ($_GET["lap"] == "link4") include "lap4.php";
      ?>
    </div>
  </body>
</html>