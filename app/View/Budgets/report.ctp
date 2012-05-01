<body>
    <h1 align="center">Orçamentos Cadastrados:</h1>
    <table>
        <tr>
            <td>id</td>
            <td>Nome:</td>
            <td>Data de Criação:</td>
            <td>Data de Modificação:</td>
            <td>Editar:</td>
            <td>Remover:</td>

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
