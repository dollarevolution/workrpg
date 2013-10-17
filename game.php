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
            </li>
        </div>
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
