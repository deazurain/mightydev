
<?php

abstract class NewPart {

  // settings
  public function requireDatabase() { return false; }
  public function requireSession() { return false; }
  
  // parts used by this part
  public function getPartDependencies() { return array(); }
  
  // initialization to be done before any output is sent
  public function initialize() { /* no initialization */ }
  
  // output of the part
  public abstract function insert();
  
}

?>

<?php

class HeaderPart implements NewPart {
  
  public function insert() {
?>
    <h1>header</h1>
<?php
  }
  
}



//page
Manager::loadPart('Header');
// if already loaded return
// goto dir .part/Header
// add all css files
// add all js files
// require all php files
// add HeaderPart instance to parts list
// for all HeaderPart.getPartDependencies() loadPart dependency

Manager::insertLinks();

Manager::insertPart('Header');


$template_part = new TemplatePart('home'); 

manager.loadPart('home');
manager.loadPart('')
