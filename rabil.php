<?php
class Father {
    public function __construct() {
        echo "Father constructor";
    }
}

class Son extends Father {
    public function __construct() {
       
      echo " and Son constructor";
       parent::__construct();
    }
}

new Son(); 

