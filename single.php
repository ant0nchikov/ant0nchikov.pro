<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package main
 */
?>


<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
	<link href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css" rel="stylesheet">
	<title><?php the_title(); ?> | ant0nchikov</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
  </head>
<style>
	progress{
    position:fixed;
    left:0;
    top:0;
    width:100%;
    height:3px;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    border:none;
    background:transparent;
    color:#E83E8C;
}
progress::-webkit-progress-bar{
    background:transparent;
    border-radius:3px;
}
progress::-webkit-progress-value{
    background:#E83E8C;
    border-radius:3px;
}
progress::-moz-progress-bar{
    background:#E83E8C;
    border-radius:3px;
}
.progress-container{
    width:100%;
    background:transparent;
    position:fixed;
    top:0;
    left:0;
    height:3px;
    display:block;
}
.progress-bar{
    background:#E83E8C;
    width:0%;
    display:block;
    height:inherit;
}
</style>
  <body cz-shortcut-listen="true">
  <script>
    $(function() {
        $(window).on("scroll resize", function() {
            var o = $(window).scrollTop() / ($(document).height() - $(window).height());
            $(".progress-bar").css({
                "width": (100 * o | 0) + "%"
            });
            $('progress')[0].value = o;
        })
    });
</script>

<progress value="0">
    <div class="progress-container">
        <span class="progress-bar"></span>
    </div>
</progress>




    <!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5"><?php the_title(); ?></h1>
      <div class="col-12 col-sm-12 col-lg-12">
      <div class="col-4 col-sm-12 col-md-4"><div class="autho"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Автор: ant0nchikov</div></div>
        <div class="col-4 col-sm-12 col-md-4"><div class="categ"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> Рубрика: <?php the_category(', '); ?></div></div>

        <div class="col-4 col-sm-12 col-md-4"><div class="data"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Дата: <?php the_time(' G:i /j/m/Y'); ?></div></div></div><hr style="color: #ddd; background-color: #ddd;clear:both;height: 0.1px;">
      
      <p class="lead"><?php while ( have_posts() ) : the_post(); the_content(); endwhile;?></p>
      <hr style="border: none; color: #ddd; background-color: #ddd; height: 1px; ">
      <div class="col-12 col-sm-12 col-lg-12">

         <div class="col-4 col-sm-12 col-md-4"><div class="previos"><a href=""><?php previous_post_link(); ?></a></div></div>
         <div class="col-4 col-sm-12 col-md-4"><div class="home"><a href="http://wpfolder/">На главную</a></div></div>
         <div class="col-4 col-sm-12 col-md-4"><div class="next"><a href=""><?php next_post_link(); ?></a></div></div>
         </div>

          <style type="text/css">
           @media (min-width: 1000px) {

            .previos{
            text-align: left;}

            
            .next{
            text-align: right;}

            .home{
            text-align: center;}

            .autho{
                text-align: left;}

            .categ{
                text-align: center;
            }
            .data{
                text-align: right;
            }

        }

            @media (max-width: 1000px) {
            .previos{
            text-align: center;}
            .next{
            text-align: center;}

            .home{
            text-align: center;}
            
            .autho{
                text-align: center;}

            .categ{
                text-align: center;
            }
            .data{
                text-align: center;
            }
        }

         </style>

    </main>

    <footer class="footer">
        <hr style="border: none; color: #ddd; background-color: #ddd; height: 1px; ">

        
      <div class="container">
        <span class="text-muted"><p style="font-family: 'Russo One', serif; color: #333333;">© Aleksandr Antonchikov 2019, Saint Petersburg, All Right Reserved.</p></span>
	  </div>

      
      </footer>
	  

	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>  
    <script src="<?php bloginfo('template_directory') ?>/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>
  
</body></html>






