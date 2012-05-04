<body>
    <h1 align="center"> Gasto Total</h1>
    <table align="center" border="2" rules="All">
        <tr>
            <td>ID:</td>
            <td>Conta:</td>
            <td>Valor:</td>
            <td>Descrição:</td>
        </tr>
        <?php
        foreach ($result as $gasto) {
            echo "<tr>";
            echo "<td>" . $gasto[0] . "</td>";
            echo "<td>" . $gasto[1] . "</td>";
            echo "<td>R$:" . $gasto[2] . "</td>";
            echo "<td>" . $gasto[3] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>