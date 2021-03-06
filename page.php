<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    <title>Личное пространство/дневник/портфолио разработчка</title>
    <link href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxanium&display=swap" rel="stylesheet">



  <script>

    function show_div(id)
    {
      for (var i = 0; i < document.getElementById("texts").getElementsByTagName("div").length; i++)
      {
        var div = document.getElementById("texts").getElementsByTagName("div")[i];
        if (div.id == id)
          div.style.display = "block";
        else
          div.style.display = "none";
      }
    }

  </script>

  <script>
    $(function () {
  $('.example-popover').popover({
    container: 'body'
  })
})
  </script>

      

  </head>

  <body cz-shortcut-listen="true" style="background-color: #F3F4F6;">
    <div class="container">
 <div class="header" style="margin-top: 60px;">
        <h1 style="font-family: 'Russo One', sans-serif;">ant&#216;nchikov.pro</h1>
        <p class="lead" style="font-style: oblique; font-family: 'Open Sans', sans-serif;">«Каждый, имеющий доступ к глобальной сети интенет, даже примерно не представляет, чем владеет...»</p>
      </div>
      <hr style="border: none; color: #ddd; background-color: #ddd; height: 1px;" >
      <div class="navbar navbar-default" role="navigation" style=" border: 1px solid #ddd; background-color: #FFFFFF; margin-top: 35px;">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse " style="font-family: 'Russo One', serif; text-align: center; "  >
            <ul class="nav navbar-nav">
              <li><a class="nav-link active"data-toggle="modal" role="tab"  aria-selected="true"  href="#navbar" onclick="show_div('home')">Главная</a></li>
              <li><a class="nav-link active"data-toggle="modal" role="tab"  aria-selected="true"  href="#navbar" onclick="show_div('summary')">Резюме</a></li>
              <li><a class="nav-link active"data-toggle="modal" role="tab"  aria-selected="true"  href="#navbar" onclick="show_div('portfolio')">Портфолио</a></li>
              <li><a class="nav-link active"data-toggle="modal" role="tab"  aria-selected="true"  href="#navbar" onclick="show_div('liter')">Техническая литература</a></li>
              <li><a class="nav-link active"data-toggle="modal" role="tab"  aria-selected="true"  href="#navbar" onclick="show_div('feedback')">Обратная связь</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#">.pro</a></li>
              <li class="disabled"><a href="#">.games</a></li>
              <li class="disabled"><a href="#">.app</a></li>
            </ul>
          </div>
        </div>
      </div>


    <div class="container" style="font-family: 'Roboto Slab', serif;">

      <div class="row row-offcanvas row-offcanvas-right">

          <div id="texts" class="col-xs-12 col-sm-9">





          



 <?php           $posts = get_posts( array(
  'numberposts' => 0,
  'category'    => 0,
  'orderby'     => 'date',
  'order'       => 'DESC',
  'include'     => array(),
  'exclude'     => array(),
  'meta_key'    => '',
  'meta_value'  =>'',
  'post_type'   => 'post',
  'suppress_filters' => true,
) );

foreach( $posts as $post ){
  setup_postdata($post);
    ?>

  <div id="home" class="row" style=" font-family: 'Open Sans', serif; margin-bottom: 10px;" >
  <div id="home" class="col-12 col-sm-12 col-lg-12" style="background-color: #fff; border: 1px solid #ddd;border-radius: 5px; ">
    <div id="home" class="col-12 col-sm-12 col-lg-12" style="margin-top: 3px;">


        <div id="home" class="col-3 col-sm-3 col-md-3"><div id="home"  class="SP1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Автор: <b style="font-family: 'Oxanium';">ant&#216;nchikov</b></div></div>
         <div  id="home"class="col-4 col-sm-4 col-md-4"><div id="home" class="SP2"><span class="glyphicon glyphicon-bookmark"></span> Рубрика: <?php the_category(', '); ?></div></div>
        <div  id="home"class="col-5 col-sm-5 col-md-5"><div id="home" class="SP2"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Дата публикации:<?php the_time(' G:i /j/m/Y'); ?></div></div>
        
         </div>
          <hr style="color: #ddd; background-color: #ddd;clear:both;height: 0.1px;">
         <style type="text/css">
           @media (min-width: 1000px) {#home.SP1{
            text-align: left;}}
            @media (min-width: 1000px) {#home.SP2{
            text-align: right;}}
            @media (max-width: 1000px) {#home.SP1{
            text-align: center;}}
          @media (max-width: 1000px) {#home.SP2{
            text-align: center;}}
         </style>

               <div id="home" style="text-align: center;">
              <h2><?php the_title (); ?></h2>
              <p><?php the_excerpt (); ?></p>
              <p><a class="btn btn-primary" href="<?php the_permalink( $post ); ?>" role="button">Подробнее »</a></p>
            </div>
            </div>
         </div>
    <?php

  }
