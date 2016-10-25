<?php
namespace Dojo\Bank;

use PHPUnit_Framework_TestCase;

class AtmTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider scenarios
     */
    public function testShouldWithdrawCorrectBills($input, $output)
    {
        // Set
        $atm = new Atm;

        // Action
        $result = $atm->withdraw($input);

        // Assertions
        // value => quantity
        $this->assertSame($output, $result);
    }

    public function scenarios()
    {
        return [
            // Input, Output
            '30 Reais' => [30, [20 => 1, 10 => 1]],
            '80 Reais' => [80, [50 => 1, 20 => 1, 10 => 1]],
            '20 Reais' => [20, [20 => 1]],
            '110 Reais' => [110, [100 => 1, 10 => 1]],
            '190 Reais' => [190, [100 => 1, 50 => 1, 20 => 2]],
            '300 Reais' => [300, [100 => 3]],
            '180 Reais' => [180, [100 => 1, 50 => 1, 20 => 1, 10 => 1]],
            '360 Reais' => [360, [100 => 3, 50 => 1, 10 => 1]]
            '36 Reais' => [36, [10 => 3]]
        ];
    }
}