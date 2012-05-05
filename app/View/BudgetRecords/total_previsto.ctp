<body>
    <h2 align="center">Total Previsto:</h2>
    <p align="center">
        <?php
        foreach ($BudgetRecord as $records)
            echo "R$ " . $records[0]['SUM(br.ammount)'];
        ?>
    </p>
</body>
