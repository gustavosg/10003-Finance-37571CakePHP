<body>
    <h2 align="center">Despesas Cadastradas:</h2>
    <table>
        <tr>
            <td>id</td>
            <td>ID SubCategoria:</td>
            <td>ID Conta:</td>
            <td>Quantia:</td>
            <td>Data:</td>
            <td>Data de Criação:</td>
            <td>Data de Modificação:</td>
            <td>Descrição:</td>
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
