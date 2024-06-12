<!DOCTYPE html>
<html>

<head>

    <!-- BASIC PAGE NEEDS
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Now</title>

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

    <!-- Scripts
-------------------------------------------------- -->
    <script>
        $(document).ready(function() {
            $('select').formSelect();
        });
    </script>


</head>

<body>

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

    <main class="valign-wrapper">

        <!-- SECTION ONE -->

        <div class="row center-align">
            <h2>Registration Form</h2>
            <form class="col s12" method="POST" action="complete.php">
                <div class="row">
                    <div class="input-field col s6">
                        <input name="first_name" placeholder="enter first name" type="text" class="validate" required>
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="last_name" placeholder="enter last name" type="text" class="validate" required>
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="username" placeholder="enter desired username" type="text" class="validate" required>
                        <label for="username">Username</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="password" placeholder="enter secure password" type="password" class="validate" required>
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="password" placeholder="reenter secure password" type="password" class="validate" required>
                        <label for="password">Confirm Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="email" placeholder="enter valid email" type="email" class="validate" required>
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <label>Are you Tech or Intake?</label>
                    <div class="input-field col s12">
                        <select class="browser-default" name="kind" required>
                            <option value="Tech" selected>Tech</option>
                            <option value="Intake">Intake</option>
                        </select>
                    </div>
                </div>
                <button class="btn waves-effect waves-light lime darken-3" type="submit" name="action">complete registration
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