wp_reset_postdata();
?>
     





          

               
  




          <div id="summary" class="row" style="background-color: #FFFFFF; border-radius: 5px; border: 1px solid #ddd;" >
            <div id="summary" class="col-12 col-sm-12 col-lg-12">
            

              <div id="summary" class="row" style="margin-bottom: 20px;">
   
    <div id="summary" class="col-xs-6 col-sm-6 col-md-8 col-lg-8" style="margin-top: 3px;">
      
            <p><b>ФИО:</b> Антончиков Александр Александрович.</p>
            <p><b>Дата рождения:</b> 06.03.2002 (17 лет)</p>
            <p><b>Гражданство:</b> Республика Беларусь.</p>
            <p><b>Место жительства:</b> Санкт-Петербург, Россия.</p>
            <p><b>Место работы:</b> - </p>
            <p><b>Опыт работы:</b> - </p>
            <p><b>История мест работы:</b> </p>
    </div>
     <div id="summary" class="col-xs-4 col-sm-4 col-md-6 col-lg-4 text-right"><img src="<?php bloginfo('template_directory') ?>/img/index.svg" style="margin: 5px auto"></div>
   </div>
            <p style="margin-top: -20px"><b>Образование:</b> - </b> - </p>
            <p>  ➥  <b>Факультет:</b> - </p>
            <p>  ➥  <b>Специальность:</b> - </p>
            <p><b>Ключевые навыки:</b><span class="badge badge" style="background-color: black; color: white; margin-left: 3px;">Черный пояс по поиску информации в поисковой системе Google</span> <span class="badge badge" style="background-color:#F16529; color: white; margin-left: 3px;">HTML5</span> <span class="badge badge" style="background-color:#389CD7; color: white; margin-left: 3px;">CSS3</span> <span class="badge badge" style="background-color:#F7DF1E; color: black; margin-left: 3px;">JavaScript</span> <span class="badge badge" style="background-color:#777BB3; color: black; margin-left: 3px; text-shadow: white 1px 1px 0, white -1px -1px 0, white -1px 1px 0, white 1px -1px 0;">PHP</span> <span class="badge badge" style="background-color:#563D7C; color: white; margin-left: 3px;">Bootstrap v3-v4.4.1</span> <span class="badge badge" style="background-color:#0098DD; color: white; margin-left: 3px;">Wordpress</span> <span class="badge badge" style="background-color:#DE4C36; color: white; margin-left: 3px;">Git Bash</span> <span class="badge badge" style="background-color:#004482; color: white; margin-left: 3px;">C++/OПП/STL</span> <span class="badge badge" style="background-color:#0186B1; color: white; margin-left: 3px;">Delphi 7/Object pascal</span> </p>

            <p><b>GitHub:</b> <a href="https://github.com/ant0nchikov" style="color: #9D3DA8; font-family: 'Russo One', serif;" >https://github.com/ant0nchikov</a></p>



            <p><b>О себе:</b> 11010000 10010111 11010000 10110100 11010000 10110101 11010001 10000001 11010001 10001100 100000 11010000 10111111 11010000 10111110 11010000 10111010 11010000 10110000 100000 11010000 10111101 11010000 10111000 11010001 10000111 11010000 10110101 11010000 10110011 11010000 10111110 100000 11010000 10111101 11010000 10110101 11010001 10000010 100001 100000 11010000 10011101 11010000 10111110 100000 11010001 10000001 11010000 10111010 11010000 10111110 11010001 10000000 11010000 10111110 100000 11010000 10110001 11010001 10000011 11010000 10110100 11010000 10110101 11010001 10000010 101110.

              <p>Декодирование - <a href="https://decodeit.ru/binary">тут</a></p>
          </p> 
            </div>
          </div>

          <div id="portfolio" class="row" style="background-color: #f8f8f8; border-radius: 5px" >
            <div id="portfolio" class="col-12 col-sm-12 col-lg-12">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
              <p><a class="btn btn-primary" href="http://bootstrap-3.ru/examples/offcanvas/#" role="button">Подробнее »</a></p>
            </div>
          </div>

          <div id="feedback" class="row" style="background-color: #ffffff; border-radius: 5px;  border: 1px solid #ddd;" >
            <div id="feedback" class="col-12 col-sm-12 col-lg-12" style="margin: 9px auto;">
              <form action = "https://formspree.io/YOUR_FORM_ID" method = "POST">
