<!DOCTYPE html>
<html>
<?php require 'C:\wamp64\www\projects\practice\site\front\history.php'; ?>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="zaborgovanist.css">
    <meta charset="utf-8" />
    <title>Особистий кабінет ЛМКП "Львівтеплоенерго"</title>
</head>

<body>
    <div class="header">
          <div class="container-header">
            <div class="logotype">
              <a href="index copy.php"><h1><span class="orange-head-text">Особистий кабінет</span><br>ЛМКП "Львівтеплоенерго"</h1></a>
            </div>
              <p>
                <span class="fa fa-phone"></span>
                Контактний телефон (032) 229-30-00
              </p>
              <p>
                <span class="fa fa-envelope-o"></span>
                Контактна електронна пошта:<br>office_lte@lte.lviv.ua
              </p>
            <div class="burger">
              <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
        </div>
        <hr>
    </div>
    <div class="bodys">
      <div class="forms-table_zaborg">
        <div class="table-zaborg">
          <div class="table-text">
            <div class=" table-first-text">
              <h1>Історія платежів</h1>
            </div>
            <hr  class="table-hr">
            <div class="table-second-text">
              <h1>Код користувача</h1>
              <h1>Дата</h1>
              <h1>Сума</h1>
            </div>
        </div>
          <table>
          <?php foreach($result as $items ){ ?>
            <tr>
                <td style="width:35%"><?= html_escape($items['user_number']) ?></td>
                <td class="tb30"><?= html_escape($items['date']) ?></td>
                <td class="tb30"><?= html_escape($items['pokaznik']) ?></td>
                <td class="tb30"><?= html_escape($items['total']) ?> UAH</td>
              </tr>
              <?php } ?>
            </table>
        </div>
      </div>
    </div>
</body>
