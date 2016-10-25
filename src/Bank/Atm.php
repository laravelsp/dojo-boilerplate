<?php

namespace Dojo\Bank;

class Atm
{
    public function withdraw($withdraw)
    {

        $availableBills = [100, 50, 20, 10];

        $result = [];
        foreach ( $availableBills as $bill ) {
           while( $withdraw % $bill >= 0 && $withdraw % $bill != $withdraw) {
                $withdraw -= $bill;
                if (isset($result[$bill])) {
                    $result[$bill]++;
                } else {
                    $result[$bill] = 1;
                }
            }
       }
       return $result;
    }


}