<div id="feedback" class="form-group">
   <label for="name">Ваше имя:</label>
   <input type="name" name="name" class="form-control" id="name" placeholder="Name" required>
</div>
<div id="feedback" class="form-group">
   <label for="email1">E-mail:</label>
   <input type="email" name="email" class="form-control" id="email1" placeholder="Email" required>
</div>
<div id="feedback"  class="form-group">
   <label for="phone">Номер телефона:</label>
   <input type="phone" name="phone" class="form-control" id="phone" placeholder="Phone" required>
</div>
<div id="feedback" class="form-group">
   <label for="message">Сообщение:</label>
   <textarea class="form-control" name="message" rows="3"></textarea>
</div>
<div id="feedback" class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">Я даю свое согласие на обработку моих персональных данных.</label>
  </div>
   <button type="submit" class="btn btn-primary" style="font-family: 'Roboto Slab', serif; ">Отправить</button>
</form>
            </div>
          </div>


<div id="liter" class="row">
       <div id="liter" class="panel panel-danger">
          <div id="liter" class="panel-heading" style="text-align: center; font-size: 20px;">Внимание</div>
          <p style="text-align: center; font-family: 'Open Sans', serif; font-size: 14px;">Данный раздел - это своего рода домашняя библиотека, только в электронном варианте. Он посвящен моим друзьям, знакомым и всем тем, кто просто проходил мимо, но не прочь узнать что-то новое или освежить память актуальными (и не очень, но полезными во все времена) книгами. Ваше время не будет потрачено в пустую! (Все книги в этом разделе были прочитаны лично мной и я с уверенностью могу сказать, что время, которое вы потратите на прочтение этих книг или книги не будет пустой тратой времени). Нужную вам книгу вы можете приобрести на сайтах, которые имеют договор с авторами на реализацию их интеллектуальной собственности или же отправится в открытое плаванье по просторам интернета в поиске добрых людей, которые готовы буду с вами ею поделиться.</p>
          </div>
          </div>
   
  
          <div id="liter" class="row">
 <div id="liter" class="container">
    <div id="liter" class="row" style="margin-bottom: 20px;">
    <div id="liter" class="col-xs-12 col-sm-12 col-md-2 col-lg-2 text-center"><img  src="lafore.jpg" style="height: 145px; width: 115px; " ></div>
    <div id="liter" class="col-xs-12 col-sm-12 col-md-10 col-lg-10"> 
    <div id="liter" class="card-body" style="margin-top: 20px;">
    <h5 class="card-title"><b>Название:</b> Объектно-ориентированное программирование в С++ </h5>
    <p class="card-text"><b>Автор:</b> Лафоре Роберт </p>
    <p class="card-text"><b>Издательство:</b><a href="https://www.piter.com/"> Питер</a></p>
    <p class="card-text"><b>Количество страниц:</b> 928 </p>
  </div></div>
  </div>



