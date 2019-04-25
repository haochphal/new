<?php
    include_once 'Banking.php';
    class Calculate implements Banking{
        public function calculate($interest,$borrowed){
            $totalPayback=$interest+($interest*$payback/100)*12;
            echo "You borrow us ".$totalPayback."<br>";
        }
    }
    $capital=new Calculate();
    $capital->calculate(1.9,870);
?>