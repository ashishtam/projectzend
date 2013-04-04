<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Application_Form_LoginUser extends Zend_Form{

    public function init()
    {
        $this->setName('loginForm');
            
        $this->setMethod('post');
        
        //add an username element
        $this->addElement('text','username',array(
                        'filters'       => array('StringTrim'),
                        'validators'    => array(
                                                 
             array('Alnum', false, array('message' => array(Zend_Validate_Alnum::NOT_ALNUM=>'Username can only contain alphanumerics, with no spaces'))
                                                )),
                        'required'      =>   true,
                        'label'         =>  'UserName'

                ));
        
        // Add an password element
       $this->addElement('password', 'password', array(
           'label'      => 'Password:',
           'required'   => true,
           'filters'    => array('StringTrim'),
           'validators' => array(
             array('StringLength', false, array(0,255))
                    ),
                ));
       
        //add an Submit element
        $this->addElement('submit','submit', array(
                                                'required'  => false,
                                                'ignore'    => true,
                                                'label'     => 'Login'
                                                
                        ));
        
    }
}

?>