</div>
</div>

   
       


          <div id="link" class="row" style="background-color: #f8f8f8; border-radius: 5px;" >
            <div id="link" class="col-12 col-sm-12 col-lg-12">
             <p><a href="http://infbu.ru/"> http://infbu.ru/</a> - Подготовка к ЕГЭ по информатике (или просто хороший сайт для изучения информатики)</p>
             <p><a href="http://kpolyakov.spb.ru/"> http://kpolyakov.spb.ru/</a> - Методические материалы и программное обеспечение для поддержки курса информатики в школе. Очень полезный сайт при изучении информатики.</p>
             <p><a href="https://staminaon.com/ru/"> https://staminaon.com/ru/</a> - Клавиатурный тренажер (10-ти пальцевая печать)</p>
             <p><a href="https://tablica-istinnosti.ru/ru/"> https://tablica-istinnosti.ru/ru/</a> - Калькулятор подробного преобразования логических выражений.</p>
             <p><a href="http://www.php.su/lessons/"> http://www.php.su/lessons/</a> - Интерактивный учебник по PHP.</p>
             <p><a href="https://learn.javascript.ru/"> http://www.php.su/lessons/</a> - Современный учебник по JavaScript.</p>
             
             
            </div>
          </div>

        </div>

        <div class="col-xs-12 col-sm-3 col-lg-3 sidebar-offcanvas" id="sidebar" role="navigation" style="text-align: center; font-family: 'Russo One', serif;">
          <div class="list-group">
            <a href="#" class="list-group-item "data-toggle="modal" role="tab"  aria-selected="true" data-target="#modal2">Inf&#216;rmathics.com</a>
            <a href="#" class="list-group-item "data-toggle="modal" role="tab"  aria-selected="true" data-target="#modal3">AthleticsInfo</a>
          </div>
          <div class="list-group">
            <a href="#navbar" class="list-group-item" role="tab"  aria-selected="true" onclick="show_div('link')">Полезные ссылки</a>
            <a href="#" class="list-group-item"data-toggle="modal" role="tab"  aria-selected="true" data-target="#modal7">Актуальные проекты</a>
            <a href="#" class="list-group-item" role="tab"  aria-selected="true" data-toggle="modal" data-target="#modal9">О сайте</a>
              <a href="#" class="list-group-item"data-toggle="modal" role="tab"  aria-selected="true" data-target="#exampleModalLong">Контакты</a>
            <a href="#" class="list-group-item"data-toggle="modal" role="tab"  aria-selected="true" data-target="#exampleModalLong1">Политика конфиденциальности</a>
            <a href="#" class="list-group-item"data-toggle="modal" role="tab"  aria-selected="true" data-target="#exampleModalLong">Политика использования cookie</a>
          </div>
        </div>
      </div>
    </div>
      <style type="text/css"
      >@media (min-width: 767px){
        #sidebar{
        padding-right: 30px;
        }

      </style>
      

<!-- Modal -->


<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title"href="#navbar" id="exampleModalLongTitle"style="text-align: center;font-family: 'Russo One', serif;">Приложение для iOS/Android - Inf&#216;rmathics.</h3>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle" style= "text-align: center;font-family: 'Russo One', serif;">Приложение для iOS/Android - AthleticsInfo.</h3>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Политика использования cookie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <p>Что такое файлы COOKIE?</p>
<p>Файлы cookie — это текстовые файлы небольшого объема, сохраняемые на Вашем компьютере, планшете или мобильном телефоне. Они НЕ являются вредоносными для компьютера или безопасности, и вопреки распространенному ошибочному мнению не имеют ничего общего с такими вирусами, как троянские программы. При посещении Вами веб-сайта файлы cookie позволяют веб-сайту «запоминать» Вас и Ваши предпочтения для повышения качества взаимодействия с сайтом.

Более подробную информацию о файлах cookie можно найти в Интернете.</p>

<p>Как я могу контролировать настройки, позволяющие использование COOKIE?</p>
<p>Если Вы не хотите получать файлы cookie, Вы можете изменить настройки браузера так, чтобы он уведомлял Вас о получении этих файлов, или же полностью отказаться от них. Вы также можете удалить уже сохраненные файлы cookie.</p>

<p>Как оператор использует файлы COOKIE</p>
<p>Оператор использует сервис веб-аналитики Google Analytics, предоставленный компанией Google Inc. (Google), который с помощью файлов cookie анализирует информацию об использовании веб-сайта в целях повышения его качества.

На этом веб-сайте используется функция идентификатора пользователя User ID. Идентификатор пользователя User ID является Вашим сетевым именем в Google Analytics. Google связывает данные об использовании сайта и идентификатор User-ID с Вашим профилем. Google Analytics на анонимной основе отслеживает Ваши действия на сайте на разных устройствах (планшет, компьютер, смартфон и т.д.).

Данные об использовании сайта, сформированные с помощью файлов cookie (в том числе Ваш IP-адрес), будут переданы в компанию Google и сохранены на серверах в США. Компания Google использует эту информацию для анализа взаимодействия с сайтом, составления для нас отчетов об активности на сайте и предоставления других услуг, связанных с использованием сайта и Интернета. При необходимости компания Google может передать эту информацию третьей стороне, если это предписано законом или в случае, если третья сторона выполняет обработку данных по поручению Google. Компания Google не будет связывать Ваш IP-адрес с другими данными, сохраненными Google.

Компания Google получает только идентификатор User-ID, а не информацию, содержащуюся в упомянутом выше профиле или другие персональные данные. Оператор имеет доступ к обобщенному варианту профиля. Профиль, связанный с идентификатором пользователя User-ID, не содержит никаких Ваших персональных данных.

Вы можете отказаться от отслеживания Вашей активности на сайте с помощью функции User ID, отправив электронное сообщение по адресу userprivacy@regus.com.

