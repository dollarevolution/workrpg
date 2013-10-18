<html>
    <head>
        <link rel="stylesheet" href="experience.css">
        <?php
            include_once("skills.php");
            $mining_level = 1;
            $mining_exp = 0;
            $fishing_level = 1;
            $fishing_exp = 0;
            $farming_level = 1;
            $farming_exp = 0;
            $construction_level = 1;
            $construction_exp = 0;
            $woodcutting_level = 1;
            $woodcutting_exp = 0;
            $cooking_level = 1;
            $cooking_exp = 0;
            $attack_level = 1;
            $attack_exp = 0;
        ?>
    </head>
    <body>
        <ul>
            <li>Mining: Level <?php echo $mining_level; ?> Total Exp: <?php echo $mining_exp; ?> <div id="progress_bar"></div> Experience to next level: <?php exp_for_next_level($mining_level, $mining_exp); ?></li>
            <li>Fishing: Level <?php echo $fishing_level; ?> Total Exp: <?php echo $fishing_exp; ?> <div id="progress_bar"></div> Experience to next level: <?php exp_for_next_level($fishing_level, $fishing_exp); ?></li>
            <li>Farming: Level <?php echo $farming_level; ?> Total Exp: <?php echo $farming_exp; ?> <div id="progress_bar"></div> Experience to next level: <?php exp_for_next_level($farming_level, $farming_exp); ?></li>
            <li>Construction: Level <?php echo $construction_level; ?> Total Exp: <?php echo $construction_exp; ?> <div id="progress_bar"></div> Experience to next level: <?php exp_for_next_level($construction_level, $construction_exp); ?></li>
            <li>Woodcutting: Level <?php echo $woodcutting_level; ?> Total Exp: <?php echo $woodcutting_exp; ?> <div id="progress_bar"></div> Experience to next level: <?php exp_for_next_level($woodcutting_level, $woodcutting_exp); ?></li>
            <li>Cooking: Level <?php echo $cooking_level; ?> Total Exp: <?php echo $cooking_exp; ?> <div id="progress_bar"></div> Experience to next level: <?php exp_for_next_level($cooking_level, $cooking_exp); ?></li>
            <li>Attack: Level <?php echo $attack_level; ?> Total Exp: <?php echo $attack_exp; ?> <div id="progress_bar"></div> Experience to next level: <?php exp_for_next_level($attack_level, $attack_exp); ?></li>
        </ul>
    </body>
</html>