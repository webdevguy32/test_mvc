<?php

class View {

    function __construct() {
        echo "This is the MAIN VIEW CONTROLLER<br />";
    }

    public function render($name) {
        require 'views/' . $name . '.php';
    }

}

?>
