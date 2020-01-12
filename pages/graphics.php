<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="VHS photos">
  <meta name="keywords" content="VHS,photo,graphic">

  <title>Strona z grafiką</title>

  <link rel="stylesheet" href="/css/main.css" />
  <?php include '../components/login.php';
  login();

if( isset($_SESSION['logged_in']) && !empty($_SESSION['logged_in'])):
  
  include '../components/user_info.php';
else:
include '../components/login_form.php';
return;

endif;
  ?>

  
</head>

<body>
  
  <img src="/files/images/kaseta1.jpg" alt="Tu powinna być kaseta vhs" />
  <img src="/files/images/kaseta1.jpg" width="100" height="100"
    alt="Tu powinna być kaseta vhs w zmniejszonych rozmiarach" />

  <img
    src="https://2.allegroimg.com/s512/030e36/7d8a6d8142ebbbc617a2d61e4222/PROFESJONALNY-ADAPTER-KASETA-MATKA-VHS-C-DO-VHS"
    width="200" height="200" title="Otwarta kaseta VHS" alt="Tutaj powinna być otwarta kaseta VHS" />

</body>

</html>