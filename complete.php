<!DOCTYPE html>
<html>

<head>

    <!-- BASIC PAGE NEEDS
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Registration Complete</title>

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

        <header>

            <!--  NAVIGATION BAR -->

            <nav class="light-blue darken-4">
                <div class="nav-wrapper">
                    <a style="padding-top: 12px;padding-left: 12px;" href="/users/yarbroughj1423/WEB250/final" class="brand-logo" style="padding-top: 5px;"><img src="img/ccorplogo.png"></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                    </ul>
                </div>
            </nav>

        </header>

    </header>

    <main class="valign-wrapper">

        <!-- SECTION ONE -->

        <div class="row center-align">
            <div class="col s12">
                <h2 class="heading-secondary">THANKS FOR REGISTERING!</h2><br><br>

                <?php

                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $kind = $_POST['kind'];



                echo "<strong>First Name:</strong> " . $first_name . "<br />";
                echo "<strong>Last Name:</strong> " . $last_name . "<br />";
                echo "<strong>Email Address:</strong> " . $email . "<br />";
                echo "<strong>Password:</strong> " . $password . "<br />";



                $msg = "Name:  " . $first_name . " " . $last_name . "\n";
                $msg .= "Password: " . $password . "\n";

                $recipient = $email;
                $subject = "Customer Database Employee Registration";
                $mailheaders = "From: Customer Database Admin <yarbroughj1423@forsythtech.edu>";
                mail($recipient, $subject, $msg, $mailheaders);


                echo "An email has been sent. Please check your Email.";

                include 'includes/insert_tech.php';
                ?>
                <br><br><br>
                <a class="waves-effect waves-light btn lime darken-3" href="index.php">back to login</a>
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