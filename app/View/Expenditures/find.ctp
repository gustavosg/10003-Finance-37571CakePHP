<body>
    <h2 align="center">Despesas Cadastradas:</h2>
  <table align="center">
        <tr>
            <th>id</th>
            <th>ID SubCategoria:</th>
            <th>ID Conta:</th>
            <th>Quantia:</th>
            <th>Data:</th>
            <th>Data de Criação:</th>
            <th>Data de Modificação:</th>
            <th>Descrição:</th>
        </tr>
        <tr>
            <td><?php echo $Expenditures['Expenditure']['id']; ?> </td>
            <td><?php echo $Expenditures['Expenditure']['sub_category_id']; ?> </td>
            <td><?php echo $Expenditures['Expenditure']['account_id']; ?> </td>
            <td><?php echo $Expenditures['Expenditure']['ammount']; ?> </td>
            <td><?php echo $Expenditures['Expenditure']['date']; ?> </td>
            <td><?php echo $Expenditures['Expenditure']['created']; ?></td>
            <td><?php echo $Expenditures['Expenditure']['modified']; ?></td>
            <td><?php echo $Expenditures['Expenditure']['description']; ?></td>

        </tr>
    </table>
</body>
