<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
//        $this->_layout = Zend_Layout::getMvcInstance();
//        $this->_layout->setLayout('default');
    }

    public function indexAction()
    {
        // action body
    }
	
    public function abcAction(){
            $data = "this is test, abc";
            $this->view->show = $data;


    /*echo "<pre>";
    print_r($result);
    echo "</pre>";*/
    }

    public function xyzAction()
    {
            $objUsers = new Application_Model_DbTable_Users();

            $result = $objUsers->fetchAll()->toArray();
            $this->view->result = $result;
    }


}

