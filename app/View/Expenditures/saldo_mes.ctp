<body>
    <h2 align="center"> Saldo Total</h2>
    <table align="center" border="2" rules="All">
        <th>Valor:</th>
        <th>Data:</th>
        <?php
        foreach ($result as $saldo) {
            echo "<tr>";
            echo "<td> R$:" . $saldo[0] . "</td>";
            echo "<td> " . $saldo[1] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>