<?php
session_start();
function get_all_questions(){
    global $db;
    $query = 'SELECT * FROM questions';
    $statement = $db->prepare($query);
    $statement->execute();
    $body = $statement->fetch();
    $statement->closeCursor();
    return $body;
}
function get_one_question($id){
    global $db;
    $query = 'SELECT * FROM questions
              WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":id", $id);
    $statement->execute();
    $body = $statement->fetch();
    $statement->closeCursor();
    $_SESSION["id"] = $id;
    return $body;
}
function create_question($email, $id, $qtitle, $qbody, $qskills){
    global $db;
    $query = 'Insert into questions
              values 
              ( :owneremail, :ownerid, :createdate, :title, :body, :skills, :score )';
    $statement = $db->prepare($query);
    $statement->bindValue(':owneremail', $email);
    $statement->bindValue(':ownerid', $id);
    $statement->bindValue(':createdate', NOW());
    $statement->bindValue(':title', $qtitle);
    $statement->bindValue(':body', $qbody);
    $statement->bindValue(':skills', $qskills);
    $statement->bindValue(':score', 0);
    $statement->execute();
    $statement->closeCursor();
}
function edit_question(){
}
function delete_question(){
}
?>