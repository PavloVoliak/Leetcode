<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="podacha.css">
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

      <div class="form">
        <div class="form-text">
          <h1>Подача показників</h1>
        </div>
        <form action="pokazniki.php" method="post">
          <div class="input-form_code">
            <h1>Код користувача</h1>
            <input id="login" type="number" name="code" value="">
          </div>
          <div class="input-form_indicator">
            <h1>Показники лічильника</h1>
            <input id="login" type="number" name="codel" value="">
        <div class="btn-to-send">
          <button type="submit" name="button">Оплатити</button>
        </div>
      </form>
      </div>

    </div>
</body>
