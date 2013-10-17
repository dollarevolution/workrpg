<html>
    <head>
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
            } else if($_POST['submit'] == 'Attack') {
                // user attacked
            }
        }
        ?>
    </head>
    <body>
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
                <input type="submit" value="Attack">
            </form>
        </div>
    </body>
</html>
