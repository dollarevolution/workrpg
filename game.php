<html>
    <head>
        <link rel="stylesheet" href="style.css">
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
            <li>
                <span>Mining Level: <?php echo $mine; ?></span>
                <span>Fishing Level: <?php echo $fish; ?></span>
                <span>Farming Level: <?php echo $farm; ?></span>
                <span>Construction Level: <?php echo $constr; ?></span>
                <span>Woodcutting Level: <?php echo $wood; ?></span>
                <span>Cooking Level: <?php echo $cook; ?></span>
                <span>Attack Level: <?php echo $atk; ?></span>
            </li>
            <h2>Total Level: <?php echo $total; ?></h2>
        </div>
        <div id="game_screen">
        </div>
        <div id="game_update">
            <?php echo $game_update; ?>
        </div>
        <p><a href="inventory.php" target="_blank">Inventory</a></p>
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
