<?php require "config.php"; ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
  <?php
  Manager::css('reset');
  Manager::css('fonts');
  
  Manager::css('header');
  Manager::css('container');
  Manager::css('menu');
  Manager::css('page');
  Manager::css('background');
  ?>
</head>

<body>

  <?php Manager::part('header'); ?>
  
  <div id="container">
    
    <?php Manager::part('menu'); ?>
    
    <div id="page">
      
      <h3>De Mightydev website is bijna af</h3>
      <p>Na dagen en nachten zwoegen is het dan zo ver. Mick heeft al zijn tijd gestopt in het ontwikkelen van een framework in php om deze website mee op te zetten. Al dat harde werken heeft gelukkig wel iets nuttigs opgeleverd. </p>
      <p>Mick heeft laten weten dat hij nu graag naar bed wilt. Het blijft de vraag of deze nieuwspagina aantrekkelijk genoeg was om tot hier door te lezen!
      <p>Groetjes, </p>
      <p>Mick</p>

    </div>
    
  </div>

  <?php Manager::part('background'); ?>
</body>

</html>
