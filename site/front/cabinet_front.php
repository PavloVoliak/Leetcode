<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="cabiinet.css">
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
      <div class="cabinet-forms">
        <div class="photo-edit">
          <span class="fa fa-user-circle-o"></span>
        </div>
        <div class="edit-forms">
          <div class="password-edit">

            <div class="form">
              <div class="form-text">
                <h1>Зміна паролю</h1>
              </div>

              <form action="cabinet.php" method="post">
                <div class="input-form_code">
                  <h1>Старий пароль</h1>
                  <input id="login" type="text" name="oldpassword" value="">
                </div>
                <div class="input-form_indicator">
                  <h1>Новий пароль</h1>
                  <input id="login" type="text" name="newpassword" value="">
                </div>
              <div class="btn-to-send">
                <button type="submit" name="button"><span  class="fa fa-check"></span>Підтвердити</button>
              </div>
              </form>
            </div>

          </div>
          <div class="email-edit">

            <div class="form">
              <div class="form-text">
                <h1>Зміна email</h1>
              </div>
 
              <form action="cabinet.php" method="post">
                <div class="input-form_code">
                  <h1>Старий email</h1>
                  <input id="login" type="email" name="oldemail" value="">
                </div>
                <div class="input-form_indicator">
                  <h1>Новий email</h1>
                  <input id="login" type="email" name="newemail" value="">
                </div>
              <div class="btn-to-send">
                <button type="submit" name="button"><span  class="fa fa-check"></span>Підтвердити</button>
              </div>
              </form>
            </div>

          </div>
        </div>
      </div>

    </div>
</body>
