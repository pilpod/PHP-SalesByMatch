<?php 

namespace App;

use phpDocumentor\Reflection\Types\Integer;

class SalesByMatch {

    public function TakeAllPairs($n, $ar)
    {
        $pairs = 0;
        $colorsChecked = [];
        
        foreach ($ar as $color) {
            
            $colorList = [];
            
            for ($i=0; $i < $n; $i++) { 
                if($color == $ar[$i] && !in_array($color, $colorsChecked))
                {
                    array_push( $colorList, $ar[$i]);
                }
            }

            $quantityColors = count($colorList) / 2;
            $pairs += round($quantityColors, 0 , PHP_ROUND_HALF_DOWN);

            if(!in_array($color, $colorsChecked))
            {
                array_push($colorsChecked, $color);
            }
        }

        return $pairs;

    }

}

?>