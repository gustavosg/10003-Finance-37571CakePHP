<?php
/**
 *
 * @author Gustavo Souza Gon�alves
 */
?>

<body>
    <form method="post" name="BudgetRecordEditForm" action="">
        <h2 align="center">Edi��o de Conta:</h2>

        <?php
        echo $this->Form->create('Expenditure', array('action' => 'edit'));
        echo $this->Form->input('sub_category_id', array('options' => $SubCategory, 'class' => 'SubCategory', 'type'=>'select', 'label'=>'Sub Categoria:'));
        echo $this->Form->input('account_id', array('options' => $Account, 'class' => 'Account', 'type'=>'select', 'label'=>'Conta:'));
        echo $this->Form->input('date', array('label'=>'Data:'));
        echo $this->Form->input('ammount', array('label'=>'Quantia:'));
        echo $this->Form->input('modified', array('label'=>'Data de Modifica��o:'));
        echo $this->Form->input('description', array('label'=>'Descri��o:'));
        echo $this->Form->end('Salvar edi��o');
        ?>


    </form>        

</body>
