<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Top films">
  <meta name="keywords" content="top,films,2019,2018,comedy,drama">

  <title>Strona z listami</title>

  <link rel="stylesheet" href="/css/main.css" />

</head>

<body>

<?php include '../components/login.php';
  
  login();

if( isset($_SESSION['logged_in']) && !empty($_SESSION['logged_in'])):
  
  include '../components/user_info.php';
else:
include '../components/login_form.php';
die;

endif;
  ?>
 


  
  <h3>
    Najpopularniejsze filmy
  </h3>

  <ul>
    <li>
      <h4> 2019</h4>
      <ol>
        <li>
          Joker
        </li>
        <li>
          Avengers: Endgame
        </li>
      </ol>
    </li>
    <li>
      <h4> 2018</h4>
      <ol>
        <li>
          Green Book
        </li>
        <li>
          Bohemian Rhapsody
        </li>
      </ol>
    </li>
  </ul>



  <div id="div1">Margin</div>
  <div id="div2">Absolute</div>
  <div id="div3">Relative (adjusting) Left</div>
  <div id="div4">Static (normal flow of the page) Padding</div>
  <div id="div5">Fixed Right Top</div>
  <div id="div6">Fixed Right Bottom</div>
  <div id="div7">Float Right</div>
  <div id="div8">Clear NoRight</div>

</body>

</html>