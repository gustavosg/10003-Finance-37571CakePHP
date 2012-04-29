<body>
    <h1 align="center">Categorias Cadastradas:</h1>
    <table>
        <tr>
            <td>id</td>
            <td>Nome:</td>
            <td>Data de Criação:</td>
            <td>Data de Modificação:</td>

        </tr>
        <?php foreach ($Budgets as $Budget): ?>
            <tr>
                <td><?php echo $Budget['Category']['id']; ?></td>
                <td><?php echo $this->Html->link($Budget['Category']['name'], array('controller' => 'categories', 'action' => 'find', $Budget['Category']['id'])); ?></td>
                <td><?php echo $Budget['Category']['created']; ?></td>
                <td><?php echo $Budget['Category']['modified']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
