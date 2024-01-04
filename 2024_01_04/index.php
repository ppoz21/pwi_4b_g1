<?php

//require_once "Dog.php";
//
//$burek = new Dog(
//    "Burek",
//    "Mieszaniec",
//    3,
//    "Brązowy"
//);
//
//$burek->bark();
//
//echo "<br>";
//
//var_dump($burek);

require_once 'Database.php';

$database = new Database(
    "127.0.0.1",
    "sprawdzian_node_v5",
    "root",
    "root"
);

//var_dump($database->getCars());

$car = $database->getCarById(1);

if ($car === null) {
    echo "Nie znaleziono samochodu o podanym id";
} else {
    ?>
    <div>
        <fieldset>
            <legend>Samochód</legend>
            <div>
                <dt>Marka</dt>
                <dd><?= $car->getManufacturer() ?></dd>
            </div>
            <div>
                <dt>Model</dt>
                <dd><?= $car->getModel() ?></dd>
            </div>
            <div>
                <dt>Kolor</dt>
                <dd><?= $car->getColor() ?></dd>
            </div>
        </fieldset>
    </div>
<?php
}

