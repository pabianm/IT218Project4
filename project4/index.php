<?php
require("model/database.php");
require("model/accounts_db.php");
require("model/login_db.php");
require("model/questions_db.php");

session_start();

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'display_login';
    }
}

if ($action == 'display_login') {
        include ("view/login.php");
}
else if ($action == 'login') {

    //redirects a user to the url with a delay
    function redirect ($message) {
        echo "$message";
        header (  "Location: .?action=display_login");	//sends refresh http header to browser
        exit();

        //change redirect to redirect to login with action==header
    }

//checks if the email is valid due to constraints.
    if (strpos($email, "@") !==false)
        isempty($email, "Email");
    else
        redirect("Email is not valid. Please enter a valid email. Redirecting you to the login page in 10 seconds.<br>");

//checks if the password is valid due to constraints.
    if (strlen($pass)<8)
        redirect("Password is too short. Please enter a valid password. Redirecting you to the login page in 10 seconds.<br>");
    else
        isempty($pass, "Password");

//checks if the user is using valid credentials. If so, logs the user into the profile page.
    $user = getuserauth($email, $pass);
    if ($user != null)
    {
        $cookie_name = $user;
        $cookie_value = $email;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        header("Location: .?action=display_questions");
    }
}
else if ($action == 'display_registration') {
        include ("view/registration.php");
} else if ($action == 'register') {
    function isempty($data,$string){
        //checks if input data is an empty string and echos the correct statement
        if (empty($data))
            echo $string." is empty. Please enter a valid ".$string."<br>";
        else
            echo $string.": ".$data."<br>";
    }

//redirects a user to the url with a delay
    function redirect ($message, $url) {
        echo "$message";
        header ("Location: .?action=login");	//sends refresh http header to browser
        exit();
    }

//checks validity of the data
    isempty($fname, "First name");
    isempty($lname, "Last name");
    isempty($bday, "Birthday");

//checks if the email is valid due to constraints.
    if (strpos($email, "@") !==false)
        isempty($email, "Email");
    else
        redirect("Email is not valid. Please enter a valid email. Redirecting you to the registration page in 10 seconds.<br>");

//checks if the password is valid due to constraints.
    if (strlen($pass)<8)
        redirect("Password is too short. Please enter a valid password. Redirecting you to the registration page in 10 seconds.<br>");
    else
        isempty($pass, "Password");
    create_user($email, $fname, $lname, $bday, $pass);
//} else if ($action == 'display_questions') {
        //product list (list of questions) from guitar shop
//} else if ($action == 'display_new_questions') {
} else if ($action == 'create_new_question') {
    function isempty($data,$string){
        //checks if input data is an empty string and echos the correct statement
        if (empty($data))
            echo $string." is empty. Please enter a valid ".$string."<br>";
        else
            echo $string.": ".$data."<br>";
    }

//redirects a user to the url with a delay
    function redirect ($message, $url) {
        echo "$message";
        header (  "Location: .?action=display_login");	//sends refresh http header to browser
        exit();
    }

//checks validity of the data
    if (strlen($qName)<3)
        redirect("Name is too short. Needs to be more than 3 characters.<br>");
    else
        isempty($qName, "Name");

    if (strlen($qBody)>500)
        redirect("Body is too long. Needs to be less than 500 characters.<br>");
    else
        isempty($qBody, "Body");


//checks if skills is empty, creates array, and echos
    $qSkills = explode(',', $qSkills);
    if (empty($qSkills))
        redirect("Please add more than two skills<br>");
    else
        if (count($qSkills)<2)
            redirect("Please add more than two skills<br>");
        else
            echo "Skills: ".implode(", ",$qSkills). "<br>";

    $qSkills = implode(", ",$qSkills);
    create_question($email, $id, $qtitle, $qbody, $qskills);
//} else if ($action == 'display_edit_question') {
//} else if ($action == 'edit_question') {
//} else if ($action == 'delete_question') {
}



?>
