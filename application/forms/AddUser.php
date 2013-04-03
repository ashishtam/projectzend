<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 *
 */


class Application_Form_AddUser extends Zend_Form
{
    
    public  function init()
    {
        
        $this->setName('addForm');
            
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
            )
        ));

        //add an name element
        $this->addElement('text','name',array(
                        'filters'       => array('StringTrim'),
                        'validators'    => array(
                                                    array('StringLength', false, array(0,255)),
                                                    array('Alpha', false)
                                                ),
                        'required'      =>   true,
                        'label'         =>  'Name'

                ));
        
        
        //add an address element
        $this->addElement('text','address',array(
                        'filters'       => array('StringTrim'),
                        'validators'    => array(
                                                    array('StringLength', false, array(0,255))
                                                ),
                        'required'      =>   true,
                        'label'         =>  'Address'

                ));
        
        // Add an email element
        $this->addElement('text', 'email', array(
            'label'      => 'Your email address:',
            'required'   => true,
            'filters'    => array('StringTrim'),
            'validators' => array(
                'EmailAddress',
            )
        ));
       
        // Add an phone number element
        $this->addElement('text', 'phoneNumber', array(
            'label'      => 'Your Phone Number:',
            'required'   => true,
            'filters'    => array('StringTrim'),
            'validators' => array(
                           )
        ));
        
        /*
          // Add a captcha
        $this->addElement('captcha', 'captcha', array(
            'label'      => 'Please enter the 5 letters displayed below:',
            'required'   => true,
            'captcha'    => array(
                'captcha' => 'Figlet',
                'wordLen' => 5,
                'timeout' => 300
            )
        ));
        */
        
        //add an Submit element
        $this->addElement('submit','submit', array(
                                                'required'  => false,
                                                'ignore'    => true,
                                                'label'     => 'Send'
                                                
                        ));
                
    }
}

?>
