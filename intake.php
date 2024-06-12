<?php session_start(); ?>
<?php include '/includes/db_access.php'; ?>
<?php
if (!isset($_SESSION['in'])) {
  header("location:index.php");
}
?>

<!DOCTYPE html>
<html>

<head>

  <!-- BASIC PAGE NEEDS
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Customer Intake</title>

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

  <style>
    header,
    main,
    footer {
      padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {

      header,
      main,
      footer {
        padding-left: 0;
      }
    }
  </style>

</head>

<body>

  <header>

    <!--  NAVIGATION BAR -->
    <nav class="light-blue darken-4" style="text-transform: uppercase;font-size: 1rem;">
      <div class="nav-wrapper">
        <a style="padding-top: 12px;padding-left: 12px;" href="/users/yarbroughj1423/WEB250/final" class="brand-logo" style="padding-top: 5px;"><img src="img/ccorplogo.png"></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li style="padding-top: 12px;padding-left: 12px; padding-right: 40px;">WELCOME, <?php echo "" . $_SESSION['username']; ?>!</li>
          <li style="padding-top: 12px;padding-left: 12px;"><a class="hvr-underline-from-center" href="dashboard.php">Dashboard</a></li>
          <li style="padding-top: 12px;padding-left: 12px;"><a class="hvr-underline-from-center" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>


    <ul id="slide-out" class="sidenav sidenav-fixed light-blue darken-4" style="text-transform: uppercase;">
      <li style="padding-top: 100px; padding-bottom: 10px;"><a class="white-text" href="intake.php">Customer Registration</a></li>
      <li style="padding-bottom: 10px;"><a class="white-text" href="view_customers.php">View All Customers</a></li>
      <li style="padding-bottom: 10px;"><a class="white-text" href="currentCustomer.php">View Current Customers</a></li>
      <li style="padding-bottom: 10px;"><a class="white-text" href="completeCustomer.php">View Completed Customers</a></li>
      <li style="padding-bottom: 10px;"><a class="white-text" href="view_employees.php">View All Employees</a></li>
      <li style="padding-bottom: 100px;"><a class="white-text" href="openCase.php">Open Cases</a></li>
    </ul>


  </header>

  <main class="valign-wrapper">

    <!-- SECTION ONE -->

    <div class="row center-align">


    <h3 style="text-transform:uppercase;font-weight:bold;margin-bottom:30px;">Customer Information</h3>
      <form class="col s12" method="POST" action="response.php">
        <div class="row">
          <div class="input-field col s6">
            <input name="cust_f_name" placeholder="customer first name" type="text" class="validate" required>
            <label for="cust_f_name">Customer's First Name</label>
          </div>
          <div class="input-field col s6">
            <input name="cust_l_name" placeholder="customer last name" type="text" class="validate" required>
            <label for="cust_l_name">Customer's Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input name="cust_email" placeholder="customer email" type="email" class="validate" required>
            <label for="cust_email">Customer's Email</label>
          </div>
          <div class="input-field col s6">
            <input name="cust_phone" placeholder="customer phone number" type="text" class="validate" required>
            <label for="cust_phone">Customer's Phone Number</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input name="cust_address" placeholder="customer street address" type="text" class="validate" required>
            <label for="cust_address">Customer's Street Address</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input name="cust_city" placeholder="customer city" type="text" class="validate" required>
            <label for="cust_city">Customer's City</label>
          </div>
          <div class="input-field col s6">
            <input name="cust_state" placeholder="customer state" type="text" class="validate" required>
            <label for="cust_state">Customer's State</label>
          </div>
        </div>
        <br><br><br>

        <h3 style="text-transform:uppercase;font-weight:bold;margin-bottom:30px;">Device Information</h3>
        <form class="col s12" method="POST" action="response.php">
          <div class="row">
            <div class="input-field col s6">
              <input name="device_type" placeholder="device type" type="text" class="validate" required>
              <label for="device_type">Device Type</label>
            </div>
            <div class="input-field col s6">
              <input name="device_manufacturer" placeholder="device manufacturer" type="text" class="validate" required>
              <label for="device_manufacturer">Device Manufacturer</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input name="device_model_num" placeholder="device model number" type="text" class="validate" required>
              <label for="device_model_num">Device Model Number</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input name="device_username" placeholder="device username" type="text" class="validate" required>
              <label for="device_username">Device Username</label>
            </div>
            <div class="input-field col s6">
              <input name="device_password" placeholder="device password" type="text" class="validate" required>
              <label for="device_password">Device Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input name="diag_need" placeholder="diagnostic need" type="text" class="validate" required>
              <label for="diag_need">Diagnostic Need</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input name="referral_website" placeholder="referral website" type="text" class="validate" required>
              <label for="referral_website">Referral Website</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input name="other_issues" placeholder="other issues" type="text" class="validate" required>
              <label for="other_issues">Other Issues</label>
            </div>
          </div>

          <button class="btn waves-effect waves-light lime darken-3" type="submit" name="action">submit
            <i class="material-icons right">person_pin</i>
          </button>
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
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>

</html>