<?php session_start(); ?>
<?php include 'includes/db_access.php'; ?>
<?php
if (!isset($_SESSION['in'])) {
  header("location:index.php");
}

$techID = $_SESSION['id'];
?>

<!DOCTYPE html>
<html>

<head>

  <!-- BASIC PAGE NEEDS
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Current Customers</title>

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
    <div class="container center-align">

    <h3 style="text-transform:uppercase;font-weight:bold;margin-bottom:40px;">Current Customers</h3>

      <!-- SECTION ONE -->

      <table class="striped">
        <thead>
          <tr>
            <th>Device ID</th>
            <th>Customer ID</th>
            <th>Device Type</th>
            <th>Manufacturer</th>
            <th>Model #</th>
            <th>Username</th>
            <th>Password</th>
            <th>Immediate Need</th>
            <th>Referral Website</th>
            <th>Other Issues</th>
            <th>Time In</th>
            <th>Technician ID</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $diagquery = "SELECT * from diagnostic where time_complete is NULL";
          $diagresult = mysql_query($diagquery) or die("Query to get data from Diagnostic table failed: " . mysql_error());


          while ($diagrow = mysql_fetch_array($diagresult)) {
            $deviceID = $diagrow["diag_id"];
            $custID = $diagrow["customer_ID"];
            $deviceType = $diagrow["device_type"];
            $deviceMan = $diagrow["device_manufacturer"];
            $deviceModel = $diagrow["device_model_num"];
            $deviceUser = $diagrow["device_username"];
            $devicePass = $diagrow["device_password"];
            $deviceDiagNeed = $diagrow["diag_need"];
            $deviceReferral = $diagrow["referral_website"];
            $deviceIssues = $diagrow["other_issues"];
            $deviceTimeIn = $diagrow["time_In"];
            $deviceTechID = $diagrow["RepairEmp_ID"];

            echo "<tr><td>$deviceID</td><td>$custID</td><td>$deviceType</td><td>$deviceMan</td><td>$deviceModel</td><td>$deviceUser</td><td>$devicePass</td><td>$deviceDiagNeed</td><td>$deviceReferral</td><td>$deviceIssues</td><td>$deviceTimeIn</td><td>$techID</td></tr>";
          }
          ?>
        </tbody>
      </table>
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