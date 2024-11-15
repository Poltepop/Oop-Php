<?php
    require_once "data/Location.php";

    use Data\{Location,City,Province};
    use function Data\location;

    $Location = new Location("Palu"); //Erorr
    location(new City("Palu"));
    location(new Province("Sulawesi Tengah"));
?>