<?php session_start(); ?>
<?php include 'includes/db_access.php'; ?>

<!DOCTYPE html>
<html>

<head>

  <!-- BASIC PAGE NEEDS
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Please Log In</title>

  <!-- Mobile Specific
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Icon Font
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- CSS
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/styles.css">
  <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />



</head>

<body>

  <header>

    <!--  NAVIGATION BAR -->

    <nav class="light-blue darken-4">
      <div class="nav-wrapper">
        <a style="padding-top: 12px;padding-left: 12px;" href="/users/yarbroughj1423/WEB250/final" class="brand-logo"><img src="img/ccorplogo.png"></a>
        <ul style="padding-top: 12px;" id="nav-mobile" class="right hide-on-med-and-down">
        </ul>
      </div>
    </nav>

  </header>

  <main class="valign-wrapper">

    <!-- SECTION ONE -->

    <div class="row center-align">
      <form class="col s12" method="POST" action="includes/checklogin.php">
        <div class="row">
          <div class="input-field col s12">
            <input name="username" placeholder="enter username" id="username" type="text">
            <label for="username">Username</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input name="password" placeholder="enter password" id="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>
        <button class="btn waves-effect waves-light light-blue darken-1" type="submit" name="submit">login
          <i class="material-icons right">person_pin</i>
        </button>
        <div class="row">
          <p>No account? That's cool. <a href="register.php">Register here</a>!</p>
        </div>
      </form>
    </div>

  </main>

  <!-- FOOTER -->

  <footer class="page-footer light-blue darken-4">
    <div class="footer-copyright">
      <div class="container center-align">
        © 2019 Jarin Yarbrough @ WEB-250, Forsyth Tech.
      </div>
    </div>
  </footer>

  <!-- Javascript
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script type="text/javascript" src="js/materialize.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>

</html>