<?php

function getHitPoints($characterRace, $level, $conMod)
{
    $hitPoints = 0;

    for($i = 0; $i < $level; ++$i)
    {
        if($characterRace == "Halfling" || $characterRace == "Elf")
        {
            if($i < 9)
            {
                $levelHP = rand(2, 6);
            }
        }
        else
        {
            $levelHP = rand(3,8);
        }

        if($i >= 9)
        {
            $levelHP = 2;
        }

        $levelHP += $conMod;

        if($levelHP < 2)
        {
            $levelHP = 2;
        }

        $hitPoints += $levelHP;

    }

    return $hitPoints;
}


?>