<html>
    <head>
        <link rel="stylesheet" href="game.css">
        <?php
        if (isset($_POST['submit'])) {
            if ($_POST['submit'] == 'Mine') {
                // user mined
            } else if($_POST['submit'] == 'Fish') {
                // user fished
            } else if($_POST['submit'] == 'Farm') {
                // user farmed
            } else if($_POST['submit'] == 'Construct') {
                // user construction
            } else if($_POST['submit'] == 'Woodcut') {
                // user woodcutting
            } else if($_POST['submit'] == 'Cook') {
                // user cooked
            } else if($_POST['submit'] == 'Attack') {
                // user attacked
            }
        }
        ?>
    </head>
    <body>
        <div id="skills">
            <ul>
                <li>Mining Level: <?php echo $mine; ?></li>
                <li>Fishing Level: <?php echo $fish; ?></li>
                <li>Farming Level: <?php echo $farm; ?></li>
                <li>Construction Level: <?php echo $constr; ?></li>
                <li>Woodcutting Level: <?php echo $wood; ?></li>
                <li>Cooking Level: <?php echo $cook; ?></li>
                <li>Attack Level: <?php echo $atk; ?></li>
            </ul>
            <h2>Total Level: <?php echo $total; ?></h2>
        </div>
        <div id="game_screen">
        </div>
        <div id="game_update">
            <?php echo $game_update; ?>
        </div>
        <p><a href="#" onclick="window.open('inventory.php','mywindow','width=25%,height=25%,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,copyhistory=no,resizable=yes')">Inventory</a> | <a href="#" onClick="onclick="window.open('shop.php','mywindow','width=25%,height=25%,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,copyhistory=no,resizable=yes'">Shop</a> | <a href="#" onClick="onclick="window.open('experience.php','mywindow','width=25%,height=25%,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,copyhistory=no,resizable=yes'">Experience</a></p>
        <div id="skill_buttons">
            <form action="game.php" method="post">
                <input type="submit" value="Mine">
            </form>
            <form action="game.php" method="post">
                <input type="submit" value="Fish">
            </form>
            <form action="game.php" method="post">
                <input type="submit" value="Farm">
            </form>
            <form action="game.php" method="post">
                <input type="submit" value="Construct">
            </form>
            <form action="game.php" method="post">
                <input type="submit" value="Woodcut">
            </form>
            <form action="game.php" method="post">
                <input type="submit" value="Cook">
            </form>
            <form action="game.php" method="post">
                <input type="submit" value="Attack">
            </form>
        </div>
    </body>
</html>
