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
  
  <!-- Блок main START-->
  <div class="container">
    <div class="content row">
      <div class="main-content col-md-9">
        <h2>Заголовок Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel deserunt quis eaque incidunt, saepe consequuntur id similique ab dolorem totam modi nam repudiandae quae, illo sapiente exercitationem explicabo dolore pariatur.</h2>
        <div class="single_post row">
          <div class="img col-12">
            <img src="img/2.jpg" alt="" class="img-thumbnail">
          </div>
          <div class="info">
            <i class="far fa-user"> Athor</i>
            <i class="far fa-calendar"> Mar 11, 2019</i>
          </div>
          <div class="single_post-text col-12">
            <h3>Заголовок третьего уровня</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae fugiat veritatis fuga maiores excepturi cupiditate modi quidem, rerum <a href="#">fugit</a> explicabo culpa mollitia aspernatur doloribus porro, quibusdam soluta illum ipsam. Animi.
            Quae inventore quibusdam voluptatibus hic amet impedit distinctio doloribus molestias ipsum necessitatibus odit a tempora provident laboriosam maiores, repellat aut praesentium temporibus libero odio cumque voluptatum ea illo et. Reiciendis.
            Doloribus obcaecati molestiae minus sequi consequatur autem nobis possimus, sunt enim corrupti cumque officia delectus esse fugiat fuga aspernatur architecto doloremque ullam incidunt. Obcaecati quidem ad non, corporis sunt doloremque.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur reprehenderit omnis officia corrupti. Perferendis, reiciendis vero, nulla animi labore veniam iste sequi dolores temporibus ipsum harum blanditiis est minus iure.
            Illum ipsum voluptate modi quis quisquam facilis, veniam quidem fuga nam repellendus porro perspiciatis recusandae maiores natus eius deleniti incidunt amet laboriosam beatae dolorum, alias iusto suscipit corporis hic! Consectetur?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae fugiat veritatis fuga maiores excepturi cupiditate modi quidem, rerum fugit explicabo culpa mollitia aspernatur doloribus porro, quibusdam soluta illum ipsam. Animi.
            Quae inventore quibusdam voluptatibus hic amet impedit distinctio doloribus molestias ipsum necessitatibus odit a tempora provident laboriosam maiores, repellat aut praesentium temporibus libero odio cumque voluptatum ea illo et. Reiciendis.
            Doloribus obcaecati molestiae minus sequi consequatur autem nobis possimus, sunt enim corrupti cumque officia delectus esse fugiat fuga aspernatur architecto doloremque ullam incidunt. Obcaecati quidem ad non, corporis sunt doloremque.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, eos. Nisi eum minima ducimus, expedita provident sapiente consequuntur, voluptatibus voluptatem, repellat possimus veritatis? Iure sapiente distinctio reprehenderit perspiciatis, sequi officiis?</p>
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