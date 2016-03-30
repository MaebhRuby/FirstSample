<!DOCTYPE html>

<?php

ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

 ?>

<html>
  <head>  <meta charset="utf-8">
    <title>Login Form</title>
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <link rel="stylesheet" type="text/css" href="style.css"/>

      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">

      <script>

      var last_id = '<?php $last_id = ''; ?>';
    //  var question = '';

      function checkForAnswer(){
          $.post( "ajax.php", { type: "checkstatus" })
          .done(function( data ) {
                   if(data == '0'){
                     alert('no answer yet')
                    }else {
                       alert('got an answer!')
                   }
          });
      }

      function askquestion(){
          var var1 = document.getElementById('app_name').value;
          var var2 = document.getElementById('app_ques').value;


          $.post( "ajax.php", { type: "submitquestion", app_name: var1, app_ques: var2 })
          .done(function( data ) {
                alert('Loading')
        });
          $( "#dialog" ).dialog();
      //   var var2 = prompt("please enter your question");
          // alert('thank you for your question\n'+var2+'\nwe will reply ASAP');


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
  <td>  <button id = "button1" onclick="askquestion();">submit</button></td>
  </tr>
  </table>
  </article>
<script>
    document.getElementById("nameboxtext").innerHTML = "1. Enter Your Name:";
        document.getElementById("nameboxtext").style.fontSize = "x-large";
        document.getElementById("questionbox").innerHTML = "2. What is your Question:";
            document.getElementById("questionbox").style.fontSize = "x-large";
    </script>

    <div id="dialog" title="Basic dialog">
  <p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
</div>
<script>
  $( "#dialog" ).hide();
</script>

</div>
</body>

</html>
