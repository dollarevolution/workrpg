<html>
    <head>
        <link rel="stylesheet" href="inventory.css">
        <?php
            $money = 0;
            $stone = 0;
            $wood = 0;
            $crops = 0;
            $food = 0;
            $fish = 0;
            $gems = 0;
            $towns = 0;
        ?>
    </head>
    <body>
        <h2>Inventory</h2>
        <ul>
            <li>Money: $<?php echo $money; ?></li>
            <li>Stone: <?php echo $stone; ?></li>
            <li>Wood: <?php echo $wood; ?></li>
            <li>Crops: <?php echo $crops; ?></li>
            <li>Fish: <?php echo $fish; ?></li>
            <li>Food: <?php echo $food; ?></li>
            <li>Gems: <?php echo $gems; ?></li>
            <li>Towns: <?php echo $towns; ?></li>
        </ul>
    </body>
</html>