Вы можете также отказаться от получения файлов cookie, выбрав соответствующие настойки браузера, однако обращаем Ваше внимание на то, что в этом случае Вы, вероятно, не сможете использовать функции этого сайта в полном объеме. Используя данный сайт, Вы соглашаетесь с обработкой данных, собранных о Вас, компанией Google указанным выше способом и в соответствии с изложенными целями.

Подробнее о файлах cookie можно узнать, пройдя по ссылке <a href="http://www.aboutcookies.org">http://www.aboutcookies.org</a>.</p>

<p>Договор пользования</p>
<p>Продолжая пользоваться нашим сайтом, Вы соглашаетесь на размещение файлов cookie на Вашем устройстве. Если Вы решили отказаться от наших файлов cookie, оператор не может гарантировать, что Ваше посещение сайта будет таким же успешным, как при получении файлов cookie.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle" style="text-align: center;font-family: 'Russo One', serif;">Политика в отношении обработки персональных данных</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
  
<p>1. Общие положения</p>
<p>Настоящая политика обработки персональных данных составлена в соответствии с требованиями Федерального закона от 27.07.2006. №152-ФЗ «О персональных данных» и определяет порядок обработки персональных данных и меры по обеспечению безопасности персональных данных Антончикова Александра Александровича (далее – Оператор).
Оператор ставит своей важнейшей целью и условием осуществления своей деятельности соблюдение прав и свобод человека и гражданина при обработке его персональных данных, в том числе защиты прав на неприкосновенность частной жизни, личную и семейную тайну.
Настоящая политика Оператора в отношении обработки персональных данных (далее – Политика) применяется ко всей информации, которую Оператор может получить о посетителях веб-сайта https://ant0nchikov.pro.</p>
 
