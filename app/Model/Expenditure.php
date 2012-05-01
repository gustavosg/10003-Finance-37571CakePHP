<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Expenditure
 *
 * @author Gustavo Souza Gonçalves
 */
class Expenditure extends AppModel {

    // Define tabela a ser usada:
    public $useTable = 'Expenditure';
    public $name = 'Expenditure';
    public $hasMany = array(
        'Account' => array(
            'className' => 'Account',
            'conditions' => '' ,
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
}

?>
