<?php
class altPageBuilder{

  public function mainPage(){
    echo 'derp';
  }

  public function addPages(){
    add_menu_page('Alt Page Builder', 'Alt Page Builder', 'manage_options', 'alt-page-builder', [$this, 'mainPage'], '', null);
  }

  public function run(){
    add_action( 'admin_menu', [$this, 'addPages'] );
  }

}
?>
