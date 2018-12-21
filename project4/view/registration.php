<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Question</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<form action="registration.php" > <!-- links the html form to the main php code -->


    <fieldset class="F1"> <!-- creates the fieldset based on the CSS style code -->

        Enter your first name here<br> <!-- This section is for the first name text box -->
        <input type=text name="fname" placeholder="Enter your first name" autocomplete="off" autofocus required>
        <br>

        Enter your last name here<br> <!-- This section is for the last name text box -->
        <input type=text name="lname" placeholder="Enter your last name" autocomplete="off" required>
        <br>

        Enter birthday here<br> <!-- This section is for the birthday text box -->
        <input type=date name="bday" placeholder="Enter your birthday" autocomplete="off" required>
        <br>

        Enter email here<br> <!-- This section is for the email text box -->
        <input type=email name="email" placeholder="Enter your email" autocomplete="off" required>
        <br>

        Enter password here<br> <!-- This section is for the password text box -->
        <input type=password name="pass" placeholder="Enter your password" autocomplete="off" required>
        <br>

        <br>
        <input type=submit > <!-- submit button -->
    </fieldset>
</form>