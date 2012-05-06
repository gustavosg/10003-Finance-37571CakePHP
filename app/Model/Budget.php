<?php

/**
 * Classe Model para Budget
 *
 */
class Budget extends AppModel {

    public $name = 'Budget';
    public $validate = array(
        'name' => array(
            'alphaNumeric' => array(
                'rule' => 'alphaNumeric',
                'required' => true,
                'message' => 'Informe o nome!'
            )
        )
    );

}

?>
