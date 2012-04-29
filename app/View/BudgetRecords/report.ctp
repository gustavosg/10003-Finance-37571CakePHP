<body>
    <h1 align="center">Items de Orçamento Cadastrados:</h1>
    <table>
        <tr>
            <td>id</td>
            <td>Nome:</td>
            <td>Data de Criação:</td>
            <td>Data de Modificação:</td>

        </tr>
        <?php foreach ($BudgetRecords as $BudgetRecord): ?>
            <tr>
                <td><?php echo $BudgetRecord['Category']['id']; ?></td>
                <td><?php echo $this->Html->link($BudgetRecord['Category']['name'], array('controller' => 'categories', 'action' => 'find', $BudgetRecord['Category']['id'])); ?></td>
                <td><?php echo $BudgetRecord['Category']['created']; ?></td>
                <td><?php echo $BudgetRecord['Category']['modified']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
