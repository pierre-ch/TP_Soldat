<?php
    function calculIndemnite($name, $day)
    {
        if ($day <= 10)
        {
            $total = $day * 10;
        }
        else
        {
            if ($day <= 20)
            {
                $day_echelon2 = ($day - 10);
                $total = ((10 * 10) + ($day_echelon2 * 25));
            }
            else
            {
                $day_echelon3 = ($day - 20);
                $total = ((10 * 10) + (10 * 25) + ($day_echelon3 * 35));
            }
        }
        return $total; 
    }
?>