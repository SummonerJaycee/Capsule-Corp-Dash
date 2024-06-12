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
  <title>Confirmation</title>

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
      <div class="col s12">
        <h2 class="heading-secondary">CUSTOMER CONFIRMATION PAGE</h2><br><br>

        <?php

        $cust_f_name = $_POST['cust_f_name'];
        $cust_l_name = $_POST['cust_l_name'];
        $cust_email = $_POST['cust_email'];
        $cust_phone = $_POST['cust_phone'];
        $cust_address = $_POST['cust_address'];
        $cust_city = $_POST['cust_city'];
        $cust_state = $_POST['cust_state'];
        $time_In = date("m/d/Y h:i:sa");


        echo "<strong>Current Time: " . $time_In . "<br /></strong>";
        echo "<strong>First Name:</strong> " . $cust_f_name . "<br />";
        echo "<strong>Last Name:</strong> " . $cust_l_name . "<br />";
        echo "<strong>Email:</strong> " . $cust_email . "<br />";
        echo "<strong>Phone:</strong> " . $cust_phone . "<br />";
        echo "<strong>Address:</strong> " . $cust_address . "<br />";
        echo "<strong>City:</strong> " . $cust_city . "<br />";
        echo "<strong>State:</strong> " . $cust_state . "<br />";

        //Get the tech ID
        $techID = $_SESSION['id'];

        echo "-----------------------------------------------------------------------------------------------------------------";

        $device_type = $_POST['device_type'];
        $device_manufacturer = $_POST['device_manufacturer'];
        $device_model_num = $_POST['device_model_num'];
        $device_username = $_POST['device_username'];
        $device_password = $_POST['device_password'];
        $diag_need = $_POST['diag_need'];
        $referral_website = $_POST['referral_website'];
        $other_issues = $_POST['other_issues'];

        //Get last CustomerID
        $cusquery = "SELECT * FROM customer ORDER BY cust_id DESC LIMIT 1";
        $cusresult = mysql_query($cusquery) or die("Query to get data from customer failed: " . mysql_error());
        while ($cusrow = mysql_fetch_array($cusresult)) {
          $cusCust = $cusrow['cust_id'];
          $custid = $cusCust;
        }


        echo "<br><br><strong>Customer ID:</strong> " . $custid . "<br />";
        echo "<strong>Device Type:</strong> " . $device_type . "<br />";
        echo "<strong>Device Manufacturer:</strong> " . $device_manufacturer . "<br />";
        echo "<strong>Device Model Number:</strong> " . $device_model_num . "<br />";
        echo "<strong>Device Username:</strong> " . $device_username . "<br />";
        echo "<strong>Device Password:</strong> " . $device_password . "<br />";

        echo "-----------------------------------------------------------------------------------------------------------------";

        echo "<br><br><strong>Device Diagnostic Needed:</strong> " . $diag_need . "<br />";
        echo "<strong>Referral Website:</strong> " . $referral_website . "<br />";
        echo "<strong>Other Issues:</strong> " . $other_issues . "<br />";

        echo "-----------------------------------------------------------------------------------------------------------------";

        echo "<br><br>This is an electronic receipt for our services. If you have any questions, please contact us. Thanks!";

        $msg = "First Name:  " . $first_name . "\n";
        $msg .= "Last Name: " . $password . "\n";
        $msg .= "Email: " . $password . "\n";
        $msg .= "Phone: " . $password . "\n";
        $msg .= "Address: " . $password . "\n";
        $msg .= "City: " . $password . "\n";
        $msg .= "State: " . $password . "\n";

        $msg .= "-------------------------------------------------------------- " . "\n";

        $msg = "Device Type:  " . $first_name . "\n";
        $msg .= "Device Manufacturer: " . $password . "\n";
        $msg .= "Device Model Number: " . $password . "\n";
        $msg .= "Device Username: " . $password . "\n";
        $msg .= "Device Password: " . $password . "\n";

        $msg .= "-------------------------------------------------------------- " . "\n";

        $msg = "Device Diagnostic Needed:  " . $first_name . "\n";
        $msg .= "Referral Website: " . $password . "\n";
        $msg .= "Other Issues: " . $password . "\n";

        $msg .= "-------------------------------------------------------------- " . "\n";

        $msg .= "This is an electronic receipt for our services. If you have any questions, please contact us. Thanks!" . "\n";

        $recipient = $email;
        $subject = "Your Digital Receipt";
        $mailheaders = "From: Customer Database Admin <yarbroughj1423@forsythtech.edu>";
        mail($recipient, $subject, $msg, $mailheaders);

        include 'includes/insertCust.php';
        include 'includes/insertDiag.php';
        ?>
      </div>

    </div>

    <div class="row center-align">
      <a class="waves-effect waves-light btn lime darken-3" href="dashboard.php">back to dashboard</a>
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