<body>

    <h2 align="center">SubCategorias Cadastradas:</h2>
    <table>
        <tr>
            <th>id</th>
            <th>Nome:</th>
            <th>Categoria:</th>
            <th>Data de Criação:</th>
            <th>Data de Modificação:</th>
            <th>Editar:</th>
            <th>Remover:</th>

        </tr>
        <?php foreach ($SubCategories as $SubCategory): ?>
            <tr>
                <td><?php echo $SubCategory['SubCategory']['id']; ?></td>
                <td><?php echo $this->Html->link($SubCategory['SubCategory']['name'], array('controller' => 'SubCategories', 'action' => 'find', $SubCategory['SubCategory']['id'])); ?></td>
                <td><?php echo $SubCategory['SubCategory']['category_id']; ?></td>
                <td><?php echo $SubCategory['SubCategory']['created']; ?></td>
                <td><?php echo $SubCategory['SubCategory']['modified']; ?></td>
                <td><?php echo $this->Html->link('Editar', array('controller' => 'Subcategories', 'action' => 'edit', $SubCategory['SubCategory']['id'])); ?></td>
                <td><?php echo $this->Html->link('Remover', array('controller' => 'Subcategories', 'action' => 'delete', $SubCategory['SubCategory']['id'])); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

