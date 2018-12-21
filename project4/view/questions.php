<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Question</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<form action="question.php" id="qForm"> <!-- links the html form to the main php code -->


    </fieldset>
    <fieldset class="F1"> <!-- creates the fieldset based on the CSS style code -->

        Enter email here<br> <!-- This section is for the email text box -->
        <input type=email name="email" placeholder="Enter your email" autocomplete="off" autofocus required>
        <br>

        Question name<br> <!-- This section is for the question name -->
        <input type=text name="qName" placeholder="What is your question?" autocomplete="off" autofocus required>
        <br>

        Question body<br> <!-- This section is for the question body -->
        <textarea rows="4" cols="50" name="qBody" form_id="qForm">
        </textarea>
        <br>

        Question Skills<br> <!-- This section is for the question skills -->
        <input type=text name="qSkills" placeholder="Enter Skills (At least 2)" autocomplete="off" required>
        <br>

        <br>
        <input type=submit> <!-- submit button -->
    </fieldset>
</form>