<body>
    <h1 align="center">Items de Orçamento Cadastrados:</h1>
    <table>
        <tr>
            <td>Id:</td>
            <td>Id Orçamento:</td>
            <td>Quantia:</td>
            <td>Id SubCategoria:</td>
            <td>Data de Criação:</td>
            <td>Data de Modificação:</td>
            <td>Editar:</td>
            <td>Remover:</td>
        </tr>
        <?php foreach ($BudgetRecords as $BudgetRecord): ?>
            <tr>
                <td><?php echo $BudgetRecord['BudgetRecord']['id']; ?></td>
                <td><?php echo $BudgetRecord['BudgetRecord']['budget_id']; ?></td>
                <td><?php echo $this->Html->link($BudgetRecord['BudgetRecord']['ammount'], array('controller' => 'budgetrecords', 'action' => 'find', $BudgetRecord['BudgetRecord']['id'])); ?></td>
                <td><?php echo $BudgetRecord['BudgetRecord']['sub_category_id']; ?></td>
                <td><?php echo $BudgetRecord['BudgetRecord']['created']; ?></td>
                <td><?php echo $BudgetRecord['BudgetRecord']['modified']; ?></td>
                <td><?php echo $this->Html->link('Editar', array('controller' => 'budgetrecords', 'action' => 'edit', $BudgetRecord['BudgetRecord']['id'])); ?></td>
                <td><?php echo $this->Html->link('Remover', array('controller' => 'budgetrecords', 'action' => 'delete', $BudgetRecord['BudgetRecord']['id'])); ?></td>
                
            </tr>
        <?php endforeach; ?>
    </table>
</body>
