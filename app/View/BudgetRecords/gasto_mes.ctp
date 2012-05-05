<body>
    <h2 align="center"> Gasto por mês</h2>
    <table align="center">
            <th>Valor:</th>
            <th>Data:</th>
        <?php
        foreach ($result as $gasto) {
            echo "<tr>";
            echo "<td> R$:" . $gasto[0] . "</td>";
            echo "<td> " . $gasto[1] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>