<body>

    <h2 align="center">Categorias Cadastradas:</h2>
    <table>
        <tr>
            <td>id</td>
            <td>Nome:</td>
            <td>Data de Criação:</td>
            <td>Data de Modificação:</td>
            <td>Editar:</td>
            <td>Remover:</td>

        </tr>
        <?php foreach ($Categories as $Category): ?>
            <tr>
                <td><?php echo $Category['Category']['id']; ?></td>
                <td><?php echo $this->Html->link($Category['Category']['name'], array('controller' => 'categories', 'action' => 'find', $Category['Category']['id'])); ?></td>
                <td><?php echo $Category['Category']['created']; ?></td>
                <td><?php echo $Category['Category']['modified']; ?></td>
                <td><?php echo $this->Html->link('Editar', array('controller' => 'categories', 'action' => 'edit', $Category['Category']['id'])); ?></td>
                <td><?php echo $this->Html->link('Remover', array('controller' => 'categories', 'action' => 'delete', $Category['Category']['id'])); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
