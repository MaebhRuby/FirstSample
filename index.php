<!DOCTYPE html>

<?php

//turn on error notifications
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

 ?>

<html>
  <head><meta charset="utf-8">

      <title>Login Form</title>
      <!-- Links to connect and allow jquery be used in the code -->
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
          <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
            <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" href="/resources/demos/style.css">
  <script>

        var currentId = 0;

    function checkForAnswer(){

 //Take question id and pass it to ajax.php to be used in a function
          $.post( "ajax.php", { type: "checkstatus", id:currentId })
          .done(function( data ) {

          //if '0' is returned (no answer has been issued) output this message to screen,
          // if '0' is not returned (an answer has been supplied) output second message
                   if(data == '0'){
                     alert('no answer yet')
                    }else {
                       alert('got an answer!')
                   }
          });
      }

    function askquestion(){

        //Take input name + question and set in variables
          var var1 = document.getElementById('app_name').value;
          var var2 = document.getElementById('app_ques').value;

        //send the variables as named place holders to ajax.php to be used in a function
          $.post( "ajax.php", { type: "submitquestion", app_name: var1, app_ques: var2 })
          .done(function( data ) {
                //save what is returned ('data') to a variable and post it to the screen
                alert(data)
                currentId = data;
        });
        //post the dialog of section somedialog to the screen
          $( "#somedialog" ).dialog();
    }

    //setInterval(function(){ checkForAnswer(); }, 3000);
        </script>

  </head>

<body>
  <div>
    <header>
      <h1> Technical Questions </h1>
    </header>

    <article>
      <table id = "questable">
        <tr>
          <td><span id = "nameboxtext"></span></td><td> <input type="text" name="app_name" id="app_name"></input></td>
        </tr>
      <tr>
        <td><span id = "questionbox"></span></td><td><input type="text" name="app_ques" id="app_ques"></input></td>
      </tr>
        <tr>
          <td><button id = "button1" onclick="askquestion();">submit</button></td>
        </tr>
      </table>
  </article>
<script>
    document.getElementById("nameboxtext").innerHTML = "1. Enter Your Name:";
        document.getElementById("nameboxtext").style.fontSize = "x-large";
        document.getElementById("questionbox").innerHTML = "2. What is your Question:";
            document.getElementById("questionbox").style.fontSize = "x-large";
    </script>

  <section id="somedialog" title="Thank you">
    <p>Thank you for your question! :) </p>
  </section>

 <!--Hide the contents of div somedialog (it will be called on in a later function)-->
 <script>
    $( "#somedialog" ).hide();
  </script>

  </div>
</body>

</html>
