<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Expenditure
 *
 * 
 */
class Expenditure extends AppModel {

    // Define tabela a ser usada:
    public $useTable = 'Expenditure';
    public $name = 'Expenditure';
    public $hasMany = array(
        'Account' => array(
            'className' => 'Account',
            'conditions' => '',
            'fields' => array('Account' => 'name'),
            'dependent' => true,
            'foreignKey' => 'id'
        ),
        'SubCategory' => array(
            'className' => 'SubCategory',
            'conditions' => '',
            'fields' => array('SubCategory' => 'name'),
            'dependent' => true,
            'foreignKey' => 'id'
        )
    );
    public $validate = array(
        'ammount' => array(
            'numeric' => array(
                'rule' => 'numeric',
                'required' => true,
                'message' => 'Informe a quantia!'
            )
        ),
        'description' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'Informe uma descrição!'
        ),
    );

}

?>
