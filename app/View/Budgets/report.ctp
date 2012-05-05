<body>
    <h2 align="center">Orçamentos Cadastrados:</h2>
    <table align="center">
        <tr>
            <th>id</th>
            <th>Nome:</th>
            <th>Data de Criação:</th>
            <th>Data de Modificação:</th>
            <th>Editar:</th>
            <th>Remover:</th>

        </tr>
        <?php foreach ($Budgets as $Budget): ?>
            <tr>
                <td><?php echo $Budget['Budget']['id']; ?></td>
                <td><?php echo $this->Html->link($Budget['Budget']['name'], array('controller' => 'budgets', 'action' => 'find', $Budget['Budget']['id'])); ?></td>
                <td><?php echo $Budget['Budget']['created']; ?></td>
                <td><?php echo $Budget['Budget']['modified']; ?></td>
                <td><?php echo $this->Html->link('Editar', array('controller' => 'Budgets', 'action' => 'edit', $Budget['Budget']['id'])); ?></td>
                <td><?php echo $this->Html->link('Remover', array('controller' => 'Budgets', 'action' => 'delete', $Budget['Budget']['id'])); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
