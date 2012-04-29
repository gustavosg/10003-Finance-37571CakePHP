<body>
    <form id="CategoriesForm" method="post" action="add">
        <h1 align="center">Entre com as informações:</h1>
        <?php
        echo $this->Form->create('BudgetRecord');
        echo $this->Form->input('budget_id');
        echo $this->Form->input('ammount');
        echo $this->Form->input('sub_category_id');
        echo $this->Form->input('created');
        echo $this->Form->end('Gravar Item de Orçamento');
        ?>
    </form>
</body>
