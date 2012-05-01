<?php
/**
 *
 * @author Gustavo Souza Gonçalves
 */
?>

<body>
    <form method="post" name="BudgetRecordEditForm" action="">
        <h1 align="center">Edição de Conta:</h1>

        <?php
        echo $this->Form->create('BudgetRecord', array('action' => 'edit'));
        echo $this->Form->input('budget_id', array('type'=> 'select', 'options' => $Budgets,  'label' => 'Orçamento'));
        echo $this->Form->input('ammount');
        echo $this->Form->input('sub_category_id', array('type'=> 'select', 'options' => $SubCategory,  'label' => 'SubCategoria'));
        echo $this->Form->input('created');
        echo $this->Form->end('Salvar edição');
        ?>


    </form>        

</body>
