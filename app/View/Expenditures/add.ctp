<body>
    <form id="ExpenditureForm" method="post" action="add">
        <h1 align="center">Entre com as informa��es:</h1>
        <?php
        echo $this->Form->create('Expenditure');
        echo $this->Form->input('sub_category_id', array('options' => $SubCategory, 'class' => 'SubCategory', 'type'=>'select', 'label'=>'Sub Categoria:'));
        echo $this->Form->input('account_id', array('options' => $Account, 'class' => 'Account', 'type'=>'select', 'label'=>'Conta:'));
        echo $this->Form->input('date', array('label'=>'Data:'));
        echo $this->Form->input('ammount', array('label'=>'Quantia:'));
        echo $this->Form->input('created', array('label'=>'Data de Cria��o:'));
        echo $this->Form->input('description', array('label'=>'Descri��o:'));
        echo $this->Form->end('Gravar Despesa');
        ?>
    </form>
</body>
