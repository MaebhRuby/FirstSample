<?php

// check what type of request is being made
$type = $_POST['type'];

// to send the request off to the right function
if($type == 'askquestion'){
    presentquestion();
}
else if($type == 'checkstatus'){

    checkQuestionStatus();
}

function checkQuestionStatus(){

    // database connection
      try {
        $host = '127.0.0.1';
        $dbname = 'test';
        $user = 'root';
        $pass = '';
        # MySQL with PDO_MYSQL
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    } catch(PDOException $e) {echo $e;}


    $q = $DBH->prepare("select status from iwa2016 where id = 5");

    $q->execute();

    $row = $q->fetch(PDO::FETCH_ASSOC);

    echo $row['status'];


}
function presentquestion(){
    //catching the variables
    $name =  $_POST['app_name'];
  //  $question = $_POST['app_ques'];

    // database connection
      try {
        $host = '127.0.0.1';
        $dbname = 'test';
        $user = 'root';
        $pass = '';
        # MySQL with PDO_MYSQL
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    } catch(PDOException $e) {echo $e;}




    $q = $DBH->prepare("INSERT INTO `test`.`iwa2016` (`name`) VALUES (:name);");
    $q->bindValue(':name',  $name);
  //  $q->bindValue(':question',  $question);
    $last_id = $DBH->lastInsertId();
    $q->execute();

    //prompt("Please Enter Your Technical Question");


}

?>
