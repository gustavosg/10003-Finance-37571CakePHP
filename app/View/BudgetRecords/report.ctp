<body>
    <h2 align="center">Items de Orçamento Cadastrados:</h2>
    <table align="center">
        <tr>
            <th>Id:</th>
            <th>Id Orçamento:</th>
            <th>Quantia:</th>
            <th>Id SubCategoria:</th>
            <th>Data de Criação:</th>
            <th>Data de Modificação:</th>
            <th>Editar:</th>
            <th>Remover:</th>
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
