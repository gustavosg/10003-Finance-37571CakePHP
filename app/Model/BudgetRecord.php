<?php

/**
 * Classe Model para BudgetsRecord
 *
 * 
 */
class BudgetRecord extends AppModel {

    //put your code here
    public $name = "BudgetRecord";
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
    public $validate = array(
        'ammount' => array(
            'numeric' => array(
                'rule' => 'numeric',
                'required' => true,
                'message' => 'Informe a quantia!'
            )
        )
    );

}

?>
