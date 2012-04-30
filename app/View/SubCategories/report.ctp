<body>

    <h1 align="center">SubCategorias Cadastradas:</h1>
    <table>
        <tr>
            <td>id</td>
            <td>Nome:</td>
            <td>Data de Criação:</td>
            <td>Data de Modificação:</td>

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

