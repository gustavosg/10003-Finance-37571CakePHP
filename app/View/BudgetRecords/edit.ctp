<?php
/**
 *
 * 
 */
?>

<body>
    <form method="post" name="BudgetRecordEditForm" action="">
        <h2 align="center">Edi��o de Conta:</h2>

        <?php
        echo $this->Form->create('BudgetRecord', array('action' => 'edit'));
        echo $this->Form->input('budget_id', array('type'=> 'select', 'options' => $Budgets,  'label' => 'Or�amento'));
        echo $this->Form->input('ammount');
        echo $this->Form->input('sub_category_id', array('type'=> 'select', 'options' => $SubCategory,  'label' => 'SubCategoria'));
        echo $this->Form->input('created');
        echo $this->Form->end('Salvar edi��o');
        ?>


    </form>        

</body>
