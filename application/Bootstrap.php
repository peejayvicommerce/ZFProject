<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	protected function _initDoctype()
    {
    	$this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('XHTML1_STRICT');
    }
	/*public function __construct($application){
		parent::__construct($application);
	    $router = Zend_Controller_Front::getInstance()->getRouter();

	    $helloRoute = new Zend_Controller_Router_Route('index/:action', array(
	        'controller' => 'index',
	        'action'     => 'hello'
	    ));

	    $defaultRoute = new Zend_Controller_Router_Route(':action', array(
	        'module'     => 'default',
	        'controller' => 'index',
	        'action'     => 'index'
	    ));

	    
	    $router->addRoute('defaultRoute', $defaultRoute);
	    $router->addRoute('helloRoute', $helloRoute);
	}*/

}