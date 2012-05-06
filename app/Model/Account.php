<?php

/**
 * Classe Model para Account 
 */
class Account extends AppModel {

    public $name = 'Account';
    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'Informe o nome!'
        )
    );

}

?>
