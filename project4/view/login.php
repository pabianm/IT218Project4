<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<form action="login.php" > <!-- links the html form to the main php code -->

    <body>

    <fieldset class="F1"> <!-- creates the fieldset based on the CSS style code -->
        <h1>Login</h1>
        Enter email here<br> <!-- This section is for the email text box -->
        <input type=email name="email" placeholder="Enter your email" autocomplete="off" autofocus required>
        <br>

        Enter password here<br> <!-- This section is for the password text box -->
        <input type=password name="pass" placeholder="Enter your password" autocomplete="off" required>
        <br>

        <br>
        <input type=submit > <!-- submit button -->
    </fieldset>

    </body>
</form>