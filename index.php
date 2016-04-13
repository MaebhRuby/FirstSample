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
            <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
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
                    }
         else if (data == '1'){
                       getAnswer();
                   }
                   else{
                     alert('System confused')
                   }
          });
      }

      function getAnswer(){

   //Take question id and pass it to ajax.php to be used in a function
            $.post( "ajax.php", { type: "giveanswer", id:currentId })
            .done(function( data ) {
            alert (data);

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

    function getTime(){
      //Using url generated from api website get data
      $.get("https://api.xmltime.com/timeservice?accesskey=68k4A001h3&expires=2016-04-07T21%3A32%3A31%2B00%3A00&signature=yBK%2BHU2IBGo7opSjiXGXlEy%2Bkac%3D&version=2&out=xml&placeid=norway%2Foslo",
      function( data ) {
       alert('Hello')
        //convert the xml data to a string
        xml = new XMLSerializer().serializeToString(data.documentElement);
        //pass to the jquery parser to allow for selections to be made
        xmlDoc = $.parseXML( xml ),
        //assign the parsed data to a variable
        $xml = $( xmlDoc ),
        //select a section -time - of the parsed data
        $title = $xml.find( "time" );
        alert($title.text())
        $( "#time" ).append( $title.text() );

      });
    }

        //setInterval(function(){ checkForAnswer(); }, 10000);
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
          <td><button id = "button2" onclick="getTime();">Check Time</button></td>
          <td><p id="time"></p></td>
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
