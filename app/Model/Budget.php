<?php

/**
 * Classe Model para Budget
 *
 */
class Budget extends AppModel {

    public $name = 'Budget';
    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'Informe o nome!'
        )
    );

}

?>
