<?php
    trait A {
        function doA():void {
            echo "a";
        }
        function doB():void {
            echo "b";
        }
    }
    
    trait B {
        function doA():void {
            echo "A";
        }
        function doB():void {
            echo "B";
        }
    }

    class Sample{
        use A,B {
            A::doA insteadOf B;
            B::doB insteadOf A;
        }
    }

    $sample = new Sample();
    $sample->doA();
    $sample->doB();
?>