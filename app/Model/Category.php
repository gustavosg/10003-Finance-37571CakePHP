<?php

/**
 * Classe Model para Category
 *
 * 
 */
class Category extends AppModel{
    //put your code here
    public $name = 'Category';
    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'Informe o nome!'
        )
    );
}

?>
