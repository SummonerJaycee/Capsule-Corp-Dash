<?php session_start(); ?>
<?php include 'includes/db_access.php'; ?>
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
  <title>Dashboard</title>

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
        <h2>HELLO!</h2>
        <p>This is your dashboard. Please remember to always logout once you are finished!</p>
      </div>
    </div>

    <div class="row center-align">
      <div claass="col s12">


        <?php
        //Get a count of all customers
        $tvquery = "SELECT COUNT( * ) AS TOTAL FROM customer";
        $tvresult = mysql_query($tvquery) or die("Query to get data from customer table failed: " . mysql_error());

        while ($tvrow = mysql_fetch_array($tvresult)) {
          $tvCust = $tvrow["TOTAL"];
          $tvNum = $tvCust;
        }

        $avquery = "SELECT COUNT( * ) AS TOTAL FROM diagnostic WHERE time_complete IS NULL ";
        $avresult = mysql_query($avquery) or die("Query to get data from customer table failed: " . mysql_error());

        while ($avrow = mysql_fetch_array($avresult)) {
          $avCust = $avrow["TOTAL"];
          $avNum = $avCust;
        }

        $cvquery = "SELECT COUNT( * ) AS TOTAL FROM diagnostic WHERE time_complete IS NOT NULL ";
        $cvresult = mysql_query($cvquery) or die("Query to get data from customer table failed: " . mysql_error());

        while ($cvrow = mysql_fetch_array($cvresult)) {
          $cvCust = $cvrow["TOTAL"];
          $cvNum = $cvCust;
        }
        ?>

        <p><strong>
            <p style="font-size:350%;color:#a3ac58;"><?php echo $tvNum; ?></p>
          </strong>
          <h5 style="margin-top:-10;text-transform:uppercase;"><b>Total Number of Customers</b></h5>
        </p>


        <p><strong>
            <p style="font-size:350%;color:#a3ac58;"><?php echo $avNum; ?></p>
          </strong>
          <h5 style="margin-top:-10;text-transform:uppercase;"><b>Total Number of Active Cases</b></h5>
        </p>


        <p><strong>
            <p style="font-size:350%;color:#a3ac58;"><?php echo $cvNum; ?></p>
          </strong>
          <h5 style="margin-top:-10;text-transform:uppercase;"><b>Total Number of Closed Cases</b></h5>
        </p>

      </div>
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