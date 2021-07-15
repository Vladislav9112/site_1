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

    
    <!-- блок карусели start-->
    <div class="container">
      <div class="row">
        <h2 class="slider-title">Топ публикации</h2>
      </div>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/images/images_1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption-hack carousel-caption d-none d-md-block">
              <h5><a href=""> First slide label</a></h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/images_2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption-hack carousel-caption d-none d-md-block">
              <h5><a href=""> First slide label</a></h5>              
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/images_3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption-hack carousel-caption d-none d-md-block">
              <h5><a href=""> First slide label</a></h5>              
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!-- блок карусели End-->
    <!-- блок main -->
    <div class="container">
      <div class="content row">
        <!--main content  -->
        <div class="main-content col-md-9 col-12">
          <h2>Последние публикации</h2>
          
          <div class="post row">
            <div class="img col-12 col-md-4">
              <img src="assets/images/images_3.png" alt="" class="img-thumbnail">
            </div>
            <div class="post_text col-12 col-md-8">
              <h3>
                <a href="#">Прикольная статья а тему динамического сайта</a>
              </h3>
              <i class="far fa-user">Имя Автора</i>
              <i class="far fa-calendar">Mar 11, 2019</i>
              <p class="perviev-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit,
              </p>
            </div>
            
          </div>
          <div class="post row">
            <div class="img col-12 col-md-4">
              <img src="assets/images/images_3.png" alt="" class="img-thumbnail">
            </div>
            <div class="post_text col-12 col-md-8">
              <h3>
                <a href="#">Прикольная статья а тему динамического сайта</a>
              </h3>
              <i class="far fa-user">Имя Автора</i>
              <i class="far fa-calendar">Mar 11, 2019</i>
              <p class="perviev-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit,
              </p>
            </div>

          </div>
           <div class="post row">
            <div class="img col-12 col-md-4">
              <img src="assets/images/images_3.png" alt="" class="img-thumbnail">
            </div>
            <div class="post_text col-12 col-md-8">
              <h3>
                <a href="#">Прикольная статья а тему динамического сайта</a>
              </h3>
              <i class="far fa-user">Имя Автора</i>
              <i class="far fa-calendar">Mar 11, 2019</i>
              <p class="perviev-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit,
              </p>
            </div>
            
          </div>
           <div class="post row">
            <div class="img col-12 col-md-4">
              <img src="assets/images/images_3.png" alt="" class="img-thumbnail">
            </div>
            <div class="post_text col-12 col-md-8">
              <h3>
                <a href="#">Прикольная статья а тему динамического сайта</a>
              </h3>
              <i class="far fa-user">Имя Автора</i>
              <i class="far fa-calendar">Mar 11, 2019</i>
              <p class="perviev-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit,
              </p>
            </div>
            
          </div>
        </div>
        <!-- sidebar Content  -->
        <div class="sidebar col-md-3 col-12">
          
          <div class="section search">
            <h3>Поиск</h3>
            <form action="index.html" method="post">
              <input type="text" name="search-term" class="text-input" placeholder="Serch...">
            </form>
          </div>


          <div class="section topics">
            <h3>Категории</h3>
            <ul>
              <li><a href="#">Програмирование</a></li>
              <li><a href="#">Дизайн</a></li>
              <li><a href="#">Визуализация</a></li>
              <li><a href="#">Кейсы</a></li>
              <li><a href="#">Мотивация</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
    <!-- блок main END-->
    <!-- footer -->
      <?php include("app/include/footer.php"); ?>
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