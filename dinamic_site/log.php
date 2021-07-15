<?php include("path.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <title>My blog</title>
    <script src="https://kit.fontawesome.com/ed057ae9fb.js" crossorigin="anonymous"></script>
  </head>
  <body>
  <?php include("app/include/header.php"); ?>
    <!-- END heder -->
    <div class="container reg_form">
      <form class="row justify-content-center" method="post" action="log.html">
        <h2 class="col-12">Авторизация</h2>
        <div class="mb-3 col-12 col-md-4">
        <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите логин">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
          <label for="exampleInputPassword1" class="form-label">Пароль</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
          <button type="button" class="btn btn-secondary">Войти</button>
          <a href="<?php echo BASE_URL . 'reg.php' ?>">Регистрация</a>
        </div>
      </form>
    </div>
    <!-- END form -->


    <!-- footer -->
    <div class="footer container-fluid">
      <div class="footer-content container">
        <div class="row">
          <div class="footer-section about col-md-4 col-12">
            <h3 class="logo-text">Мой блог</h3>
            <p>
              Мой блог - это блог сделанный с целью
            </p>
            <div class="contact">
              <span><i class="fas fa-phone"></i>&nbsp; 123-456-789</span>
              <span><i class="fas fa-envelope"></i>&nbsp; info@myblog.com</span>
            </div>
            <div class="socials">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>

          <div class="footer-section links col-md-4 col-12">
            <h3>Quick Links</h3>
            <br>
            <ul>
              <a href="#">
                <li>события</li>
              </a>
              <a href="#">
                <li>Команда</li>
              </a>
              <a href="#">
                <li>Галерея</li>
              </a>
              <a href="#">
                <li>Что-то еще</li>
              </a>
            </ul>
          </div>

          <div class="footer-section contact-form col-md-4 col-12">
            <h3>Контакты</h3>
            <form action="index.html" method="post">
              <input type="email" name="email" class="text-input contact-input" placeholder="you email adress...">
              <textarea rows="4" name="message" class="text-input contact-input" placeholder="you message..."></textarea>
              <button type="submit" class="btn btn-big contact-btn">
                <i class="fas fa-envelope"></i>
                Отправить 
              </button>
            </form>
          </div>
        </div>

        <div class="footer-bottom">
          &copy; myblog.com | Designet by | Andievskii
        </div>
      </div>
    </div>
    <!-- footer END -->
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>