<body>
    <form id="BudgetRecordForm" method="post" action="add">
        <h2 align="center">Entre com as informa��es:</h2>
        <?php
        echo $this->Form->create('BudgetRecord');
        echo $this->Form->input('budget_id', array('type'=> 'select', 'options' => $Budgets,  'label' => 'Or�amento'));
        echo $this->Form->input('ammount');
        echo $this->Form->input('sub_category_id', array('type'=> 'select', 'options' => $SubCategory,  'label' => 'Or�amento'));
        echo $this->Form->input('created');
        echo $this->Form->hidden('modified');
        echo $this->Form->end('Gravar Item de Or�amento');
        ?>
    </form>
</body>
