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
    
    public function adduserAction()
    {
        $form = new Application_Form_AddUser();
        $objInsertUser = new Application_Model_DbTable_InsertUser();
        
        
        $this->view->form = $form;
        
        
        if($this->getRequest()->isPost())
        {
            $formData = $this->getRequest()->getPost();
            
            if($form->isValid($formData))
            {
                $values = $form->getValues();
                
                $result = $objInsertUser->insert($values);
                
                if($result)
                {
                    echo "Successfully Added into Database";
                }
                else 
                {
                    echo "Error adding to the database";
                }
                
                
            }
            
          
        }
              
    }

}

