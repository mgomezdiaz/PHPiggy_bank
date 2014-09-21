<?php
   
    $name = 'MariaJose';

    # Define 4 different variables, which will each represent how much a given coin is worth
    $penny_value   = .01;
    $nickle_value  = .05;
    $dime_value    = .10;
    $quarter_value = .25;

    # Define 4 more variables, which will each represent how many of each coin is in the bank
    $pennies  = 100;
    $nickles  = 25;
    $dimes    = 70;
    $quarters = 360;

    # Add up how much money is in the piggy bank
    $total = ($pennies * $penny_value) + ($nickles * $nickle_value) + ($dimes * $dime_value) + ($quarters * $quarter_value);
    
    $goal = 100;
    $goal_within_reach = 10;
    //$statement = "you are $age years old";
    //$statemnt = 'you are '.$age.' years old';


    if($total >= $goal)
    {
        $image = 'php-goal-met.png';
    }
    else if($total >= ($goal - $goal_within_reach))
    {
         $image = 'php-goal-almost-met.png';      
    }
    else
    {
        $image = 'php-goal-not-met.png';
    }

    
    ?>