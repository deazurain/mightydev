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
      
      <h3>Welcome on mightydev.nl</h3>
      <p>
        Mightydev is a small and relatively new website building company. Projects are realized by the cooperation
        of an enthousiastic team of students. Both programmers from the Technical University in Delft and designers from the
        Rotterdam University for appield sciences form the basis of our business.  
      </p>
      <div class="box right">
        <?php Manager::image('tu_delft_logo.png'); ?>
        <h5>Programmers are beat <br /> in to shape at TU Delft</h5>
      </div>
      <div class="clear"></div>
      <p>
        At the moment, Mightydev is not yet fully functional. The company has had some minor projects to work on. 
        The next big project we will be 
      </p>
      <div class="box left">
        <?php Manager::image('rotterdam_university_logo.jpg'); ?>
        <h5>Designers develop their skills and creativity at some academy in rotterdam</h5>
      </div>
      <div class="clear"></div>
      <h3>Where does it come from?</h3>
      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
    </div>
    
  </div>

  <?php Manager::part('background'); ?>
</body>

</html>
