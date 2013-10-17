<html>
    <head>
        <?php
            //randomize prices once an hour
            $stone_price = 0;
            $wood_price = 0;
            $crops_price = 0;
            $fish_price = 0;
            //treat like stocks (use formula)
            $gem_price = 0;
            //buy price of items is half of their price
            $stone_buy_price = $stone_price/2;
            $wood_buy_price = $wood_price/2;
            $crops_buy_price = $crops_price/2;
            $fish_buy_price = $fish_price/2;
            //Price is same as sell price so investing is possible
            $gem_buy_price = $gem_price;
        ?>
    </head>
    <body>

    </body>
</html>