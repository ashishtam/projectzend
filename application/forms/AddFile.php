<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 *
 */


class Application_Form_AddFile extends Zend_Form
{
    
    public  function init()
    {
        
        $this->setName('addForm');
            
        $this->setMethod('post');
        
        //add an name element
        $this->addElement('text','name',array(
                        'filters'       => array('StringTrim'),
                        'validators'    => array(
                                                    array('StringLength', false, array(0,255))
                                                ),
                        'required'      =>   true,
                        'label'         =>  'Name'

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
