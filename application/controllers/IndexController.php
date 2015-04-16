<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        echo "this is index";
    }
    public function helloAction()
    {
        //just to call hello.phtml at views
    }

}

