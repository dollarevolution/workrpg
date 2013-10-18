<?php
    function attempt_skill($skill_level){
        $chance = $skill_level / 2;
        $random = rand(0,100);
        if($chance < 10) $chance = 10;
        if($random >= $chance) {
            return false;
        }
        else {
            return true;
        }
    }

    function attack($skill_level, $towns_owned) {
        $bonus = ($towns_owned / 10);
        if ($bonus > 20) {
            $bonus = 20;
        }
        $chance = ($skill_level / 2) + $bonus;
        if($chance < 10) $chance = 10;
        $random = rand(0,100);
        if($random >= $chance) {
            return false;
        }
        else {
            return true;
        }
    }

    function exp_for_next_level($current_level, $total_exp) {

        $exp = find_total_exp($current_level);
        return ($exp - $total_exp);
    }

    function find_total_exp($level) {
        if($level < 1) {
            return;
        }
        return (($level*(5/2)*10) + (1.05^$level) + find_total_exp($level-1));
    }
?>