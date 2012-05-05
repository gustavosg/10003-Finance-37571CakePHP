<body>
    <h2 align="center">Contas Cadastradas:</h2>
    <table align="center">
        <th>id</th>
        <th>Nome:</th>
        <th>Data de Criação:</th>
        <th>Data de Modificação:</th>
        <th>Editar:</th>
        <th>Remover:</th>
        <?php foreach ($Accounts as $account): ?>
            <tr>
                <td><?php echo $account['Account']['id']; ?></td>
                <td><?php echo $this->Html->link($account['Account']['name'], array('controller' => 'accounts', 'action' => 'find', $account['Account']['id'])); ?></td>
                <td><?php echo $account['Account']['created']; ?></td>
                <td><?php echo $account['Account']['modified']; ?></td>
                <td><?php echo $this->Html->link('Editar', array('controller' => 'accounts', 'action' => 'edit', $account['Account']['id'])); ?></td>
                <td><?php echo $this->Html->link('Remover', array('controller' => 'accounts', 'action' => 'delete', $account['Account']['id'])); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
