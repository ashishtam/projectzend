<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initDoctype()
    {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('XHTML1_STRICT');
    }
    
    protected function _initViewHelpers()
    {
//        $this->bootstrap('layout');
//        $layout = $this->getResource('default');
        
//        $view = $layout->getView();
        
//        $this->bootstrap('layout');
//        $layout = $this->getResource('default');
//        $view = $layout->getView();
//        $view = $layout->getView();
//        $view->doctype('XHTML1_STRICT');
//        $view->headMeta()->appendHttpEquiv('Content-Type', 'text/html;charset=utf-8');

    }
    
    
    protected function _initRoutes()
    {
        $config = new Zend_Config_Ini(APPLICATION_PATH.'/configs/routes.ini');
        $router = Zend_Controller_Front::getInstance()->getRouter();
        $router->addConfig($config,'routes');
    }
    
    protected function _initAutoloader()
    {
        $loader = new Zend_Application_Module_Autoloader(
                    array(
                        "namespace" => "",
                        "basePath"=> APPLICATION_PATH."/modules/default")
                );
        
        return $loader;
    
    }
    
}

