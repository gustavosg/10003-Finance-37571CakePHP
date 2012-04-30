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
    public $hasOne = array(
        'Account' => array(
            'className' => 'Account',
            'conditions' => array('accounts.id' => '1'),
            'fields' => array('Account' => 'name'),
            'dependent' => false,
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
