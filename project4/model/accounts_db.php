<?php
session_start();
function get_user_auth($email, $pass){
    global $db;
    $query = 'SELECT * FROM accounts
              WHERE email = :email and password = :pass';
    $statement = $db->prepare($query);
    $statement->bindValue(":email", $email);
    $statement->bindValue(":pass", $pass);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();
    $_SESSION["user"] = $user;
    return $user;
}
function get_user($id){
    global $db;
    $query = 'SELECT * FROM accounts
              WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":id", $id);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();
    $_SESSION["user"] = $user;
    return $user;
}
function create_user($email, $fname, $lname, $bday, $pass){
    global $db;
    $query = 'Insert into accounts 
              values 
              ( :email, :fname, :lname, :bday, :pass )';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':fname', $fname);
    $statement->bindValue(':lname', $lname);
    $statement->bindValue(':bday', $bday);
    $statement->bindValue(':pass', $pass);
    $statement->execute();
    $statement->closeCursor();
}
?>