<p>2. Основные понятия, используемые в Политике</p>
<p>Автоматизированная обработка персональных данных – обработка персональных данных с помощью средств вычислительной техники;
Блокирование персональных данных – временное прекращение обработки персональных данных (за исключением случаев, если обработка необходима для уточнения персональных данных);
Веб-сайт – совокупность графических и информационных материалов, а также программ для ЭВМ и баз данных, обеспечивающих их доступность в сети интернет по сетевому адресу https://ant0nchikov.pro;
Информационная система персональных данных — совокупность содержащихся в базах данных персональных данных, и обеспечивающих их обработку информационных технологий и технических средств;
Обезличивание персональных данных — действия, в результате которых невозможно определить без использования дополнительной информации принадлежность персональных данных конкретному Пользователю или иному субъекту персональных данных;
Обработка персональных данных – любое действие (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных данных;
Оператор – государственный орган, муниципальный орган, юридическое или физическое лицо, самостоятельно или совместно с другими лицами организующие и (или) осуществляющие обработку персональных данных, а также определяющие цели обработки персональных данных, состав персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными данными;
Персональные данные – любая информация, относящаяся прямо или косвенно к определенному или определяемому Пользователю веб-сайта https://ant0nchikov.pro;
Пользователь – любой посетитель веб-сайта https://ant0nchikov.pro;
Предоставление персональных данных – действия, направленные на раскрытие персональных данных определенному лицу или определенному кругу лиц;
Распространение персональных данных – любые действия, направленные на раскрытие персональных данных неопределенному кругу лиц (передача персональных данных) или на ознакомление с персональными данными неограниченного круга лиц, в том числе обнародование персональных данных в средствах массовой информации, размещение в информационно-телекоммуникационных сетях или предоставление доступа к персональным данным каким-либо иным способом;
Трансграничная передача персональных данных – передача персональных данных на территорию иностранного государства органу власти иностранного государства, иностранному физическому или иностранному юридическому лицу;
Уничтожение персональных данных – любые действия, в результате которых персональные данные уничтожаются безвозвратно с невозможностью дальнейшего восстановления содержания персональных данных в информационной системе персональных данных и (или) результате которых уничтожаются материальные носители персональных данных.</p>
 
<p>3. Оператор может обрабатывать следующие персональные данные Пользователя</p>
<p>Фамилия, имя, отчество;
Номер телефона;
Адрес электронной почты;
Также на сайте происходит сбор и обработка обезличенных данных о посетителях (в т.ч. файлов «cookie») с помощью сервисов интернет-статистики (Яндекс Метрика и Гугл Аналитика и других).
Вышеперечисленные данные далее по тексту Политики объединены общим понятием Персональные данные.</p>
 
<p>4. Цели обработки персональных данных</p>
<p>Цель обработки персональных данных Пользователя — заключение, исполнение и прекращение гражданско-правовых договоров; предоставление доступа Пользователю к сервисам, информации и/или материалам, содержащимся на веб-сайте https://ant0nchikov.pro; уточнение деталей заказа.
Также Оператор имеет право направлять Пользователю уведомления о новых продуктах и услугах, специальных предложениях и различных событиях. Пользователь всегда может отказаться от получения информационных сообщений, направив Оператору письмо на адрес электронной почты policy@ant0nchikov.pro с пометкой «Отказ от уведомлениях о новых продуктах и услугах и специальных предложениях».
Обезличенные данные Пользователей, собираемые с помощью сервисов интернет-статистики, служат для сбора информации о действиях Пользователей на сайте, улучшения качества сайта и его содержания.</p>
 
<p>5. Правовые основания обработки персональных данных</p>
<p>Оператор обрабатывает персональные данные Пользователя только в случае их заполнения и/или отправки Пользователем самостоятельно через специальные формы, расположенные на сайте https://ant0nchikov.pro Заполняя соответствующие формы и/или отправляя свои персональные данные Оператору, Пользователь выражает свое согласие с данной Политикой.
Оператор обрабатывает обезличенные данные о Пользователе в случае, если это разрешено в настройках браузера Пользователя (включено сохранение файлов «cookie» и использование технологии JavaScript).</p>
 
<p>6. Порядок сбора, хранения, передачи и других видов обработки персональных данных</p>
<p>Безопасность персональных данных, которые обрабатываются Оператором, обеспечивается путем реализации правовых, организационных и технических мер, необходимых для выполнения в полном объеме требований действующего законодательства в области защиты персональных данных.
Оператор обеспечивает сохранность персональных данных и принимает все возможные меры, исключающие доступ к персональным данным неуполномоченных лиц.
Персональные данные Пользователя никогда, ни при каких условиях не будут переданы третьим лицам, за исключением случаев, связанных с исполнением действующего законодательства.
В случае выявления неточностей в персональных данных, Пользователь может актуализировать их самостоятельно, путем направления Оператору уведомление на адрес электронной почты Оператора policy@ant0nchikov.pro с пометкой «Актуализация персональных данных».
Срок обработки персональных данных является неограниченным. Пользователь может в любой момент отозвать свое согласие на обработку персональных данных, направив Оператору уведомление посредством электронной почты на электронный адрес Оператора policy@ant0nchikov.pro с пометкой «Отзыв согласия на обработку персональных данных».</p>
 
<p>7. Трансграничная передача персональных данных</p>
<p>Оператор до начала осуществления трансграничной передачи персональных данных обязан убедиться в том, что иностранным государством, на территорию которого предполагается осуществлять передачу персональных данных, обеспечивается надежная защита прав субъектов персональных данных.
Трансграничная передача персональных данных на территории иностранных государств, не отвечающих вышеуказанным требованиям, может осуществляться только в случае наличия согласия в письменной форме субъекта персональных данных на трансграничную передачу его персональных данных и/или исполнения договора, стороной которого является субъект персональных данных.</p>
 
<p>8. Заключительные положения</p>
<p>Пользователь может получить любые разъяснения по интересующим вопросам, касающимся обработки его персональных данных, обратившись к Оператору с помощью электронной почты policy@ant0nchikov.pro.
В данном документе будут отражены любые изменения политики обработки персональных данных Оператором. Политика действует бессрочно до замены ее новой версией.
Актуальная версия Политики в свободном доступе расположена в сети Интернет по адресу https://ant0nchikov.pro.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--MODAL-->


<hr style="border: none; color: #ddd; background-color: #ddd; height: 1px; " >



      <footer>
        <p style="font-family: 'Russo One', serif;">© Aleksandr Antonchikov, ant0nchikov.pro 2019-2020, Saint Petersburg, All Right Reserved.</p>
      </footer> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>  
    <script src="<?php bloginfo('template_directory') ?>/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/js.js"></script>
  
</body></html>   

<!--Привет! Если ты заглянул сюда и увидел весь этот пиздец, то знай - это произведение искусства! Да, у меня HTML, CSS и JS в одном файле, да так не делают, но, не делают в сайтах на заказ! (Т.к. если его нужно будет изменить или поправить, другому разработчику будет сложно, а то и вовсе невозможно разобраться в коде.) Этот сайт был сделан не на заказ, его я делал для СЕБЯ, как Я хочу, и да, если тебе что-то не нравится или не устраивает - свали нахуй отсюда и не заходи сюда больше!-->