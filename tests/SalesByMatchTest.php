<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\SalesByMatch;

class SalesByMatchTest extends TestCase {

    public function test_array_has_three_pair()
    {
        $n = 9;
        $ar = [10, 20, 20, 10, 10, 30, 50, 10, 20];
        $instance = new SalesByMatch();

        $numbOfPair = $instance->TakeAllPairs($n, $ar);

        $this->assertEquals(3, $numbOfPair);
    }
    

}

?>