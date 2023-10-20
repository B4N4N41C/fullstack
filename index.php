<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/iconsfont.css">
  <link rel="stylesheet" href="css/style.css">

  <title>Document</title>
</head>

<body>
  <!-- Блок шапка START-->
  <?php include("app/include/header.php"); ?>
  <!-- Блок шапка END-->
  <!-- Блок Карусель START-->
  <div class="container">
    <div class="row">
      <h2 class="container__slider-title">Топ публикации</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide">
      <!-- <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div> -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/img/1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption_hack carousel-caption d-none d-md-block">
            <h5><a href="">Third slide label</a></h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/img/2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption_hack carousel-caption d-none d-md-block">
            <h5><a href="">Third slide label</a></h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/img/3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption_hack carousel-caption d-none d-md-block">
            <h5><a href="">Third slide label</a></h5>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Блок Карусель END-->
  <!-- Блок main START-->
  <div class="container">
    <div class="content row">
      <div class="main-content col-md-9">
        <h2>Последние публикация</h2>
        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="img/2.jpg" alt="" class="img-thumbnail">
          </div>
          <div class="post-text col-12 col-md-8">
            <h3>
              <a href="">Прикольная статья на любую тему</a>
            </h3>

            <i class="far fa-user"> Athor</i>
            <i class="far fa-calendar"> Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem deserunt officia similique ab reiciendis
              dolorum, perspiciatis voluptatem. Incidunt non quas, explicabo maiores nobis maxime sunt laudantium, harum
              qui facere quae!
            </p>
          </div>
        </div>
        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="img/2.jpg" alt="" class="img-thumbnail">
          </div>
          <div class="post-text col-12 col-md-8">
            <h3>
              <a href="">Прикольная статья на любую тему</a>
            </h3>

            <i class="far fa-user"> Athor</i>
            <i class="far fa-calendar"> Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem deserunt officia similique ab reiciendis
              dolorum, perspiciatis voluptatem. Incidunt non quas, explicabo maiores nobis maxime sunt laudantium, harum
              qui facere quae!
            </p>
          </div>
        </div>
        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="img/2.jpg" alt="" class="img-thumbnail">
          </div>
          <div class="post-text col-12 col-md-8">
            <h3>
              <a href="">Прикольная статья на любую тему</a>
            </h3>

            <i class="far fa-user"> Athor</i>
            <i class="far fa-calendar"> Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem deserunt officia similique ab reiciendis
              dolorum, perspiciatis voluptatem. Incidunt non quas, explicabo maiores nobis maxime sunt laudantium, harum
              qui facere quae!
            </p>
          </div>
        </div>
        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="img/2.jpg" alt="" class="img-thumbnail">
          </div>
          <div class="post-text col-12 col-md-8">
            <h3>
              <a href="">Прикольная статья на любую тему</a>
            </h3>

            <i class="far fa-user"> Athor</i>
            <i class="far fa-calendar"> Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem deserunt officia similique ab reiciendis
              dolorum, perspiciatis voluptatem. Incidunt non quas, explicabo maiores nobis maxime sunt laudantium, harum
              qui facere quae!
            </p>
          </div>
        </div>
      </div>
      <!-- Sidebar slider -->
      <div class="sidebar col-md-3 col-12">
        <div class="section search">
          <h3>Поиск</h3>
          <form action="/" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Введите искомое слово...">
          </form>
        </div>
        <div class="section topics">
          <h3>Категории</h3>
          <ul>
            <li><a href="#">Программирование</a></li>
            <li><a href="#">Дизайн</a></li>
            <li><a href="#">Визуализация</a></li>
            <li><a href="#">Кейсы</a></li>
            <li><a href="#">Мотивация</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Блок main END-->
  <!-- Footer -->
  <?php include("app/include/footer.php"); ?>
  <script src="js/bootstrap.bundle.js"></script>
</body>

</html>