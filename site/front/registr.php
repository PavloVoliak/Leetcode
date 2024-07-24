<!DOCTYPE html>
<html>

<?php require 'C:\wamp64\www\projects\practice\site\output_pages\select_list.php'; ?>


<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="registr.css">
    <meta charset="utf-8" />
    <title>Особистий кабінет ЛМКП "Львівтеплоенерго"</title>
</head>

<body>
    <div class="header">
          <div class="container-header">
            <div class="logotype">
                <a href="index.html"><h1><span class="orange-head-text">Особистий кабінет</span><br>ЛМКП "Львівтеплоенерго"</h1></a>
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
        <div class="forms">
            <div class="registr">
            <form action="registration.php" method="post">
              <div class="registr-form-text">
                  <h1>Реєстрація</h1>
              </div>
              <div class="registr-input">

                <div class="firs-row-input f1">
                    <div class="input-reg-form">
                      <h1>Імя</h1>
                      <input id="name" type="text" name="name">
                    </div>

                    <div class="input-reg-form">
                      <h1>Місто</h1>
                      <select id="country" name="city">
                      <?php foreach($result as $items) { ?>
                      <option><?= html_escape($items) ?></option>
                      <?php } ?>
                      </select>
                    </div>
                  </div>


                <div class="second-row-input f1">
                    <div class="input-reg-form">
                      <h1>Прізвще</h1>
                      <input id="surname" type="text" name="surname" value="">
                    </div>

                    <div class="input-reg-form">
                      <h1>Вулиця</h1>
                      <input id="street" type="text" name="street" value="">
                    </div>
                </div>


                <div class="third-row-input  f1">
                    <div class="input-reg-form">
                      <h1>Телефон</h1>
                      <input id="number" type="text" name="phone" value="">
                    </div>

                    <div class="input-reg-form">
                      <h1>Квартира</h1>
                      <input id="apartment"  type="text" name="flat" value="">
                    </div>
                </div>

                    <div class="fourth-row-input  f1">
                        <div class="input-reg-form">
                          <h1>Email</h1>
                          <input id="email" type="email" name="email" value="">
                        </div>

                        <div class="input-reg-form">
                          <h1>Пароль</h1>
                          <input id="password"  type="textgjx" name="password" value="">
                        </div>
                    </div>

              </div>
              <div class="registr-btn">
              <button type="submit" name="button">Реєстрація</button>
              </div>
            </form>
            </div>
        </div>
    </div>
</body>
