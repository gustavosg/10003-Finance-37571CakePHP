<?php
/**
 *
 * @author Gustavo Souza Gonçalves
 */
?>

<body>
    <form method="post" name="BudgetRecordEditForm" action="">
        <h2 align="center">Edição de Conta:</h2>

        <?php
        echo $this->Form->create('Expenditure', array('action' => 'edit'));
        echo $this->Form->input('sub_category_id', array('options' => $SubCategory, 'class' => 'SubCategory', 'type'=>'select', 'label'=>'Sub Categoria:'));
        echo $this->Form->input('account_id', array('options' => $Account, 'class' => 'Account', 'type'=>'select', 'label'=>'Conta:'));
        echo $this->Form->input('date', array('label'=>'Data:'));
        echo $this->Form->input('ammount', array('label'=>'Quantia:'));
        echo $this->Form->input('modified', array('label'=>'Data de Modificação:'));
        echo $this->Form->input('description', array('label'=>'Descrição:'));
        echo $this->Form->end('Salvar edição');
        ?>


    </form>        

</body>
