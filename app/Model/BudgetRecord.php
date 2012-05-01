<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BudgetRecord
 *
 * @author Gustavo Souza Gonçalves
 */
class BudgetRecord extends AppModel{
    //put your code here
    
    public $hasMany = array(
      'Budgets' => array(
          'classname' => 'Budget',
          'conditions' => '',
          'dependent' => true,
          'foreignKey' => 'id'
          
      ),
        'SubCategory' => array(
            'classname' => 'SubCategory',
            'conditions' => '',
            'dependent' => true,
            'foreignKey' => 'id'
        )
    );
    
}

?>
