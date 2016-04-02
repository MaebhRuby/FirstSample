<?php

//Turn error check on
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);


// check what type of request is being made
$type = $_POST['type'];

// to send the request off to the right function
if($type == 'submitquestion'){
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

    $id = $_POST['id'];


    $q = $DBH->prepare("select status from iwa2016 where id = :currentId");
    $q->bindValue(':currentId',  $id);

    $q->execute();

    $row = $q->fetch(PDO::FETCH_ASSOC);

    echo $row['status'];


}

function presentquestion(){
    //catching the variables
    $name =  $_POST['app_name'];
    $question = $_POST['app_ques'];

    // database connection
      try {
        $host = '127.0.0.1';
        $dbname = 'test';
        $user = 'root';
        $pass = '';
        # MySQL with PDO_MYSQL
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    } catch(PDOException $e) {echo $e;}

    // insert user name and question to database
    $q = $DBH->prepare("INSERT INTO `test`.`iwa2016` (`name`, `question`) VALUES (:name, :question);");
    $q->bindValue(':name',  $name);
    $q->bindValue(':question',  $question);

  //  $last_id = $DBH->lastInsertId();
    $q->execute();

    //  store the id of the current user & print to screen
    echo $DBH->lastInsertId();
}


//function submitquestion(){
    //catching the variables
  //  $question =  $_POST['app_question'];
  //  $id   =  $_POST['app_id'];

    // database connection
    //  try {
      //  $host = '127.0.0.1';
      //  $dbname = 'test';
      //  $user = 'root';
      //  $pass = '';
        # MySQL with PDO_MYSQL
      //  $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  //  } catch(PDOException $e) {echo $e;}

  //  $q = $DBH->prepare("INSERT INTO `test`.`iwa2016` (`question`) VALUES (:question) WHERE `id`= (:userid);");
  //  $q->bindValue(':question',  $question);
  //  $q->bindValue(':userid',  $id);
  //  $q->execute();

//}



?>
