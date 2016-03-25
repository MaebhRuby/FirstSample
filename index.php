<!DOCTYPE html>

<html>
  <head>  <meta charset="utf-8">
    <title>Login Form</title>
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  </head>

<body>
  <script>

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
  //  var var2 = document.getElementById('app_ques').value;

    $.post( "ajax.php", { type: "askquestion", app_name: var1/*, app_ques: var2*/ })
    .done(function( data ) {
          alert('Loading')
    });
}

//setInterval(function(){ checkForAnswer(); }, 3000);

  </script>


    Name: <input type="text" name="app_name" id="app_name"></input><br>
  <!--  Question: <input type="text" name="app_ques" id="app_ques"></input><br> -->

    <button onclick="askquestion();">Ask Question</button>


</body>

</html>
