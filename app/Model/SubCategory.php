<?php

/**
 * Classe Model para SubCategory
 *
 * 
 */
class SubCategory extends AppModel {

    //put your code here

    public $hasMany = array(
        'Category' => array(
            'className' => 'Categories',
            'conditions' => '',
            'dependent' => true,
            'foreignKey' => 'id'
        )
    );
    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'Informe o nome!'
        )
    );

}

?>
