<body>
    <h2 align="center"> Gasto Total</h2>
    <table align="center" border="2" rules="All">
        <tr>
            <th>Categoria ID:</th>
            <th>SubCategoria ID:</th>
            <th>Valor:</th>
            <th>Descrição:</th>
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