<body>
    <form id="ExpenditureForm" method="post" action="add">
        <h1 align="center">Entre com as informações:</h1>
        <?php
        echo $this->Form->create('Expenditure');
        echo $this->Form->input('sub_category_id');
        echo $this->Form->input('account_id');
        echo $this->Form->input('date');
        echo $this->Form->input('ammount');
        echo $this->Form->input('created');
        echo $this->Form->end('Gravar Despesa');
        ?>
    </form>
</body>
