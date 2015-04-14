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
    }
    public function helloAction()
    {
        echo "Hello";

    }
    public function heheAction(){
    	echo "hehe";
    }
    public function hiAction()
    {
        $this->render('hello');

    }



}

