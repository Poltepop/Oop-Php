<?php
    namespace Data{
        abstract class Location{
            public string $location;
            public function __construct(string $location)
            {
                $this->location = $location;
            }
        }
        class City extends Location{

        }

        class Province extends Location {

        }

        function location(Location $location){
            if($location instanceof City){
                echo "Location City : $location->location" .PHP_EOL;
            }elseif($location instanceof Province){
                echo "Location Province : $location->location";
            }
        }
    }

?>