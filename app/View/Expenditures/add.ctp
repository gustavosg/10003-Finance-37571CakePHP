<body>
    <form id="ExpenditureForm" method="post" action="add">
        <h1 align="center">Entre com as informações:</h1>
        <?php
        echo $this->Form->create('Expenditure');
        echo $this->Form->input('sub_category_id', array('type'=> 'select', 'label'=> 'Sub Categoria:'));
        echo $this->Form->input('account_id', array('options' => $this->Accounts, 'class' => 'Account', 'type'=>'select', 'label'=>'Conta:'));
        echo $this->Form->input('date');
        echo $this->Form->input('ammount');
        echo $this->Form->input('created');
        echo $this->Form->end('Gravar Despesa');
        ?>
    </form>
</body>
