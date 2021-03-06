<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Pricelist">
    <meta name="keywords" content="pricelist,VHS">

    <title>Strona z tabelami</title>

    <link rel="stylesheet" href="/css/main.css" />
</head>

<?php include '../components/login.php'; ?>

  <?php
  login();

  if(isset($_SESSION['logged_in']) && !empty($_SESSION['logged_in'])):
    
    include '../components/user_info.php';
 else:
  include '../components/login_form.php';
  echo "</body>";
  return;
 endif;
 ?>

<body>

    <table>
        <caption>Cennik</caption>
        <tr>
            <td>
                <table style="border:1px solid black">
                    <caption>Dni powszednie</caption>
                    <tr>
                        <th>Rodzaj filmu</th>
                        <th>Ilość dni</th>
                        <th>Cena</th>
                    </tr>

                    <tr>
                        <th rowspan="2">Komedia</th>
                        <td><i>5 dni</i></td>
                        <td>10 zł</td>
                    </tr>
                    <tr>
                        <td><u>7 dni</u></td>
                        <td>14 zł</td>
                    </tr>
                    <tr>
                        <th rowspan="2">Dramat</th>
                        <td><i>5 dni</i></td>
                        <td>8 zł</td>
                    </tr>
                    <tr>
                        <td><u>7 dni</u></td>
                        <td>11 zł</td>
                    </tr>
                </table>

            </td>
            <td>
                <table style="border:1px solid black">
                    <caption>Niedziele i święta</caption>
                    <tr>
                        <th>Rodzaj filmu</th>
                        <th>Ilość dni</th>
                        <th>Cena</th>
                    </tr>

                    <tr>
                        <th rowspan="2">Komedia</th>
                        <td><i>5 dni</i></td>
                        <td>20 zł</td>
                    </tr>
                    <tr>
                        <td><u>7 dni</u></td>
                        <td>24 zł</td>
                    </tr>
                    <tr>
                        <th rowspan="2">Dramat</th>
                        <td><i>5 dni</i></td>
                        <td>23 zł</td>
                    </tr>
                    <tr>
                        <td><u>7 dni</u></td>
                        <td>27 zł</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

</body>

</html>