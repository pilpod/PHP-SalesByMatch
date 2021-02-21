<?php 

namespace App;

use phpDocumentor\Reflection\Types\Integer;

class SalesByMatch {

    public array $colorsChecked;
    public array $colorsArray;

    public function TakeAllPairs($n, $ar)
    {
        $pairs = 0;
        $this->colorsArray = $ar;
        $this->colorsChecked = [];
        
        foreach ($this->colorsArray as $color) {
            
            $sameColorList = [];
            
            for ($i=0; $i < $n; $i++) {
                $isSameColor = ($color == $this->colorsArray[$i]);
                $wasNotChecked = !in_array($color, $this->colorsChecked);
                if( $isSameColor && $wasNotChecked)
                {
                    array_push( $sameColorList, $this->colorsArray[$i]);
                }
            }

            $pairs += $this->AddPair($sameColorList);

            $this->AddInColorsCheckedList($color);
        }

        return $pairs;

    }

    public function AddPair($color)
    {
        $quantityOfColors = count($color) / 2;
       return round($quantityOfColors, 0 , PHP_ROUND_HALF_DOWN);
    }

    public function AddInColorsCheckedList($color)
    {
        if(!in_array($color, $this->colorsChecked))
            {
                array_push($this->colorsChecked, $color);
            }
    }

}

?>