<div id="menu">
  <div class="top"></div>
  <ul>
<?php
    $links = array(
      Path::web_project('index.php') => 'home', 
      Path::web_project('news.php') => 'nieuws',
      Path::web_project('rules.php') => 'spelregels',
      Path::web_project('contact.php') => 'contact'
    );
    $current_path = $_SERVER['PHP_SELF'];
    foreach ($links as $page => $name) {
      $attr = ($current_path == $page) ? 'class="current"' : '';
?>    <li><a <?=$attr?> href="<?=$page?>"><?=$name?></a></li> <?php
    }
?>
  </ul>
  <div class="bottom"></div>
</div>