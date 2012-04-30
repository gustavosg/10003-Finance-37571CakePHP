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
            'conditions' => array('account.id' => '') ,
            'fields' => array('Account' => 'name'),
            'dependent' => true,
            'foreignKey' => 'account_id'
        ),
        'SubCategory' => array(
            'className' => 'SubCategory',
            'conditions' => array('sub_category_id.id' => '1'),
            'fields' => array('SubCategory' => 'name'),
            'dependent' => true,
            'foreignKey' => 'sub_category_id'
        )
    );
}

?>
