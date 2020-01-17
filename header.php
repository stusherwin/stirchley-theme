<?php
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Stirchley Co-operative Development</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="<?= get_stylesheet_directory_uri() ?>/dist/app.js"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="<?= get_stylesheet_directory_uri() ?>/style.css">
  <link rel="stylesheet" type="text/css" media="screen" href="<?= get_stylesheet_directory_uri() ?>/dist/styles.css">
</head>
<body class="font-sans font-light">
  <div class="container mx-auto p-4 sm:p-8 lg:py-16">
    <header>
      <img src="<?= get_stylesheet_directory_uri() ?>/img/logo2.png" class="float-left w-24 h-24 mr-4 mt-1 sm:w-48 sm:h-48 sm:mr-8" />
      <h1 class="font-light text-3xl sm:text-5xl sm:pt-2 md:pt-8 xl:pt-0">Stirchley <i>Co-operative</i> Development</h1>
      <h2 class="font-light text-xs sm:text-xl tracking-wide text-grey-darker mt-4 sm:mt-10 md:mt-2">Developing and growing <i>co-operation</i> in Stirchley</h2>
      <nav class="text-sm font-light border-t border-grey-dark mt-4 pt-1 leading-normal sm:mt-8 sm:pt-2 sm:text-xl md:mt-16 xl:ml-56">
        <a class="no-underline text-black hover:underline mr-1 sm:mr-4" data-href="about" href="#">About us</a>
        <a class="no-underline text-black hover:underline mr-1 sm:mr-4 inline md:hidden" data-href="coop" href="#coop"><i>Co-operatives</i></a>
        <a class="no-underline text-black hover:underline mr-1 sm:mr-4 hidden md:inline" data-href="coop" href="#coop">What is a <i>Co-operative</i>?</a>
        <a class="no-underline text-black hover:underline mr-1 sm:mr-4 inline md:hidden" data-href="stirchley" href="#stirchley">Stirchley</a>
        <a class="no-underline text-black hover:underline mr-1 sm:mr-4 hidden md:inline" data-href="stirchley" href="#stirchley">What's happening in Stirchley?</a>
        <a class="no-underline text-black hover:underline mr-1 sm:mr-4 inline lg:hidden" data-href="plans" href="#plans">Our plans</a>
        <a class="no-underline text-black hover:underline mr-1 sm:mr-4 hidden lg:inline" data-href="plans" href="#plans">What are our plans?</a>
        <a class="no-underline text-black hover:underline mr-1 sm:mr-4 inline" data-href="jobs" href="#jobs">Jobs</a>
      </nav>
    </header>