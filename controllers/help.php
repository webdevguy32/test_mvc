<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of help
 *
 * @author s
 */
class Help extends Controller{

    function __construct() {
        parent::__construct();
        echo "we are now inside the help controller<br />";
    }

    function other($arg = false) {
        echo "we are inside other now<br />";
        echo " Optional argument: " . $arg;
        
        
        require 'models/help_model.php';
        $model = new Help_Model();
    }

}

?>
