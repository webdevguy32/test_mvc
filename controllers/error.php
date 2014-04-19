<?php

class Error extends Controller {

    function __construct() {
        parent::__construct();
        echo "This is in the error controller";
        
        $this->view->msg = 'This page does not exist<br />';
        $this->view->render('error/index');
    }

}